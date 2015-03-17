<?php 

class BooksController{//on met le nom de la page qu'on veut

	public function accueil(){
		$model = new BooksModel('books');
		$books = $model->getBooks();
		$view = 'accueilBooks.php';
		return compact('view','books');
	}
}