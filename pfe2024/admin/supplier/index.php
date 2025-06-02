<?php
include "db_conn.php";
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
<center>

</center><br><br>
    <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <h6><svg fill="#088" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" width="20px" height="20px" stroke="#088"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <rect x="98.268" y="309.637" width="72.606" height="30.417"></rect> </g> </g> <g> <g> <path d="M384.933,309.64c-0.749-47.216-38.461-85.61-85.408-87.457l0.061-0.077h-3.6h-4.165 c23.158-21.201,37.704-51.661,37.704-85.457V95.867h64.366V65.45h-64.366V51.656C329.524,23.173,306.352,0,277.869,0H149.432 c-28.484,0-51.656,23.173-51.656,51.656V65.45v30.417v40.781c0,33.797,14.547,64.256,37.704,85.457h-4.165h-3.599l0.061,0.077 c-47.42,1.866-85.427,41.019-85.427,88.889V512h200.704h30.417h196.18V309.64H384.933z M128.193,51.656 c0-11.712,9.528-21.239,21.239-21.239h128.435c11.712,0,21.239,9.528,21.239,21.239V65.45H128.193V51.656z M128.193,136.648 V95.867h170.914v40.781c0,47.121-38.336,85.457-85.457,85.457S128.193,183.769,128.193,136.648z M236.755,252.522l-23.105,29.217 l-23.104-29.217H236.755z M243.053,309.639L243.053,309.639v171.944H72.767V311.07c0-32.284,26.264-58.548,58.548-58.548h20.454 l61.883,78.256l61.883-78.256h20.452c31.805,0,57.768,25.493,58.532,57.116H243.053z M273.471,481.583V340.057h30.133v40.095 h30.417v-40.095h44.661v40.095h30.417v-40.095h30.133v141.526H273.471z"></path> </g> </g> </g></svg> Fournisseurs</h6>
    <button id="addNewBtn" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addNewModal">
        Ajouter
    </button><br><br>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col"> Nom et prenom</th>
          <th scope="col">Telephone</th>
          <th scope="col">Adresse</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `supplier`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
<!-- Modal Add New -->
<div class="modal fade" id="addNewModal" tabindex="-1" aria-labelledby="addNewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewModalLabel">Ajouter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include 'add-new.php'; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="addNewForm" class="btn btn-dark">Save</button>
                </div>
            </div>
        </div>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  



</body>

</html>