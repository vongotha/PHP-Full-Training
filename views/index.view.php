<?php views("partials/head.php"); ?>
    
<?php views("partials/nav.php"); ?>

<?php views("partials/banner.php", ['heading' => 'Home']); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p>Hello <?= $_SESSION['user']['email'] ?? 'Guest' ?>, you're in the Home page</p>
    </div>
</main>
<?php views("partials/footer.php"); ?>