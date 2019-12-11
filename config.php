<?php
ob_start();
define('DEBUG', 'FALSE');
include('includes/credentials.php');
function myerror($myFile, $myLine, $errorMsg){
    if(defined('DEBUG') && DEBIG){
        echo"Error in file: <b>".$myFile."</b> on line: <b>".$myLine."</b><br>";
        echo"Error Message: <b>".$errorMsg."</b><br>";
        die();
    }else{
        echo "I'm sorry, we have encountered an error.";
        die();
    }
}

//switch

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
switch($today) {
    case 'Monday':
        $event = 'Monday Mess Around';
        $location = 'Fania Live';
        $time = '20:00';
        $color = 'red';
        $paragraph = 'Viennas MoMA for Lindy Hop & Authentic Jazz! The MONDAY MESS AROUND (MoMA) is a weekly social dance with the finest swing music – presented by IG HOP. Every monday at FANIA LIVE – a cosy bar at the Gürtelbögen near U6 Thaliastraße. Have a drink, dance with us and enjoy our specials: game nights, live bands, jazz themes, contests and other fun stuff. Come out and play with IG Hop!';
        break;
    case 'Tuesday':
        $event = 'Chupitos Comedy Tuesday';
        $location = 'N2O Comedy Club';
        $time = '19:30';
        $color = 'orange';
        $paragraph = 'A Monthly English Stand-Up Comedy Night featuring Viennese English Comedy staples and other funniest Comics from all across Europe at your friendly neighborhood bar, Chupitos. Join us for a night filled with laughter!';
        break;
    case 'Wednesday':
        $event = 'Rathausplatz Guided Tours';
        $location = 'Rathaus Vienna';
        $time = '13:00';
        $color = 'gold';
        $paragraph = 'Guided Tours through the town hall building are worth seeing and available free of charge on Monday, Wednesday and Friday at 13:00 o\'clock. (except on meeting days and public holidays). The starting point is the city information center of the town hall (entrance Friedrich-Schmidt-Platz 1). An advance reservation is not necessary.';
        break;
    case 'Thursday':
        $event = 'Vienna Christmas Market Tour';
        $location = 'Church of Mariahilf';
        $time = '17:00';
        $color = 'green';
        $paragraph = 'Crunch through the snow on a guided walking tour of Vienna\'s Christmas markets and ignite your festive spirit
        Visit four distinct Christmas markets and get immersed in the local traditions, with excellent storytelling from your guide
        Sip on mulled wine and hot rum punch, munch on warm Christmas cookies, and meander around the cheerful craft stalls';
        break;
    case 'Friday':
        $event = 'Vienna Symphony Orchestra';
        $location = 'Konzerthaus Vienna';
        $time = '19:00';
        $color = 'blue';
        $paragraph = 'The Vienna Symphony (Vienna Symphony Orchestra, German: Wiener Symphoniker) is an Austrian orchestra based in Vienna. Its primary concert venue is the Vienna Konzerthaus. In Vienna, the orchestra also performs at the Musikverein and at the Theater an der Wien.';
        break;
    case 'Saturday':
        $event = 'Press Play. Ra\'mien Saturdays';
        $location = 'Ra\'mien';
        $time = '22:00';
        $color = 'indigo';
        $paragraph = 'We\'ve been part of Vienna\'s nightlife for 5 years now and every time we blow up the place and start all over again. Playing the finest music is our mission and partying like there\'s no tomorrow is our vision. An insider tip for everyone who doesn\'t know it and a favourite place for everyone who has been there.';
        break;
    case 'Sunday':
        $event = 'Street. Photography. Sundays';
        $location = 'Art House Vienna';
        $time = '15:00';
        $color = 'violet';
        $paragraph = 'Learn from our art educators the exciting stories and backgrounds to the series of works of photography exhibition Street. Life. Photography . With over 35 artistic positions and 200 works, the show shows how multifaceted and diverse the genre of street photography really is.';
        break;
}



//makelinks
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['today.php'] = 'Today';
$nav['list.php'] = 'List';
$nav['submit.php'] = 'Submit';

