<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  
   $sql = "INSERT INTO `supplier`(`id`, `name`,`phone`,`address`) VALUES (NULL,'$name','$phone','$address')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=ajout avec succés");
   } else {
      echo "Failed: " . mysqli_error($conn);
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
<form id="addNewForm" action="add-new.php" method="post">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Nom et prénom:</label>
                  <input type="text" class="form-control" name="name" placeholder="">
               </div>

           <div class="mb-3">
               <label class="form-label">Telephone:</label>
               <input type="text" class="form-control" name="phone" placeholder="">
            </div>
            <div class="mb-3">
               <label class="form-label">adresse:</label>
               <input type="text" class="form-control" name="address" placeholder="">
            </div>
            
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>
 
    </div>
    
   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>