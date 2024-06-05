<?php
include'conn.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>abi|login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../html/bootstrap-4.0.0/dist/css/bootstrap.min.css">
</head>
<body style="padding-top: 4rem; margin-top: 2rem; background-color: rgb(30, 90, 129);">
<center>
<div class="container mt-3 mb" style="width: 40%; border:1px solid rgb(30, 90, 129) ; height: 70vh;  border-radius: 15px; background-color: aliceblue;">
  <h2 class="mt-5">LOGIN-FORM</h2>
  <form action="" method="POST">
  <div class=" form-floating mb-4 mt-4" style="width: 500px;">
          <label for="email" style="margin-left: -25rem;">FullName</label>
          <input type="text" class="form-control"  placeholder="Enter your Fullname" name="fn" required >
     </div>
    <div class="form-floating mt-4 mb-4" style="width: 500px;">
      <label for="pwd" style="margin-left: -25rem;" >Password</label>
      <input type="password" class="form-control" id="pwd"  placeholder="Enter password" name="password" required >      
    </div>
      <div class="form-check mb-3" style="margin-left: -22rem;">
        <label class="form-check-label">
          <input class="form-check-input"  type="checkbox" name="remember" onclick="myFunction()"> Show password</label>
      </div>
      <button type="submit" class="btn btn-primary mb-4"  style="width: 500px; height:6vh;" name="login" >Submit</button>
      <p id="saka"></p>
  <a href="signup.php">Create acount😊😮‍💨</a>
  <!-- <a href="signup.php"><button class="btn btn-primary mt-2 mb-2"  style="width: 200px; height:6vh;">Create account!! 😁</button></a> -->

      </div>
      <script type="text/javascript">
		function myFunction() {
			var show = document.getElementById('pwd');
			if (show.type=='password') {
				show.type='text';
			}
			else{
				show.type='password';
			}
		}
	</script>
  </form>
</div>
</div>
</center>
</body>
</html>
<?php 
 if (isset($_POST['login'])) {
        $lname = $_POST['fn'];
        $pass = $_POST['password'];
        $row=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM users where fullname = '$lname' and password='$pass' "));
    if ($row) {
        $_SESSION['login']=$lname;
        // echo"<script>alert('yes')</script>";
        // echo"<script>window.location.href='dis.php'</script>";
        echo "<script>window.location.href='home.php'</script>";

}else{
    echo"<script>alert('incorrect 😒🤮💩💩')</script>";
}

 }
?>