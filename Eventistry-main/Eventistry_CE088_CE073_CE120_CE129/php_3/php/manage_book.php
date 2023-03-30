<?php include('admin/config.php');?>
<?php include('login-check.php');?>
<?php include('header.php');?>


                <center><?php 
                if(isset($_SESSION['delete'])){
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }
             ?></center>
            <table class="tbl-full">
                <tr>
                    <th>Sr. no</th>
                    <th>Full Name:</th>
                    <th>email Id:</th>
                    <th>Phone number:</th>
                    <th>Time of your event:</th>
                    <th>What Event is it?</th>
                </tr>

                 <?php 
                    $sql = "SELECT * FROM tbl_book";
                    $res = mysqli_query($conn , $sql);

                    if($res==TRUE){
                        //count rows
                        $count = mysqli_num_rows($res);
                        $sn=1;
                        if($count>0){
                            while($rows = mysqli_fetch_assoc($res)){
                                //get data
                                $id=$rows['id'];
                                $full_name=$rows['full_name'];
                                $email=$rows['email'];
                                $phone_number=$rows['phone_number'];
                                $time=$rows['time'];
                                $event_name=$rows['event_name'];

                                //display the value
                                ?>
                                <tr>
                                    <td><?php echo $sn++; ?>.</td>
                                    <td><?php echo $full_name; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $phone_number; ?></td>
                                    <td><?php echo $time; ?></td>
                                    <td><?php echo $event_name; ?></td>
                                    
                                    <td>
                                    <a href="<?php echo SITEURL;?>delete.php?id=<?php echo $id;?>" class="btn-primary">Delete Booking</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                    }
                 ?>

                 
             </table>
             
             
             <?php include('footer.php');?>