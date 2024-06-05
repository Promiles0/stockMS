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
    <title>abi | users</title>
    <link rel="stylesheet" href="../html/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<?php 
    include "header.php";
    ?>
    <body style=" background-color: rgb(30, 90, 129); ">
   
    <div class="container mt-4 mb" style="width: 45%; border:1px solid rgb(30, 90, 129) ; height: auto;  border-radius: 15px; background-color: aliceblue;">

        <center>
        
        <div class="">
        <h2 class="">All users</h2>
        <table border="1px" class="table table-hover mt-4 mb-4">
        
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Gender</th>
            <th>password</th>
            <th>ACTION</th>
            
        </tr>
        
            <?php 
             $query=mysqli_query($conn,"SELECT * FROM `users`");
             while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['fullname'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td>
                    <a href="delete_user.php?sid=<?php echo $row['id'] ?>"><button class="btn btn-danger" >DELETE</button></a>
                    <!-- <a href="edit.php?id`=<//?php echo $row['sutdid'] ?>"> <button>EDIT</button></a> -->
                    <a href="edit_user.php?eid=<?php echo $row['id'] ?>"><button class="btn btn-primary">EDIT</button></a>
                </td>
                <?php
             }
            
            ?>
       
        </tr>
    </table>
        </div>
            </div>
    </center>
    </body>
    </html>