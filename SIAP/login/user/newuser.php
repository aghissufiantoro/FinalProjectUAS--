<?php
session_start();
if($_SESSION['status'] != 'sudah_login'){
    header('location:../login.php');
    die;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/assets/vendors/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        html, body {
            background: rgb(255, 255, 255);
            background: linear-gradient(140deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 100%);
            background-repeat: no-repeat;
            height: 100%;
        }
    </style>
<title>No Authorization</title></head>
<body>
    <center>
        <h2 class="text-black">You has no authorization</h2>
        <h3 class="text-black">Please request authorization to admin</h3>
        <button class="btn btn-secondary btn-sm" onclick="location.href='../logout.php'">Logout</button>
        <a class="btn btn-dark btn-sm" href="../../qna.html"><i ></i> Help</a>
    </center>
</body>
</html>