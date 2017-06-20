<link rel="stylesheet" href="styles.css" type="text/css">
<div class="content">
    <h1 role="heading" aria-level="1" class="content__title" ><?= $datas[ 'book' ] -> title; ?></h1>



    <?php if( $datas[ 'book' ] -> cover ): ?>
        <div class="cover content__img">
            <img src="<?= $datas[ 'book' ] -> cover; ?> " alt="" />
        </div>

    <?php endif; ?>
    <?php if( $datas[ 'book' ] -> summary ): ?>
        <div class="summary content__text">
            <?= $datas[ 'book' ] -> summary; ?>
        </div>
    <?php endif; ?>

    <h2>Auteur(s)</h2>
    <?php if( $datas[ 'authors' ] ): ?>
        <ul class="authors">
            <?php foreach( $datas[ 'authors' ] as $author ): ?>
                <li class="author content__text1">
                    <a href="?a=show&e=authors&id=<?= $author -> id; ?>&with=books">
                        <?= $author -> name; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <h2>Éditeur(s)</h2>
    <?php if( $datas[ 'editors' ] ): ?>
        <ul class="editors">
            <?php foreach( $datas[ 'editors' ] as $editor ): ?>
                <li class="editor content__text2">
                    <a href="?a=show&e=editors&id=<?= $editor -> id; ?>&with=books">
                        <?= $editor -> name; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>


    <div>
        <a href="index.php">Voir tous les livres</a>
    </div>
</div>
