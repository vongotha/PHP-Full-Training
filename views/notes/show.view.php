<?php views("partials/head.php"); ?>

<?php views("partials/nav.php"); ?>

<?php views("partials/banner.php", ['heading' => 'Note']); ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <li class="mb-4 list-none">
            <p><?= htmlspecialchars($note['body']); ?></p>
        </li>
        <a href="/demo/notes" class="text-blue-500 hover:underline">Back to Notes</a>


        <footer class="mt-6">
            <a href="/demo/note/edit?id=<?= $note['id']; ?>" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"">Edit</a>
        </footer>

       <!--  <form method="POST" class="mt-6">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id']; ?>">
            <button class="text-sm text-red-500">Delete</button>
        </form> -->
    </div>
</main>
<?php views("partials/footer.php"); ?>