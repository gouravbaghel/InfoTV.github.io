<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #LoginModal {
      background-color: rgba(0,0,0,0.7);
      color: #343a40;
    }
    .modal-body{
      background-color:#343a40;
    }
    .modal-content{
      background-color:#343a40; 
    }
    #LoginModalLabel{
      color:white;
    }
    #login{
      background-color: #6c757d;
    }
  </style>
</head>
<body>
  <?php include('_dbconnect.php') ?>
  <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel">Login with your account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="templates/handlelogin.php" method="post">
          <div class="form-group text-light bg-dark">
              <label for="username">User Name</label>
              <input type="text" class="form-control text-light bg-dark" id="username" name="username" placeholder="Enter your user name" autocomplete="off">
          </div>
          <div class="form-group text-light bg-dark">
              <label for="password">Password</label>
              <input type="password" class="form-control text-light bg-dark" id="logpassword" name="logpassword" placeholder="Enter your password">
          </div>
          <button type="submit" class="btn btn-dark" id="login">Login</button>
        </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
