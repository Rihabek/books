<?php $title= "liste des livres "; ?>
<?php ob_start();?>
<h1>Books list</h1>
<p>Welcome to the page of books list here you can find the books you admire </p>
<?php $content= ob_get_clean(); ?>
<?php require('public/index.php'); ?>
