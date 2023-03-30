<?php include('admin/config.php');?>
<?php include('login-check.php');?>

<?php include('header.php');?>

    <!-- Header -->
    <div class="header_stater">
      <center><h1>Starter</h1></center>
      <center><p>Here are Some amazing and yummy Starters.</p></center>
      <br>
      <center><?php
  if(isset($_POST['submit'])){
     $image_name = $_POST['image_name'];

     $sql2="SELECT * FROM tbl_favorite WHERE image_name = $image_name";
     $res2 = mysqli_query($conn , $sql2);

     if($res2 == TRUE){
      $count = mysqli_num_rows($res2);
       if($count == 0){
        $sql = "INSERT INTO tbl_favorite SET
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
?></center>
      
      <br><br>

      <?php
      $no=10;
      while(--$no){
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

