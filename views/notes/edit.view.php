<?php views("partials/head.php"); ?>

<?php views("partials/nav.php"); ?>

<?php views("partials/banner.php", ['heading' => 'Edit Note', 'errors' => $errors]); ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form method="POST" action="/demo/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id']; ?>">

            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-gray-50 px-4 py-5 sm:p-6">
                    <div>
                        <label for="body" class="block text-sm/6 font-medium text-gray-900">Body of your Note</label>
                        <div class="mt-1">
                            <textarea id="body" name="body" rows="3" placeholder="Here is an idea" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?= $note['body'] ?></textarea>
                        </div>
                        <p class="text-red-500 text-xs mt-2"><?php echo $errors['body'] ?? ''; ?></p>
                    </div>

                    <div class="bg-none px-4 py-3 text-right sm:px-6 flex justify-end gap-x-4">
                        <a href="/demo/notes" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</main>
<?php views("partials/footer.php"); ?>