<?php var_dump($data); ?>
<?php
error_reporting(E_ALL);//gere la maniere dont on reporte les error
ini_set('display_errors',1);//afficher les error et 1 = a vrais
?>
		<div id="contenu">
			<div class="columne-introduction">
				<h1>Authors</h1>
				<ul>
				<?php foreach ($data['authors'] as $author): ?>
					<li><h2><?php echo $author['name'] ?></h2>
					<img src="img/joyce_1926.jpg" alt="">
					<p><?php echo $author['bio'] ?></p>
					<p>Birth Date: <?php echo date("F d, Y", strtotime($author['datebirth'])) ?> &nbsp; Death Date: <?php echo date("F d, Y", strtotime($author['datedeath'])) ?></p>					
					</li>
				<?php endforeach ?>
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
		















