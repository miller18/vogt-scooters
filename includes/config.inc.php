<?php 

/*
 * File Name: config.inc.php
 * Created by: Anthony Miller
 * Contact: anthony@tiny-zebra.com
 *
 * Last modified: Oct 15, 2014
 *
 * Configuration file does the following things:
 *
 * Has site settings in one location
 * Stores URIs and URLs as constants
 * Sets how errors will be handled
 *
 */

$contact_email = 'anthony@tiny-zebra.com';

$host = substr($_SERVER['HTTP_HOST'], 0, 5);

if (in_array($host, array('local', '127.0', '192.1'))) {
    $local = TRUE;
} else {
    $local = FALSE;
}

if($local){
    $debug = TRUE;
    define('BASE_URI', '/Users/TinyZebra/Dropbox/Server/Websites/vogt-scooters');
    define('BASE_URL', 'http://localhost:8888/vogt-scooters/');
    define('DB', '/path/to/mysql.inc.php');
} else {
    define('BASE_URI', '/path/to/live/html/folder');
    define('BASE_URL', 'http://snsscooterstexas.com/');
    define('DB', '/path/to/live/mysql.inc.php');
}

if(isset($debug)) {
    $debug = FALSE;
}

function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars) {
    global $debug, $contact_email;

    $message = "An error occurred in script '$e_file' on line $e_line: $e_message";
    $message .= print_r($e_vars, 1);

    if($debug) {
        echo '<div class="error">' . $message . '</div>';
        debug_print_backtrace();
    } else {
        error_log($message, 1, $contact_email);
        if(($e_number != E_NOTICE) && ($e_number < 2048)) {
            echo '<div class="error"> A system error occureed.  We appologize for the inconvenience.</div>';
        }
    }  // End of debugging IF

} // End of my_error_handler() definition.

set_error_handler('my_error_handler');