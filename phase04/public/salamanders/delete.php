<?php require_once('../../private/initialize.php');

 include(SHARED_PATH . '/salamander-header.php');

 if(!isset($_GET['id'])) {
  redirect_to(urlFor('salamanders/index.php'));
}
$id = $_GET['id'];
  
if(is_post_request()) {
  $result = delete_salamander($id);
  redirect_to(urlFor('salamanders/index.php'));
} else {
  $salamander = find_salamander_by_id($id);
}

$pageTitle = 'Delete Salamander'; ?>


<p><a href="<?= urlFor('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>
<h1>Delete Salamander</h1>

<p>Are you sure you want to delete this salamander?</p>
      <p><?php echo h($salamander['salamanderName']); ?></p>
  
      <form action="<?php echo urlFor('salamanders/delete.php?id=' . h(u($salamander['id']))); ?>" method="post">
          <input type="submit" name="commit" value="Yes! Delete <?php echo h($salamander['salamanderName']); ?>, nobody wants them here anyway.">
      </form>
      <p><a href="<?= urlFor('/salamanders/index.php'); ?>">NO! TAKE ME BACK! I CHANGED MY MIND! I LOVE <?php echo h($salamander['salamanderName']); ?> </a></p>



<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
