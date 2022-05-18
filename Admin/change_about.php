<?php
if(isset($_POST['submit']) && isset($_POST['about'])){
    $about=$_POST['about'];
    $fp=fopen("../nav/about.txt","w") or die("cannot open file");
    fwrite($fp,$about) or die("cannot write into file");
    fclose($fp);
    header("Location: ../nav/about.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change_Admin</title>
</head>
<body style="background-color:#000 ; color:aliceblue">
    <?php session_start(); if(isset($_SESSION['name']) && $_SESSION['email']=="admin@ncs.com"){?>
    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <label>about</label>
        <?php
        $fp=fopen('../nav/about.txt','r');
        ?>
        <textarea rows=20 cols=150 name="about"><?php while($data=fgets($fp)){ echo $data;} fclose($fp);
        ?>"</textarea>
        <input type="submit" name="submit">
    </form>
    <?php }
   else {?>
    <div class="container justify-content-center align-items-center my-5"
        style="display:flex; height:500px; background-color:black;">
        <div class="btn btn-outline-light" style="color:aliceblue">
            <a href="../index.php">LOGIN </a>
        </div>
    </div>
    <?php }?>
</body>
</html>