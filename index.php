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
        $page_title = 'About this site';
        break;

    case 'design':

        $page = 'design.inc.php';
        $page_title = 'Scooter Design';
        break;

    case 'performance':

        $page = 'performance.inc.php';
        $page_title = 'Scooter Performance';
        break;
        
    case 'safety':

        $page = 'safety.inc.php';
        $page_title = 'Scooter Safety';
        break;
    
    case 'models':

        $page = 'models.inc.php';
        $page_title = 'Choose Your Model';
        break;

    case 'deluxe':

        $page = 'deluxe.inc.php';
        $page_title = 'Deluxe Model';
        break;
        
    case 'superior':

        $page = 'superior.inc.php';
        $page_title = 'Superior Model';
        break;               

    case 'contact':

        $page = 'contact.inc.php';
        $page_title = 'Contact Us';
        break;               
         

    default:
        $page = 'main.inc.php';
        $page_title = 'Vogt Scooters of Texas';
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

