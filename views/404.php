<?php $title = 'bookzel'; ?>
<?php ob_start(); ?>
<h1>Page not found</h1>
<p>Sorry, that page doesn't exist.</p>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
