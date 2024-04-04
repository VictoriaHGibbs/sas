<?php

require_once('../../private/initialize.php'); 

if(is_post_request()) {

  $salamander = [];
  $salamander['salamanderName'] = $_POST['salamanderName'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = insert_salamander($salamander);
  if($result === true) {
    $newID = mysqli_insert_id($db);
    redirect_to(urlFor('salamanders/show.php?id= ' . $newID ));
  } else {
    $errors = $result;
  }

} else {
  $salamander = [];
  $salamander["salamander_name"] = '';
  $salamander["habitat"] = '';
  $salamander["description"] = '';
}

?>

<?php $page_title = 'Create Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">
  
  <!-- example of a sticky field  -->
  <a class="back-link" href="<?php echo urlFor('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="salamander new">
    <h1>Create Salamander</h1>

    <?php echo display_errors($errors); ?>

    <form action="<?php echo urlFor('salamanders/new.php'); ?>" method="post">
      <label for="salamanderName">Salamander Name: </label>
      <input type="text" name="salamanderName" id="salamanderName" value="">
      <br>

      <label for="habitat">Habitat: </label><br>
      <textarea name="habitat" id="habitat" rows="4" cols="50" value=""></textarea>
      <br>

      <label for="description">Description: </label><br>
      <textarea name="description" id="description" rows="4" cols="50" value=""></textarea>
      <br>
        
      <input type="submit" value="Create Salamander">
     
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php') ?>
