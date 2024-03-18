<?php require_once('../../private/initialize.php'); ?>



 <?php $salamander_set = find_all_salamanders(); ?> 

<?php $page_title = 'SAS - Salamanders'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<h1>Salamanders</h1>

  <a href="<?php echo urlFor('/salamanders/new.php');?>">Create New Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Habitat</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php while($salamander = mysqli_fetch_assoc($salamander_set)) { ?>
        <tr>
          <td><?php echo h($salamander['id']); ?></td>
    	    <td><?php echo h($salamander['salamanderName']); ?></td>
          <td><a href="<?php echo urlFor('/salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
          <td><a href="<?php echo urlFor('/salamanders/edit.php?id=' . h(u($salamander['id'])));?>">Edit</a></td>
          <td><a href="#">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<?php include(SHARED_PATH . '/salamander-footer.php') ?>
