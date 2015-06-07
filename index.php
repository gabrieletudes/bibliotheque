<?php
error_reporting(E_ALL);//gere la maniere dont on reporte les error
ini_set('display_errors',1);//afficher les error et 1 = a vrais
include 'config/config.php';
include(CONFIG_DIR . 'routes.php');//directoir cree dans le fichier (constante) config.php
include(CONFIG_DIR . 'database.php');
setlocale(LC_ALL,$language);//variable language global cree aussi dans le fichier config.php
// Définition du chemin d’inclusion pour y ajouter le dossier des classes controleurs et modèles
set_include_path(//accede au dossier et cherche dans tout les dossier
    get_include_path() .
    ':' . dirname(__FILE__) . DS . CONTROLLERS_DIR .//':'(separe les chemins d'inclution)
    ':' . dirname(__FILE__) . DS . MODELS_DIR .//dirname = dossier parent
    ':' . dirname(__FILE__) . DS . HELPERS_DIR .
    ':' . dirname(__FILE__) . DS . CARBON_DIR
);

// Mise en place de l’auto-chargement des class
spl_autoload_register(
    function ($class) {

        include $class . '.php';//il inclu la class  de que on fait un new Nomclass.php
    }
);
// On démarre une session
session_start();//cree variabble $_SESSION

//Par défaut, l’utilisateur n’est pas identifié, sauf s’il l’est.
$_SESSION['valid'] = isset($_SESSION['valid']) ? $_SESSION['valid'] : false;
/*
* Après m’être connecté, je regarde ma requête HTTP pour savoir ce que veut l’utilisateur
* Par convention, je décide qu’une URI doit toujours contenir une action et un modèle
* Je nomme 'a' le paramètre de l’action, 'm', le paramètre du modèle
* Par exemple, pour lister les livres, a=index&m=book
* Mon but est de tenter de transformer ces deux paramètres en variables $a et $m
* mais pour le faire, je dois m’assurer que ces paramètres existent bien et qu’ils sont
* permis.
* Je définis tout d’abord $a et $m sur les valeurs prévues dans la route par défaut, peu importe
* ce qui est demandé.
*/
$routeParts = explode(DS, $routes['default']);//il separe le fichier fait ca par defaut
$a = $routeParts[1];
$m = $routeParts[0];
// Puis je regarde ce qui est demandé et j’écrase $a et $m si nécessaire
if (isset($_REQUEST['a']) && isset($_REQUEST['m'])) {//$_REQUEST est = a $_GET ou $_POST ou $_SESSION
    $a = $_REQUEST['a'];
    $m = $_REQUEST['m'];
    //vérifier si les deux paramètres ont des valeurs permises, autrement dit, dans l’array des routes permises, il y a quelque chose de la forme 'm/a'
    $route = $_REQUEST['m'] . DS . $_REQUEST['a'];//il va recreer une route sous le meme format que dans routes.php
       // var_dump($route);die();
    if (!in_array($route, $routes)) {//il regarde si elle existe
        die('Tu as oublié la route grosmalin');
    }
}
/*
* Une fois que a et m sont déterminées, je sais quel contrôleur et quelle méthode
* je dois utiliser. Je crée donc le nom du controlleur (la convention est de concaténer
* le contenu de m avec une majuscule pour commencer avec le mot Controller. Toutes les
* classes de controlleur sont nommées ainsi).
*/
$controllerName = ucfirst($m) . 'Controller';//stocker NonfichierController.php dans ma variable Controllername
$controller = new $controllerName;
/*
* On appelle la méthode dont le nom est contenu dans $a et celle-ci doit
* nécessairement retourner un array (qu’on stocke dans $data) contenant :
* - un array de données (clé 'data')
* - un nom de vue à inclure dans le layout ('clé view')
*/
$data = call_user_func([$controller, $a]);//il execute l'action qui est dans le controller
// Finalement, on inclut le layout…
include(VIEW_DIR . 'layout.php');
