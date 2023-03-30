<?php include('admin/config.php');?>
<?php include('login-check.php');?>

<?php include('header.php');?>


<center><?php
            if(isset($_POST['submit'])){
                //get date
                $id = $_POST['id'];
                $current_password = md5($_POST['current_password']);
                $new_password = md5($_POST['new_password']);
                $confirm_password = md5($_POST['confirm_password']);

                $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password = '$current_password'";

                $res = mysqli_query($conn , $sql);

                if($res == TRUE){
                    $count = mysqli_num_rows($res);

                    if($count == 1){
                        if($new_password == $confirm_password){
                            $sql2 = "UPDATE tbl_admin SET
                            password = '$new_password'
                            WHERE id = $id
                            ";

                            $res2 = mysqli_query($conn , $sql2);

                            if($res2 == TRUE){
                                // $_SESSION['change-pwd'] = "Password changed sucsessfully.";
                                // header('location:'.SITEURL.'change_pwd.php');
                                $_SESSION['add'] = "<div class='done' >Password changed successfully!</div>";
                        echo $_SESSION['add'];
           unset($_SESSION['add']);
                            }
                            else{
                                // $_SESSION['change-pwd'] = "Failed to change password.";
                                // header('location:'.SITEURL.'change_pwd.php');
                                $_SESSION['add'] = "<div class='error' >Failed to change password.</div>";
                        echo $_SESSION['add'];
           unset($_SESSION['add']);
                            }
                        }
                        else{
                            $_SESSION['pwd-not-match'] = "Password do not match.";
                        // header('location:'.SITEURL.'change_pwd.php');
                        $_SESSION['add'] = "<div class='error' >Your new password and confirm password does not match.Please try again.</div>";
                        echo $_SESSION['add'];
           unset($_SESSION['add']);
                        }
                    }
                    else{
                        // $_SESSION['user-not-found'] = "Your current Password and new Password does not match.";
                        // header('location:'.SITEURL.'change_pwd.php');
                        $_SESSION['add'] = "<div class='error' >Your Old Password is incorrect.Please enter correct Password.</div>";
                        echo $_SESSION['add'];
           unset($_SESSION['add']);
                    }
                }
            }

         ?>


<div class="main_content">
             <h1>Change Password</h1>

             <?php
                
                $id = $global_id;
                
             ?>

             <form action="" method="POST">

                <table class="tbl-30">
                    <tr>
                        <td>Old Password:</td>
                    <td>
                        <input type="password" name="current_password" placeholder="Old Password">
                    </td>
                    </tr>

                    <tr>
                        <td>New Password:</td>
                    <td>
                        <input type="password" name="new_password" placeholder="New Password">
                    </td>
                    </tr>

                    <tr>
                        <td>Confirm Password:</td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value ="<?php echo $id; ?>"  >
                            <input type="submit" name="submit" value = "Change Password" class ="btn-primary" >
                    </td>
                    </tr>
                </table>

             </form>
         </div></center>
<?php include('footer.php');?>