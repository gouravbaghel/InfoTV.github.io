<?php include('templates/_dbconnect.php') ?>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `content` where serial_id=$id";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)){
        $title = $row['title'];
        $desc = $row['description'];
        // echo '<img src="images/'.$title.'.jpg" id="img">';
    }
?>
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
    .img{
        width:100%;
        height:60vh;
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("<?php echo 'images/'.$title.'.jpg' ?>");
        background-size:cover;
    }
    .img #heading{
      position:relative;
      top:40%;
      font-size:1.5rem;
    }
    p::first-letter{
      Color:red;
      font-size:2rem;
      font-weight:normal;
      text-transform:capitalize;
    }
</style> 
 </head>
  <body>
<?php include('templates/_header.php') ?>


<div class="img">
    <h5 class="text-white text-center" id="heading">Let's learn<span class="text-danger ml-1 mr-1"> <?php echo $title ?></span></h5>
</div>
<div class="flex">
    <div class="firsthalf">
        <p class="text-center container mt-4 pt-4 font-weight-bold"><?php echo $desc ?></p>
    </div>
    <div class="secondhalf">
    
    </div>
</div>
<?php include('templates/_footer.php') ?>

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