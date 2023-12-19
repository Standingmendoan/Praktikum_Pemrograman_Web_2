<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Tautan ke File CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Tautan ke Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />

    <!-- Tautan ke jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Tautan ke Bootstrap JavaScript -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- Tautan ke File JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SmartDev</a>
    </div>
    
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#me-cont" class="page-scroll">Me</a></li>
        <li><a href="#works-cont" class="page-scroll">Works</a></li>
        <li><a href="#contact-cont" class="page-scroll">Say Hello</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

<div class="container-fluid" id="header-cont">
  <h1 style="text-align: center">We design cool <span class="typed"></span></h1>
  <a href="#me-cont" class="btn btn-default center-block page-scroll" style="align: center" id="know-button">KNOW MORE</a>
</div>

<div class="container-fluid" id="me-cont">
  <div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h2>About Us</h2>
      <h3>We are experienced team that understand all side of software developing process.</h3>
      <h3>Our headquarter are located in Indonesia, home of creative people.</h3>
    </div>
    <div class="col-sm-6" id="team">
      <div class="row">
        <div class="col-sm-6">
          <img class="img-responsive" src="http://assets.materialup.com/uploads/973ba1bb-b503-4bd5-8152-9cede5752b20/thumbnail">
        </div>
        <div class="col-sm-6">
          <img class="img-responsive" src="http://assets.materialup.com/uploads/01c3f5cc-8b26-4e1f-84d3-c44ae53c5112/thumbnail">
        </div>
        <div class="col-sm-6">
          <img class="img-responsive" src="http://assets.materialup.com/uploads/7b4b2755-b100-4b1b-bf61-d99351078b68/thumbnail">
        </div> 
        <div class="col-sm-6">
          <img class="img-responsive" src="http://assets.materialup.com/uploads/2dca613e-d312-41d4-a414-22c2a68b7bc3/thumbnail">
        </div> 
      </div>
    </div>
  </div>
  </div>
</div>

<div class="container-fluid" id="works-cont">
  <h2 style="text-align: center" id="works-title">Our Works</h2>
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-4">
         <div class="box">
           <img class="img-responsive" src="http://placehold.it/500x500" alt="porto1"> 
           <h3>Project 1</h3>
           <h5>Selling Point</h5>
        </div>
      </div>
      <div class="col-sm-4">
         <div class="box">
           <img class="img-responsive" src="http://placehold.it/500x500" alt="porto2"> 
           <h3>Project 1</h3>
           <h5>Selling Point</h5>
        </div>
      </div>
      <div class="col-sm-4">
         <div class="box">
           <img class="img-responsive" src="http://placehold.it/500x500" alt="porto3"> 
           <h3>Project 1</h3>
           <h5>Selling Point</h5>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-4">
        <div class="box">
           <img class="img-responsive" src="http://placehold.it/500x500" alt="porto4"> 
          <h3>Project 1</h3>
           <h5>Selling Point</h5>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="box">
           <img class="img-responsive" src="http://placehold.it/500x500" alt="porto5"> 
          <h3>Project 1</h3>
           <h5>Selling Point</h5>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="box">
           <img class="img-responsive" src="http://placehold.it/500x500" alt="porto6"> 
          <h3>Project 1</h3>
           <h5>Selling Point</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" id="contact-cont">
  <div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h3>Share your problem.</h3>
      <h3>We love to help you.</h3>
      <div class="row" id="social">
        <div class="col-sm-3">
          <a href="facebook.com" class="btn btn-default btn-block"><i class="fa fa-facebook fa-2x"></i></a>
        </div>
        <div class="col-sm-3">
          <a href="twitter.com" class="btn btn-default btn-block"><i class="fa fa-twitter fa-2x"></i></a>
        </div>
        <div class="col-sm-3">
          <a href="https://github.com/imadmk" class="btn btn-default btn-block"><i class="fa fa-github fa-2x"></i></a>
        </div>
        <div class="col-sm-3">
          <a href="https://www.freecodecamp.com/imadmk" class="btn btn-default btn-block"><h3>(<i class="fa fa-fire"></i>)</h3></a>
        </div>
      </div>
      <div class="row text-center" id ="phoneemail">
        <div class="col-sm-6">
          <h4>+6281366291937</h4>
        </div>
        <div class="col-sm-6">
          <h4>info@smartdev.com</h4>
        </div>
      </div>
    </div>
    <div class="col-sm-6" id="contact-form">
      <form role="form">
        <div class="form-group">
          <label class="sr-only" for="name">Your Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="email">Your Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="phone">Your Phone Number:</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter your phone number (optional)">
        </div>
        <div class="form-group">
          <label class="sr-only" for="message">Your Message:</label>
          <textarea class="form-control" rows="5" id="message" placeholder="Tell about your problem and we will contact you in 24h." required></textarea>
        </div>
        <button type="submit" class="btn btn-success pull-right">Send Message</button>
      </form>
    </div>
  </div>
  </div>
</div>
</body>
</html>
