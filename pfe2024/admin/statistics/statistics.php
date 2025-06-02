<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
    background-image: url('https://img.freepik.com/premium-vector/simple-blank-space-background_393744-184.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
}
  </style>
</head>
<body>

<?php 
  $con = new mysqli('localhost','root','','para');
  $query = $con->query("
    SELECT 
      name,
        quantity
    FROM product 
    
  ");

  foreach($query as $data)
  {
    $name[] = $data['name'];
    $quantity[] = $data['quantity'];
  }

?>
<br><br><br><br>
<center>
<div style="width: 500px;">
  <canvas id="myChart"></canvas>
</div>
 
<script>
  
  const labels = <?php echo json_encode($name) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: ' stocks produits',
      data: <?php echo json_encode($quantity) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(70, 88, 80, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
       ],
      borderColor: [
        'rgb(255, 99, 132)',
        ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
</center>
<br><br>

<center>
<div style="width: 300px;">
    <canvas id="pieChart"></canvas>
</div>
    <?php
    // Connexion à la base de données
    $host = 'localhost';  // Adresse de votre serveur MySQL
    $db = 'para';  // Nom de votre base de données
    $user = 'root';  // Nom d'utilisateur MySQL
    $pass = '';  // Mot de passe MySQL

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL
        $stmt = $pdo->query("
            SELECT 
                category,
                expdate,
                SUM(quantity) AS total_quantity
            FROM 
                product
            GROUP BY 
                category, expdate
            ORDER BY 
                category, expdate;
        ");

        // Préparation des données pour Chart.js
        $labels = [];
        $data = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $labels[] = $row['category'] . ' - ' . $row['expdate'];
            $data[] = $row['total_quantity'];
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
    ?>

    <script>
        var ctx = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    label: 'Quantité totale',
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text:'distribution produit'
                    }
                }
            }
        });
    </script>
</center>
<?php 
  $con = new mysqli('localhost','root','','para');
  $query = $con->query("
    SELECT 
      name,
        quantity
    FROM product 
    
  ");

  foreach($query as $data)
  {
    $name[] = $data['name'];
    $quantity[] = $data['quantity'];
  }

?>
<br><br><br><br>
<center>
<div style="width: 500px;">
  <canvas id="myChart"></canvas>
</div>
 
<script>
  
  const labels = <?php echo json_encode($name) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: ' stocks produits',
      data: <?php echo json_encode($quantity) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(70, 88, 80, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
       ],
      borderColor: [
        'rgb(255, 99, 132)',
        ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
</center>
<br><br>
<?php 
  $con = new mysqli('localhost','root','','para');
  
   $query = $con->query("
    SELECT 
    product.id_product,
    inventory.quantity
FROM 
    product
JOIN 
    inventory ON product.id_product = inventory.id_product
WHERE 
    inventory.typemvmt = 'entrée';
");
$id_product = [];
$quantity = [];

// Fetch data
if ($query->num_rows > 0) {
    while ($data = $query->fetch_assoc()) {
        $id_product[] = $data['id_product'];
        $quantity[] = $data['quantity'];
    }
} else {
    $id_product = ['No data'];
    $quantity = [0];
}

// Close the connection
$con->close();
?>

<br><br><br><br>
<center>
<div style="width: 500px;">
  <canvas id="myChart"></canvas>
</div>
<script>
            // Prepare data from PHP
            const labels = <?php echo json_encode($id_product); ?>;
            const data = {
                labels: labels,
                datasets: [{
                    label: 'Stock Quantity',
                    data: <?php echo json_encode($quantity); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgb(75, 192, 192)',
                    borderWidth: 1
                }]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            var myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>
    </center> 

<br><br>

</body>
</html>


