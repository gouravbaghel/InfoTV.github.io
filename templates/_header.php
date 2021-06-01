<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Info TV</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../blog">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../blog/about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../blog/ayurveda.php">Ayurveda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../blog/contact.php">Contact</a>
      </li>
      
    </ul>
   <?php echo '<form action="./search.php" class="form-inline my-2 my-lg-0" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
      <button class="btn btn-danger my-2 my-sm-0" type="submit" id="search">Search</button>';?>
      <!-- <button type="button" class="btn btn-outline-danger ml-2" data-toggle="modal" data-target="#loginmodal">
            login
      </button>
      <button type="button" class="btn btn-outline-danger ml-2" data-toggle="modal" data-target="#signupmodal">
            signup
      </button> -->
    </form>

  </div>
</nav>
<?php include('templates/loginmodal.php') ?>
<?php include('templates/signupmodal.php') ?>