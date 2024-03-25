<?php

require_once('../../private/initialize.php'); 


?>

<?php $page_title = 'Create Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">
  
  <!-- example of a sticky field  -->
  <a class="back-link" href="<?php echo urlFor('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="salamander new">
    <h1>Create Salamander</h1>

    <form action="<?php echo urlFor('salamanders/create.php'); ?>" method="post">
      <label for="salamanderName">Salamander Name: </label>
      <input type="text" name="salamanderName" id="salamanderName" value="">
      <br>

      <label for="habitat">Habitat: </label>
      <textarea name="habitat" id="habitat" rows="4" cols="50" value=""></textarea>
      <br>

      <label for="description">Description: </label>
      <textarea name="description" id="description" rows="4" cols="50" value=""></textarea>
      <br>
        
      <input type="submit" value="Create Salamander">
     
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php') ?>
