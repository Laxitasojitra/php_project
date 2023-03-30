<?php include('admin/config.php');?>

<html>
    <head>

        <title>Register</title>
        <link rel="stylesheet" href="admin/css/admin.css">
        <style>
       .btn-primary{
    font-size: 15px;
    border: none;
}
.btn-primary:hover{
    background: blue;
}
        .login{
    font-family: 'Montserrat', sans-serif;

    background: gainsboro;
    color: #3e3e3e;
    font-size: 19px;
}

.login a{
    
    font-size:15px;
}
h1{
    color: rgb(30, 27, 27);
}
input{
    /* background: gainsboro; */
    width:190px;
    height: 30px;
    color: #3e3e3e;
}

.error{
    color: red;
    font-size: 15px;

}
.done{
    font-size: 15px;
    color: green;
}
    </style>
    </head>

    <body>

         <div class="main_content login" >
             <h1>Register</h1>
            <?php
             if(isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
                ?>
                <br>
             <form action="" method="POST">
             Your Name: <br>
                <input type="text" name="full_name" placeholder="Enter your name" required><br><br>
                Username: <br>
                <input type="text" name="username" placeholder="Enter your username" required><br><br>
                Password: <br>
                <input type="password" name="password" placeholder="Enter your password" required ><br><br>
                Contact: <br>
                <input type="number" name="contact" placeholder="Enter your phone number" required ><br><br>
                Email Id: <br>
                <input type="email" name="email" placeholder="Enter your Email ID" required ><br><br>
                <input type="submit" name="submit" value="Register" class="btn-primary"  ><br>

             </form>
         </div>

         <?php 
            if(isset($_POST['submit'])){
                $full_name = $_POST['full_name'];
                $username = $_POST['username'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);

                $sql2 = "SELECT * FROM tbl_admin WHERE username = '$username' ";
                 $res2 = mysqli_query($conn , $sql2);
                 $count = mysqli_num_rows($res2);
                 if($count >= 1){
                    $_SESSION['login'] = "<div class='error' >Sorry, User Name Already exist. Please Try again </div>";
                    header('location:http://localhost/php/register.php');
                }
                else{
                    $sql = "INSERT INTO tbl_admin SET 
                    contact='$contact',
                    email='$email',
                    full_name='$full_name',
                    username='$username',
                    password='$password'
                ";
               $res = mysqli_query($conn , $sql) or die(mysqli_error());
               if($res==TRUE){
                $_SESSION['add'] = "<div class='done' >Registration is done sucssessfully. Login Here.</div>";

                // redirect
                header("location:".SITEURL.'login.php');
           }
           else{
            $_SESSION['add'] = "<div class='error' >Failed to Register. Please try again</div>";

            // redirect
            header("location:".SITEURL.'login.php');
           }
            }
                //sql
          }
            
         ?>

    </body>
</html>