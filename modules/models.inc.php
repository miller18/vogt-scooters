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
		<img src="http://placehold.it/250x450" class="th">
		<h2>Superior</h2>
		<h4>Learn More</h4>
	</div>
	<div class="large-6 columns text-center">
		<img src="http://placehold.it/250x450" class="th">
		<h2>Deluxe</h2>
		<h4 class="btn"><a href="index.php?p=deluxe">Learn More</a></h4>
	</div>
</div>
