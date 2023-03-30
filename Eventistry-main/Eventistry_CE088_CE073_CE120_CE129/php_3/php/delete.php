<?php include('admin/config.php');?>
<?php include('login-check.php');?>

<?php
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_book WHERE id=$id";

    $res = mysqli_query($conn,$sql);

    if($res == TRUE){
        //echo"done";
        $_SESSION['delete'] = "Your Booking is deleted successfully";
        //redirect it to home page
        header('location:'.SITEURL.'manage_book.php');
    }
    else {
        //echo "failed";
        $_SESSION['delete'] = "Failed to delete Your Booking. Try again later";
        //redirect it to home page
        header('location:'.SITEURL.'manage_book.php');
    }
?>