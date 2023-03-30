<?php include('admin/config.php');?>
<?php include('login-check.php');?>

<?php include('header.php');?>

<div class="header_main_menu">
      <center><h1>Sound And Lighting</h1></center>
      <center><p>Add Lights and Colors to your Special Moments!<br><br>The lighting in the wedding not only enhances the beauty of the venue but also brightens up the ambience significantly. Similarly, a quality sound system and music arrangement can help set a cheerful mood. After all a wedding is an event of rejoicing and celebrating with people who matter the most. And we make sure that our commendatory sound and lighting arrangements are done in a way that they put a smile on everyone’s face. Be it chandeliers, tea lights, fairy lights or the halogens, we know how to put them in use to make your venue have that exotic feel. With our good taste in music, we can help you decide the kind of music that will compliment the theme. Yes, customization is always an option and your choice is important, however, we ensure to spoil you with choices with music, artists and latest technology sound system to add an oomph factor to your special event.</p></center>

      <center><?php
  if(isset($_POST['submit'])){
     $image_name = $_POST['image_name'];

     $sql2="SELECT * FROM tbl_sound WHERE image_name = $image_name";
     $res2 = mysqli_query($conn , $sql2);

     if($res2 == TRUE){
      $count = mysqli_num_rows($res2);
       if($count == 0){
        $sql = "INSERT INTO tbl_sound SET
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
       else{
        $_SESSION['favorite'] = "<div class='done' >Added to favorite</div>";
            // header('location:http://localhost/php/starter_final.php');
             echo $_SESSION['favorite'];
             unset($_SESSION['favorite']);
       }
     }
     
  }
?></center><br>

      <?php
      $no=38;
      while($no-- >=30){
        ?>
        <div class="image_box">
        <img src="all_photos1/<?php echo $no;?>.jpg" style="width: 350px"><br><br>
        <form action="" method="POST">
        <input type="hidden" name="image_name" value="<?php echo $no;?>">
        <center><input type="submit" name="submit" value="Add to Cart" class="btn-primary" ></center>
        </form>
        
        </div>
        
        <?php
      }
      
      ?>
    </div>

    


<?php include('footer.php');?>