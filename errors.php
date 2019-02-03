<?php  if (count($errors) > 0) : ?>
  <div class="alert alert-danger">
    <?php foreach ($errors as $error) : ?>
      <strong>Missing: </strong><?php echo $error ?>!<br>
    <?php endforeach ?>
  </div>
  <br>
<?php  endif ?>