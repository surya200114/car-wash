<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','cwmsdb');

// Establish database connection.
try {
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

$response = array();

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $user = $_GET['name'];

    $sql = 'SELECT name FROM authuser where name = :name';
    $query = $conn->prepare($sql);
    $query->bindParam(':name', $user, PDO::PARAM_STR);

    $query->execute();

    // Fetch result
    $result = $query->fetch(PDO::FETCH_ASSOC);

    // Check if username exists
    if ($result) {
        $response["exists"] = true;
    } else {
        $response["exists"] = false;
    }
}

// Close statement
$query = null;

// Close connection
$conn = null;

// Set header to indicate JSON content type
header('Content-Type: application/json');

// Return JSON response
echo json_encode($response);
?>
