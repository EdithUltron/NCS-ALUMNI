<?php include '../Database/DB_functions.php';?>
<?php 
  $msg="";
  $css_class="";
  $id=$_SESSION['id'];
  $sql = "SELECT * FROM `profile` WHERE aid=$id";
  $result = $conn->prepare($sql);
  $result->execute();
  $res=$result->get_result();
  $result->close();
  $row = $res->fetch_assoc();

if(isset($_POST["update"])&&$_SERVER["REQUEST_METHOD"]=="POST"){
  if(isset($_POST['name'])||isset($_POST['email'])||isset($_POST['year'])||isset($_POST['type'])||isset($_POST['about'])||isset($_POST['experience'])||isset($_POST['profession'])||isset($_POST['date'])||isset($_POST['phone'])||isset($_POST['fb'])||isset($_POST['insta'])||isset($_POST['linkedin'])||isset($_POST['website'])||isset($_POST['image'])){
  
    $name=isset($_POST['name'])?$_POST['name']:$row['name'];
    $year=isset($_POST['year'])?$_POST['year']:$row['year'];
    $type=isset($_POST['type'])?$_POST['type']:$row['type'];
    $email=isset($_POST['email'])?$_POST['email']:$row['email'];
    $about=isset($_POST['about'])?$_POST['about']:$row['about'];
    $experience=isset($_POST['experience'])?$_POST['experience']:$row['experience'];
    $work=isset($_POST['work'])?$_POST['work']:$row['work'];
    $place=isset($_POST['place'])?$_POST['place']:$row['place'];
    $d=isset($_POST['dob'])?strtotime($_POST['dob']):strtotime($row['dob']);
    $dob=date('Y-m-d',$d);
    $phone=isset($_POST['phone'])?$_POST['phone']:$row['phone'];
    $fb=isset($_POST['fb'])?$_POST['fb']:$row['fb'];
    $insta=isset($_POST['insta'])?$_POST['insta']:$row['insta'];
    $linkedin=isset($_POST['linkedin'])?$_POST['linkedin']:$row['linkedin'];
    $twitter=isset($_POST['twitter'])?$_POST['twitter']:$row['twitter'];
    $website=isset($_POST['website'])?$_POST['website']:$row['website'];
    $image=(isset($_FILES['image']['tmp_name'])&&($_FILES['image']['tmp_name']!=NULL))?'profilepic/'.time().'_'.$_FILES['image']['name']:$row['img'];
    if (move_uploaded_file($_FILES['image']['tmp_name'], $image)){
      $msg = "Image uploaded successfully";
      $css_class="alert-success";
    }else{
      $msg = "Failed to upload image";
      $css_class="alert-danger";
    }
    $id=$_SESSION['id'];
    if($id){
    $sql=$conn->prepare("UPDATE `profile` SET `name`=?,`about`=?,`phone`=?,`type`=?,`insta`=?,`fb`=?,`linkedin`=?,`twitter`=?,`website`=?,`experience`=?,`year`=?,`work`=?,`img`=?,`place`=?,`dob`=? WHERE `profile`.`aid` = $id");
    $sql->bind_param('sssissssssissss',$name,$about,$phone,$type,$insta,$fb,$linkedin,$twitter,$website,$experience,$year,$work,$image,$place,$dob);
    $sql->execute();
    $sql->close();
    
      // $result= mysqli_query($conn," SELECT * FROM `profile` WHERE `profile`.`aid`=$id ")or die("Query failed.". mysqli_errno($conn));
      // if($result){
      // while ($r = $result->fetch_assoc()){
      //   // echo $image;
      //   // echo print_r($_POST);
      //   // echo print_r($_FILES);
      //   // echo print_r($_SESSION);
      //   // echo $_FILES['image']['tmp_name'];
      // }
      // die($row['img']);
      $sql=$conn->prepare("UPDATE `users` SET `name`=?,`type`=?,`year`=? WHERE `users`.`id`=$id");
      $sql->bind_param('sii',$name,$type,$year);
      $sql->execute();
      $sql->close();
      $_SESSION['name']=$name;
      echo '<script>window.location="profile.php"</script>'; 

            exit;
    }
    else{
      echo 'undone';
      die("Query failed.". mysqli_errno($conn));
    }
  }
}

