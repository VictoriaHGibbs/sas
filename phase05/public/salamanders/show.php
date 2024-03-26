<?php require_once('../../private/initialize.php');

$pageTitle = 'View Salamander';
include(SHARED_PATH . '/salamander-header.php');
$id = $_GET['id'] ?? '1'; 

?>

<p><a href="<?= urlFor('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

<?php $salamander = find_salamander_by_id($id); ?>

<div>
<h2><?php echo h($salamander['salamanderName']); ?> Details</h2>

<p>ID: <?php echo h($salamander['id']); ?></p>
<p>Name: <?php echo h($salamander['salamanderName']); ?></p>
<p>Habitat: <?php echo h($salamander['habitat']); ?></p>
<p>Description: <?php echo h($salamander['description']); ?></p>


</div>

<p> Page ID: <?php echo h($id); ?> </p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
