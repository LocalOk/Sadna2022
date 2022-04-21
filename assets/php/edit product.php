<?php
include("db.php");
$getSKU = $_GET['edit'];
$seledittwo = "SELECT * FROM `Inventory` WHERE `SKU` = '$getSKU'";
$qry = mysqli_query($connect, $seledittwo);
$selassoc = mysqli_fetch_assoc($qry);
$SKU = $selassoc['SKU'];
$Product_Name = $selassoc['Product_Name'];
$Quantity = $selassoc['Quantity'];
$Cost = $selassoc['Cost'];
if(isset($_POST['updateedit'])) {
$upSKU=  $_POST['upSKU'];
 $upProduct_Name =  $_POST['upProduct_Name'];
 $upQuantity =  $_POST['upQuantity'];
 $upCost =  $_POST['upCost'];
 $seleditt = "UPDATE `Inventory` SET `Product_Name`='$upProduct_Name',`Quantity`='$upQuantity',`Cost`='$upCost'
 WHERE `SKU` = '$SKU'";
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

  <title>Edit Product</title>

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
SKU :   <input type="text" disabled name="upSKU" value="<?php echo $SKU; ?>"><br><br>
Product Name : <input type="text" name="upProduct_Name" value="<?php echo $Product_Name; ?>"><br><br>
Quantity : <input type="text" name="upQuantity" value="<?php echo $Quantity ; ?>"><br><br>
Cost : <input type="text" name="upCost" value="<?php echo $Cost; ?>"><br><br>


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