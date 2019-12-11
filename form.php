<form action="<?php echo htmlspecialchars($_POST['PHP_SELF']);?>" method="post">

    <label>Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">
    <span><?php echo $nameErr;?></span>

    <label>Email</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
    <span><?php echo $emailErr;?></span>

    <label>Phone</label>
    <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['name']);?>">
    <span><?php echo $phoneErr;?></span>

    <label>City</label>
    <input type="text" name="city" value="<?php if(isset($_POST['city'])) echo htmlspecialchars($_POST['city']);?>">
    <span><?php echo $cityErr;?></span>

    <label>Continent</label>
    <ul>
        <li><input type="radio" name="continent" value="asia"  <?php if(isset($_POST['continent']) && $_POST['continent'] == 'asia'){echo 'checked="checked"';}; ?>>Asia</li>
        <li><input type="radio" name="continent" value="africa"  <?php if(isset($_POST['continent']) && $_POST['continent'] == 'africa'){echo 'checked="checked"';}; ?>>Africa</li>
        <li><input type="radio" name="continent" value="oceania"  <?php if(isset($_POST['continent']) && $_POST['continent'] == 'oceania'){echo 'checked="checked"';}; ?>>Oceania</li>
        <li><input type="radio" name="continent" value="antartica"  <?php if(isset($_POST['continent']) && $_POST['continent'] == 'antartica'){echo 'checked="checked"';}; ?>>Antartica</li>
        <li><input type="radio" name="continent" value="europe"  <?php if(isset($_POST['continent']) && $_POST['continent'] == 'europe'){echo 'checked="checked"';}; ?>>Europe</li>
        <li><input type="radio" name="continent" value="namerica"  <?php if(isset($_POST['continent']) && $_POST['continent'] == 'namerica'){echo 'checked="checked"';}; ?>>North America</li>
        <li><input type="radio" name="continent" value="samerica"  <?php if(isset($_POST['continent']) && $_POST['continent'] == 'samerica'){echo 'checked="checked"';}; ?>>South America</li>
    </ul>
    <span><?php echo $continentErr;?></span>
            
    <label>What's great about it?</label>
    <ul>
        <li><input type="checkbox" name="reasons[]" value="culture" <?php if(isset($_POST['reasons']) && in_array('culture', $reasons)) echo 'checked="checked"'; ?>>Culture</li>
        <li><input type="checkbox" name="reasons[]" value="scenery" <?php if(isset($_POST['reasons']) && in_array('scenery', $reasons)) echo 'checked="checked"'; ?>>Scenery</li>
        <li><input type="checkbox" name="reasons[]" value="cost" <?php if(isset($_POST['reasons']) && in_array('cost', $reasons)) echo 'checked="checked"'; ?>>Cost of Living</li>
        <li><input type="checkbox" name="reasons[]" value="food" <?php if(isset($_POST['reasons']) && in_array('food', $reasons)) echo 'checked="checked"'; ?>>Food</li>
        <li><input type="checkbox" name="reasons[]" value="amenities" <?php if(isset($_POST['reasons']) && in_array('amenities', $reasons)) echo 'checked="checked"'; ?>>Amenities</li>
    </ul>
    <span><?php echo $reasonsErr;?></span>
        
    <label>Why should we consider your city?</label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) echo $_POST['comments'];?></textarea>
    <span><?php echo $commentsErr;?></span>
    <br>
    
    <label>Privacy Agreement</label>
    <ul>
        <li><input type="radio" name="privacy" value="agree"  <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree'){echo 'checked="checked"';}; ?>>I agree.</li>
    </ul>
    <span><?php echo $privacyErr;?></span>

    <div>
        <input type="submit" name="submit" value="Send">
        <input type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'" value="Reset">
    </div>
</form>
