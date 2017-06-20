<div class="content">
	

		<div class="last">
			<h2 class="last__title"> Les derniers ajout :</h2>
		<?php if( $datas[ 'book' ] ): ?>
			<?php foreach ($datas['book'] as $book): ?>
			<div class="one">
                <a href="">
					<h3 class="last__title2">TITRE : <?= $book->title ?></h3>

					<?php if( $book->cover ): ?>
					            <img src="<?= $book->cover; ?> " alt="" class="last__img" />
					<?php endif; ?>


						<div class="last__content">
							<p class="last__text last__text--resume">

							<?php if( $book->summary ): ?>
						        <p class="summary last__text">Résumé :
						            <?= $book->summary; ?>
						            </p>

						    <?php endif; ?>
							</p>
						</div>
				</a>
		</div>
			<?php endforeach; ?>
		<?php endif; ?>
</div>
