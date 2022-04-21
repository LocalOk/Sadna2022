<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Adding New Project</title>

  <link rel="stylesheet" href="../css/maicons.css">

  <link rel="stylesheet" href="../css/bootstrap.css">

  <link rel="stylesheet" href="../vendor/animate/animate.css">

  <link rel="stylesheet" href="../css/theme.css">
  
</head>

<body>

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
            <li class="nav-item active">
              <a class="nav-link" href="../../html/Customers Page.html">Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../html/Project Page.html">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../html/Inventory Page.html">Inventory</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../../html/index.html">Log Out</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>


    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <h1 class="text-center">Your customer has been added</h1>
        
          </div>
        </div>
      </div>
    </div>
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


    $Customer_Name = $_POST['Customer_Name'];
    $Buisness_name = $_POST['Buisness_name'];
    $Customer_Type = $_POST['Customer_Type'];
	$Phone_Number = $_POST['Phone_Number'];
    $Address = $_POST['Address'];
    
	$Email = $_POST['Email'];
	$Score = $_POST['Score'];


    $insert_sql = "INSERT INTO Customers (Customer_Name,Buisness_name,Customer_Type,Phone_Number,Address,Email) VALUES ('" . $Customer_Name . "','" . $Buisness_name . "','" . $Customer_Type . "','" . $Phone_Number . "','" . $Address . "','" . $Email . "')";
    // echo $insert_sql;
    
if(isset($_POST['submit'])){
    $result = $conn->query($insert_sql);
}
$sql = "select Customer_Name,Buisness_name,Customer_Type,Phone_Number,Address,Email from Customers";
        $result = $conn->query($sql);
    
    echo $Customer_Number ;

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

