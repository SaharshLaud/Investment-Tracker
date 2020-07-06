<?php  if (count($errors) > 0) : ?>
<div class="error" style="background-color:transparent;color:red;font-size:16px;font-family: 'Poppins', sans-serif;">
    <?php foreach ($errors as $error) : ?>
    <p><?php echo $error ?></p>
    <?php endforeach ?>
</div>
<?php  endif ?>




