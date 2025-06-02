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

<br><br>
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
    <h6><svg fill="#088" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 355.939 355.94" xml:space="preserve" stroke="#088"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M351.564,159.286c2.414,0,4.371-1.957,4.371-4.372V73.449c0-9.381-7.017-18.914-15.974-21.703L192.168,5.702 c-7.961-2.479-20.439-2.479-28.4,0L15.973,51.746C7.017,54.535,0,64.068,0,73.449v209.073c0,9.381,7.015,18.914,15.973,21.707 l147.794,46.039c3.917,1.221,8.921,1.831,13.944,1.829c5.197,0,10.413-0.651,14.458-1.947l25.771-8.271 c2.297-0.737,2.717-2.226,2.717-5.076l-0.48-89.991c-0.015-2.406-0.117-4.817-6.365-3.846l-9.724,1.347l22.873-47.526 l23.191,39.315l-8.016,1.839c0,0-3.492,0.31-3.492,4.273c0,22.125-0.182,88.497-0.182,88.497c0,4.975,3.672,4.525,5.715,4.169 l54.205-17.486c2.067-0.667,3.041-1.598,3.041-5.592l-0.416-80.349c0-5.597-2.623-6.401-5.003-6.053l-10.312,1.503l20.614-45.019 l22.351,37.303l-9.466,1.855c-2.369,0.465-3.374,1.972-3.374,5.376v81.2c0,3.443,2.161,6.103,6.238,4.096l18.381-6.859 c8.694-3.244,15.502-13.056,15.502-22.333v-81.399c0-2.415-1.957-4.372-4.372-4.372s-4.371,1.957-4.371,4.372v81.399 c0,5.583-4.587,12.192-9.814,14.144l-12.821,4.784V228.9l7.197-1.409c2.647-0.518,4.742-2.11,5.746-4.366 c1.004-2.257,0.783-4.878-0.604-7.191l-24.906-41.562c-1.508-2.515-3.812-3.873-6.312-3.737c-2.506,0.137-4.641,1.745-5.863,4.408 l-23.433,51.185c-1.208,2.642-1.04,5.305,0.464,7.311c1.261,1.682,3.232,2.591,5.532,2.591c0.438,0,0.892-0.033,1.352-0.101 l8.549-1.251l0.392,75.272l-45.454,14.666l0.163-79.01c0,0,3.679-0.653,5.592-1.281c2.608-0.857,4.782-2.303,5.784-4.631 c0.998-2.327,0.772-5.017-0.621-7.38l-25.214-42.733c-1.528-2.587-3.844-3.987-6.432-3.897c-2.56,0.108-4.773,1.722-6.076,4.427 l-25.532,53.073c-1.3,2.703-1.181,5.439,0.328,7.51c1.276,1.752,3.315,2.701,5.713,2.701c0.436,0,0.883-0.031,1.339-0.094 l9.203-1.28l0.44,82.514l-22.402,7.188c-6.264,2.007-16.854,2.053-23.132,0.1l-147.795-46.04 c-5.235-1.634-9.829-7.874-9.829-13.361V73.449c0-5.485,4.594-11.726,9.829-13.357l147.795-46.043 c6.291-1.957,16.915-1.957,23.203,0l147.797,46.043c5.234,1.631,9.828,7.872,9.828,13.357v81.466 C347.192,157.33,349.149,159.286,351.564,159.286z"></path> <path d="M317.396,85.122l-130.271,40.583c-4.88,1.518-13.437,1.518-18.314,0L38.535,85.122c-2.305-0.72-4.756,0.565-5.473,2.873 c-0.719,2.305,0.568,4.756,2.875,5.473l130.272,40.583c3.297,1.026,7.529,1.541,11.759,1.541s8.461-0.514,11.757-1.541 l130.272-40.583c2.305-0.717,3.594-3.168,2.873-5.473C322.153,85.687,319.698,84.402,317.396,85.122z"></path> </g> </g> </g></svg> Inventaire</h6>
    <button id="addNewBtn" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addNewModal">
        Ajouter
    </button><br><br>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Ref</th>
          <th scope="col"> id_produit</th>
          <th scope="col">Typemvmt</th>
          <th scope="col">Quantité</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `inventory`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["ref"] ?></td>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["typemvmt"] ?></td>
            <td><?php echo $row["quantity"] ?></td>
            <td><?php echo $row["date"] ?></td>
            <td>
            <a href="edit.php?ref=<?php echo $row["ref"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
            <a href="delete.php?ref=<?php echo $row["ref"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a><br>
          
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
                    <h6 class="modal-title" id="addNewModalLabel">Ajouter</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include 'add-new.php'; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermé</button>
                    <button type="submit" form="addNewForm" class="btn btn-dark">Save</button>
                </div>
            </div>
        </div>
    </div>
    
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</body>

</html>