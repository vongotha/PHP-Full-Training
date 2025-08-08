<?php views("partials/head.php"); ?>

<?php views("partials/nav.php"); ?>

<?php views("partials/banner.php", ['heading' => 'Notes']); ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach($notes as $note): ?>
            <ul>
                <li class="mb-4 list-none">
                    <a href="/demo/note?id=<?= $note['id']; ?>" class=" text-blue-500 hover:underline">
                        <h1 class='text-1xl font-bold text-gray-500'>
                            <?= htmlspecialchars($note['body']); ?>
                        </h1>
                        <hr>
                    </a>
                </li>
            </ul>
        <?php endforeach; ?>

        <p class="mt-6">
            <a href="/demo/note/create" class=" text-blue-500 hover:underline">
                Create a new note
            </a>
        </p>
    </div>
</main>
<?php views("partials/footer.php"); ?>