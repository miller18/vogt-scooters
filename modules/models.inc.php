<?php # Script 2.6 - about.inc.php

if(!defined('BASE_URL')) {
    require('../includes/config.inc.php');
    $url = BASE_URL . 'index.php?p=models';
    header("Location: $url");
    exit;
} //End if defined() IF.
?>
<div class="page-titles">
	<div class="row">
		<div class="large-12 columns">
			<h2>Choose Your Model</h2>
		</div>
	</div>
</div>

<div class="row">
	<div class="large-6 columns text-center">
		<img src="images/250x194-del-red-face-shadow-menu.png" >
		<h2>Deluxe</h2>
		<a href="index.php?p=superior" class="button [radius round]">Learn More</a>

	</div>
	<div class="large-6 columns text-center">
		<img src="images/250x194-sup-red-face-shadow-menu.png" >
		<h2>Superior</h2>
		<a href="index.php?p=superior" class="button [radius round]">Learn More</a>

	</div>
</div>
