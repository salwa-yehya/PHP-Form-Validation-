<?php
require('config.php')
session_start();

if(isset($_POST['submit'])){
  $Email=$_POST['email'];
  $Password=$_POST['password'];


  $sql="SELECT* INTO register WHERE  Email =:email  and Password =:password ";
   $statement =  $con->prepare($sql); //سرعه بالقراءه و سكيور , بدون تنفيذ
 //binding : bind Varible with query
   $statement->bindValue('email' , $Email);
   $statement->bindValue('password' ,$Password);
   $statement-> execute();    //بتنفذ كود 
   
   $Salwa =  $statement-> fetch(PDO::FETCH_ASSOS);

  if(!empty($_POST['email']) && !empty ($_POST['password'])){

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
    <input type="email" class="form-control" name="email">
    <div >abc@gmail.com</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password" >
  </div>
  <button type="button" class="btn btn-primary col-3 mx-auto icon">Login</button>
  <input  type="Submit" name="Submit" value="Login" >
  <br>
  <p class="wel">Don't have an account ?<a href="SignUp.php">Sign Up</a> </p>
</form>
</body>
</html>