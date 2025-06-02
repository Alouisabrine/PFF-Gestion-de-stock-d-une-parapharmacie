
<?php
include "db_conn.php";
$id = $_GET["ref"];

if (isset($_POST["submit"])) {
  $id = $_POST['id'];
  $mvmt  = $_POST['typemvmt'];
  $quantity = $_POST['quantity'];
  $date = $_POST['date'];
  $sql = "UPDATE `inventory` SET `id`='$id',`typemvmt`='$mvmt',`quantity`='$quantity',`date`='$date' WHERE ref = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=mise à jour avec succés");
  } else {
    echo "echoué: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

<body>
  
  <div class="container">
    <div class="text-center mb-4">
      <h3>Modifier les informations du produits </h3>
      <p class="text-muted">cliquer ici aprés changement</p>
    </div>

    <?php
    $sql = "SELECT * FROM `inventory` WHERE ref = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:500px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Id:</label>
            <input type="number" class="form-control" name="id" value="<?php echo $row['id'] ?>">
          </div>
        <div class="col">
          <label class="form-label">Typemvmt:</label>
          <input type="text" class="form-control" name="typemvmt" value="<?php echo $row['typemvmt'] ?>">
        </div>
        <div class="col">
          <label class="form-label">Quantité:</label>
          <input type="number" class="form-control" name="quantity" value="<?php echo $row['quantity'] ?>">
        </div>
        <div class="col">
          <label class="form-label">Date:</label>
          <input type="date" class="form-control" name="date" value="<?php echo $row['date'] ?>">
        </div>
      <br><br>
          <div>
        <br><br>
          <button type="submit" class="btn btn-success" name="submit">mise à jour</button>
          <a href="index.php" class="btn btn-danger">quitter</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>