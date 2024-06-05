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
    <title>abi | Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
    include "header.php";
    ?>
  <center>
  welcome <?php echo $_SESSION['login']?>🐼
  <//?php 
  include ("display_product.php");
  ?>
  </center>
</body>
</html>