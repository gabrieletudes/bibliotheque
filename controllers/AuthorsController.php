<?php 

class AuthorsController{

	public function accueil(){//on met le nom de la page qu'on veut // une fonction par page
		$model = new AuthorsModel();
		$authors = $model->getAuthors();
		//var_dump($authors);die();
		$view = 'accueilAuthors.php';
		return compact('view','authors');
	}
	public function pageauthor(){
		$model = new AuthorsModel();
		$author_id=$_GET['id'];
		$author = $model->getAuthor($author_id);
		//var_dump($authors);die();
		$view = 'pageAutheur.php';
		return compact('view','author');
	}
}
