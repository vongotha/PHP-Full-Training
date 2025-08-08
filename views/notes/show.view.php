<?php views("partials/head.php"); ?>

<?php views("partials/nav.php"); ?>

<?php views("partials/banner.php", ['heading' => 'Note']); ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <li class="mb-4 list-none">
            <p><?= htmlspecialchars($note['body']); ?></p>
        </li>
        <a href="/demo/notes" class="text-blue-500 hover:underline">Back to Notes</a>
    </div>
</main>
<?php views("partials/footer.php"); ?>