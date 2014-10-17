<?php # Script 2.6 - about.inc.php

if(!defined('BASE_URL')) {
    require('../includes/config.inc.php');
    $url = BASE_URL . 'index.php?p=contact';
    header("Location: $url");
    exit;
} //End if defined() IF.
?>

<div class="page-titles">
	<div class="row">
		<div class="large-12 columns">
			<h2>Get Your Scooter Now</h2>
		</div>
	</div>
</div>

<div class="row">
	<div class="large-9 columns">
		<form>
  
  <div class="row">
    <div class="large-6 columns">
      <label>First Name
        <input type="text" placeholder="Your First Name" />
      </label>
    </div>
    <div class="large-6 columns">
      <label>Last Name
        <input type="text" placeholder="Your Last Name" />
      </label>
    </div>
    
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Phone Number
        <input type="text" placeholder="817-555-5555" />
      </label>
    </div>
    <div class="large-6 columns">
      <label>Email Address
        <input type="email" placeholder="john@example.com" />
      </label>
    </div>
    
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Which Unit Are You Interested In?
        <select>
          <option value="deluxe">Deluxe</option>
          <option value="superior">Superior</option>
        </select>
      </label>
    </div>
    <div class="large-6 columns">
      <label>Prefered Color</label>
      <input type="radio" name="unit_color" value="Red" id="unit_red"><label for="unit_red">Red</label>
      <input type="radio" name="unit_color" value="Blue" id="unit_blue"><label for="unit_blue">Blue</label>
      <input type="radio" name="unit_color" value="White" id="unit_white"><label for="unit_white">White</label>
      <input type="radio" name="unit_color" value="Grey" id="unit_grey"><label for="unit_grey">Grey</label>
    </div>
  </div>
  
  <div class="row">
    <div class="large-12 columns">
      <label>Your Message...
        <textarea ></textarea>
      </label>
    </div>
  </div>
</form>
	</div>
	<div class="large-3 columns">
		<h3>Contact Sales</h3>
		<p>Address</p>
		<p>Phone</p>
		<p>Email Address</p>
	</div>
</div>
<div class="row">
	<h1>Map of dealership</h1>
</div>
</div>
