<?php include('admin/config.php');?>
<?php include('login-check.php');?>

<?php include('header.php');?>

<div class="header_main_menu">
      <center><h1>Venue</h1></center>
      <center><p>Amazing places to be at your special occasions.<br><br>The most important decision while you plan your wedding step by step is deciding on the venue. Each couple is believed to spend a lot of time planning their wedding and for their dream wedding to come true, the pressure of the venue to be perfect to the T is often unrealistic. Some couples have always wanted a beach wedding and some others want it to be as royal as the palace can get in Udaipur.

Keeping in mind these expectations that a couple has from their wedding venue, we are here to help you pick the right space and backdrop for your fairytale to come true, by defining the different types of wedding venues available. Based on the size, style. Location and facilities, the list of types of wedding venues are long.</p></center>

      <center><?php
  if(isset($_POST['submit'])){
     $image_name = $_POST['image_name'];

     $sql2="SELECT * FROM tbl_venue WHERE image_name = $image_name";
     $res2 = mysqli_query($conn , $sql2);

     if($res2 == TRUE){
      $count = mysqli_num_rows($res2);
       if($count == 0){
        $sql = "INSERT INTO tbl_venue SET
        image_name = $image_name
       ";
  
        $res=mysqli_query($conn,$sql);
        if($res == TRUE){
          $_SESSION['favorite'] = "<div class='done' >Added to favorite</div>";
          // header('location:http://localhost/php/starter_final.php');
           echo $_SESSION['favorite'];
           unset($_SESSION['favorite']);
        }
       }
       else{$_SESSION['favorite'] = "<div class='done' >Added to favorite</div>";
        // header('location:http://localhost/php/starter_final.php');
         echo $_SESSION['favorite'];
         unset($_SESSION['favorite']);$_SESSION['venue'] = "Added to favorite";
       }
     }
     
  }
?></center><br>

      <?php
      $no=47;
      while($no-- >=39){
        ?>
        <div class="image_box">
        <img src="all_photos1/<?php echo $no;?>.jpg" style="width: 350px"><br><br>
        <form action="" method="POST">
        <input type="hidden" name="image_name" value="<?php echo $no;?>">
        <center><input type="submit" name="submit" value="Add to Cart" class="btn-primary"></center>
        
        </form>
        
        </div>
        
        <?php
      }
      
      ?>
    </div>


<?php include('footer.php');?>