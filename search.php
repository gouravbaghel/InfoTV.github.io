<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php 
    include('templates/_header.php');
    include('templates/_dbconnect.php');
    $fetch = false;
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $name = $_GET['search'];
        if($fetch == false){
          $title = 'no results';
          $description = 'no result';
        }
      }
    ?>  
    <h1>search results for <i><?php echo $name ?></i></h1>
  <div class="container my-4">
 <div class="row my-4">

<?php
  $sql = "SELECT * FROM `content` where MATCH(title, description) against ('$name')";
  $query = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($query)){
    $serial = $row['serial_id'];
    $title = $row['title'];
    $desc = $row['description'];
    $fetch = true;
  }
    
    if($fetch){
      echo '
    <div class="col-md-4 my-2">
      <div class="card" style="width: 18rem;">
        <img src="images/'.$title.'.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-danger text-center">'.$title.'</h5>
          <p class="card-text text-center">'.substr($desc,0, 150).'...</p>
          <a href="blogpost.php?id='.$serial.'" class="btn btn-danger" id="read">Read</a>
        </div>
      </div>
    </div>';}
if($fetch == false){
  echo '<h1>No search Results found</h1>';
}

?>
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