<?php
/*
 * Dans ce fichier, on se contentera de déclarer des valeurs
 */

/*
 * Définition de la langue par défaut
 */
$language = 'fr_BE';

/*
 * La liste de vos tables afin de résoudre les éventuels
 * problèmes de noms

$tables = array(
    'entite'=>'entites'
);
*/

/*
 * La liste des types de fichier que l’utilisateur peut éventuellement uploader

$types = array(
    'jpg'=>'image/jpeg'
);
 */

/*
 * Diverses constantes utiles telles que, par exemple,
 * le chemin du dossier vers lequel on peut uploader des fichiers
 * define ( 'UPLOAD_DIR', 'path_vers_dossier' );
 */
define('CONTROLLERS_DIR', 'controllers/');//define (nom et valeur)
define('MODELS_DIR', 'models/');
define('CONFIG_DIR', 'config/');
define('DS', DIRECTORY_SEPARATOR);// slash ou anti slash directory separator pour windows ou unix
define('VIEW_DIR', 'views/');
define('LANGUAGES_DIR', 'languages/');
define('HELPERS_DIR', 'helpers/');
define('IMAGES_DIR', 'images/');
define('CARBON_DIR', 'vendor/Carbon/');

/*
 * Initialisation éventuelles de diverses variables comme par exemple,
 * un booléen qui tient la trace de la connexion à un espace privé

 $connected = FALSE ;
 */
