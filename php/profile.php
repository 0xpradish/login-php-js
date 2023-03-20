<?php

$mongoClient = new MongoDB\Client("mongodb://localhost:27017");

$database = $mongoClient->mydatabase;
$collection = $database->mycollection;

$username = $_POST['username'];
$Email = $_POST['Email'];
$DOB = $_POST['DOB'];
$Mobile = $_POST['Mobile'];
$Address = $_POST['Address'];

$insertOneResult = $collection->insertOne([
    'username' => $username,
    'Email' => $Email,
    'DOB'=>$DOB,
    'Mobile'=>$Mobile,
    'Address'=>$Address,
]);

if ($insertOneResult->getInsertedCount() === 1) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data.";
}

?>
