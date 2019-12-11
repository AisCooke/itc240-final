<?php 
    if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }

    if(isset($_SESSION['UserName'])):
?>
    <li>Hi <strong><?=$_SESSION['UserName']?></strong>!</li>
    <li><a href="index.php?logout='1'">Logout</a></li>
<?php endif; ?>