?>
  <?php include '../head.php';?>
  <title>Profile-Edit</title>
  <link rel="stylesheet" href="profile-edit.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
    rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="../home.css" type="text/css"> -->

<script>
  $(document).ready(function () {

    if(<?php echo $row['type']; ?>){
      $("div #g1").attr("checked", true);
      $("div #g2").attr("checked", false);

    }else{
      $("div #g2").attr("checked", true);
      $("div #g1").attr("checked", false);

    }

    function myFunction() {
      document.getElementById("myfunction").submit();
    }

    $('#datepicker').datepicker({
      format: " yyyy",
      viewMode: "years",
      minViewMode: "years"
    });

    
   

  })
</script>
</head>

<body class="hb">
  <?php include '../Home/navbar.php' ;?>

  <div class="jumbotron  text-center ">
    <h2>EDIT PROFILE</h2>
    <?php if(!empty($msg)):?>
    <div class="alert <?php echo $css_class ;?>">
      <?php echo $msg ;?>
    </div>
    <?php endif; ?>
    <div class="row pp justify-content-center mt-5 p-3 avatar">
      <div class="bgp">
        <form id='myfunction' method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"
          enctype="multipart/form-data">
          <i class="fa-solid fa-pen-to-square" style=" float:right; position: absolute; bottom:0px; right: 10px;">
            <label for='filetoupload'>EDIT<small>Click on submit</small></label>
            <input onchange="myFunction()" type="file" name='image' id="filetoupload">
          </i>

          <img src="<?php echo $row['img']; ?>" alt="profile pic">
      </div>
    </div>
  </div>
  <div class="jumbotron  bg-dark">
    <div class="row justify-content-center gx-5">
      <div class="col col-xl-6 col-12 pt-5  avatar">
        <div class="form-group mb-4 ">
          <label class="text-col">Name</label>
          <input type="text" name="name" class="form-control boxes" value="<?php echo $row['name']; ?>"
            aria-describedby="emailHelp" placeholder="Name">
          <small id="emailHelp" class="form-text text-muted">Give the name that others can identify</small>
        </div>
        <br>
        <div class="form-group mb-4 ">
          <label class="text-col" for="exampleInputEmail1">Email</label>
          <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control boxes"
            aria-describedby="emailHelp" disabled>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <br>
        <div class="form-group mb-4 ">
          <label class="text-col">Year</label>
          <input type="text" name="year" value="<?php echo $row['year']; ?>" class="form-control boxes"
            placeholder="Year" id='datepicker' required>
          <small id="emailHelp" class="form-text text-muted">Year you left your memories</small>
        </div>
        <style type='text/css'>
          .ui-datepicker-calendar {
            display: none;
          }
        </style>
        <br>
        <div class="form-group mb-4 ">
          <label class="text-col">About</label>
          <input type="text" name="about" value="<?php echo $row['about']; ?>" class="form-control boxes"
            aria-describedby="emailHelp" placeholder="About Me">
          <small id="emailHelp" class="form-text text-muted">Please tell us about you</small>
        </div>
        <br>
        <fieldset class="form-group mb-4">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0 text-col">Type</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="g1" value="1">
                <label class="form-check-label text-col" for="g1">
                  Teacher
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id="g2" value="0">
                <label class="form-check-label text-col" for="g2">
                  Student
                </label>
              </div>
            </div>
            <small id="emailHelp" class="form-text text-muted ml-4">Teacher or Student</small>
          </div>
        </fieldset>
        <br>
        <div class="form-group mb-4 ">
          <label class="text-col">Experience</label>
          <textarea id="exp" name="experience" rows="4" cols="80" placeholder="Please mention your memories">
          <?php echo trim($row['experience']); ?></textarea>
        </div>
        <br>
        <div class="form-group mb-4">
          <label class="text-col">Profession</label>
          <input type="text" value="<?php echo $row['work']; ?>" name="work" class="form-control boxes"
            aria-describedby="emailHelp" placeholder="Designation">
          <small id="emailHelp" class="form-text text-muted">what are you currently now for eg: College Student or
            Employee - for students</small>
        </div>
        <br>

      </div>
      <div class="col col-xl-6 col-12 pt-5 avatar">

        <div class="form-group mb-4 ">
          <label class="text-col">Place</label>
          <input type="text" name="place" value="<?php echo $row['place']; ?>" class="form-control boxes"
            aria-describedby="emailHelp" placeholder="Place">
          <small id="emailHelp" class="form-text text-muted">Place of living or work</small>
        </div>
        <br>

        <div class="form-group mb-4">
          <label class="text-col">Date of Birth</label>
          <div class='input-group date' id='datetimepicker5'>
            <input type='date' name='dob' value="<?php echo $row['dob']; ?>" class="form-control" />
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
        </div>

        <br>
        <div class="form-group mb-4 ">
          <label class="text-col">Phone</label>
          <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control boxes"
            aria-describedby="emailHelp" placeholder="Contact">
          <small id="emailHelp" class="form-text text-muted">Contact Number - Please give the correct info</small>
        </div>
        <br>
        <div class="form-group mb-4 ">
          <label class="text-col">Facebook_URL</label>
          <input type="facebook" name="fb" value="<?php echo $row['fb']; ?>" class="form-control boxes"
            aria-describedby="emailHelp" placeholder="Fb_ID">
          <small id="emailHelp" class="form-text text-muted">Facebook_URL &nbsp; eg:
            https://www.facebook.com/profile_name </small>
        </div>
        <br>
        <div class="form-group mb-4 ">
          <label class="text-col">Instagram_URL</label>
          <input type="text" name="insta" value="<?php echo $row['insta']; ?>" class="form-control boxes"
            aria-describedby="emailHelp" placeholder="Insta_ID">
          <small id="emailHelp" class="form-text text-muted"> instagram_URL &nbsp; eg:
            https://www.instagram.com/profile_name</small>
        </div>
        <br>
        <div class="form-group mb-4 ">
          <label class="text-col">Linked_In</label>
          <input type="text" name="linkedin" value="<?php echo $row['linkedin']; ?>" class="form-control boxes"
            aria-describedby="emailHelp" placeholder="Linked_ID">
          <small id="emailHelp" class="form-text text-muted">LinkedIn &nbsp; eg:
            https://www.linkedin.com/in/profile_name</small>
        </div>
        <br>
        <div class="form-group mb-4 ">
          <label class="text-col">Twitter</label>
          <input type="text" name="twitter" value="<?php echo $row['twitter']; ?>" class="form-control boxes"
            aria-describedby="emailHelp" placeholder="Twitter_URL">
          <small id="emailHelp" class="form-text text-muted">Twitter &nbsp; eg:
            https://www.twitter.com/in/profile_name 😁</small>
        </div>
        <br>
        <div class="form-group mb-4 ">
          <label class="text-col">Website_URL</label>
          <input type="text" name="website" value="<?php echo $row['website']; ?>" class="form-control boxes"
            aria-describedby="emailHelp" placeholder="Other_URL">
          <small id="emailHelp" class="form-text text-muted">portfolio Github or others 😁</small>
        </div>
        <br>

        <div class="mb-4 float-right">
          <button type="submit" id="sub" name="update" class="btn btn-outline-light">UPDATE</button>
        </div>

      </div>


    </div>
    </form>
  </div>


  <?php include '../end.php'?>