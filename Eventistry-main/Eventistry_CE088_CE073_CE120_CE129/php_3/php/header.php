<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event-management</title>

    <link rel="stylesheet" href="basic.css">
    <link rel="stylesheet" href="admin/css/admin.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@300;400&family=Anek+Kannada&family=Libre+Bodoni:ital@1&family=Lora:ital@1&family=Montserrat:wght@300;400&family=Ms+Madi&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Libraries Stylesheet -->
</head>
<style>
    .image_box{
      width:33%;
      /* background-color:  rgb(54, 54, 54); */
      display:inline-block;
      margin-bottom:50px;
    }

    .random_container{
        display: flex;
        align-items: center;
      justify-content: center;

      /* background-color:  rgb(0, 54, 54); */


    }
    .logout_cart_button{
      /* background-color:  rgb(54, 54, 54); */

      /* display:inline-block; */
      color: rgb(33, 5, 244);
        margin: 10px;
    }

    .error{
    color: red;
    font-size: 20px;

}
.done{
    font-size: 20px;
    color: green;
}

.btn-primary{
    font-size: 15px;
    border: none;
}
.btn-primary:hover{
    background: blue;
}


</style>

<body>
    <div class="header">
        <div class="first_header">
            <h1>
            Eventistry
            </h1>
            <h3>
                Thoughtfully curating events inspired by meaningful connection
            </h3>
            
            <!-- <h2>
                event
            </h2> -->
        </div>

        <div class="random_container">
        <a href="favorite_cart.php" class="logout_cart_button">   View Cart</a>
        <a href="book.php" class="logout_cart_button">   book</a>
        <a href="manage_book.php" class="logout_cart_button">  Check Your Bookings</a>
        <a href="update_profile.php" class="logout_cart_button"> Update Your Profile</a>
        <a href="change_pwd.php" class="logout_cart_button"> Change Your Password</a>
        <a href="logout.php" class="logout_cart_button">Logout </a>
        </div>

        <div class="nav_container">
            <div class="navbar">
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <!-- <li><a href="#">Catering</a></li> -->
                        <div class="dropdown">
                            <button class="dropbtn">Catering</button>
                            <div class="dropdown-content">
                              <a href="starter_final.php">Strater</a>
                              <a href="main_menu.php">Main menu</a>
                              <a href="desert.php">Desert</a>
                            </div>
                          </div>
                        <li><a href="venue.php">Venue</a></li>
                        <li><a href="sound.php">Sound and lighting</a></li>
                        <li><a href="photo.php">Photography & videography</a></li>
                        <li><a href="about_us.php">About us</a></li>
                        <li><a href="contact_us.php">Contact us</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <?php 
                
                if(isset($_SESSION['username'])){
                    $username_global = $_SESSION['username'];
                }
             ?>
        <br />
        

        
