<?php

if(!defined('BASE_URL')) {
    require('../includes/config.inc.php');
    $url = BASE_URL . 'index.php?p=design';
    header("Location: $url");
    exit;
} //End if defined() IF.

?>

<div class="page-titles">
	<div class="row">
		<div class="large-12 columns">
			<h2>Elegant Design</h2>
		</div>
	</div>
</div>

<div class="row">
	<div class="large-6 columns">
		<h4>Chic and Slick Front Panel</h4>
		<ul>
			<li>Point One</li>
			<li>Point Two</li>
			<li>Point Three</li>
		</ul>
	</div>
	<div class="large-6 columns">
		<img src="http://placehold.it/450x450" class="th">
	</div>
</div>

<div class="row">
	<div class="large-7 columns">

		<div class="row">
			<div class="medium-6 columns">
				<img src="http://placehold.it/200x200" class="th">
			</div>
			<div class="medium-6 columns">
				<h5>Adjustable Comfort</h5>
				<ul>
					<li>Point</li>
					<li>Point</li>
				</ul>
			</div>
		</div>
	
		<div class="row">
			<div class="medium-6 columns">
				<img src="http://placehold.it/200x200" class="th">
			</div>
			<div class="medium-6 columns">
				<h5>Adjustable Comfort</h5>
				<ul>
					<li>Point</li>
					<li>Point</li>
				</ul>
			</div>
		</div>
		
	</div>
	<div class="large-5 columns text-right">
			<img src="http://placehold.it/300x400" class="th">
		</div>
</div>