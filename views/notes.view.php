<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note): ?>
        <li>
            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                <?= htmlspecialchars($note['body']) ?> </a>
        </li>
        <?php endforeach; ?>

        <div class="my-6">
            <a class="text-blue-500 font-bold hover:underline" href="/notes/create">Create Note</a>
        </div>
    </div>

</main>

<?php require('partials/footer.php') ?>