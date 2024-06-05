<?php 
include("conn.php");
// session_start();
// // $_SESSION[''];
// if(!isset($_SESSION['login'])){
//     // echo"<script>window.location.href='login.php'</script>";
//     header('location:login.php');
// }
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../html/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body style=" background-color: rgb(30, 90, 129); ">
   
   <div class="container mt-4 mb" style="width: 45%; border:1px solid rgb(30, 90, 129) ; height: auto;  border-radius: 15px; background-color: aliceblue;">

       <center>
       
       <div class="">
       <h2 class="mt-2">All Products</h2>
       <table border="1px" class="table mt-4 mb-4 class  table-hover">

       <tr>
           <th>ID</th>
           <th>ProductName</th>
           <th>Date</th>
           <th>ACTION</th>
       </tr>
        <?php 
        $select=mysqli_query($conn,"SELECT * FROM product");
        while ($row=mysqli_fetch_array($select)) {
            ?>
            <tr>
                <td><?php echo $row['prodid']?></td>
                <td><?php echo $row['prodname']?></td>
                <td><?php echo $row['date']?></td>
                <td>
                    <a href="stock_in.php?id=<?php echo $row['prodid'] ?>"><button class="btn btn-outline-success" >Stock-in</button></a>
                    <a href="stock_out.php?id=<?php echo $row['prodid'] ?>"><button class="btn btn-outline-success">Stock-out</button></a>
                </td>
            </tr>
            <?php
        }
        
        ?>
   </table>
   <table class="table table-hover">
  ...
</table>
       </div>
           </div>
   </center>
   </body>
</body>
</html>