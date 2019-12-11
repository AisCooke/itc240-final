<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?=$title?></title>
<link rel="stylesheet" href="css/styles.css" />
<script src="https://kit.fontawesome.com/0fe2af73b8.js" crossorigin="anonymous"></script><link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

</head>

<body>
<div id="container">
<header>
    <a href="https://swordfern.dreamhosters.com/itc240/final" id="logo">50 BEST CITIES</a>
    <nav>
        <ul>
            <?=makeLinks($nav);?>
            <?php 
                if(isset($_SESSION['success'])){
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['UserName'])):
            ?>
                <li class="user"><i class="fas fa-user"></i> Hi <strong><?=$_SESSION['UserName']?></strong>!</li>
                <li class="user"><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<div id="wrapper">
<div id="banner">
    <h2><?=$heading;?></h2>
</div> 
