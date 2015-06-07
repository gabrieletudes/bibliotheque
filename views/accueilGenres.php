<?php// var_dump($data); ?>
		<div id="contenu">
			<div class="columne-introduction">
				<h1>Genres</h1>
				<ol>
				<?php foreach ($data['genres'] as $genre): ?>
					<li>
						<h2> <a href="<?php echo $_SERVER['PHP_SELF']; ?>?a=view&m=genres&id=<?php echo $genre['id'];?>"><?php echo $genre['name'] ?></a></h2>				
					</li>
				<?php endforeach ?>
				</ol>
			</div>
		</div>















