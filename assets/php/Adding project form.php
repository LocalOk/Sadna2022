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
            <li class="nav-item">
              <a class="nav-link" href="../../html/Customers Page.html">Customers</a>
            </li>
            <li class="nav-item active">
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
            <h1 class="text-center">Your project has been added</h1>
        
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
    
    mysql_connect("localhost", "eyalrnis_eyal", "omer1Q2W") or die("Error connecting to database: ".mysql_error());
	/*
		localhost - it's location of the mysql server, usually localhost
		root - your username
		third is your password
		
		if connection fails it will stop loading the page and display an error
	*/
	
	mysql_select_db("eyalrnis_Sadna") or die(mysql_error());
	/* tutorial_search is the name of database we've created */

    $Project_Name = $_POST['Project_Name'];
    $Project_type = $_POST['Project_type'];
	$Delivery_Date = $_POST['Delivery_Date'];
    $Contact_Name = $_POST['Contact_Name'];
    $Contact_PNumber = $_POST['Contact_PNumber'];
	$Customer_Number = $_POST['Customer_Number'];
	$Total_Income = $_POST['Total_Income'];
	$Products_Service = $_POST['Products_Service'];
	$Product1 = $_POST['Product1'];
	$Quantity1 = $_POST['Quantity1'];
	$Product2 = $_POST['Product2'];
	$Quantity2 = $_POST['Quantity2'];
	
$raw_results1 = mysql_query("SELECT * FROM Inventory
			WHERE (`Product_Name` LIKE '%".$Product1."%') AND (`Quantity` >$Quantity1)")  or die(mysql_error());
$raw_results2 = mysql_query("SELECT * FROM Inventory
	        WHERE (`Product_Name` LIKE '%".$Product2."%') AND (`Quantity` >$Quantity2)")  or die(mysql_error());
	if(mysql_num_rows($raw_results1) > 0 and mysql_num_rows($raw_results2) > 0){ 

    $insert_sql = "INSERT INTO Projects (Project_Name,Project_type,Delivery_Date,Contact_Name,Contact_PNumber,Customer_Number,Total_Income,Products_Service,Product1,Quantity1,Product2,Quantity2) VALUES ('" . $Project_Name . "','" . $Project_type . "','" . $Delivery_Date . "','" . $Contact_Name . "','" . $Contact_PNumber . "','" . $Customer_Number . "','" . $Total_Income . "','" . $Products_Service . "','" . $Product1 . "','" . $Quantity1 . "','" . $Product2 . "','" . $Quantity2 . "')";
    // echo $insert_sql;
    
if(isset($_POST['submit'])){
    $result = $conn->query($insert_sql);
}
$sql = "select Project_Name,Project_type,Delivery_Date,Contact_Name,Contact_PNumber,Customer_Number,Total_Income,Products_Service,Product1,Quantity1,Product2,Quantity2 from Projects";
        $result = $conn->query($sql);
    
}

else
{
    echo '<script type="text/javascript">';
    echo ' alert("The product doesnt exist or the quantity has not enough")';  //not showing an alert box.
    echo '</script>'; 
   header("location: ../../html/Adding project form.html"); 

}

    
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
