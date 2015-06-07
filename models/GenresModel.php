<?php 
 
 class GenresModel extends model{

 	function getGenres(){
 		$sql = 'SELECT * FROM genres';
 		$pdost = $this->cx->query($sql);
 		return $pdost->fetchAll();
 	}

 	function getGenre($genre_id){//il faut metre le parametre pour pouvoir le utilizer dans la fonction dans cette cas elle a bessoin de l'id
 		$sql = 'SELECT * FROM genres WHERE id = '.$genre_id;
 		$pdost = $this->cx->query($sql);
 		return $pdost->fetch();
 	}

 	function getBooks($genre_id){
 		$sql =  'SELECT * FROM books WHERE genre_id = '.$genre_id;
 		$pdost = $this->cx->query($sql);
 		return $pdost->fetchAll();
 	}

 }