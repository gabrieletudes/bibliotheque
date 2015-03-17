<?php 
/* 
EXAMPLE DE REQUETTE CORRECTE

SELECT books.id as books_id, genres.id as genres_Id FROM `books` JOIN genres ON books.genre_id = genres.id 

*/
 class AuthorsModel extends model{

 	function getAuthors(){
 		$sql = 'SELECT authors.name as authors_name,  FROM authors';
 		$pdost = $this->cx->query($sql);
 		return $pdost->fetchAll();
 	}
 }