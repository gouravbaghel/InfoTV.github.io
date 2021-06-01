<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #SignUpModal {
      background-color: rgba(0,0,0,0.7);
      color: #343a40;
    }
    .modal-body{
      background-color:#343a40;
    }
    .modal-content{
      background-color:#343a40; 
    }
    #SignUpModalLabel{
      color:white;
    }
    #signup{
      background-color: #6c757d;
    }
  </style>
</head>

<body>
  <div class="modal fade" id="SignUpModal" tabindex="-1" role="dialog" aria-labelledby="SignUpModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="SignUpModalLabel">SignUp Here</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="partials/handlesignup.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleFormControlInput1" class="text-light" >User Name</label>
              <input type="text" class="form-control text-light bg-dark" id="username" autocomplete="off" maxlength="20" name="username"
                placeholder="Enter your first name" required="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1" class="text-light">First Name</label>
              <input type="text" class="form-control text-light bg-dark" id="first" name="first" autocomplete="off" maxlength="20"
                placeholder="Enter your first name" required="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1" class="text-light" >Last Name</label>
              <input type="text" class="form-control text-light bg-dark" id="last" name="last" autocomplete="off" maxlength="20"
                placeholder="Enter your last name" required="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1" class="text-light">Password</label>
              <input type="password" class="form-control text-light bg-dark" id="password" maxlength="20" name="password"
                placeholder="Enter your password" required="">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1" class="text-light">Image</label>
              <input type="file" class="form-control text-light bg-dark" id="photo" name="photo" required="">
            </div>
            <button type="submit" class="btn btn-dark" id="signup">SignUp</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>