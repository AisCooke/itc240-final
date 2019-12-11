<?php
include('includes/server.php');
include('includes/header.php');
?>
<main id="full">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <fieldset>
            <label>User Name</label>
            <input type="text" name="UserName" value="<?php echo htmlspecialchars($UserName);?>">

            <label>Password</label>
            <input type="password" name="Password">
            <?php include('includes/errors.php'); ?>
            <button type="submit" name="login_user">Login</button>
            <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>
        </fieldset>
    </form>
    <p class="center italic">Not yet a member? <a href="register.php">Register now!</a></p>
</main>

<?php include('includes/footer.php');?>