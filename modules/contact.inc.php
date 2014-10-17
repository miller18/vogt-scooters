<?php # Script 2.6 - about.inc.php

if(!defined('BASE_URL')) {
    require('../includes/config.inc.php');
    $url = BASE_URL . 'index.php?p=contact';
    header("Location: $url");
    exit;
} //End if defined() IF.
?>
<div class="row">
	<h2>Contact Us</h2>
</div>
