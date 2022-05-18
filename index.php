<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
  <script src="index.js"></script>
</head>

<body>
  <div class="jumbotron abc mb-0">
    <div class="jumbotron ml-5 mr-5 mt-2 mb-0 bg-transparent">
      <div class="row justify-content-center">
        <div class="col lg-6 text-center mt-4 pt-5 hea avatar">
          <h3 class="multicolortext"> Alumni Page</h3>
          <h2 id="mua">Meet Your Alumni</h2>
        </div>
        <div class="col lg-6 text-center ">
          <img src="https://cdn-icons-png.flaticon.com/128/3408/3408455.png" />
          <h2>Login</h2>
        </div>
      </div>
    </div>
    <div class="jumbotron ml-5 mr-5 mt-0 bg-transparent">
      <div class="row justify-content-center">

        <div class="col-lg-6 col-md-12 pt-4 avatar">
          <form action="Database/login.php" method="POST">
            <div class="form-group mb-4 ">
              <label class="text-col" for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control boxes" aria-describedby="emailHelp"
                placeholder="Email" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mb-4 ">
              <label class="text-col" for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control boxes" placeholder="Password" required>
              
            </div>
            <div class="form-check  mb-4 ">
              <input type="checkbox" id="cb" name="checkbox" class="form-check-input" onchange="dis_sub()">
              <label class="form-check-label text-col" for="exampleCheck1">Are you a Centurian</label>
            </div>
            <br>
            <div class="mb-4">
              <button type="submit" id="sub" name="submit" class="btn btn-outline-light "
                disabled="disabled">Login</button>
              <button type="button" name="signup" class="eat btn btn-outline-light "><a
                  href="Database/signup.php">Signup</a></button>
            </div>

          </form>
        </div>
        <div class="text-center col-lg-6 col-md-12 ">
          <h2 id="na">NCS Alumini</h2>
          <img class="im"
            src="https://as2.ftcdn.net/v2/jpg/03/07/28/29/1000_F_307282988_RBgsRynVwJKoLYNzsbls8bysOaAx2VDK.jpg" />
        </div>
      </div>
    </div>
    <?php 
      session_start();
      if(isset($_SESSION['error']) && $_SESSION['error']==1){
    ?>
          <script>
            window.alert('Incorrect Credentials');
          </script>
    <?php
        $_SESSION['error']=0;
      }
      else if(isset($_SESSION['login'])&&$_SESSION['login']==1){
        header("Location: ".$_SERVER['DOCUMENT_ROOT'].'/home.php');
      }
    ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>