<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php
  $salamander = [];
  $salamander['salamanderName'] = $_POST['salamanderName'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  // $result = insert_salamander($salamander);
  $newID = mysqli_insert_id($db);
  redirect_to(urlFor('salamanders/show.php?id= ' . $newID ));
}
?>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>

