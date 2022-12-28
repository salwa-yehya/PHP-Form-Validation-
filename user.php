<?php
session_start();
require('config.php')


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" >

    <title>User</title>
</head>
<body>
    <div class="container">
    <table class="table">
  
  <?php
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $statement = register::delete();
    if($statement->execute([':id' => $id])){
       
    }

}
   echo "<h1>"."welcome " . $_SESSION['fname'] ."</h1>" . "<br>" ,
  "<h3>"."your email is ".$_SESSION['email']."</h3>"; 
  $statement = $con->prepare("SELECT * FROM register");
  ?>


<!-- $statement->execute();
$result = $statement->fetchall();  -->

<?php if( $_SESSION['role']== 1) :?>
<table>
<thead>

    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Create Date</th>
      <th scope="col">Last Login Date</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
</table>


<?php $i=1 ?>
<?php foreach($register as $value): ?>
<?php if($value['is_deleted']==1){continue;};?> 
    
       <tr>
        <td><?php echo $i++;?></td>
        <td><?php echo $value['fname']?></td>
        <td><?php echo $value['mobile']?></td>
        <td><?php echo $value['email']?></td>
        <td><?php echo $value['password']?></td>
        <td><?php echo $value['CreateDate']?></td>
        <td><?php echo $value['LastLoginDate']?></td>
         <td><a href="./users.php?id=<?php echo $value['id']; ?>"<i class='fa-sharp fa-solid fa-pencil'></i></a></td>
  echo "<td><a href="./edit.php?id=<?php echo $value['id'];?>"<i class='fa-sharp fa-solid fa-trash-can'></i></a></td>


</tr>
<?php  endforeach;?>
<?php  endif;?>


</body>
</html>
