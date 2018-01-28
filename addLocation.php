<?php
require_once 'login.php';
include 'template/header_admin.php';
require_once 'connection.php';
session_start();

// Get all the data
$name = $_POST['name'];
$type = $_POST['type'];
$rating = $_POST['rating'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$query = "INSERT INTO locations (name, type, rating, latitude, longitude)
            VALUES (:name, :type, :rating, :latitude, :longitude)";
$stmt = $dbh->prepare($query);

$param = array (
    ":name" => $name,
    ":type" => $type,
    ":rating" => $rating,
    ":latitude" => $latitude,
    ":longitude" => $longitude
);

$var = $stmt->execute($param);

$_SESSION['status'] = "Location added";
header("Location: admin.php");

?>
