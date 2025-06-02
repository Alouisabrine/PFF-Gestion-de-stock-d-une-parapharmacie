<?php

include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $idproduct = $_POST['id_product'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $percentage = $_POST['percentage'];
  $date = $_POST['date'];
  $duration = $_POST['duration'];
  $sql = "UPDATE`promotion`SET `id_product`='$idproduct',`name`='$name',`price`='$price',`percentage`='$percentage',`date`='$date',`duration`='$duration'WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=modification avec succés");
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
      <h3>Modifier promotion </h3>
      <p class="text-muted">Cliquer modifier aprés changement</p>
    </div>

    <?php
    $sql = "SELECT * FROM `promotion` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
        <div class="col">
            <label class="form-label"> ID_produit:</label>
            <input type="number" class="form-control" name="id_product" value="<?php echo $row['id_product'] ?>">
          </div>
        <div class="mb-3">
            <label class="form-label"> Nom produit:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
          </div>

          <div class="mb-3">
          <label class="form-label">Prix(DT):</label>
          <input type="price" class="form-control" name="price" value="<?php echo $row['price'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Pourcentage(%):</label>
          <input type="text" class="form-control" name="percentage" value="<?php echo $row['percentage'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Date:</label>
          <input type="date" class="form-control" name="date" value="<?php echo $row['date'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Duration:</label>
          <input type="text" class="form-control" name="duration" value="<?php echo $row['duration'] ?>">
        </div>   
        <div>
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