<?php 
include("conn.php");
session_start();
if(!isset($_SESSION['login'])){
    echo"<script>alert('byee 😒🤮💩💩')</script>";
    echo"<script>window.location.href='./login.php'</script>";
}
?>
<?php 
include("conn.php");
 $id=$_GET['sid'];
    $del=mysqli_query($conn,"delete from users where id=$id");
    if ($del) {
        // echo "<script>alert('$id deleted successfully 🙃🙃🙃')</script>";
        echo "<script>window.location.href='display_users.php'</script>";
    }
?>