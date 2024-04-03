<?php

require_once('../../private/initialize.php');
$page_title = 'Edit Salamander';
include(SHARED_PATH . '/salamander-header.php');

if(!isset($_GET['id'])) {
  redirect_to(urlFor('/salamanders/new.php'));
}

$id = $_GET['id'];


if(is_post_request()) {

  // Handle form values sent by new.php

  $salamander = [];
  $salamander['id'] = $id;
  $salamander['salamanderName'] = $_POST['salamanderName'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = update_salamander($salamander);
  if($result === true) {
    redirect_to(urlFor('salamanders/show.php?id=' . $id));
  } else {
    $errors = $result;
    // var_dump($errors);
  }
  redirect_to(urlFor('salamanders/show.php?id=' . $id));
} else {
  $salamander = find_salamander_by_id($id);
}

?>

<div id="content">

  <a class="back-link" href="<?php echo urlFor('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="salamander edit">
    <h1>Edit Salamander</h1>

    <?php echo display_errors($errors); ?>

    <form action="<?php echo urlFor('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <label for="salamanderName">Salamander Name: </label>
      <input type="text" name="salamanderName" id="salamanderName" value="<?php echo h($salamander['salamanderName']); ?>">
      <br>

      <label for="habitat">Habitat: </label><br>
      <textarea name="habitat" id="habitat" rows="4" cols="50"><?php echo h($salamander['habitat']); ?></textarea>
      <br>

      <label for="description">Description: </label><br>
      <textarea name="description" id="description" rows="4" cols="50"><?php echo h($salamander['description']); ?></textarea>
      <br>
        
      <input type="submit" value="Edit Salamander">
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php') ?>
