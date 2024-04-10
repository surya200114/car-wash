
<?php 
    session_start();

    // if(isset($_SESSION['alogin'])){
    //     header('location:index.php');
    // }

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'cwmsdb';

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo '<script>alert("success")</script>';        
    }
    catch(PDOException $e){
        echo $e->getMessage();
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['mail'];
        $pass = md5($_POST['pass']);
        $sql = 'SELECT name,password FROM authuser WHERE name=:name AND password=:pass';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name' , $name);
        $stmt->bindParam(':pass' , $pass);

        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user) {
            // Passwords match, set session and redirect
            $_SESSION['user'] = $name;
            echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
            exit(); // Stop further execution after redirect
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
     
    }

?>