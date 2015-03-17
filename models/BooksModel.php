<?php 
 /*SELECT books.id as books_id, genres.id as genres_id FROM `books` JOIN genres ON books.genre_id = genres.id */
 class BooksModel extends model{

 	function getBooks(){
 		$sql = 'SELECT books.title as books_title, books.summary as books_summary, genres.name as genres_name FROM books JOIN genres ON books.genre_id = genres.id';
 		$pdost = $this->cx->query($sql);
 		return $pdost->fetchAll();
 	}
 }