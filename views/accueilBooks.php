<?php var_dump($data); ?>
		<div id="contenu">
			<div class="columne-introduction">
				<h1>Livres</h1>
				<ul>
				<?php foreach ($data['books'] as $book): ?>
					<li><h2><?php echo $book['books_title'] ?></h2>
					<img src="img/livre.jpg" alt="">
					<p><?php echo $book['books_summary'] ?></p>
					<p>Autheur:<a href="autheur.html"><?php echo $book['authors_name'] ?></a>&nbsp; Genre:<a href="genre.html"><?php echo $book['genres_name'] ?></a></p>
					</li>
				<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<!--<form action="<?php// echo $_SERVER['PHP_SELF'];  ?>" method="post">
			<div class="form-group"<?php// echo isset($errors['message']) ? 'has-error':'';?>>
			<div>
				<label for="monfichier">Image du livre</label>
				<input type="file" name="monfichier" id="monfichier">
			</div>
			<div class="waot">
				<label for="title" >Titre du Livre</label>
				<input class="tol" type="text" name="title" >
			</div>
			<div class="waom">
				<label for="message" class="control-label">Description du livre</label>
				<textarea class="tol" type="text" name="message"></textarea>
			</div>
			</div>
			<input class="bouton" type="submit" name="envoyer" value="envoyer">		
		</form>-->
		















