<?php

include("Login.php");
include("Logging.php");
include("Security.php");

$login = new Login();
$login->attach( new Security() );
$login->attach( new Logging() );
 
if ( $login->init( "craigsefton", "password", "127.0.0.1" ) ) {
    echo "User logged in!";
} else {
    echo "<pre>";
    print_r( $login->getStatus() );
    echo "</pre>";
}
