
<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `inventory` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=suppression avec succés");
} else {
  echo "echoué: " . mysqli_error($conn);
}
