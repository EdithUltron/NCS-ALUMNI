
<style>
a h2{
    color:cyan;
    background-color: rgba(0, 0, 0, 0.6);
    /* opacity: 0.8; */
    font-size: 1.6rem;
    margin: 10px auto;
    width:fit-content;
    padding: 15px;
    border: 2px solid cyan;
    border-radius: 200px;
    font-family: monospace;  
    font-weight: bold;
}

a span:hover{
    color: #e1ff00;
    
}

.dropdown-item span{
  color: #fff;
}

.dropdown-item:hover{
  color: #000;
  background-color: rgba(0, 0, 0, 0.6);
}

@media only screen and (min-width:990px) {
    .stt{
        display:none;
        font-size: 0.8rem;
    }
    .enn{
        display: block !important;
    }
}

@media only screen and (max-width:980px){
  span{
    font-size: 1rem !important;
  }
  #wtsapp{
  display: none !important;
  }
  .en{
    display: block !important;
  }
}

.nav-link{
    font-weight: bold;
}
span{
    font-family: monospace;
   font-size:1.3rem ;
    opacity: 0.9;
    color: white;
    -webkit-text-stroke-color: rgb(229, 19, 19);
    border: 1px;
    font-weight: bold;
}
    </style>

<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <a class="navbar-brand" href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/home.php';?>">
      <h2>NCS ALUMNI</h2>
    </a>&nbsp;
    <a class="navbar-brand stt" id="wtsapp" href="https://chat.whatsapp.com/LGdqqVW4gb24bjC29cmalr" target="_blank">
    <span style="-webkit-text-stroke-width: 1.0px;
    -webkit-text-stroke-color: rgb(37 ,211 ,102);color: #25D366;">
    <i class="fa-brands fa-whatsapp"></i>
              </span><span >Join WhatsApp</span>
    </a>
    <button class="navbar-toggler bg-light  " style="width: 2rem; height: 1.5rem; position:absolute; right:2em;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon " style="position:relative; bottom:6px; right: 15px; display:block; width:2em; "></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <div class="d-flex ">
        <ul class="navbar-nav">

          <li class="nav-item navbar-brand active mr-4">
            <a class="nav-link" href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/home.php';?>"><span style=" color: cyan;">
            <i class="fa-solid fa-house"></i>
              </span>
              <span>Home</span> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item navbar-brand active mr-4">
            <a class="nav-link" href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/gal.php';?>"><span style=" color: cyan;">
            <i class="fa-solid fa-images"></i>
              </span><span>Gallery</span></a>
          </li>
          <li class="nav-item navbar-brand active mr-4">
            <a class="nav-link" href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/nav/about.php';?>"><span style=" color: cyan;">
                <i class="fa-solid fa-circle-info"></i>
              </span><span>About</span></a>
          </li>
          <?php if(isset($_SESSION['id'])&&$_SESSION['email']=="admin@ncs.com"): ?>
          <li class="nav-item navbar-brand active mr-4"><a class="nav-link js-scroll-trigger" href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/panel.php';?>"
              id="admin"><span style=" color: cyan;">
              <i class="fa-solid fa-cubes"></i>
              </span><span>panel</span></a></li>
              <?php endif; ?> 
          <?php if(!isset($_SESSION['id'])): ?>
          <li class="nav-item navbar-brand active mr-4"><a class="nav-link js-scroll-trigger" href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/index.php';?>"
              id="login"><span style=" color: cyan;">
                <i class="fa-solid fa-user fa-l"></i>
              </span><span>Login</span></a></li>
          <?php else: ?>
          <li>
            <div class="nav-item navbar-brand  active dropdown" style="margin-right: 1.5rem;">
              <a class="nav-link dropdown-toggle " style="display:inline-block; " href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/profile/profile.php';?>" id="navbarDropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style=" color: cyan;">
                  <i class="fa-solid fa-user fa-l"></i>
                </span> <?php $nam=explode(" ",$_SESSION['name']); echo  "<span>" . $nam[0] ." </span>"  ?>
              </a>


              <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/profile/profile.php';?>"><span class="dp">Profile</span></a>
                <a class="dropdown-item" href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/profile/settings.php';?>"><span class="dp">Settings</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" onclick="val()"><span class="dp">Logout</span></a>
              </div>
            </div>
          </li>
          <li>
          <div><a class="nav-item navbar-brand active mr-4 en" style="display: none;" href="https://chat.whatsapp.com/LGdqqVW4gb24bjC29cmalr" target="_blank">
    <span style="-webkit-text-stroke-width: 1.0px;
    -webkit-text-stroke-color: rgb(37 ,211 ,102);color: #25D366;">
    <i class="fa-brands fa-whatsapp"></i>
              </span><span >Join WhatsApp</span>
      
    </a>
    </div>
          </li>
        </ul>
      </div>
      <?php endif; ?>
    </div>

    <div><a class="navbar-brand enn" style="display: none;" href="https://chat.whatsapp.com/LGdqqVW4gb24bjC29cmalr" target="_blank">
    <span style="-webkit-text-stroke-width: 1.0px;
    -webkit-text-stroke-color: rgb(37 ,211 ,102);color: #25D366;">
    <i class="fa-brands fa-whatsapp"></i>
              </span><span >Join WhatsApp</span>
      
    </a>
    </div>
  </nav>

  <script>
    function val(){
      var del = confirm("Are you sure you want to logout");
            if (del) {
                console.log(del);
                window.location.href = "<?php echo $_SERVER['DOCUMENT_ROOT'].'/Database/logout.php';?>";
            } else {
                console.log(del);
                alert("Action canceled");
            }
    }
  </script>