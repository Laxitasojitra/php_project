<?php include('admin/config.php');?>
<?php include('login-check.php');?>


<link rel="stylesheet" href="admin/css/admin.css">

<?php include('header.php');?>



                <center>
                    <h1>Food</h1>
                    <?php 
 if(isset($_SESSION['delete'])){
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);
}
 if(isset($_SESSION['delete_sound'])){
    echo $_SESSION['delete_sound'];
    unset($_SESSION['delete_sound']);
}
if(isset($_SESSION['delete_venue'])){
    echo $_SESSION['delete_venue'];
    unset($_SESSION['delete_venue']);
}

?>

             </center>
<table class="tbl-full">
                 <tr>
                     <th>S.N.</th>
                     <th>Image name</th>
                     <th>Images</th>
                     <th>Remove from Cart</th>
                 </tr>

                 <?php 
                    $sql = "SELECT * FROM tbl_favorite";
                    $res = mysqli_query($conn , $sql);

                    if($res==TRUE){
                        //count rows
                        $count = mysqli_num_rows($res);
                        $sn=1;
                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                //get data
                                $id=$rows['id'];
                                $image_name=$rows['image_name'];
                                
                            
                                //display the value
                                ?>
                                <tr>
                                    <td><?php echo $sn++; ?>.</td>
                                    <?php
                                    if($image_name==1){
                                    $new_img_name = "Samosa";
                                }
                                else if($image_name==2){
                                    $new_img_name = "Khaman";
                                }
                                else if($image_name==3){
                                    $new_img_name = "sven brandsma
                                    ";
                                }
                                else if($image_name==4){
                                    $new_img_name = "French-Fries";
                                }
                                else if($image_name==5){
                                    $new_img_name = "Dossa";
                                }
                                else if($image_name==6){
                                    $new_img_name = "Vegetable Stics";
                                }
                                else if($image_name==7){
                                    $new_img_name = "Pizza";
                                }
                                else if($image_name==8){
                                    $new_img_name = "Masala-Puri";
                                }
                                else if($image_name==9){
                                    $new_img_name = "Mendu-vada";
                                }else if($image_name==10){
                                    $new_img_name = "Tommato-soupe";
                                }else if($image_name==11){
                                    $new_img_name = "Kalyaniy-akela";
                                }else if($image_name==12){
                                    $new_img_name = "Damalu";
                                }
                                else if($image_name==13){
                                    $new_img_name = "PavBhaji";
                                }
                                else if($image_name==14){
                                    $new_img_name = "Anton-ahlberg";
                                }
                                else if($image_name==15){
                                    $new_img_name = "Macroni-pasta";
                                }
                                else if($image_name==16){
                                    $new_img_name = "Sama-hosseini";
                                }
                                else if($image_name==17){
                                    $new_img_name = "Spegati-Pasta";
                                }
                                else if($image_name==18){
                                    $new_img_name = "Special-Pav-Bhaji";
                                }
                                else if($image_name==19){
                                    $new_img_name = "Emma-houghbon";
                                }
                                else if($image_name==20){
                                    $new_img_name = "Rashgulla";
                                }
                                else if($image_name==21){
                                    $new_img_name = "Kesar-Petha";
                                }
                                else if($image_name==22){
                                    $new_img_name = "Emilembunza";
                                }
                                else if($image_name==23){
                                    $new_img_name = "Cup-Cake";
                                }
                                else if($image_name==24){
                                    $new_img_name = "Chocolate_barfi";
                                }
                                else if($image_name==25){
                                    $new_img_name = "Julia-kicova";
                                }
                                else if($image_name==26){
                                    $new_img_name = "Ice-cream with fruite";
                                }
                                else if($image_name==27){
                                    $new_img_name = "Brownie";
                                }
                                else if($image_name==28){
                                    $new_img_name = "Choco-Brownie";
                                }
                                ?>
                                    <td><?php echo $new_img_name; ?></td>
                                    <td>
                                        <img src="all_photos1/<?php echo $image_name;?>.jpg" width="90px">
                                    </td>
                                    <td>  
                                    <a href="<?php echo SITEURL;?>delete_favorite.php?id=<?php echo $id;?>" class="btn-primary">Delete Item</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        
                    }
                 ?>

                 
             </table>
             <br><br>

             <center>
                    <h1>Sound and Lighting</h1>
             </center>
             <table class="tbl-full">
                 <tr>
                     <th>S.N.</th>
                     <th>Image name</th>
                     <th>Images</th>
                     <th>Remove from Cart</th>
                 </tr>

                 <?php 
                    $sql = "SELECT * FROM tbl_sound";
                    $res = mysqli_query($conn , $sql);

                    if($res==TRUE){
                        //count rows
                        $count = mysqli_num_rows($res);
                        $sn=1;
                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                //get data
                                $id=$rows['id'];
                                $image_name=$rows['image_name'];
                            
                                //display the value
                                ?>
                                <tr>
                                    <td><?php echo $sn; ?>.</td>
                                    <td>Decoration-no. <?php echo $sn;$sn++;  ?></td>
                                    <td>
                                        <img src="all_photos1/<?php echo $image_name;?>.jpg" width="90px">
                                    </td>
                                    <td>  
                                    <a href="<?php echo SITEURL;?>delete_food_cart.php?id=<?php echo $id;?>" class="btn-primary">Delete Item</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        
                    }
                 ?>

                 
             </table>

             <br><br>
             <center>
                    <h1>Venue</h1>
             </center>
             <table class="tbl-full">
                 <tr>
                     <th>S.N.</th>
                     <th>Image name</th>
                     <th>Images</th>
                     <th>Remove from Cart</th>
                 </tr>

                 <?php 
                    $sql = "SELECT * FROM tbl_venue";
                    $res = mysqli_query($conn , $sql);

                    if($res==TRUE){
                        //count rows
                        $count = mysqli_num_rows($res);
                        $sn=1;
                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                //get data
                                $id=$rows['id'];
                                $image_name=$rows['image_name'];
                            
                                //display the value
                                ?>
                                <tr>
                                    <td><?php echo $sn; ?>.</td>
                                    <td>Venue-no. <?php echo $sn;$sn++; ?></td>
                                    <td>
                                        <img src="all_photos1/<?php echo $image_name;?>.jpg" width="90px">
                                    </td>
                                    <td>  
                                    <a href="<?php echo SITEURL;?>delete_venue_cart.php?id=<?php echo $id;?>" class="btn-primary">Delete Item</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        
                    }
                 ?>

                 
             </table>

<?php include('footer.php');?>
