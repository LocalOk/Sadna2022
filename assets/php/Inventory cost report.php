<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>Customer Search</title>

  <link rel="stylesheet" href="../css/maicons.css">

  <link rel="stylesheet" href="../css/bootstrap.css">

  <link rel="stylesheet" href="../vendor/animate/animate.css">

  <link rel="stylesheet" href="../css/theme.css">
  
</head>

<body >

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="#" class="navbar-brand">Management<span class="text-primary">System</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item ">
              <a class="nav-link" href="../../html/Home Page.html">Home Page</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../html/Customers Page.html">Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../html/Project Page.html">Projects</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../../html/Inventory Page.html">Inventory</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../../html/index.html">Log Out</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>



  </header>
  


<?php
	$server_name = "localhost";
	$user_name = "eyalrnis_eyal";
	$password = "omer1Q2W";
	$database = "eyalrnis_Sadna";

    $conn = new mysqli($server_name, $user_name, $password, $database);
    if ($conn->connect_error) {
        die("Error connecting: " . $conn->connect_error);
    }
		


$sql = "SELECT Product_Name, SKU, Quantity, Cost FROM Inventory";
$result = $conn->query($sql);
		
		

        echo 	
            
    "
            <style>
            table{
    font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

        </style>
            <table>
                <tr>
                <th>Product name</th>
                <th>SKU</th>
                <th>Quantity</th>
                <th>Cost</th> 
				<th>Total cost</th>
                </tr>";
      while ($row = $result->fetch_assoc()) {

          $volumetric = ($row["Cost"]*$row["Quantity"]);
            $results = $volumetric;
            echo "
            
                    <tr>
                    <td>" . $row["Product_Name"] . "</td>
                    <td>" . $row["SKU"] . "</td>
                    <td>" . $row["Quantity"] . " </td>
                    <td>" . $row["Cost"] . "</td>
                    <td>" . $results . "</td>
                    </tr>";
        
      }
        echo "</table>";

            
            
  
		
	
?>



<footer class="page-footer bg-image" style="  position: absolute;
  bottom: 0;
  width: 100%;
  height: 2.5rem;
  padding-bottom: 2.5rem;
  background-image: url(../assets/img/world_pattern.svg);">


<p class="text-center" id="copyright">Copyright &copy; 2022. OEO</p>
</footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>



</body>
</html>

