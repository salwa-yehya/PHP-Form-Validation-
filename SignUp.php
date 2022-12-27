<?php
require('config.php');
 
  if (isset($_POST['Submit'])) {
    $Email=$_POST['email'];
    $Mobile=$_POST['mobile'];
    $FirstName=$_POST['fname'];
    $MiddleName=$_POST['mname'];
    $LastName=$_POST['lname'];
    $FamilyName=$_POST['faname'];
    $Password=$_POST['password'];
    $Confirm=$_POST['Cpassword'];
    $Datee=$_POST['dateP'];
  
// caluclate Age 
  $Now_Date =  Date_Create("now");
  $input_Date= Date_Create($_POST['dateP']);
  $Date = Date_diff($input_Date ,$Now_Date);
  $Age = $Date->y;


// to join all if conditions togather
  $one =0;
  $two =0;
  $three =0;
  $four =0;
  $five =0;
  $six =0;
  $seven =0;
  $eight =0;
  $nine = 0;


  $errorMobile ="";
  $errorName ="";
  $errorName1 ="";
  $errorName2 ="";
  $errorName3 ="";
  $errorPassword ="";
  $errorCPassword ="";
  $errorAge ="";
  $errorEmail ="";
  

//Email 
if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !empty ($_POST['email'])) {
  $Email=$_POST['email'];
  $one = 1;
 }

else {
 $errorEmail = "Uncorrect ";
}


// Mobile
if(preg_match("/^[0-9-+]{14}$/" ,$_POST['mobile']) && !empty($_POST['mobile'])) {
  $Mobile=$_POST['mobile'];
  $two =1 ;
 }
else {
 $errorMobile = "Uncorrect Mobile";
}


// First Name
 if(preg_match("/^[A-Z a-z]+$/" ,$_POST['fname']) && !empty($_POST['fname'])) {
  $FirstName=$_POST['fname'];
  $three = 1;
 }
else {
 $errorName = "not alphabit";
}


// Middle  Name
if(preg_match("/^[A-Z a-z]+$/" ,$_POST['mname']) && !empty($_POST['mname'])) {
  $MiddleName=$_POST['mname'];
  $four = 1;
 }
else {
 $errorName1 = "not alphabit";
}


// last  Name
if(preg_match("/^[A-Z a-z]+$/" ,$_POST['lname']) && !empty($_POST['lname'])) {
  $LastName=$_POST['lname'];
  $five= 1;
 }
else {
 $errorName2 = "not alphabit";
}



// Family  Name
if (preg_match("/^[A-Z a-z]+$/" ,$_POST['faname']) && !empty($_POST['faname'])) {
  $FamilyName= $_POST['faname'];
  $six= 1;
 }
else {
 $errorName3 = "not alphabit";
}



// password
//Minimum eight characters, at least one letter, one number and one special character:
if(preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/" ,$_POST['password']) && !empty($_POST['password'])) {
  $seven =1;
 }
else {
 $errorPassword= "Week Password";
}


// Comfirm password
if( $_POST['password'] == $_POST['Cpassword']) {
  $eight = 1;
 }
else {
 $errorCPassword= "Not Match";
}


// Date of Birth 
if($Age >= 16){
  $Datee=$_POST['dateP'];
  $nine =1 ;
}
else{
  $errorAge= "You are Under 16 years ";
}


// send data after submit
if ($one ==1 && $two ==1 && $three ==1 && $four ==1 && $five ==1 && $six ==1 && $seven==1 && $eight ==1 && $nine ==1 ){
   $sql="INSERT INTO register (ID,FirstName,	MiddleName,LastName,FamilyName,Email,Password,Mobile,DateOfBirth) 
   VALUES (NULL,:fname,:mname,:lname ,:faname ,:email ,:password , :mobile ,:dateP)";
   $statement =  $con->prepare($sql);
 //binding : bind Varible with query
   $statement->bindValue('fname' ,$FirstName);
   $statement->bindValue('mname' , $MiddleName);
   $statement->bindValue('lname' , $LastName);
   $statement->bindValue('faname' ,$FamilyName);
   $statement->bindValue('email' , $Email);
   $statement->bindValue('password' ,$Password);
   $statement->bindValue('mobile' , $Mobile);
   $statement->bindValue('dateP' , $Datee);
   

   $statement-> execute();   
   header("location:login.php");
   exit;
   echo "success";
  } 
  else {
    echo "Not success";
}


};

?>
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
    <form action="" method="POST">
  <div class="form_lebal">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" >
    <?php if(!empty ($errorEmail)){
       echo "<p id='ahmad'>$$errorEmail</p>"; 
    }
    ?>
  </div>
  <div class="form_lebal">
    <label  class="form-label">Mobile</label>
    <input type="number" class="form-control" name="mobile" >
    
    <?php if(!empty ($errorMobile)){
       echo " <p id='ahmad'>$$errorMobile</p>" ;
    }
    ?>
  </div>
  <div class="form_lebal">
    <label  class="form-label ">First Name</label>
    <input type="text" class="form-control" name="fname" >
    <?php if(!empty ($errorName)){
       echo " <p id='ahmad'>$$errorName</p>" ;
    }
    ?>
  </div>
  <div class="form_lebal">
    <label class="form-label">Middle Name</label>
    <input type="text" class="form-control" name="mname" >
    <?php if(!empty ($errorName1)){
       echo " <p id='ahmad'>$$errorName1</p>" ;
    }
    ?>
  </div>
  <div class="form_lebal">
    <label class="form-label">Last Name </label>
    <input type="text" class="form-control" name="lname" >
    <?php if(!empty ($errorName2)){
       echo " <p id='ahmad'>$$errorName2</p>" ;
    }
    ?>
  </div>
  <div class="form_lebal">
    <label  class="form-label">Family Name</label>
    <input type="text" class="form-control" name="faname" >
    <?php if(!empty ($errorName3)){
       echo " <p id='ahmad'>$$errorName3</p>" ;
    }
    ?>
  </div>
  <div class="form_lebal">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
    <?php if(!empty ($errorPassword)){
       echo " <p id='ahmad'>$errorPassword</p>" ;
    }
    ?>
  </div>
  <div class="form_lebal">
    <label  class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="Cpassword">
    <?php if(!empty ($errorCPassword)){
       echo " <p id='ahmad'>$errorCPassword</p>" ;
    }
    ?>
  </div>
  <div class="form_lebal">
    <label class="form-label">Date Of Birth</label>
    <input type="date" class="form-control" name="dateP" >
    <?php if(!empty ($errorAge)){
       echo " <p id='ahmad'>$errorAge</p>" ;
    }
    ?>
     <br>
    </div>
  <input class="btn btn-danger col-3 mx-auto icon"  type="Submit" name="Submit" value="SignUp" ><br>
  <!-- <button type="button" class="btn btn-danger col-3 mx-auto icon" >Sign Up</button><br> -->
  <p class="wel">Already have an account? <a href="login.php">log in</a></p>
</form>
</body>
</html>