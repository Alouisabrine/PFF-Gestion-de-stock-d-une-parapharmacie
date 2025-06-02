
<?php
include "db_conn.php";
$id = $_GET["id_product"];

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $expdate = $_POST['expdate'];
  $quantity = $_POST['quantity'];
  $warning = $_POST['warningthreshold'];
  $price = $_POST['price'];
  $category= $_POST['category'];
  $placement = $_POST['placement'];
  $sql = "UPDATE `product` SET `name`='$name',`expdate`='$expdate',`quantity`='$quantity',`warningthreshold`='$warning',`price`='$price',`category`='$category',`placement`='$placement' WHERE id_product = $id";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: index.php?msg=Données mises à jour avec succès");
  } else {
    echo "Échec : " . mysqli_error($conn);
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
  <br><br>
  <div class="container">
    <div class="text-center mb-4">
      <h3>modifier information du produit</h3>
      <p class="text-muted">Cliquer mise a jour aprés modification des Données</p>
    </div>

    <?php
    $sql = "SELECT * FROM `product` WHERE id_product = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:100px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Nom:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
          </div>
        <div class=" row mb-3">
          <label class="form-label">date d'expiration:</label>
          <input type="date" class="form-control" name="expdate" value="<?php echo $row['expdate'] ?>">
        </div>
        <div class="row mb-3">
          <label class="form-label">Quantité:</label>
          <input type="number" class="form-control" name="quantity" value="<?php echo $row['quantity'] ?>">
        </div>
        <div class="row mb-3">
          <label class="form-label">seuil d'alert:</label>
          <input type="number" class="form-control" name="warningthreshold" value="<?php echo $row['warningthreshold'] ?>">
        </div>
        <div class="row mb-3">
          <label class="form-label">Prix(DT):</label>
          <input type="text" class="form-control" name="price" value="<?php echo $row['price'] ?>">
        </div>
        <div class="row mb-3">
          <label class="form-label">Categorie:</label>
          <input type="text" class="form-control" name="category" value="<?php echo $row['category'] ?>">
        </div>
        <div class="row mb-3">
          <label class="form-label">Placement:</label>
          <input type="text" class="form-control" name="placement" value="<?php echo $row['placement'] ?>">
        </div>
        <div>
          <button type="submit" class="btn btn-success" name="submit">mise a jour</button>
          <a href="index.php" class="btn btn-danger">retour</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>