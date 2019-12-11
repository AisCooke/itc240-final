<?php 
include('includes/config.php');
include('includes/session.php');
include('includes/header.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else{
    header('Location:cities.php');
}

$sql = 'SELECT * FROM Cities WHERE CityID = '.$id.'';
$iConn = mysqli_connect(DB_HOST, DB_USER,  DB_PASSWORD, DB_NAME) or die(myerror(_FILE_, _LINE_,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql)or die(myerror(_FILE_, _LINE_,mysqli_connect_error($iConn)));

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){ 
        $City = stripcslashes($row['City']);
        $Country = stripcslashes($row['Country']);
        $Continent = stripcslashes($row['Continent']);
        $Description = stripcslashes($row['Description']);
        $Feedback = '';
    } 
} else{
    $Feedback = 'This city does not exist.';
}
?>
<main id="list-view">
    <h2><?=$City?></h2>
    <ul>
        <li><strong>Position:</strong><?=$CityID?></li>
        <li><strong>Country:</strong><?=$Country?></li>
        <li><strong>Continent:</strong><?=$Continent?></li>
    </ul>
    <p><?=$Description?></p>
</main>
<aside>
    <img src="images/list/<?php echo strtolower(str_replace(' ','-',$City))?>.jpg" alt="<?=$City?>"/>
</aside>
<?php 
//release web server
@mysqli_free_result($result);
//close connection
@mysqli_close($iConn);


include('includes/footer.php');
?>

