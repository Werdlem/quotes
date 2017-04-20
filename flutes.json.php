<?php
require_once('settings.php');

try{
  $conn = new PDO("mysql:host=$servername;dbname=damasco_carton", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$stmt = $conn->query("select * from flute");
$stmt->execute();
$result=$stmt->fetchALL(PDO::FETCH_ASSOC);
echo json_encode($result);

$stmt = $conn->query("select * from style");
$stmt->execute();
$style=$stmt->fetchALL(PDO::FETCH_ASSOC);
echo json_encode($style);


$conn = null;

header('Content-type: application/json');
//echo json_encode($result);



