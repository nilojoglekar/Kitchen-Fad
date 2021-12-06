<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donation Page</title>

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!--bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!--internal CSS-->
  <link rel="stylesheet" href="donationpay.css">

  <!--font awesome-->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>

<body>
  <section class="coloured-section" id="title">
    <div class="container-fluid">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Kitchen Fad</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav  ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="community.php">Community</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="recipes.php">Recipes</a>
            </li>
          </ul>
        </div>
      </nav>


      <!-- Title -->
      <div class="row">
        <div class="col-lg-6">
          <h1 class="big-heading">Donate to Fight World Hunger </h1>
          <br><br><br>
          <h2>Act Now! </h2>
          <div class="razorpay-embed-btn" data-url="https://rzp.io/l/JeeCC7HtR" data-text="Donate For Cause" data-color="#528FF0" data-size="large">
            <script>
              (function() {
                var d = document;
                var x = !d.getElementById('razorpay-embed-btn-js')
                if (x) {
                  var s = d.createElement('script');
                  s.defer = !0;
                  s.id = 'razorpay-embed-btn-js';
                  s.src = 'https://cdn.razorpay.com/static/embed_btn/bundle.js';
                  d.body.appendChild(s);
                } else {
                  var rzp = window['__rzp__'];
                  rzp && rzp.init && rzp.init()
                }
              })();
            </script>
          </div>
        </div>


        <div class="col-lg-6">
          <img class="title-image" src="images/child.png" alt="child-image">
         
        </div>
      </div>
    </div>
  </section>
  <!-- Features -->

  <section class="white-section" id="features">
    <div class="container-fluid">
      <div class="row">
        <div class="feature-box col-lg-4">
          <i class="icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title"> Education.</h3>
          <p>We work to ensure children are educated for life through collective efforts.</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class=" icon fas fa-bullseye fa-4x"></i>
          <h3 class="feature-title"> Nutrition</h3>
          <p>We work to address the causes of malnutrition with special focus on children below 5 years</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-heart fa-4x"></i>
          <h3 class="feature-title"> Livelihood.</h3>
          <p>Our livelihood interventions enable families to enhance income and provide better for their children.</p>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>Contact US</h6>
                <h5 style="font-size: 15px;">HELP LINE </h5>
                <h5 style="font-size: 14px;">50015</h5>
                <h5 style="font-size: 15px;">EMAIL </h5>
                <a href="#"><h5 style="font-size: 14px;">KitchenFAD@yahoo.com </P></a>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Categories</h6>
                <ul class="footer-links">
                    <li><a href="recipe.php">POPULAR</a></li>
                    <li><a href="recipe.php">DESSERTS</a></li>
                    <li><a href="recipe.php">Easy & Quick </a></li>
                    <li><a href="recipe.php">Healthy</a></li>
                </ul>
             </div>
             
             <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="recipe.php">Recipes</a></li>
                    <li><a href="community.php">Community</a></li>
                    <li><a href="register.php">Sign up</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-6 col-xs-12">
  <p class="copyright-text">All Rights Reserved by 
<a href="#">Kitchen Fad</a>.
  </p>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
  <ul class="social-icons">
    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
  </ul>
</div>
</div>
</div>
</footer>

</body>

</html>