define('THIS_PAGE' , basename($_SERVER['PHP_SELF']));
switch(THIS_PAGE) {
    case 'index.php': 
    $title = 'Home | 50 Best Cities';
    $heading = 'the Best Cities to Live in';
    break;
    case 'login.php': 
    $title = 'Login | 50 Best Cities';
    $heading = 'Log In';
    break;
    case 'register.php': 
        $title = 'Register | 50 Best Cities';
        $heading = 'Register';
        break;
    case 'about.php': 
    $title = 'About | 50 Best Cities';
    $heading = 'About the List';
    break;
    case 'today.php': 
    $title = ''.$today.' | 50 Best Cities';
    $heading = ''.$today.' in Vienna';
    break;
    case 'list.php': 
    $title = 'List | 50 Best Cities';
    $heading = 'The 50 Best Cities to Live In';
    break;
    case 'list-view.php': 
    $title = 'City | 50 Best Cities';
    $heading = 'The 50 Best Cities to Live In';
    break;
    case 'submit.php': 
    $title = 'Submit | 50 Best Cities';
    $heading = 'Submit Your City';
    break;
    case 'thx.php': 
    $title = 'Thanks | 50 Best Cities';
    $heading = 'Thanks!';
    break;
}
function makeLinks($nav){
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key){
            echo '<li><a class="active" href="'.$key.'">'.$value.'</a></li>';
        } else{
            echo '<li><a href="'.$key.'">'.$value.'</a></li>';
        }
    }
}

//contact form
$name = $city = $email = $continent = $comments = $reasons = $phone = $privacy = '';
$nameErr = $cityErr = $emailErr = $continentErr = $commentsErr = $reasonsErr = $phoneErr = $privacyErr = '';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['name'])){
        $nameErr = 'Please fill out your name.';
    } else {
        $name = $_POST['name'];
    }
    if(empty($_POST['city'])){
        $cityErr = 'Please fill out your city.';
    } else {
        $city = $_POST['city'];
    }
    if(empty($_POST['email'])){
        $emailErr = 'Please fill out your email.';
    } else {
        $email = $_POST['email'];
    }
    if(empty($_POST['continent'])){
        $continentErr = 'Please select your continent.';
    } else {
        $continent = $_POST['continent'];
    }
    if(empty($_POST['comments'])){
        $commentsErr = 'Please tell us about your city!';
    } else {
        $comments = $_POST['comments'];
    }
    if(empty($_POST['reasons'])){
        $reasonsErr = 'Please select the reasons your city is great.';
    } else {
        $reasons = $_POST['reasons'];
    }
    if(empty($_POST['phone'])){
        $phoneErr = 'Please fill out your phone number.';
    } else {
        $phone = $_POST['phone'];
    }

    if(empty($_POST['privacy'])){
        $privacyErr = 'You must agree to the privacy statement.';
    } else {
        $privacy = $_POST['privacy'];
    }

    if(isset($_POST['name'],
    $_POST['city'],
    $_POST['email'],
    $_POST['continent'],
    $_POST['comments'],
    $_POST['reasons'],
    $_POST['privacy'])){
        function myReasons(){
            $myReturn ='';
            if(!empty($_POST['reasons'])){
                    $myReturn = implode(",", $_POST['reasons']);
            }
            return $myReturn;
        }

        $to = 'olga.szemetylo@seattlecolleges.edu ';
        $subject = 'Test Email ' .date('m/d/y');
        $body = 'Thank you, '.$name.', for submitting the form.'.PHP_EOL.'';
        $body .= 'Your email is '.$email.' and your continent is '.$continent.'.'.PHP_EOL.'';
        $body .= 'Your city is '.$city.' in '.$continent.'.'.PHP_EOL.'';
        $body .= 'Your reason for submission was "'.$comments.'" '.PHP_EOL.'';
        $body .= myReasons();
        $headers = array(
            'From' => 'no-reply@swordfern.dreamhosters.com',
            'Reply-to' => ''.$email.'',
        );
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        //customer support was never able to figure out why my emails wouldn't send
    }
}
