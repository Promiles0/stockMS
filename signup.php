<?php 
include("conn.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abi | sigup-page</title>
        <link rel="stylesheet" href="../html/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body style="padding-top: 4rem; margin-top: 2rem; background-color: rgb(30, 90, 129);">
   <center>
     <!-- =========================== -->
    <div class="container mt-2 mb" style="width: 40%; border:1px solid rgb(30, 90, 129) ; height: 85vh;  border-radius: 15px; background-color: aliceblue;">
  <h2 class="mt-5">ADD USER</h2>
  <form action="" method="POST">
           <div class=" form-floating mb-4 mt-4" style="width: 500px;">
          <label for="email" style="margin-left: -25rem;">FullName</label>
          <input type="text" class="form-control"  placeholder="Enter your Fullname" name="fn" required >
     </div>
     <div class=" form-floating mb-4 mt-4" style="width: 500px;">
          <label for="email" style="margin-left: -25rem;">Email</label>
          <input type="email" class="form-control"  placeholder="email" name="email" required >
     </div>
     <div class=" form-floating mb-4 mt-4" style="width: 500px;">
          <label for="email" style="margin-left: -18rem;">Gender</label>
          <select id="gender" name="gender" required>
          <option value=""  selected disabled >Select Your Gender</option>
            <option value="select">Female</option>
            <option value="Male">Male</option>
            <option value="Male">both 😁</option>
          </select>
          <!-- <input type="email" class="form-control"  placeholder="email" name="email" required > -->
     </div>
     
    <div class="form-floating mt-4 mb-4" style="width: 500px;">
      <label for="pwd" style="margin-left: -25rem;" >Password</label>
      <input type="password" class="form-control" id="pwd"  placeholder="Enter password" name="pass" required >      
    </div>
      <div class="form-check mb-3" style="margin-left: -22rem;">
        <label class="form-check-label">
          <input class="form-check-input"  type="checkbox" name="remember" onclick="myFunction()"> Show password</label>
      </div>
      <!-- <button type="submit" class="btn btn-primary mb-4"  style="width: 500px; height:6vh;" name="login" >Submit</button> -->
      <button type="submit" class="btn btn-primary mb-2" value="" style="width: 400px; height:6vh;" name="login" >Signup</button>
      <p id="saka"></p>
  <a href="login.php">Login😮‍💨</a>
  <!-- <a href="login.php"> <button  class="btn btn-primary mt-2 mb-2"  style="width: 200px; height:6vh;" name="login" >login!! 😁</button></a> -->

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
    <hr>
    <//?php include"dis.php";?>
   </center> 
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
</body>
</html>
<?php 
if(isset($_POST["login"])){
    $fulln=$_POST["fn"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $pass=$_POST["pass"];
    $query=mysqli_query($conn,"INSERT INTO `users` (`id`, `fullname`, `email`, `gender`, `password`) VALUES (NULL, '$fulln', '$email', '$gender', '$pass')");  
     if ($query) {
        echo"<script>alert(' $fulln  Inserted😁😁👌👌')</script>";
        echo"<script>window.location.href='home.php'</script>";
     } 
     else {
        echo"<script>alert('Data😒🤮💩💩')</script>";
     }
}

?>