<?php 
include("conn.php");
session_start();
if(!isset($_SESSION['login'])){
    
    echo"<script>window.location.href='./login.php'</script>";
}
?>

<?php 
include("conn.php");
      $id = $_GET['eid'];
      $sql = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
      $select = mysqli_fetch_assoc($sql);
  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="../html/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    
   <center>
    <form action="" method="POST">
        <input type="text" class="mt-4" placeholder="" name="idd" required disabled value="your id is: <?php echo $select['id'];?>"><br>
        <input type="text" class="mt-2" placeholder="fullname" name="fn" required  value='<?php echo $select['fullname'];?>'><br>
        <input type="text" class="mt-2" placeholder="email" name="email" required value="<?php echo $select['email'];?>"><br>
        <input type="text"  class="mt-2 " name="gender" required value="<?php echo $select['gender'];?>"><br>
        <input type="text" class="mt-2" placeholder=" ************" name="pswd" required value="<?php echo $select['password'];?>"><br>
        <input type="submit" class="btn btn-primary mt-2" name="edit" >
    </form>
    <hr>
    <!-- <//?php include"dis.php";?> -->
   </center> 
</body>
</html>
<?php 
if(isset($_POST["edit"])){
    $fulln=$_POST["fn"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $pass=$_POST["pswd"];
    $query=mysqli_query($conn,"UPDATE `users` SET `fullname`='$fulln',`email`='$email',`gender`='$gender',`password`='$pass' WHERE id='$id'");
     if ($query){
        // echo"<script>alert(' $fulln 😁😁👌👌')</script>";
        echo"<script>window.location.href='display_users.php'</script>";
     } 
     else {
        echo"<script>alert('Data😒🤮💩💩')</script>";
     }
}

?>