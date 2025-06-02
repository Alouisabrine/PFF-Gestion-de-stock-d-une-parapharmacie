
<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $idproduct = $_POST['id_product'];
   $mvmt = $_POST['typemvmt'];
   $quantity = $_POST['quantity'];
   $date = $_POST['date'];
   $sql = "INSERT INTO `inventory`(`id`, `id_product`,`typemvmt`, `quantity`,`date`) VALUES (NULL,'$idproduct','$mvmt','$quantity','$date')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg= ajout evec succés");
   } else {
      echo "echoué: " . mysqli_error($conn);
   }
}

?>

<!DOCTYPE html>
<html >
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
               <div class="col">
                  <label class="form-label"> Id_produit:</label>
                  <input type="number" class="form-control" name="id_product" placeholder="">
               </div>
            </div>
            <div class="col">
               <label class="form-label">Type de mouvement:</label>
               <input type="text" class="form-control" name="typemvmt" placeholder="">
            </div>
            <div class="col">
               <label class="form-label">Quantité:</label>
               <input type="number" class="form-control" name="quantity" placeholder="">
            </div>
            <div class="col">
               <label class="form-label">Date:</label>
               <input type="date" class="form-control" name="date" placeholder="">
            </div>
            <br><br>
            <div>
               
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>