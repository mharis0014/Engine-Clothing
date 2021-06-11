<?php
//connection to db
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "engine_db");

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Omnifood is a premium food delivery service with the mission to bring affordable and healthy meals to as many people as possible." />
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css" />
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/86952377b1.js" crossorigin="anonymous"></script>