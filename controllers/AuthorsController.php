<?php 

class AuthorsController{//on met le nom de la page qu'on veut

	public function accueil(){
		$model = new AuthorsModel('authors');
		$authors = $model->getAuthors();
		//var_dump($authors);die();
		$view = 'accueilAuthors.php';
		return compact('view','authors');
	}
}