<?php
session_start();
require('config.php');

if(isset($_POST['Submit'])){


  $_SESSION['validate']=false;
  $Email=$_POST['email'];
  $Password=$_POST['password'];
  $error="";
  $sql="SELECT * FROM register WHERE  Email =:email  and Password =:password ";

   $statement =  $con->prepare($sql); //سرعه بالقراءه و سكيور , بدون تنفيذ
 //binding : bind Varible with query
   $statement->bindValue(':email' , $Email);
   $statement->bindValue(':password' ,$Password);
   $statement-> execute();    //بتنفذ كود 
   
   $S =  $statement->fetch(PDO::FETCH_ASSOC);    //بجيب الداتا  // fetch as array
  
  if(!empty($_POST['email']) && !empty($_POST['password']) && ($_SERVER['REQUEST_METHOD'] === 'POST')){
    
        if($S){
        $_SESSION['id']=$S["ID"];
        $_SESSION['username']=$S["FirstName"];
        $_SESSION['email']=$S["Email"];
        $_SESSION['password']=$S["Password"];
        $_SESSION['role']=$S["Role"];
        
        $_SESSION['validate']=true;
        // echo 'Login Successfully';
        header('location:user.php');

        //add date last log in use now() function
        // $statement="UPDATE  users SET  last_login =now() WHERE id=". $_SESSION['ID'];
        // $statement =  $con->prepare($sql);
        // $statement->execute();
          }

        else{
           $error= "Make sure that you are registere!";
          }
      
        }
  else{
    $error ="error";
  }
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
</head>
<body>
  <div class="wel">
    <h1>login</h1>
    <p>welcome back Login with your credentials</p>
</div>
<form action="" method="POST">
  <div class="mb-3 ">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="email">
    <div>abc@gmail.com</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password" >
    </div>
    <?php 
    if( !empty ($error) ){
        echo "<p>$error</p>";
    }
    ?>
  <input class="btn btn-primary col-3 mx-auto icon"  type="Submit" name="Submit" value="Login" >

  <br>
  <p class="wel">Don't have an account ?<a href="SignUp.php">Sign Up</a> </p>
</form>
</body>
</html>