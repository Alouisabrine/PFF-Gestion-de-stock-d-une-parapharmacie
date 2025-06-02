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
    <h6><svg fill="#088" width="30px" height="30px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" id="Coupon" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#088"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M209.398,185.957c-10.781,3.579-16.642,15.261-13.064,26.043c2.867,8.637,10.931,14.114,19.569,14.114 c2.146,0,4.328-0.339,6.474-1.051c10.781-3.578,16.642-15.261,13.064-26.042v-0.001 C231.862,188.239,220.178,182.379,209.398,185.957z M219.228,215.573c-5.549,1.843-11.561-1.175-13.402-6.724 c-1.841-5.548,1.175-11.56,6.723-13.401c1.104-0.366,2.227-0.54,3.331-0.54c4.445,0,8.596,2.819,10.071,7.263 C227.792,207.72,224.775,213.731,219.228,215.573z"></path> <path d="M301.762,228.705c-3.587-10.784-15.271-16.644-26.049-13.059c-10.775,3.574-16.635,15.256-13.063,26.036 c0.209,0.631,0.453,1.247,0.72,1.852h-20.762l35.889-71.55l-8.939-4.483l-38.137,76.033h-52.963v10H338.79v-10h-37.725 C303.074,238.991,303.428,233.742,301.762,228.705z M272.143,238.541c-1.839-5.552,1.175-11.563,6.722-13.403 c5.55-1.844,11.562,1.172,13.405,6.716c1.432,4.324-0.018,8.951-3.521,11.681h-13.082 C274.035,242.259,272.8,240.528,272.143,238.541z"></path> <rect height="109.405" transform="matrix(-0.7072 -0.7071 0.7071 -0.7072 232.865 751.8976)" width="10" x="267.141" y="273.023"></rect> <path d="M244.375,284.074c-11.36,0-20.602,9.242-20.602,20.602c0,11.36,9.242,20.604,20.602,20.604s20.601-9.243,20.601-20.604 C264.977,293.316,255.735,284.074,244.375,284.074z M244.375,315.279c-5.846,0-10.602-4.757-10.602-10.604 c0-5.846,4.756-10.602,10.602-10.602c5.846,0,10.601,4.756,10.601,10.602C254.977,310.522,250.221,315.279,244.375,315.279z"></path> <path d="M277.363,353.742c0,11.359,9.242,20.602,20.603,20.602s20.602-9.242,20.602-20.602c0-11.36-9.241-20.603-20.602-20.603 S277.363,342.382,277.363,353.742z M308.567,353.742c0,5.846-4.756,10.602-10.602,10.602c-5.847,0-10.603-4.756-10.603-10.602 c0-5.847,4.756-10.603,10.603-10.603C303.812,343.14,308.567,347.896,308.567,353.742z"></path> <path d="M70.064,253.534h44.323v-0.001c11.482,0,20.824,12.171,20.824,27.13h10c0-14.959,9.341-27.13,20.824-27.13v-10 c-11.482,0-20.824-12.171-20.824-27.13h-10c0,14.959-9.342,27.13-20.824,27.13v0.001H60.064v45.847l-25.727-77.507l42.073-13.955 l-3.148-9.491l-51.566,17.104l38.369,115.595v93.728H338.79v-10H70.064V253.534z M140.212,236.639 c2.644,4.879,6.212,8.964,10.405,11.895c-4.193,2.932-7.761,7.016-10.405,11.895c-2.644-4.879-6.212-8.963-10.405-11.895 C134,245.603,137.568,241.518,140.212,236.639z"></path> <rect height="10" width="26.944" x="370.013" y="404.855"></rect> <path d="M485.305,297.021h5v-53.487H370.013v10h110.292v33.786c-20.572,2.477-36.565,20.038-36.565,41.265 c0,21.234,15.993,38.801,36.565,41.277v34.994h-19.047v-0.002c-11.482,0-20.824-12.17-20.824-27.129h-10 c0,14.959-9.342,27.129-20.824,27.129v10c11.482,0,20.824,12.172,20.824,27.131h10c0-14.947,9.325-27.108,20.795-27.129h29.076 v-54.694h-5c-17.405,0-31.565-14.165-31.565-31.577C453.739,311.18,467.899,297.021,485.305,297.021z M435.434,421.748 c-2.645-4.879-6.212-8.963-10.405-11.895c4.193-2.931,7.761-7.015,10.405-11.894c2.645,4.879,6.212,8.963,10.404,11.894 C441.646,412.785,438.078,416.869,435.434,421.748z"></path> <rect height="11" width="10" x="349.123" y="378.527"></rect> <rect height="11" width="10" x="349.123" y="312.527"></rect> <rect height="11" width="10" x="349.123" y="334.527"></rect> <rect height="11" width="10" x="349.123" y="400.527"></rect> <rect height="11" width="10" x="349.123" y="356.527"></rect> <rect height="11" width="10" x="349.123" y="246.527"></rect> <rect height="11" width="10" x="349.123" y="268.527"></rect> <rect height="11" width="10" x="349.123" y="290.527"></rect> <rect height="19.897" width="10" x="386.695" y="344.243"></rect> <rect height="43.599" width="10" x="386.695" y="290.645"></rect> <rect height="73.496" width="10" x="404.609" y="290.645"></rect> <rect height="10" width="88.908" x="111.457" y="297.849"></rect> <rect height="10" width="11.675" x="89.781" y="297.849"></rect> <rect height="10" width="77.409" x="89.781" y="352.992"></rect> <rect height="10" width="15.337" x="185.028" y="325.421"></rect> <rect height="10" width="87.348" x="89.781" y="325.421"></rect> <rect height="160.334" transform="matrix(0.3149 0.9491 -0.9491 0.3149 285.2887 -99.7354)" width="10" x="206.726" y="67.571"></rect> <path d="M423.697,82.656l10.642,32.063c-8.394,3.941-15.183,10.538-19.406,18.956c-4.979,9.925-5.795,21.193-2.298,31.729 c3.498,10.541,10.891,19.088,20.814,24.068c8.418,4.223,17.803,5.453,26.892,3.594l12.596,37.954l9.491-3.149l-15.652-47.164 l-4.746,1.574c-8,2.656-16.557,2.035-24.095-1.747c-7.538-3.781-13.152-10.273-15.81-18.279 c-2.654-8.001-2.035-16.558,1.746-24.095s10.27-13.15,18.27-15.806l4.746-1.575l-16.848-50.764l-114.168,37.89l3.149,9.491 L423.697,82.656z"></path> <rect height="11" transform="matrix(-0.9491 0.315 -0.315 -0.9491 649.6716 178.7206)" width="9.999" x="305.396" y="136.352"></rect> <rect height="10" transform="matrix(-0.315 -0.9491 0.9491 -0.315 230.7095 617.2644)" width="11" x="332.614" y="220.373"></rect> <rect height="9.999" transform="matrix(0.315 0.9491 -0.9491 0.315 322.687 -205.151)" width="10.999" x="297.966" y="115.973"></rect> <rect height="9.999" transform="matrix(0.315 0.9491 -0.9491 0.315 420.9428 -174.2473)" width="10.999" x="325.685" y="199.493"></rect> <rect height="9.999" transform="matrix(-0.3149 -0.9491 0.9491 -0.3149 262.8158 515.1609)" width="11.001" x="311.825" y="157.733"></rect> <rect height="9.999" transform="matrix(0.315 0.9491 -0.9491 0.315 396.3893 -181.971)" width="11" x="318.755" y="178.613"></rect> <rect height="19.897" transform="matrix(0.9491 -0.3149 0.3149 0.9491 -46.1454 127.1575)" width="10.001" x="365.446" y="196.438"></rect> <rect height="43.599" transform="matrix(0.9491 -0.3149 0.3149 0.9491 -34.3368 121.0006)" width="10.001" x="352.296" y="144.964"></rect> <rect height="73.496" transform="matrix(-0.9491 0.3149 -0.3149 -0.9491 795.522 221.5186)" width="10.001" x="374.866" y="138.275"></rect> </g> </g></svg>Promotions</h6>
    <button id="addNewBtn" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addNewModal">
        Ajouter
    </button><br><br>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">id_produit</th>
          <th scope="col">Nom produit</th>
          <th scope="col">Prix(dt)</th>
          <th scope="col">Pourcentage(%) </th>
          <th scope="col">Datedebut</th>
          <th scope="col">Durée</th>  
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `promotion`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["id_product"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["price"] ?></td>
            <td><?php echo $row["percentage"] ?></td>
            <td><?php echo $row["date"] ?></td>
            <td><?php echo $row["duration"] ?></td>
            
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
                
            </div>
        </div>
    </div>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</body>

</html>