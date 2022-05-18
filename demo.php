<?php 
include 'head.php' ;
?>

<style>
.row{
  display: flex;
  width: 80%;
  margin: 10px auto;
  min-width: 80%;
  overflow-y: auto;
  max-height:700px;
}

.col{
  width:25%;
}

</style>
<body>

<div style="text-align:center">
  <h2>Tabbed Image Gallery</h2>
  <p>Click on the images below:</p>
</div>

<!-- The four columns -->
<div class="row my-5">
<div class="col col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3" data-toggle="modal" data-target="#exampleModalCenter">
    <img src="img/default.png" alt="Nature"  style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="col col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3"  data-toggle="modal" data-target="#exampleModalCenter">
    <img src="img/bg3.jpg" alt="Snow"  style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="col col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3"  data-toggle="modal" data-target="#exampleModalCenter">
    <img src="img/bg-p.jpg" alt="Mountains"  style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="col col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3"  data-toggle="modal" data-target="#exampleModalCenter">
    <img src="img/bg.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
 
  
</div>


<!-- Button trigger modal -->
<script>
  function myFunction(img){
    var pop=document.getElementById("expandedImg");
    pop.src=img.src;
  }
</script>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img id="expandedImg" style="width:100%; max-height:500px" src="../img/default.png">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<?php 
include 'end.php' ;
?>