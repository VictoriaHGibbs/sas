<?php
function find_all_salamanders() {
  global $db;
  $sql = "SELECT * FROM salamander ";
  $sql .= "ORDER BY salamanderName ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}

function find_salamander_by_id($id) {
  global $db;
  $sql = "SELECT * FROM salamander ";
  $sql .= "WHERE id='" . $id ."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $salamander = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $salamander; //returning an array
}

function insert_salamander($salamander) {
  global $db;
  $sql = "INSERT INTO salamander ";
  $sql .= "(salamanderName, habitat, description)";
  $sql .= "VALUES(";
  $sql .= "'" . $salamander['salamanderName'] . "', ";
  $sql .= "'" . $salamander['habitat'] . "', ";
  $sql .= "'" . $salamander['description'] . "'";
  $sql .= ")";
  $result = mysqli_query($db, $sql);

  if($result) {
    return true;
  } else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit();
  }
}

function delete_salamander($id) {
  global $db;
  $sql = "DELETE FROM salamander ";
  $sql .= "WHERE id = '" . $id . "'";
}

?>
