<head>
<style>
.error{
    color: red;
    font-size: 20px;}
    </style>
    </head>

<?php 
    if(!isset($_SESSION['user'])){
        // redirect to login page
        $_SESSION['no-login-message'] = "<div class='error' >Please login First.</div>";
        header('location:http://localhost/php/login.php');
    }
    else{
        $global_id= $_SESSION['user'];
    }
?>