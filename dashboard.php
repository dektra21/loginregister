<?php
session_start();
if (!isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

require 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$_SESSION[id]'");
$row = mysqli_fetch_assoc($result);

$name = $row['name'];



 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/uikit.min.css">
</head>
<body>
<h1><a href="logout.php">Log Out</a></h1>
<h1>Selamat Datang <?= $name;?></h1>

</body>
</html>