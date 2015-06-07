<?php 
/* 
EXAMPLE DE REQUETTE CORRECTE

SELECT books.id as books_id, genres.id as genres_Id FROM `books` JOIN genres ON books.genre_id = genres.id 

*/
 class AuthorsModel extends model{

 	function getAuthors(){
 		$sql = 'SELECT name, bio, datebirth, datedeath, photo FROM authors';
 		$pdost = $this->cx->query($sql);
 		return $pdost->fetchAll();
 	}

 	function getAuthor($author_id){
 		$sql = 'SELECT name FROM authors WHERE id ='.$author_id;
 		$pdost = $this->cx->query($sql);
 		return $pdost->fetch();
 	}
 }

