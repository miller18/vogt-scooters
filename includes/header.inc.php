<?php # Script 2.2 - header.html

// Check for a $page_title value:

if(!isset($page_title)) $page_title = 'Default Page Title';

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vogt Scooters</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
    
  </head>
  <body>
    <div class="sticky contain-to-grid">
      <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <h1><a href="index.php">Vogt Scooters</a></h1>
          </li>
          <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
          
          <!-- Left Nav Section -->
          <ul class="left">
            <li><a href="index.php?p=about">About Us</a></li>
            <li><a href="index.php?p=design">Design</a></li>
            <li><a href="index.php?p=performance">Performance</a></li>
            <li><a href="index.php?p=safety">Safety</a></li>
            <li class="has-dropdown">
              <a href="index.php?p=models">Specifications</a>
              <ul class="dropdown">
                <li><a href="index.php?p=deluxe">Deluxe Model</a></li>
                <li><a href="index.php?p=superior">Superior Model</a></li>
              </ul>
            </li>
            <li><a href="index.php?p=contact">Contact Us</a></li>
          </ul>
        </section>
      </nav>
    </div>

