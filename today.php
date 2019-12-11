<?php 
include('includes/config.php');
include('includes/session.php');
include('includes/header.php');
echo '<style>#banner {background-color:'.$color.';}</style>';
?>

<main>
    <section>
        <h3>What's Happening in Vienna <?=$today ?>?</h3>
        <h4 style="color: <?= $color ?>;"><?= $event ?></h4>
        <h5><i class="fas fa-map-marker-alt" style="color: <?= $color ?>;"></i> <?= $location ?></h5>
        <h5><i class="fas fa-clock" style="color: <?= $color ?>;"></i> <?= $time ?></h5>
        <p><?= $paragraph ?></p>
        </ul>
    </section>
    <section>
        <h3 style="color: <?= $color ?>;">Check This Week's Schedule</h3>
         <ul>
            <li ><a href="today.php?today=Monday" >Monday</a></li>
            <li><a href="today.php?today=Tuesday" >Tuesday</a></li>
            <li><a href="today.php?today=Wednesday"  >Wednesday</a></li>
            <li><a href="today.php?today=Thursday"  >Thursday</a></li>
            <li><a href="today.php?today=Friday"  >Friday</a></li>
            <li><a href="today.php?today=Saturday"  >Saturday</a></li>
            <li><a href="today.php?today=Sunday"  >Sunday</a></li>
        </ul>
    </section>
</main>

<aside>
    <img src="images/today/<?php echo strtolower($today); ?>.jpg" alt="<?=$event ?>"/>
</aside>

<?php include 'includes/footer.php';?> 