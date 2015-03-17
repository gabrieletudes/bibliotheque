<?php
/*
 * Déclaration des routes permises
 */

$routes['default'] = 'books/accueil';
$routes['bookindex'] = 'books/accueil';
$routes['bookshow'] = 'books/show';
$routes['bookedit'] = 'books/edit';
$routes['bookupdate'] = 'books/update';

$routes['editorindex'] = 'editor/accueil';
$routes['editorshow'] = 'editor/show';

$routes['authorindex'] = 'authors/accueil';
$routes['authorshow'] = 'authors/show';

$routes['genresindex'] = 'genres/accueil';
$routes['genresshow'] = 'genres/show';

$routes['not_found'] = 'error/e_404';
$routes['db_error'] = 'error/e_database';
$routes['userlogin'] = 'user/login';
$routes['userlogout'] = 'user/logout';