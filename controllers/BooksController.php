<?php 
/*SELECT *
FROM authors
JOIN `author_book` ON authors.id = author_book.author_id
JOIN books ON author_book.book_id = books.id
LIMIT 0 , 30*/


class BooksController{//on met le nom de la page qu'on veut

	public function accueil(){
		$model = new BooksModel('books');
		$books = $model->getBooks();
		$view = 'accueilBooks.php';
		return compact('view','books');
	}
}