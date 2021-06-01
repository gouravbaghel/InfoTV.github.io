<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
     
      .secondhalf{
        width:30%;
        height:35vh;
        background-size:cover;
        background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)) ,url("images/about-bg.jpg");
      }
      .division{
        position:relative;
        top:30%;
      }
      .firsthalf p, .about-tx{
        font-family: 'Padauk', sans-serif;
        font-size:1.3rem;
      }
      
      .firsthalf {
        width:50%;
      }
      @media screen and (max-width:767px){
        .secondhalf{
          width:60%;
          height:30vh
        }
        .firsthalf{
          width:70%;
        }
      }
      @media screen and (min-width:767px){
        .division{
          display:flex;
          
        }
        .main{
          align-items:center;
          justify-content:center;
        }
      }
      
    </style>
  </head>
  <body>
  <?php include('templates/_header.php') ?>
  <div class="main">
    <div class="container about-tx text-center mb-4 mt-4">
        <h1>About Us</h1>
    </div>
    <div class="container division">
      <div class="firsthalf">
        <p class="ml-4 mr-4 mt-4 p-4">Info Tv is a platform for basic knowledge about ayurveda, and to solve the errors of programming , and many other things related to technology and health.</p>
      </div>
      <div class="secondhalf mt-4">
      </div>
    </div>
  </div>
<!-- Footer -->

<footer class="page-footer font-small blue fixed-bottom">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-dark text-light">© 2020 Copyright:
    <a href="infotv.com"> InfoTV.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>