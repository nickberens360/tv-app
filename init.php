<?php

    // INDEV OPTIONS:
    // 2 = DEV (error reporting on, WAMP desktop server; uses WAMP desktop database)
    // 1 = STAGING (error reporting on, dev/preview server, uses wisnetdb.com database)
    // 0 = LIVE (no error reporting, uses wisnetdb.com database)
    if (file_exists('devsettings.php')) {
        include_once 'devsettings.php';
    }
    else {
        $INDEV=0; // If no local file settings found, use "LIVE" mode (no error reporting, live database)
    }

    date_default_timezone_set('America/Chicago');

    switch ($INDEV) {
        case 2:
            $dbIP = "127.0.0.1"; // WAMP localhost/desktop database
            error_reporting(-1); // Display errors setting (-1 = all; 0 = none)
            ini_set('display_errors', '1');
            break;
        case 1:
            $dbIP = "localhost"; // Local server db (Staging)
            error_reporting(-1); // Display errors setting (-1 = all; 0 = none)
            ini_set('display_errors', '1');
            break;
        default:
            $dbIP = "192.168.1.253"; // wisnetdb.com database
            break;
    }
    
    $dbhandle=mysqli_connect($dbIP,"tv-app","tv-app","tv-app"); // Database connection object
    if (mysqli_connect_errno()) { // Test the connection
        echo "Failed to connect to MySQL: " . mysqli_connect_error();  // Display the error
    }
		error_reporting(-1); // Display errors setting (-1 = all; 0 = none)
    ini_set('display_errors', '1');
?>