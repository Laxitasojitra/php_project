<?php include('admin/config.php');?>
<?php include('login-check.php');?>

<?php include('header.php');?>

<?php
                //get the id
                $id = $global_id;
                $sql="SELECT * FROM tbl_admin WHERE id = $id";

                $res = mysqli_query($conn , $sql);

                if($res == TRUE){
                    $count = mysqli_num_rows($res);
                    if($count==1){
                        // echo "admin available";
                        $row=mysqli_fetch_assoc($res);

                        $full_name = $row['full_name'];
                        $username = $row['username'];
                        $contact = $row['contact'];
                        $email = $row['email'];
                    }
                    else {
                        //redirect to home
                        header('location'.SITEURL.'admin.php');
                    }
                }
            ?>

<center><?php
            if(isset($_POST['submit'])){
                // echo "button clicked";
                //get all the value from form
                $id = $_POST['id'];
                $full_name = $_POST['full_name'];
                $username = $_POST['username'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];

                //sql
                $sql = "UPDATE tbl_admin SET
                full_name = '$full_name',
                contact = '$contact',
                email = '$email',
                username = '$username'
                WHERE id = '$id'
                ";

                $res = mysqli_query($conn , $sql);

                if($res == TRUE){
                     $_SESSION['add'] = "<div class='done' >Admin updated successfully</div>";
                        echo $_SESSION['add'];
           unset($_SESSION['add']);
                }
                else{
                    $_SESSION['add'] = "<div class='done' >failed to update admin</div>";
                        echo $_SESSION['add'];
           unset($_SESSION['add']);
                }
            }
         ?></center><br>

             <center><form action="" method="POST"  >
             <table class="tbl-30">
                    <tr>
                        <td>Full Name: </td>
                        <td><input type="text" name="full_name" value="<?php echo $full_name ; ?>" ></td>
                    </tr>

                    <tr>
                        <td>Username: </td>
                        <td><input type="text" name="username" value="<?php echo $username ; ?>" ></td>
                    </tr>
                    <tr>
                        <td>Contact: </td>
                        <td><input type="number" name="contact" value="<?php echo $contact ; ?>" ></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="email" name="email" value="<?php echo $email ; ?>" ></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit" value="Update Admin" class="btn-primary" >
                        </td>
                    </tr>
                </table> 
             </form></center>
         </div>

         
<?php include('footer.php');?>