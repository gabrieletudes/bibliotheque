<?php 
 
 class GenresModel extends model{

 	function getGenres(){
 		$sql = 'SELECT * FROM genres'; 
 		$pdost = $this->cx->query($sql);
 		return $pdost->fetchAll();
 	}
 }