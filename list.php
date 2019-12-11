<?php 
include('includes/config.php');
include('includes/session.php');
include 'includes/header.php';

$sql = 'SELECT * FROM Cities';
$iConn = mysqli_connect(DB_HOST, DB_USER,  DB_PASSWORD, DB_NAME) or die(myerror(_FILE_, _LINE_,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql)or die(myerror(_FILE_, _LINE_,mysqli_connect_error($iConn)));

//if statement asking if we have more than 0 rows

echo '<main id="list">';
if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){ 
        echo '<ul>';
        echo '<li>City '.$row['CityID'].': <a href="list-view.php?id='.$row['CityID'].'">'.$row['City'].'</a></li>';
        echo '<li>'.$row['Country'].'</li>';
        echo '<li>'.$row['Continent'].'</li>';
        echo '</ul>';
        echo '<br>';
    } //end while loop
}else{
    echo 'Sorry, no cities here!';
}
echo '</main>';

//release web server
@mysqli_free_result($result);
//close connection
@mysqli_close($iConn);
?>

<aside>
    <h3>Vienna, Austria: Number 1 City to Live in!</h3>
<img src="images/list/vienna.jpg" alt="Vienna, Austria"/>
<a href="list-view.php?id=1">Learn More</a>
</aside>

<?php 
include 'includes/footer.php';
?>

