<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $name = $_POST['name'];
   $expdate = $_POST['expdate'];
   $quantity = $_POST['quantity'];
   $warning = $_POST['warningthreshold'];
   $price = $_POST['price'];
   $category = $_POST['category'];
   $placement = $_POST['placement'];
   $sql = "INSERT INTO `product`(`id_product`, `name`,`expdate`, `quantity`, `warningthreshold`,`price`,`category`,`placement`) VALUES (NULL,'$name','$expdate','$quantity','$warning','$price','$category','$placement')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=Nouveau produit ajouté avec succès");
   } else {
      echo "Échec : " . mysqli_error($conn);
   }
}

?>

<!DOCTYPE html>
<html lang="fr">

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
    
      <form id="addNewForm" action="add-new.php" method="post">
            <div class="row mb-3">
               <label class="form-label">Nom :</label>
               <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="row mb-3">
               <label class="form-label">Date d'expiration :</label>
               <input type="date" class="form-control" name="expdate" placeholder="">
            </div>
            <div class="row mb-3">
               <label class="form-label">Quantité :</label>
               <input type="number" class="form-control" name="quantity" placeholder="">
            </div>
            <div class="row mb-3">
               <label class="form-label">Seuil d'alerte :</label>
               <input type="number" class="form-control" name="warningthreshold" placeholder="">
            </div>
            <div class="row mb-3">
               <label class="form-label">Prix :</label>
               <input type="text" class="form-control" name="price" placeholder="">
            </div>

            <div class="row mb-3">
               <label class="form-label">Catégorie :</label>
               <input type="text" class="form-control" name="category" placeholder="">
            </div>
            <div class="row mb-3">
               <label class="form-label">Emplacement :</label>
               <input type="text" class="form-control" name="placement" placeholder="">
            </div>
            
            <div>
               <button type="submit" class="btn btn-success" name="submit">Enregistrer</button>
               <a href="index.php" class="btn btn-danger">Annuler</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>

