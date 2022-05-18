<link rel="stylesheet" type="text/css" href="../nav/about.css"/>
<br>
<div class="container avatar">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/index.php';?>">Home</a></li>
              <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li> -->
              <li class="breadcrumb-item active" aria-current="page"><?php echo $row['name']?></li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img style="border: 2px solid #000 ;" src="<?php echo "../profile/".$row['img']?>" alt="Admin" class="rounded-circle" width="250px" height="250px">
                    <div class="mt-3">
                      <h4><?php echo $row['name']?></h4>
                      <p class="text-secondary mb-1"><?php if($row['type']==1){echo strtoupper("teacher"); }else{ echo strtoupper("student"); } ?></p>
                      <p class="text-muted font-size-sm"><?php echo $row['place']?></p>
                      
                      <a href="<?php echo 'https://api.WhatsApp.com/send?phone='.$row['phone'] ?>"><h2 style="background-color: #000; color:white; font-size:1.2rem;">Message</h2></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              <!-- <button class="btn btn-primary mb-3" data-toggle="button" >Connect</button> -->
              <a><h2 style="background-color: #000;">Connect</h2></a>
                <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0 "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <a target="_blank" href="<?php if(str_contains($row['fb'],'https://')){echo $row['fb'];}else{echo 'https://'. $row['fb'];}?>"><span class="text-secondary h6" style="display: inline-block; overflow: hidden;text-overflow: ellipsis; width:100px; white-space: nowrap; "><?php echo $row['fb'] ?></span>
                    </a>
                  </li>
                  
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <a target="_blank" href="<?php if(str_contains($row['twitter'],'https://')){echo $row['twitter'];}else{echo 'https://'. $row['twitter'];}?>"><span class="text-secondary h6" style="display: inline-block; overflow: hidden; text-overflow: ellipsis; width:100px; white-space: nowrap;"><?php echo $row['twitter']?></span>
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0 ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                  <a target="_blank" href="<?php if(str_contains($row['insta'],'https://')){echo $row['insta'];}else{echo 'https://'. $row['insta'];}?>"><span class="text-secondary h6" style="display: inline-block; overflow: hidden;text-overflow: ellipsis; width:100px; white-space: nowrap;  "><?php echo $row['insta']?></span>
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6> <span style=" color: Dodgerblue;"><i class="fa-brands fa-linkedin fa-lg"></i></span><span>  </span>LinkedIn</h6>
                    <a target="_blank" href="<?php if(str_contains($row['linkedin'],'https://')){echo $row['linkedin'];}else{echo 'https://'. $row['linkedin'];}?>"><span class="text-secondary h6" style="display: inline-block; overflow: hidden;text-overflow: ellipsis; width:100px; white-space: nowrap; "><?php echo $row['linkedin'];?></span>
                    </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <a target="_blank" href="<?php if(str_contains($row['website'],'https://')){echo $row['website'];}else{echo 'https://'. $row['website'];}?>"><span class="text-secondary h6" style="display: inline-block; overflow: hidden;text-overflow: ellipsis; width:100px; white-space: nowrap; "><?php echo $row['website'];?></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row py-4">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['name']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row py-2">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row py-2">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['phone']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row py-2">
                    <div class="col-sm-3">
                      <h6 class="mb-0">birthday</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['dob']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row py-2">
                    <div class="col-sm-3">
                      <h6 class="mb-0">School Leaving Year</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['year']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row py-2">
                    <div class="col-sm-3">
                      <h6 class="mb-0">About</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['about']?>
                    </div>
                  </div>
                  <br><br>
                  <hr>
                  <div class="row py-2">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Experience</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['experience']?>
                    </div>
                  </div>
                  <br><br>
                  <hr>
                  <div class="row py-2">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Currently</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['work']?>
                    </div>
                  </div>
                  <hr>
                  <?php if($_SESSION['id'] == $id){?>
                  <div class="row py-2">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="profile-edit.php">Edit</a>
                    </div>
                  </div>
                  <?php }?>
                </div>
              </div>

              <!-- <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->



            </div>
          </div>

        </div>
    </div>
    <br>