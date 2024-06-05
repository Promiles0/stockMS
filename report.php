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
    <title>abi | Report</title>
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
       <h2 class="mt-2">Report</h2>
       <table border="1px" class="table mt-4 mb-4 class  table-hover">

       <tr>
           <!-- <th>ID</th> -->
           <th>ProductName</th>
           <th>Quantity</th>
           <th>Date</th>
           <th>IN/OUT</th>
       </tr>
        <?php 
        $select=mysqli_query($conn,"SELECT product.prodname,quantity,date,status FROM product,report WHERE product.prodid=report.productid ");
        while ($row=mysqli_fetch_array($select)) {
            ?>
            <tr>
                <td><?php echo $row['prodname']?></td>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['id']?></td>
                <td>

                </td>
            </tr>
            
            <?php
        }
       ?>
   </table>
       </div>
           </div>
   </center>
   </body>
</body>
</html>