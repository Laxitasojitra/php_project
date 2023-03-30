<?php include('admin/config.php');?>
<?php include('login-check.php');?>

<?php include('header.php');?>

 <style>
     .login{
    background: gainsboro;
    color: black;
    font-size: 20px;
}
h1{
    color: rgb(30, 27, 27);
}
input{
    background: gainsboro;
    width:350px;
    color: black;
    height: 30px;
    color: #3e3e3e;
}
.main_content {
    width:400px;
    display: block;
    font-size: 15px;
}
.btn-primary{
    font-size: 15px;
    border: none;
}
.btn-primary:hover{
    background: blue;
}
 </style>

<center><?php 
                 
                if(isset($_POST['submit'])){
                    $full_name = $_POST['full_name'];
                    $email = $_POST['email'];
                    $phone_number = $_POST['phone_number'];
                    $time = $_POST['time'];
                    $event_name = $_POST['event_name'];
    
                    //sql
                    $sql = "INSERT INTO tbl_book SET 
                        full_name='$full_name',
                        email= '$email',
                        phone_number='$phone_number',
                        time='$time',
                        event_name='$event_name'
                    ";
    
            
                   $res = mysqli_query($conn , $sql);
    
                   if($res==TRUE){
                        $_SESSION['add'] = "<div class='done' >Your Booking is successfully Done. Thank You!</div>";
                        echo $_SESSION['add'];
           unset($_SESSION['add']);
                        // redirect
                   }
                   else{
                    $_SESSION['add'] = "<div class='done' >Something went wrong. Please try again</div>";
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                    // redirect
                    
                   }
                }
                
             ?>
             </center>
         <div class="main_content login" >
             <h1>Book Venue</h1>

             <form action="book.php" method="POST">
                Full Name: <br>
                <input type="text" name="full_name" placeholder="enter your name" required><br><br>
                email Id:<br>
                <input type="email" name="email" placeholder="enter your email id" required><br><br>
                Phone number: <br>
                <input type="number" name="phone_number" placeholder="enter your Phone number" required ><br><br>
                Time of your event: <br>
                <input type="datetime-local" name="time" placeholder="enter your Phone number" required ><br><br>
                What Event is it? <br>
                <input type="text" name="event_name" placeholder="What Event is it?" required ><br><br>
                

                <input type="submit" name="submit" value="Register" class="btn-primary"  ><br>

             </form>
         </div>
<?php include('footer.php');?>