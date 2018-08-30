<?php

include 'head.php';

// If we are not on the login page we need the navigation adding
if( $name != 'login')
	include 'nav.php';

// Content page to add
include 'content/' . $name . '.php';
include 'foot.php';