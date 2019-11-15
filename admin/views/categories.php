<?php $title = ""; ?>
<?php ob_start(); ?>


<h1 class="text-center mb-5">Liste des Catégories</h1>
<div class="container">
  <div class="row">
    <?php foreach ($categories as $key => $value) { ?>
      <div class="col-md-4 d-flex">
        <div class="action mr-1">
          <a href="?path=categories&action=hide&id=<?php echo $value['id']; ?>">
            <i class="material-icons" style="color:red;">delete_forever</i>
          </a>
          <a href="?path=categories&action=edit&id=<?php echo $value['id']; ?>">
            <i class="material-icons">edit</i>
          </a>
        </div>
        <?php echo $value['name']; ?>
      </div>
    <?php } ?>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
