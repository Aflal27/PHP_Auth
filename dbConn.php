<?php 
$server = "localhost";
$userName = "root";
$serverPassword = "";
$dbName = "AuthDB";



// db connection
$conn = new mysqli($server,$userName,$serverPassword,$dbName);

// check db connection
if ($conn->connect_error) {
    die("connection faild!".$conn->connect_error);
}

?>