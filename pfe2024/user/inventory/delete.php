
<?php
include "db_conn.php";
$id = $_GET["ref"];
$sql = "DELETE FROM `inventory` WHERE ref = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=suppression avec succés");
} else {
  echo "echoué: " . mysqli_error($conn);
}
