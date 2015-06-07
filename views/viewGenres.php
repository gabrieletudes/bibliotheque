		<div id="contenu">
			<div class="columne-introduction">
				 <h1>
					<?php echo $data['genre']['name'] ;?>
				</h1>
				<ul>
				<?php foreach ($data['books'] as $book): ?>
					<li><h2><?php echo $book['title'] ?></h2>
					<img src="./img/<?php echo $book['front_cover'] ?>" alt="">
					<p><?php echo $book['summary'] ?></p>					
					</li>
				<?php endforeach ?>
				</ul>
			</div>
		</div>
