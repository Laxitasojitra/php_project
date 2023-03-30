<?php include('admin/config.php');?>

<html>
    <head>
        <title>login-page</title>
        <link rel="stylesheet" href="admin/css/admin.css">
    <style>
       .error{
    color: red;
    font-size: 15px;

}
.done{
    font-size: 15px;
    color: green;
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
    </style>
    </head>

    <body>
        <div class="login">
            <h1>
                login
            </h1>
            <br><br>

            <?php 
                if(isset($_SESSION['login'])){
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
                if(isset($_SESSION['no-login-message'])){
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
                if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
            ?>

            <form action="" method="POST">
                Username: <br>
                <input type="text" name="username" placeholder="Enter username"><br><br>
                Password:<br>
                <input type="password" name="password" placeholder="Enter your password"><br><br>

                <input type="submit" name="submit" value="Login" class="btn-primary"  ><br><br>
                <a href="register.php">Don't have account? Register here</a>
            </form>
            
        </div>
    </body>
</html>

<?php 

    if(isset($_POST['submit'])){
        //get the data
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //check username

        $sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'";
        $res = mysqli_query($conn , $sql);

        //count rows
        $count = mysqli_num_rows($res);

        if($count == 1){
            //login sucsses
            $rows = mysqli_fetch_assoc($res);
            $id =$rows['id'];
            $_SESSION['login'] = "<div class='done' >Login Sucscessful</div>";
            $_SESSION['user'] = $id;
            header('location:http://localhost/php/index.php');
        }
    
        else {
            $_SESSION['login'] = "<div class='error' >Username or Password did not match</div>";
            header('location:http://localhost/php/login.php');
        }
    }
?>