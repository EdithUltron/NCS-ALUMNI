<?php include '../head.php';
include '../Database/login.php'
?>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
   <?php include '../Home/navbar.php';?>
<?php 

if(isset($_SESSION['name'])){
   if( isset($_POST['pid'])){ 
      $id=$_POST['pid'];
   }
   else{
      $id=$_SESSION['id'];
   }
   $sql = "SELECT * FROM `profile` where `profile`.`aid`=$id";
   $result = $conn->prepare($sql);
   $result->execute();
   $res=$result->get_result();
   $result->close(); 
   $row = $res->fetch_assoc();
   ?>
   <div class="container-fluid" style="background-color: #000;">
   <?php include '../see/pro.php' ?>
   </div>
   <?php }
   else {?>
   <div class="container justify-content-center align-items-center my-5" style="display:flex; height:500px; background-color:black;" >
       <div class="btn btn-outline-light" style="color:aliceblue">
       <a href="../index.php">LOGIN </a>
        </div>
   </div>
   <?php }?> 

<?php include '../end.php';?>
