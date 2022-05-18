<title>Delete</title>
           
           <?php  
           include '../Database/DB_functions.php';     
    if(isset($_SESSION['name'])){
                
                $id=$_SESSION['id'];
                $sql="DELETE from `users` where `users`.`id`=$id";
                $res=$conn->prepare($sql);
                if($res->execute()){
                ?> 
                <script>
                alert("Action successfully executed");
                window.location.href="../Database/logout.php";
                </script>
            <?php }else{
                ?>
                <script>alert("Problem deleting the account");</script>
           <?php } ?>
           
           <?php }
    else { ?>
        <div class="container justify-content-center align-items-center my-5" style="display:flex; height:500px; background-color:black;" >
            <div class="btn btn-outline-light" style="color:aliceblue">
            <a href="../index.php">LOGIN </a>
                </div>
        </div>
   <?php }?> 

          