<?php include('admin/config.php');?>
<?php include('login-check.php');?>
<link rel="stylesheet" href="admin/css/admin.css">

<?php
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_venue WHERE id=$id";

    $res = mysqli_query($conn,$sql);

    if($res == TRUE){
         //echo"done";
         $_SESSION['delete'] = "<div class='done' >Item Removed from your Cart</div>";
         //redirect it to home page
         header('location:'.SITEURL.'favorite_cart.php');
    }
    else {
        //echo "failed";
        $_SESSION['delete'] = "<div class='error' >Failed to delete Item.Please Try again later</div>";
        //redirect it to home page
        header('location:'.SITEURL.'starter_final.php');
    }
?>