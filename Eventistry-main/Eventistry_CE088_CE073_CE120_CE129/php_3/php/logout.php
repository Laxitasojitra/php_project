<?php include('admin/config.php');?>
<?php
    session_destroy();


    header('location:'.SITEURL.'login.php');

?>