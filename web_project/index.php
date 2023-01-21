<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Photo Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>
    <!-- navbar code  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#nature">Nature</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#architecture">Architecture</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#travel">Travel</a>
              </div>
            </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>

    </ul>

  </div>
</nav>

<!-- carousel code -->
<div class="bd-example">


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <div class="carousel-indicators">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

    </ol>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/arct_4.jpg" class="d-block w-100" alt="Architecture">
      <div class="carousel-caption d-none d-md-block">
         <h5>Architecture</h5>
        <!-- <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/nature_4.jpg" class="d-block w-100" alt="Nature">
      <div class="carousel-caption d-none d-md-block">
         <h5>Nature</h5>
      <!--  <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/travel_1.jpg" class="d-block w-100" alt="Travel">
      <div class="carousel-caption d-none d-md-block">
         <h5>Travel</h5>
        <!-- <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>
  </div>
  <a class="carousel-control-prev"  href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" role="button" href="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<a id="nature">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Nature</h2>
  </div>

  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/nature_1.jpg" class="img-fluid pb-3">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/nature_2.jpg" class="img-fluid pb-3">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/nature_3.jpg" class="img-fluid pb-3">
          </div>
      </div>
  </div>
</section>
</a>

<a id="architecture">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Architecture</h2>
  </div>

  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/arct_5.jpg" class="img-fluid pb-3">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/arct_2.jpg" class="img-fluid pb-3">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/arct_3.jpg" class="img-fluid pb-3">
          </div>
      </div>
  </div>
</section>
</a>

<a id="travel">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Travel</h2>
  </div>

  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/travel_1.jpg" class="img-fluid pb-3">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/travel_2.jpg" class="img-fluid pb-3">
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/travel_3.jpg" class="img-fluid pb-3">
          </div>
      </div>
  </div>
</section>
</a>

<!-- contact code -->
<a id="contact">
<section class="my-4">
        <div class="py-4">
          <h2 class="text-center">Contact Us</h2>
        </div>

        <div class="w-50 m-auto">
            <form class="form" action="about.php" method="post">
                  <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Number:</label>
                    <input type="text" name="number" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
</section>
</a>

<a id="about">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">About</h2>
  </div>

      <div class="container-fluid">
          <h3 class="text-center">Mac</h3> <br>
          <p class="text-center"><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></p>

      </div>
</section>
</a>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
