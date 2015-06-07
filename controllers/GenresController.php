<?php 

class GenresController{//on met le nom de la page qu'on veut

	public function accueil(){
		$model = new GenresModel();
		$genres = $model->getGenres();
		$view = 'accueilGenres.php';
		return compact('view','genres');
	}

	public function view(){
		$model = new GenresModel();
		$genre_id = $_GET['id'];
		$genre = $model->getGenre($genre_id);
		$view = 'viewGenres.php';
		$books = $model->getBooks($genre_id);
		return compact('view','genre','books');//returne un tableau avec les noms des variables view et genre deja specifie avant
	}


}
