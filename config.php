<?php 
$dsn ='mysql:host=localhost;dbname=form'; //data sourse name
$user= 'root'; 
$pass ='';

try{
    $con = new PDO($dsn ,$user ,$pass);//start new connection 
    $con ->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);// set the PDO error mode to exception 
    // echo 'YOU ARE CONNECTED';
    echo '<br>';

}

catch (PDOException $s) {
    echo 'FAILED' . $s->getMessage();
}


?>
