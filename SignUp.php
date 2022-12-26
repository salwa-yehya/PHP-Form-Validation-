
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Sign up</title>
    <style><?php include('style.css')?></style>
</head>
<body>
  <div class="wel">
    <h1>Sign Up</h1>
    <p>Create Account , its free</p>
    </div>
    <form action="" method="post">
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" id="email" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control" id="mobile" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label ">First Name</label>
    <input type="text" class="form-control" id="fname" >
  </div>
  <div class="mb-3">
    <label class="form-label">Middle Name</label>
    <input type="text" class="form-control" id="mname" >
  </div>
  <div class="mb-3">
    <label class="form-label">Last Name </label>
    <input type="text" class="form-control" id="lname" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Family Name</label>
    <input type="text" class="form-control" id="faname" >
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
    <label  class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="Cpassword">
  </div>
  <div class="mb-3">
    <label class="form-label">Date Of Birth</label>
    <input type="date" class="form-control" id="datePicker" > 
    
  </div>
  <button type="button" class="btn btn-danger col-3 mx-auto icon">Sign Up</button><br>
  <p class="wel">Already have an account? <a href="login.php">log in</a></p>
</form>
</body>
</html>