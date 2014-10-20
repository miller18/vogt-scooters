<?php 

require('./includes/config.inc.php');

if(isset($_GET['p'])) {
    $p = $_GET['p'];
} elseif(isset($_POST['p'])) {
    $p = $_POST['p'];
} else {
    $p = NULL;
}

switch($p)
{
    case 'about':

        $page = 'about.inc.php';
        $page_title = 'Stars N Stripes Scooters | Vogt RV Centers | Fort Worth, TX';
        break;

    case 'design':

        $page = 'design.inc.php';
        $page_title = 'Elegant Design | Stars N Stripes Scooters | Vogt RV Centers | Fort Worth, TX';
        break;

    case 'performance':

        $page = 'performance.inc.php';
        $page_title = 'Superior Performance | Stars N Stripes Scooters | Vogt RV Centers | Fort Worth, TX';
        break;
        
    case 'safety':

        $page = 'safety.inc.php';
        $page_title = 'Reliable Safety | Stars N Stripes Scooters | Vogt RV Centers | Fort Worth, TX';
        break;
    
    case 'models':

        $page = 'models.inc.php';
        $page_title = 'Choose Your Model | Stars N Stripes Scooters | Vogt RV Centers | Fort Worth, TX';
        break;

    case 'deluxe':

        $page = 'deluxe.inc.php';
        $page_title = 'Deluxe Model | Stars N Stripes Scooters | Vogt RV Centers | Fort Worth, TX';
        break;
        
    case 'superior':

        $page = 'superior.inc.php';
        $page_title = 'Superior Model | Stars N Stripes Scooters | Vogt RV Centers | Fort Worth, TX';
        break;

    case 'texas':

        $page = 'texas-edition.inc.php';
        $page_title = 'Special Texas Edition | Stars N Stripes Scooters | Vogt RV Centers | Fort Worth, TX';
        break;                   

    case 'contact':

        $page = 'contact.inc.php';
        $page_title = 'Contact Us | Stars N Stripes Scooters | Vogt RV Centers | Fort Worth, TX';
        break;               
         

    default:
        $page = 'main.inc.php';
        $page_title = 'Vogt Scooters of Texas | Stars N Stripes Scooters | Vogt RV Centers | Fort Worth, TX';
        break;

} // End of the main switch

if(!file_exists('./modules/' . $page)) {
    $page = 'main.inc.php';
    $page_title = 'Vogt Scooters of Texas';
}

include('./includes/header.inc.php');
include('./modules/' . $page);
include('./includes/footer.inc.php');

?>

