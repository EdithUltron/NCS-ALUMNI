<!-- <?php include 'Database/DB_functions.php';?> -->
<section class="alumini-list">
  <div class="container">
    <h5 style="color: aliceblue;
    font-family: monospace;
    font-size: 1.5em;font-weight: bold; ">Alumni list</h5>
    <div class="d-flex justify-content-end p-2 wb-5">
      <div id="filters" class="btn-group h-50 btn-group-toggle " data-toggle="buttons">
      <style>
  button{
    font-size: 1rem !important;
    border: 3px solid cyan !important;
  }
</style>
      <button class="btn btn-secondary active" data-filter="*">
          ALL
      </button>
      <button class="btn btn-secondary" data-filter=".teacher">
          TEACHERS </button>
      <button class="btn btn-secondary" data-filter=".student">
          STUDENTS
      </button>
      </div>
    </div>
  </div>
<?php 
  $msg="";
  $css_class="";
  $id=$_SESSION['id'];
  $sql = "SELECT * FROM `profile` ";
  $result = $conn->prepare($sql);
  $result->execute();
  $res=$result->get_result();
  $result->close(); 
?>

<style>
  img{
    max-width: 100%;
    max-height: 50%;
  }
</style>
  <div class="container">
    <div class=" row mx-auto my-4">
      <?php while($row = $res->fetch_assoc()){ ?>
        <form action="profile/profile.php" method="POST">
      <div class="col col-lg-3 col-md-4 col-xs-6  grid-item <?php if($row['type']==1){echo "teacher"; }else{ echo "student"; } ?>">
        <div class="card shadow mb-4 align-items-center">
          <img class="card-img-top mb-3" src="<?php echo 'profile/'.$row['img'] ?>" alt="Card image cap">
          <div class="card-block text-center align-items-center">
           <h4 class="mx-auto" style="color:black; font-size:1rem !important; max-width:90%;"><?php
            $nam=explode(" ",$row['name']);
            echo $nam[0];
            ?></h4>
            
            <h5 class="ss-s"><?php echo $row['year']; ?></h5>
            <button class="btn btn-outline-dark" type="submit" name="pid" value="<?php echo $row['aid'] ?>"  >CONNECT</button></form>
           
            <p class="card-text" style="font-size:0.5rem;">
              <small class="text-muted">
                #NCS- ALUMINI
              </small>
            </p>
            <br>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
  </div>

  
</section>

<!-- <div class="col col-lg-3 col-md-4 col-xs-6 grid-item teacher">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project1.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-4 col-xs-6 grid-item student">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project2.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-4 col-xs-6 grid-item teacher">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project1.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-4 col-xs-6 grid-item teacher">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project1.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-4 col-xs-6 grid-item student">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project2.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-4 col-xs-6 grid-item student">
          <div class="card p-4">
            <img class="card-img-top mb-3" src="img/project2.png" alt="Card image cap">
            <div class="card-block">
              <h4 style="color: black; font-size: 1.5rem;">Card title</h4>
              <h5 class="ss-s">2006-07</h5>
              <button class="btn btn-outline-dark btn-md"><a href="profile/profile.php">CONNECT</a></button>
              <p class="card-text mt-3">
                This is a longer card with supporting
                text below as a natural lead-in to
                additional content. This content
                is a little bit longer.
              </p>

              <p class="card-text">
                <small class="text-muted">
                  #NCS- ALUMINI
                </small>
              </p>
            </div>
          </div>
        </div> -->