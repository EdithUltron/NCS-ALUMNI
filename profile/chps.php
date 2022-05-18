<title>Change Password</title>

           <?php 
                include '../Database/DB_functions.php';
                
                if(isset($_POST["submit"])&&$_SERVER["REQUEST_METHOD"]=="POST"){
                    if(isset($_POST['curpass']) && isset($_POST['newpass']) && isset($_POST['confpass'])){
                        $email=$_SESSION['email'];
                        $currpass=$_POST['curpass'];
                        $newpass=$_POST['newpass'];
                        $confpass=$_POST['confpass'];
                    }

                    $s="SELECT id,password FROM users WHERE email=? LIMIT 1";
                    $r=$conn->prepare($s);
                    $r->bind_param('s',$email);
                    $r->execute();
                    $r->bind_result($id,$str_pass);
                    $r->fetch();
                    $r->store_result();
                    $r->close();
                    $check=password_verify($currpass,$str_pass);
                    if($check){
                        if($newpass==$confpass && $newpass!=""){
                            $new_pass=password_hash($newpass,PASSWORD_BCRYPT);
                            $sql="UPDATE `users` SET `password` = ? WHERE `users`.`id` = ?";
                            $res=$conn->prepare($sql);
                            $res->bind_param('si',$new_pass,$id);
                            if($res->execute()){
                        ?> 
                        <script>window.alert("password successfully changed");
                        window.location.href="../Database/logout.php";</script>
                    <?php }
                    else{
                        ?>
                        <script>window.alert("Problem changing password try again after sometime");
                        window.location.href="changepass.php";</script>
                   <?php }
                        }
                        else{?>
                        <script>window.alert("<?php echo 'Password Didnot Match'.$id ; ?>");  
                        window.location.href="changepass.php";</script>
                       <?php }
                    }
                    else{?>
                        <script>window.alert("<?php echo 'Password Incorrect'.$str_pass ; ?>"); 
                        window.location.href="changepass.php";</script>
                   <?php
                   }       
            }  
           ?>
           