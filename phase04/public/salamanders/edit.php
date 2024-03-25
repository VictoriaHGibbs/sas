<?php

require_once('../../private/initialize.php'); 

if(!isset($_GET['id'])) {
  redirect_to(urlFor('/salamanders/new.php'));
}
$id = $_GET['id'];

$salamanderName = '';
$position = '';
$visible = '';

if(is_post_request()) {

  // Handle form values sent by new.php

  $salamanderName = $_POST['salamanderName'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

  echo "Form parameters<br />";
  echo "Salamander name: " . $salamanderName . "<br />";
  echo "Position: " . $position . "<br />";
  echo "Visible: " . $visible . "<br />";
}

?>


<?php $page_title = 'Edit Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo urlFor('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="salamander edit">
    <h1>Edit Salamander</h1>

    <form action="<?php echo urlFor('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="salamanderName" value="<?php echo $salamanderName; ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Salamander" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php') ?>
