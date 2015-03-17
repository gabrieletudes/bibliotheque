<?php 

class GenresController{//on met le nom de la page qu'on veut

	public function accueil(){
		$model = new GenresModel('genres');
		$genres = $model->getGenres();
		$view = 'accueilGenres.php';
		return compact('view','genres');
	}
}