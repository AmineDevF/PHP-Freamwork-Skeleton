<h1>Welcome to Simple PHP MVC </h1>

<ul>
    <?php foreach ($journals as $journal) : ?>
        <li><?= $journal->name ?> (<?= $journal->publishedYear ?>)</li>
    <?php endforeach; ?>
</ul>