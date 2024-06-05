<?php include ("conn.php");       
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abi | stockout</title>
    <link rel="stylesheet" href="../html/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<?php 
    include "header.php";
    ?>
<!-- <body style="padding-top: 4rem; margin-top: 2rem; background-color: rgb(30, 90, 129);"> -->
<body style=" background-color: rgb(30, 90, 129); ">
<center>
<div class="container mt-4 mb" style="width: 40%; border:1px solid rgb(30, 90, 129) ; height: auto;  border-radius: 15px; background-color: aliceblue;">
<form action="" method="post">
<div class="form-group gender">
    <h1>Stock-out</h1>
        <label for="gender">select id→</label>
        <select id="" class="mt-4" name="selectedid" >
            <?php 
           $select=mysqli_query($conn,"SELECT * FROM product");
            while ($row=mysqli_fetch_array($select)) {
                ?>
          <option value="<?php echo $row['prodid']?>"><?php echo $row['prodname']?></option>
                <?php
            }
            
            ?>
          <!-- <option value="" selected disabled>Select your Id</option>
          <option value="Male" class="option">Male</option>
          <option value="Female" class="option">Female</option>
          <option value="Other"class="option">Other</option> -->
        </select>
      </div>
     <div class=" form-floating mb-4 mt-4" style="width: 500px;">
          <label for="email" style="margin-left: -25rem;">Quantity</label>
          <input type="number" class="form-control"  placeholder="Enter quantity" name="quantity" required >
     </div>
      <button type="submit" class="btn btn-outline-primary mb-4" value="" style="width: 200px; height:5vh;" name="save" >stock in</button>

    </form>
</div>
</center>
</body>
</html>
<?php 
 if (isset($_POST['save'])) {
    $id=$_POST['selectedid'];
    $quantity=$_POST['quantity'];
    $date=date('d-M-Y');
    $stockin=mysqli_query($conn,"SELECT * FROM stock where productid='$id'");
    while ($row=mysqli_fetch_array($stockin)) {
        $old_quantity=$row['quantity'];
    }
    $num=mysqli_num_rows($stockin);
    if ($num==1) {
        $add=$old_quantity+$quantity;
        // update in stock
        $update_quantity=mysqli_query($conn,"UPDATE  stock SET quantity='$add' WHERE productid='$id'");
        if ($update_quantity) {
            echo "<script>alert('stock in updated successfully')</script>";
        $insert_in_report=mysqli_query($conn,"INSERT INTO `report` (`id`, `productid`, `quantity`, `date`, `status`) 
                                    VALUES (NULL, '$id', '$quantity','$date','stock in')");
            
        }
    }

    else{
        // insert in stock
        $insert_in_stock=mysqli_query($conn,"INSERT INTO `stock` (`id`, `productid`, `quantity`) VALUES (NULL, $id, $quantity)");
        if($insert_in_stock){
            echo "<script>alert('stock in added successfully')</script>";
            $insert_in_report=mysqli_query($conn,"INSERT INTO `report` (`id`, `productid`, `quantity`, `date`, `status`) 
            VALUES (NULL, '$id', '$quantity','$date','stock in')");
        }
    }
 }

?>