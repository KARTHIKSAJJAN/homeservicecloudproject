<?php require_once "scripts/session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <style>
        nav a.nav-link {
            color: #fff !important;
        }
        body{
            background-image: url("include/bg.png");
            background-repeat:  no-repeat;
    	    background-attachment: fixed;
	        background-size:  cover;
        }
    </style>

    <title>Home Services</title>
    <link rel='icon' type="image/icon type" href='https://media-exp1.licdn.com/dms/image/C511BAQHBopfaAwjBqw/company-background_10000/0/1563452711438?e=2159024400&v=beta&t=8FI7ENDU7LCOGaJwqDdCP0wKtWHCM-1JI3gi3XQvJGw'>
</head>

<body>
    <nav class="nav bg-dark">
        <?php if (!isset($_SESSION['user'])): ?>
        <a class="nav-link active" href="index.php">Find Service Provider</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="register.php">Register Service Provider</a>

        <?php elseif ($_SESSION['user']->name == 'admin'): ?>
        <a class="nav-link" href="managehall.php">Manage Providers</a>
        <a class="nav-link" href="admin.php">Manage Booking</a>
        <a class="nav-link" href="logout.php">Log Out</a>

        <?php else: ?>
        <a class="nav-link" href="logout.php">Log Out</a>
        <?php endif; ?>

    </nav>