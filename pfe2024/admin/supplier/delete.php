<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `supplier` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=suppression avec succés");
} else {
  echo "Failed: " . mysqli_error($conn);
}
