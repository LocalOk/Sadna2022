<?php
include("db.php");
$getCustomer_Number = $_GET['edit'];
$seledittwo = "SELECT * FROM `Customers` WHERE `Customer_Number` = '$getCustomer_Number'";
$qry = mysqli_query($connect, $seledittwo);
$selassoc = mysqli_fetch_assoc($qry);
$Customer_Number = $selassoc['Customer_Number'];
$Customer_Name = $selassoc['Customer_Name'];
$Buisness_name = $selassoc['Buisness_name'];
$Address = $selassoc['Address'];
$Customer_Type = $selassoc['Customer_Type'];
$Phone_Number = $selassoc['Phone_Number'];
$Email = $selassoc['Email'];
if(isset($_POST['updateedit'])) {
$upCustomer_Number=  $_POST['upCustomer_Number'];
 $upCustomer_Name =  $_POST['upCustomer_Name'];
 $upBuisness_name =  $_POST['upBuisness_name'];
 $upAddress =  $_POST['upAddress'];
 $upCustomer_Type =  $_POST['upCustomer_Type'];
 $upPhone_Number =  $_POST['upPhone_Number'];
  $upEmail =  $_POST['upEmail'];
 
 $seleditt = "UPDATE `Customers` SET `Customer_Name`='$upCustomer_Name',`Buisness_name`='$upBuisness_name',`Address`='$upAddress',`Customer_Type`='$upCustomer_Type',`Phone_Number`='$upPhone_Number' , `Email` ='$upEmail' WHERE `Customer_Number` = '$Customer_Number'";
 $qry = mysqli_query($connect,$seleditt);
 if($qry) {
  header("location: ../../html/Home Page.html");
 }
}
 
//$seledit = "UPDATE `Customers` SET `id`=[value-1];,`Customer_Name`=[value-2];,`Buisness_name`=[value-3];,`Address`=[value-4]; WHERE `Customer_Number` = '$getCustomer_Number'";
 
?>
 
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
 Customer Nubmer :   <input type="text" disabled name="upCustomer_Number" value="<?php echo $Customer_Number; ?>"><br><br>
 Customer Name : <input type="text" name="upCustomer_Name" value="<?php echo $Customer_Name; ?>"><br><br>
 Buisness Name : <input type="text" name="upBuisness_name" value="<?php echo $Buisness_name ; ?>"><br><br>
 Address : <input type="text" name="upAddress" value="<?php echo $Address; ?>"><br><br>
  Customer Type : <input type="text" name="upCustomer_Type" value="<?php echo $Customer_Type; ?>"><br><br>
Phone Number : <input type="number" name="upPhone_Number" value="<?php echo $Phone_Number ; ?>"><br><br>
Email : <input type="text" name="upEmail" value="<?php echo $Email; ?>"><br><br>
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