<style>
  .carousel-inner{
    height: fit-content;
    max-height:  100vh!important;
  }
  .carousel-item.active{
    height: 35% !important;
    padding: 5% !important;
    border:2px solid cyan !important;
    border-radius: 20px;
  }


</style>

<div class="container-fluid mb-3 py-5" style="background-color:#000;">
    <div id="carouselExampleFade" class="carousel slide carousel-fade mx-auto" data-ride="carousel"
      data-interval="3000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner mx-auto">
        <div class="carousel-item active">
          <img class="d-block w-100 " src="img/default.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/pic1.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/pic2.JPG"alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 " src="img/pic3.jpg"alt="Fourth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <!-- <div class="container mb-5" style="border: 2px solid cyan;">
  <video width="100%" height="auto" autoplay controls>
      <source src="https://drive.google.com/file/d/1jj3xftM5eQV7cY_W94X0-yybXXwwrFFR/view" type="video/mp4" />
  </video>
  </div> -->