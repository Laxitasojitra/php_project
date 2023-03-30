<?php include('admin/config.php');?>
<?php include('login-check.php');?>

<?php include('header.php');?>

    <div class="header_topic">
      <center><h1>Deserts</h1></center>
      <center><p>Here is mouth watering Sweets.</p></center>
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
          $_SESSION['favorite'] = "<div class='done' >Added to cart</div>";
          // header('location:http://localhost/php/starter_final.php');
           echo $_SESSION['favorite'];
           unset($_SESSION['favorite']);
        }
       }
       else{
        $_SESSION['favorite'] = "<div class='done' >Added to cart</div>";
          // header('location:http://localhost/php/starter_final.php');
           echo $_SESSION['favorite'];
           unset($_SESSION['favorite']);
       }
     }
     
  }
?></center><br><br>
      <?php
      $no=27;
      while($no-- >=19){
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

