<?php
  $name=$_POST['mail'];
  $password=$_POST['pass'];

  $server='localhost';
  $user='root';
  $pass='';

  try{
    $conn=new PDO("mysql:host=$server;dbname=cwmsdb",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO user(name,password) VALUES(:name,:password)";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':password',$password);
    $stmt->execute();
    header("Location:index.php");

  }
  catch(PDOException $e)
  {
    echo "connection failed". $e->getMessage();
  }
?>
