<?php
session_start(); 
if(isset($_SESSION['login'])&&$_SESSION['login']==1){?> 
  <script>
    if(!isset($_SESSION['login'])){
    $_SESSION['flag']=1;
    }
    if($_SESSION['flag']){
  const t=setTimeout(function(){
    $_SESSION['flag']=0;
  alert('Successfully loggedin \n Now set up your profile in profile section');
  // window.location.href='profile/profile-edit.php';
  },2000);
  
}
  
</script>
<?php
}
?> 

<?php include 'head.php' ?>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body class="hb">
  
<?php include 'Home/navbar.php'?>

<?php include 'Home/carousel.php'?>

<?php include 'Home/list.php'?>

 <?php include 'end.php'?>
<script type="text/javascript" src="home.js"></script>