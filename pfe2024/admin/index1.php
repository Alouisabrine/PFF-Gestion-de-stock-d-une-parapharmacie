
<?php
include "./product/db_conn.php";
session_start();
if(!isset($_SESSION['user'])){
    header("location:login/index.php");

}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVxkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        body {
            background-image: url('https://media.istockphoto.com/id/1037437274/fr/vectoriel/demi-teinte-abstrait-vector-dot-motif-d%C3%A9grad%C3%A9.jpg?s=612x612&w=0&k=20&c=yw6zFYf57MPbp_nSuaiz5hHvhjRBJl-b2pN0GAoN1j4=');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand px-3 border-bottom">
        <button class="btn" id="sidebar-toggle" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                 <?php  echo $_SESSION['user']["username"] ?>   <img src="https://st2.depositphotos.com/6157814/50747/v/450/depositphotos_507474114-stock-illustration-woman-long-hair-black-silhouette.jpg" class="avatar" alt="User Avatar">
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a href="../logout/logout.php/" class="dropdown-item"><svg height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 503.808 503.808" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(1 1)"> <path style="fill:#ECF4F7;" d="M327.704,251.075v51.2v128c0,18.773-15.36,34.133-34.133,34.133h-153.6V37.741h153.6 c18.773,0,34.133,15.36,34.133,34.133V251.075z"></path> <path style="fill:#088;" d="M139.971,37.741v426.667v8.533c0,18.773-13.653,29.867-29.867,23.893l-81.067-32.427 c-19.627-6.827-25.6-15.36-25.6-34.133v-358.4c0-18.773,6.827-27.307,25.6-34.133l81.067-32.427 c16.213-5.973,29.867,5.12,29.867,23.893V37.741z"></path> </g> <path style="fill:#51565F;" d="M119.637,503.808c-3.413,0-6.827-0.853-10.24-1.707L28.33,469.675 c-20.48-7.68-28.16-17.92-28.16-38.4v-358.4c0-20.48,7.68-30.72,28.16-38.4l81.067-32.427c8.533-3.413,17.067-2.56,23.893,2.56 c7.68,5.12,11.947,14.507,11.947,25.6v443.733c0,11.093-4.267,20.48-11.947,25.6C129.877,502.101,124.757,503.808,119.637,503.808z M119.637,8.875c-2.56,0-5.12,0.853-7.68,1.707L30.891,43.008c-17.92,6.827-23.04,13.653-23.04,29.867v358.4 c0,17.067,5.12,23.893,23.04,29.867l81.067,32.427c5.973,2.56,11.947,1.707,16.213-0.853c5.12-3.413,7.68-10.24,7.68-18.773V30.208 c0-8.533-2.56-15.36-7.68-18.773C126.464,9.728,123.051,8.875,119.637,8.875z M294.571,469.675H175.104 c-2.56,0-4.267-1.707-4.267-4.267c0-2.56,1.707-4.267,4.267-4.267h119.467c16.213,0,29.867-13.653,29.867-29.867v-128 c0-2.56,1.707-4.267,4.267-4.267s4.267,1.707,4.267,4.267v128C332.971,452.608,315.904,469.675,294.571,469.675z M414.037,341.675 c-0.853,0-2.56,0-3.413-0.853c-1.707-1.707-1.707-4.267,0-5.973l77.653-77.653H192.171c-2.56,0-4.267-1.707-4.267-4.267 c0-2.56,1.707-4.267,4.267-4.267h296.96l-77.653-77.653c-1.707-1.707-1.707-4.267,0-5.973c1.707-1.707,4.267-1.707,5.973,0 l85.333,85.333c0,0,0.853,0.853,0.853,1.707l0,0l0,0c0,0.853,0,0.853,0,1.707l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0l0,0 c0,0.853,0,0.853,0,1.707l0,0l0,0c0,0.853-0.853,0.853-0.853,0.853l0,0l0,0l0,0l0,0l0,0l-85.333,85.333 C416.597,340.821,414.891,341.675,414.037,341.675z M106.837,281.941c-2.56,0-4.267-1.707-4.267-4.267v-51.2 c0-2.56,1.707-4.267,4.267-4.267s4.267,1.707,4.267,4.267v51.2C111.104,280.234,109.397,281.941,106.837,281.941z M328.704,205.141 c-2.56,0-4.267-1.707-4.267-4.267v-128c0-16.213-13.653-29.867-29.867-29.867h-120.32c-2.56,0-4.267-1.707-4.267-4.267 c0-2.56,1.707-4.267,4.267-4.267h120.32c21.333,0,38.4,17.067,38.4,38.4v128C332.971,203.434,331.264,205.141,328.704,205.141z"></path> </g></svg>Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>   
                       
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe3DVxZZxqcugZ6p1ln82LJ0hFoAKBp2YJ3w&s" width="70%"></center>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="https://c0.lestechnophiles.com/www.madmoizelle.com/wp-content/uploads/2022/11/ok-1-2-1068x701.jpg?resize=1064,600&key=909639d5" width="100%" height="100%"target="content-frame" class="sidebar-link"><svg width="24px" height="24px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#088" stroke="#088"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.a,.b{fill:none;stroke:#088;stroke-linecap:round;stroke-linejoin:round;}</style></defs><path class="a" d="M26.7555,27.0733v6.83a1.0434,1.0434,0,0,0,1.0434,1.0434h4.7155a1.0433,1.0433,0,0,0,1.0433-1.0434V25.388h1.3681a1.571,1.571,0,0,0,1.0186-2.7671L25.2461,13.5115a1.9222,1.9222,0,0,0-2.4922,0L12.0557,22.6209a1.5709,1.5709,0,0,0,1.0184,2.7671h1.3681v8.5158a1.0435,1.0435,0,0,0,1.0434,1.0434h4.7155a1.0434,1.0434,0,0,0,1.0434-1.0434v-6.83Z"></path><path class="b" d="M28.4205,5.5H7.5a2,2,0,0,0-2,2v33a2,2,0,0,0,2,2h33a2,2,0,0,0,2-2V19.5794"></path></g></svg> Accueil</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="./product/index.php" target="content-frame" class="sidebar-link"><svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" width="15px" height="15px" fill="#088" stroke="#088"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#088;} </style> <g> <path class="st0" d="M0,30.118v15.059v120.471h22.588v316.235h466.824V165.647h7.529H512V30.118H0z M459.294,451.765H52.706 V158.118h406.588V451.765z M481.882,135.53h-7.53h-15.059H52.706H30.118V60.235h451.765V135.53z"></path> <rect x="195.765" y="214.588" class="st0" width="120.47" height="37.647"></rect> </g> </g></svg>  Produits</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="./inventory/index.php" target="content-frame" class="sidebar-link"><svg height="18px" width="18px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#088" stroke="#088"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#088;} </style> <g> <path class="st0" d="M511.24,321.823c-2.567-7.674-10.876-11.831-18.555-9.255l-212.856,71.196 c6.924,7.159,12.568,15.694,16.485,25.402l205.675-68.798C509.663,337.81,513.806,329.496,511.24,321.823z"></path> <path class="st0" d="M232.01,359.908l-78.417-234.479c-11.457-34.248-40.843-59.374-76.449-65.387l-60.05-10.134 C9.118,48.558,1.551,53.94,0.205,61.924c-1.34,7.984,4.037,15.552,12.022,16.893h-0.009l60.046,10.134 c24.926,4.201,45.506,21.804,53.525,45.785l76.01,227.285C211.911,359.322,222.129,358.682,232.01,359.908z"></path> <path class="st0" d="M203.291,381.863c-31.575,10.588-48.584,44.711-38.041,76.286c10.574,31.557,44.684,48.574,76.272,38.04 c31.575-10.586,48.583-44.702,38.04-76.276C268.994,388.347,234.875,371.32,203.291,381.863z M241.354,448.476 c-2.46,4.903-6.635,8.757-12.236,10.623c-5.604,1.874-11.249,1.314-16.164-1.119c-4.903-2.469-8.753-6.644-10.631-12.239 c-1.865-5.596-1.297-11.245,1.132-16.166c2.469-4.903,6.635-8.739,12.234-10.631c5.604-1.856,11.249-1.297,16.169,1.137 c4.898,2.468,8.748,6.635,10.632,12.23C244.352,437.916,243.784,443.556,241.354,448.476z"></path> <path class="st0" d="M261.28,364.206l200.812-67.164l-3.104-9.263l-52.438-156.79l-200.808,67.155L261.28,364.206z M437.356,284.706l-163.74,54.756l-43.138-128.98l163.74-54.756L437.356,284.706z"></path> <path class="st0" d="M320.126,129.319l-3.095-9.272l-35.91-107.354L157.541,54.019l39.004,116.636L320.126,129.319z M268.781,37.428l26.61,79.554l-86.504,28.928l-26.606-79.554L268.781,37.428z"></path> <path class="st0" d="M337.996,243.894c13.842,5.649,19.913,19.966,17.164,26.432c-2.326,5.49-6.678,13.217-6.678,13.217 l17.475-5.844l17.471-5.835c0,0-8.132-3.562-13.288-6.546c-6.084-3.509-9.854-18.607-2.184-31.442 c12.905-21.556,6.856-37.57,6.856-37.57s-5.107,1.706-11.288,3.774l-5.635,11.28l4.938-1.642l-11.737,28.235l1.63-20.935 l-8.46,2.825l1.58-13.856c-1.642,0.559-2.882,0.977-3.477,1.172c-3.744,1.252-32.454,10.854-32.454,10.854 S314.708,234.444,337.996,243.894z"></path> </g> </g></svg>  Inventaire</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="./supplier/index.php" target="content-frame" class="sidebar-link"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 13H16C17.7107 13 19.1506 14.2804 19.3505 15.9795L20 21.5M8 13C5.2421 12.3871 3.06717 10.2687 2.38197 7.52787L2 6M8 13V18C8 19.8856 8 20.8284 8.58579 21.4142C9.17157 22 10.1144 22 12 22C13.8856 22 14.8284 22 15.4142 21.4142C16 20.8284 16 19.8856 16 18V17" stroke="#088" stroke-width="1.5" stroke-linecap="round"></path> <circle cx="12" cy="6" r="4" stroke="#088" stroke-width="1.5"></circle> </g></svg>Fournisseur</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="./promotion/index.php" target="content-frame" class="sidebar-link"><svg fill="#088" width="20px" height="20px" viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" stroke="#088"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M27.25,24.79l-.16-.1h0Z"></path><path d="M22.49,33.16l1.24-1.44a1.55,1.55,0,0,0,.37-.87L24.24,29a5.35,5.35,0,0,1,.39-1.55c-.52-.32-1.07-.63-1.66-.93v0l-2.07-1c-2.4-1-2.77-2-2.77-3a4.15,4.15,0,0,1,1.48-2.86,7.66,7.66,0,0,0,2.12-5.53c0-4.14-2.4-7.74-6.64-7.74h-.46C10.38,6.4,8,10,8,14.14a7.62,7.62,0,0,0,2.12,5.53,4,4,0,0,1,1.47,2.86c0,1-.28,2-2.76,3C5.31,27.14,2.09,28.7,1.91,32c.18,2.3,1.75,4,3.77,4H21.22A5.34,5.34,0,0,1,22.49,33.16Z"></path><path d="M25.58,14.33A13.7,13.7,0,0,1,23.74,21a1.45,1.45,0,0,0,.56,2c.9.51,1.86,1.05,2.79,1.7l0,0a5.27,5.27,0,0,1,2.1-.6l2-.14a1,1,0,0,0,.59-.25l1.57-1.32a5.51,5.51,0,0,1,2-1,17.86,17.86,0,0,0-3.82-2.25C29.45,18.2,29,17.37,29,16.36a4.64,4.64,0,0,1,1.28-2.59,6.38,6.38,0,0,0,1.94-4.88c.09-3.68-2-6.91-5.9-6.91a5.76,5.76,0,0,0-5,2.86A11.73,11.73,0,0,1,25.58,14.33Z"></path><path d="M41.77,38.76a1.88,1.88,0,1,0,1.88,1.88A1.88,1.88,0,0,0,41.77,38.76Z"></path><path d="M31.86,31.05a1.88,1.88,0,1,0,1.88,1.88A1.88,1.88,0,0,0,31.86,31.05Zm0,0a1.88,1.88,0,1,0,1.88,1.88A1.88,1.88,0,0,0,31.86,31.05Zm17.35,4-1.42-1.71a3,3,0,0,1-.71-1.77l-.16-2.18a2.8,2.8,0,0,0-2.56-2.6l-1.9-.15a4,4,0,0,1-2.29-1l-1.44-1.27a2.8,2.8,0,0,0-3.65,0l-1.57,1.32a3.55,3.55,0,0,1-2.07.84l-2,.14a2.83,2.83,0,0,0-2.62,2.56l-.14,1.86a4.13,4.13,0,0,1-1,2.31l-1.25,1.44a2.82,2.82,0,0,0,0,3.65l1.36,1.63a3.36,3.36,0,0,1,.77,1.94l.16,2.1a2.79,2.79,0,0,0,2.55,2.6l1.91.17a3.94,3.94,0,0,1,2.27,1l1.45,1.26a2.84,2.84,0,0,0,3.66,0l1.66-1.39A3.22,3.22,0,0,1,42,47l2.18-.16a2.78,2.78,0,0,0,2.6-2.55L47,42.56A4.43,4.43,0,0,1,48.06,40l1.16-1.33A2.78,2.78,0,0,0,49.21,35.05ZM28.28,32.93a3.59,3.59,0,1,1,3.58,3.58A3.58,3.58,0,0,1,28.28,32.93Zm5.2,11.54a.32.32,0,0,1-.24.16H32.1a.29.29,0,0,1-.26-.16.27.27,0,0,1,0-.3l8.25-15.12a.35.35,0,0,1,.24-.15h1.23a.31.31,0,0,1,.15.41Zm8.29-.25a3.59,3.59,0,1,1,3.59-3.59A3.59,3.59,0,0,1,41.77,44.22Zm-8-11.29a1.88,1.88,0,1,0-1.88,1.88A1.88,1.88,0,0,0,33.74,32.93Z"></path></g></svg> Promotion</a>
                    </li>
                    
                    <li class="sidebar-item">
                        <a href="./statistics/statistics.php" target="content-frame" class="sidebar-link"><svg width="26px" height="26px" viewBox="0 0 76 76" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#088" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 15.8332,47.5002L 15.8332,40.1901L 25.3332,31.6669L 30.0832,36.4169L 34.8331,20.5836L 44.3331,31.6669L 50.6664,25.3336L 45.9164,20.5836L 58.583,20.5836L 58.583,33.2502L 53.8331,28.5003L 44.3331,38.0002L 36.4165,28.5003L 31.6665,44.3335L 25.3332,38.0002L 15.8332,47.5002 Z "></path> <path fill="#088" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 58.5833,55.4167L 53.8333,55.4167L 53.8333,34.8333L 58.5833,39.5833L 58.5833,55.4167 Z M 49.0833,55.4167L 44.3333,55.4167L 44.3333,44.3333L 49.0833,39.5834L 49.0833,55.4167 Z M 39.5833,55.4167L 34.8333,55.4167L 34.8333,45.9167L 37.2083,36.4167L 39.5833,39.5833L 39.5833,55.4167 Z M 30.0833,55.4167L 25.3333,55.4167L 25.3333,44.3333L 30.0833,49.0833L 30.0833,55.4167 Z M 20.5833,55.4167L 15.8333,55.4167L 15.8333,53.8334L 20.5833,49.0834L 20.5833,55.4167 Z "></path> </g></svg>Statistique</a>
                    </li>
                    
                </ul>
            </div>
        </aside>
       
        <!-- Contenu principal -->
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <iframe id="content-frame" name="content-frame" src="https://c0.lestechnophiles.com/www.madmoizelle.com/wp-content/uploads/2022/11/ok-1-2-1068x701.jpg?resize=1064,600&key=909639d5" width="100%" height="600px" frameborder="0">
                <!-- Le contenu des autres fichiers s'affichera ici -->
            </iframe>
        </main>
        
        <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.soopur.fr%2Factualites%2Favantage-parapharmacie-en-ligne&psig=AOvVaw0Z_QzRvfoR8DTy1lv-xBxC&ust=1723980314324000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCJCmmKX1-4cDFQAAAAAdAAAAABAZ" alt="" srcset="">
                                  
</body>
</html>
