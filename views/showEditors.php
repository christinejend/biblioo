<link rel="stylesheet" href="styles.css" type="text/css">
<h1>Fiche de l'éditeur <?= $datas[ 'editor' ] -> name ; ?></h1>

<div class="logo">
    <img src="<?= $datas[ 'editor' ] -> logo ; ?>" alt="" />
</div>

<div class="summary">
    <?= $datas[ 'editor' ] -> summary ; ?>
</div>

<h2>Livres publiés par cet éditeur</h2>
<?php if( $datas[ 'books' ] ): ?>
    <ul class="books">
        <?php foreach( $datas[ 'books' ] as $book ): ?>
            <li class="book">
                <a href="?a=show&e=books&id=<?= $book -> id; ?>&with=authors,editors">
                    <?= $book -> title; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<h2>Auteurs de cet éditeur</h2>
<?php if( $datas[ 'authors' ] ): ?>
    <ul class='authors'>
        <?php foreach( $datas[ 'authors' ] as $author ): ?>
            <li class='author'>
                <a href="?a=show&e=authors&id=<?= $author -> id; ?>&with=books,editors">
                    <?= $author -> name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<div>
    <a href="index.php?a=index&e=editors">Voir tous les éditeurs</a>
</div>
