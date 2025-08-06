<?php require "views/partials/head.php"; ?>
    
<?php require "views/partials/nav.php"; ?>

<?php require "views/partials/banner.php"; ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form method="POST">
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-gray-50 px-4 py-5 sm:p-6">
                    <div>
                        <label for="body" class="block text-sm/6 font-medium text-gray-900">Body of your Note</label>
                        <div class="mt-1">
                            <textarea id="body" name="body" rows="3" placeholder="Here is an idea" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?= $_POST['body'] ?? '' ?></textarea>
                        </div>
                        <p class="text-red-500 text-xs mt-2"><?php echo $errors['body'] ?? ''; ?></p>
                    </div>

                    <div class="bg-none px-4 py-3 text-right sm:px-6">
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</main>
<?php require "views/partials/footer.php"; ?>