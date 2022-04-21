<?php
include("db.php");
$getProject_Number = $_GET['edit'];
$seledittwo = "SELECT * FROM `Projects` WHERE `Project_Number` = '$getProject_Number'";
$qry = mysqli_query($connect, $seledittwo);
$selassoc = mysqli_fetch_assoc($qry);
$Project_Number = $selassoc['Project_Number'];
$Project_Name = $selassoc['Project_Name'];
$Project_type = $selassoc['Project_type'];
$Delivery_Date = $selassoc['Delivery_Date'];
$Contact_Name = $selassoc['Contact_Name'];
$Contact_PNumber = $selassoc['Contact_PNumber'];
$Customer_Number = $selassoc['Customer_Number'];
$Total_Income = $selassoc['Total_Income'];
$Products_Service = $selassoc['Products_Service'];
$Product1 = $selassoc['Product1'];
$Quantity1 = $selassoc['Quantity1'];
$Product2 = $selassoc['Product2'];
$Quantity2 = $selassoc['Quantity2'];
if(isset($_POST['updateedit'])) {
$upProject_Number=  $_POST['upProject_Number'];
 $upProject_Name =  $_POST['upProject_Name'];
 $upProject_type =  $_POST['upProject_type'];
 $upDelivery_Date =  $_POST['upDelivery_Date'];
  $upContact_Name =  $_POST['upContact_Name'];
  $upContact_PNumber =  $_POST['upContact_PNumber'];
  $upCustomer_Number =  $_POST['upCustomer_Number'];
 $upTotal_Income =  $_POST['upTotal_Income'];
$upProducts_Service =  $_POST['upProducts_Service'];
 $upProduct1 =  $_POST['upProduct1'];
 $upQuantity1 =  $_POST['upQuantity1'];
$upProduct2 =  $_POST['upProduct2'];
$upQuantity2 =  $_POST['upQuantity2'];
 
 $seleditt = "UPDATE `Projects` SET `Project_Name`='$upProject_Name',`Project_type`='$upProject_type',
 `Delivery_Date`='$upDelivery_Date',`Contact_Name`='$upContact_Name' , `Customer_Number` ='$upCustomer_Number' ,
 `Total_Income` ='$upTotal_Income' , `Products_Service` ='$upProducts_Service' , `Product1` ='$upProduct1' , `Quantity1` ='$upQuantity1' , `Product2` ='$upProduct2' , `Quantity2` ='$upQuantity2' WHERE `Project_Number` = '$Project_Number'";
 $qry = mysqli_query($connect,$seleditt);
 if($qry) {
  header("location: ../../html/Home Page.html");
 }
}
 

 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Edit New Project</title>

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
            <li class="nav-item ">
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

<form method="POST" action="#">
    <h3>Choose which field to change</h3>
 Project Number :   <input type="text" disabled name="upProject_Number" value="<?php echo $Project_Number; ?>"><br><br>
Project Name : <input type="text" name="upProject_Name" value="<?php echo $Project_Name; ?>"><br><br>
Project type : <input type="text" name="upProject_type" value="<?php echo $Project_type ; ?>"><br><br>
 Delivery Date : <input type="date" name="upDelivery_Date" value="<?php echo $Delivery_Date; ?>"><br><br>
 Contact Name : <input type="text" name="upContact_Name" value="<?php echo $Contact_Name; ?>"><br><br>
 Contact PNumber : <input type="number" name="upContact_PNumber" value="<?php echo $Contact_PNumber; ?>"><br><br>
Customer Number : <input type="number" name="upCustomer_Number" value="<?php echo $Customer_Number; ?>"><br><br>
Project Price : <input type="number" name="upTotal_Income" value="<?php echo $Total_Income ; ?>"><br><br>
Products/Service : <input type="text" name="upProducts_Service" value="<?php echo $Products_Service; ?>"><br><br>
Product1 : <input type="text" name="upProduct1" value="<?php echo $Product1; ?>"><br><br>
Quantity1 : <input type="number" name="upQuantity1" value="<?php echo $Quantity1; ?>"><br><br>
Product2 : <input type="text" name="upProduct2" value="<?php echo $Product2; ?>"><br><br>
Quantity2 : <input type="number" name="upQuantity2" value="<?php echo $Quantity2; ?>"><br><br>
<input type="submit" name="updateedit" value="Update">
</form>

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