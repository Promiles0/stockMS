<?php 
include("conn.php");
session_start();
// $_SESSION[''];
if(!isset($_SESSION['login'])){
    // echo"<script>window.location.href='login.php'</script>";
    header('location:login.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abi | Products</title>
    <link rel="stylesheet" href="../html/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<?php 
    include "header.php";
    ?>
<body style=" background-color: rgb(30, 90, 129);">

    <center>
     <!-- =========================== -->
    <div class="container mt-4 mb" style="width: 40%; border:1px solid rgb(30, 90, 129) ; height: auto;  border-radius: 15px; background-color: aliceblue;">
  <h2 class="mt-5">ADD PRODUCT</h2>
  <form action="" method="POST">
           <div class=" form-floating mb-4 mt-4" style="width: 500px;">
          <label for="email" style="margin-left: -25rem;">Product Name</label>
          <input type="text" class="form-control"  placeholder="Enter product name" name="prodname" required >
     </div>
    <!-- <div class="form-floating mt-4 mb-4" style="width: 500px;">
      <label for="pwd" style="margin-left: -25rem;" >comments</label>
      <input type="textarea" class="form-control" id="pwd"  placeholder="Enter password" name="pass" required >      
    </div> -->
      <button type="submit" class="btn btn-primary mb-4" value="" style="width: 400px; height:6vh;" name="add" >Add</button>
      </div>
  </form>
</div>
</div>
    <hr>
    <//?php include"dis.php";?>
   </center> 
</body>
</html>
<?php 
if (isset($_POST['add'])) {
    $product=$_POST['prodname'];
     $date=date('d-M-Y');
    //  $m=date('m');
    //  $d=date('d');
    $insert_query=mysqli_query($conn,"INSERT INTO `product` (`prodid`, `prodname`,`date`) VALUES (NULL, '$product','$date')");
    if ($insert_query) {
        echo"<script>alert('product  Inserted successfully👌')</script>";
        echo"<script>window.location.href='home.php'</script>";
    }
}

?>
