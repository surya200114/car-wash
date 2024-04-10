<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'cwmsdb';
$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$pass = md5($_POST['password']);



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO userinfo (name, email, phno, dob, gender, address, password) VALUES (:name, :email, :phno, :dob, :gender, :address, :password)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phno', $phno);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':password', $pass);

    $stmt->execute();
    $lastInsertedUserId = $conn->lastInsertId();

    $stmt = $conn->prepare("INSERT INTO authuser(id , name , password) VALUES( :id , :name , :password )");
    $stmt->bindParam(':id' ,$lastInsertedUserId );
    $stmt->bindParam(':name' ,$name);
    $stmt->bindParam(':password' , $pass);
    $stmt->execute();

    if(isset($name)){
        $_SESSION['name'] = $name;
        echo '<script>alert("' . $_SESSION['name'] . '"); </script>';

    }
    header("Location: signin.php");
    exit();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
