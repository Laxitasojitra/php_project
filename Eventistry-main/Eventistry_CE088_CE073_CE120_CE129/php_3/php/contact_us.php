

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="basic.css">

    <link rel="stylesheet" href="contact_us.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@300;400&family=Anek+Kannada&family=Libre+Bodoni:ital@1&family=Lora:ital@1&family=Montserrat:wght@300;400&family=Ms+Madi&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    
    <link
        href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@300;400&family=Anek+Kannada&family=Libre+Bodoni:ital@1&family=Lora:ital@1&family=Montserrat:wght@300;400&family=Ms+Madi&family=Roboto+Slab&display=swap"
        rel="stylesheet">
   
    
    <title>contact_us</title>
    <style>
        ::-moz-selection {
            /* Code for Firefox  */
            color: rgb(255, 255, 255);
            background: rgb(40, 40, 40);
        }

        ::selection {
            color: rgb(255, 251, 251);
            background: rgb(40, 40, 40);
        }

        .header li a {
            letter-spacing: -1;

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
    </style>

</head>

<body>

    <div class="header">
        <div class="first_header">
            <h1>
            Eventistry
            </h1>
            <h3>
                Thoughtfully curating events inspired by meaningful connection
            </h3>
        </div>
<br>
        <div class="random_container">
        <a href="favorite_cart.php" class="logout_cart_button">   View Cart</a>
        <a href="book.php" class="logout_cart_button">   book</a>
        <a href="manage_book.php" class="logout_cart_button">  Check Your Bookings</a>
        <a href="update_profile.php" class="logout_cart_button"> Update Your Profile</a>
        <a href="change_pwd.php" class="logout_cart_button"> Change Your Password</a>
        <a href="logout.php" class="logout_cart_button">Logout </a>
        </div>
<br>
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
<br>
        <div class="container">
            <div class="row">
               <h1>Contact Us</h1>
            </div>
            <div class="row">
                <h4 style="text-align:center">Please feel free to get in touch anytime,
                    whether for work inquiries or to just say
                    <br><a href="mailto:hello@eventistry.com" target="_blank" class="email">hello@eventistry.com<a>
            </div>
            </h4>
        </div>

        <div class="container_button">
            <div class="button">
                <a class="btn btn-light btn-social mr-2" href="https://twitter.com/Ce088P"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-github"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="https://www.instagram.com/eventistry22/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="row input-container">
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <input type="text" required />
                    <label>Name</label>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input">
                    <input type="text" required />
                    <label>Email</label>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input" style="float:right;">
                    <input type="text" required />
                    <label>Phone Number</label>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <textarea required></textarea>
                    <label>Message</label>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="parent_button">
                    <div class="btn-lrg submit-btn">Send Message</div>
                </div>
            </div>
        </div>
        <br><br>

    </div>
</body>

</html>
