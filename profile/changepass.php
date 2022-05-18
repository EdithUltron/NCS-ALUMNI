<?php 
include '../Database/DB_functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

</head>

<style>
    body{
        background-color: #000;
        color: #fff;
    }
    .avatar {
        border-radius: 20px;
        border: 2px solid #fff;
        background-color: #000 !important;
        box-sizing: border-box;
        box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
        transform: translatey(0px);
        animation: float 6s ease-in-out infinite;
        margin:auto auto;
    }

    a h2 {
        color: cyan;
        background-color: rgba(0, 0, 0, 0.6);
        /* opacity: 0.8; */
        font-size: 1.6rem;
        margin: 10px auto;
        width: fit-content;
        padding: 15px;
        border: 2px solid cyan;
        border-radius: 200px;
        font-family: monospace;
        font-weight: bold;
    }
</style>

<body>
<?php include '../Home/navbar.php'  ?>
<div class="container avatar">
        <div class="row justify-content-center pt-5 pb-5">
            <div class="col-md-offset-3 col-md-6">
                <a><h2>Change Password</h2></a>

                <form method="POST" action="chps.php" enctype="multipart/form-data">
                
                    <div class="form-group">
                        <label>Current password</label>
                        <input type="password" name="curpass"  class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>New password</label>
                        <input type="password" name="newpass"  class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" name="confpass"  class="form-control" />
                    </div>

                    <input type="submit" name="submit" class="btn btn-success" />
                </form>
            </div>
        </div>
    </div>
   

          

    <script src="../assets/jquery-1.11.3.min.js"></script>
    <script src="../assets/grid.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/c31a64773a.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
</body>
</html>