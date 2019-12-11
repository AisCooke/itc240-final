<?php
include('includes/server.php');
include('includes/header.php');
?>
<main id="full">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <fieldset>
            <label>First Name</label>
            <input type="text" name="FirstName" value="<?php echo htmlspecialchars($_POST['FirstName']);?>">

            <label>Last Name</label>
            <input type="text" name="LastName" value="<?php echo htmlspecialchars($_POST['LastName']);?>">

            <label>User Name</label>
            <input type="text" name="UserName" value="<?php echo htmlspecialchars($_POST['UserName']);?>">

            <label>Email</label>
            <input type="email" name="Email" value="<?php echo htmlspecialchars($_POST['Email']);?>">

            <label>Password</label>
            <input type="password" name="Password_1">

            <label>Confirm Password</label>
            <input type="password" name="Password_2">
            
            <?php include('includes/errors.php'); ?>

            <button type="submit" name="reg_user">Register</button> <!-- class="btn"-->

            <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>
        </fieldset>
    </form>
    <p class="center italic">Already a member? <a href="login.php">Sign in!</a></p>
</main>

<?php include('includes/footer.php');?>