<?php include '../head.php';
include '../Database/DB_functions.php' ?>
<title>Gallery</title>
<link rel="stylesheet" type="text/css" href="gal.css">
</head>


<body class="hb">
    <?php include '../Home/navbar.php'?>

    <div class="container" >
        <header class="clearfix mt-5 pb-3">
            <h1 style="width:fit-content; float:left; color:aliceblue;">Gallery</h1>
            <a href="add-image.php">
                <h2 style="width:fit-content; float:right; background-color:black;">ADD IMAGE</h2>
            </a>
        </header>
        <?php if(!isset($_SESSION['name'])){ ?>
        <div class="container justify-content-center align-items-center my-5" style=" display:flex; height:500px;
        background-color:black;">
            <div class="btn btn-outline-light" style="color:aliceblue">
                <a href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/index.php';?>">LOGIN</a>
            </div>
        </div> <?php }
        else {?>

        <div class="main avatar">
            <div class="row p-3">
                <?php
                    $sql = "SELECT * FROM gallery";
                    $result = $conn->prepare($sql);
                    $result->execute();
                    $res=$result->get_result();
                    while ($row = $res->fetch_assoc()) {
                    ?>

                <div class="col col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <img src="<?php echo $_SERVER['DOCUMENT_ROOT'].'/'.'uploads/'. $row['path']; ?>"
                        style="width: 100%;  height:200px; border:2px solid cyan;"
                        onclick="myFunction(this);" id="im" alt="<?php echo "<b>".$row['name']."</b>-:-:-<br>".$row['description'] ."<br> -- "."<em>".$row['uploadby']."</em>" ?>" />   
                </div>
                <?php } ?>
                
            </div>
            <?php }?>
    </div>

    <script>
  function myFunction(img){
    var pop=document.getElementById("expandedImg");
    var par=document.getElementById("par");
    par.innerHTML=img.alt;
    pop.src=img.src;
  }
</script>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img id="expandedImg" style="width:100%; max-height:500px" src="../img/default.png">
      <p id="par"></p>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

   
    <?php include '../end.php'?>