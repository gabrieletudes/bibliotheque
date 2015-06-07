<?php 
 /*SELECT books.id as books_id, genres.id as genres_id FROM `books` JOIN genres ON books.genre_id = genres.id */
 class BooksModel extends model{

 	function getBooks(){
 		$sql = 'SELECT books.title as books_title, books.front_cover as front_cover, books.summary as books_summary, genres.name as genres_name, authors.name as authors_name, authors.id as author_id FROM books 
 		JOIN genres ON books.genre_id = genres.id 
 		JOIN author_book ON book_id = books.id 
 		JOIN authors on author_id = authors.id';
 		$pdost = $this->cx->query($sql);
 		return $pdost->fetchAll();
 	}
 }