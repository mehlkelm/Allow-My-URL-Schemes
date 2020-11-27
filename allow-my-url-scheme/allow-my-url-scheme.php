<?php

/*
Plugin Name: Allow My URL Scheme
Description: Adds my mobile app's URL scheme to the list of allowed protocols, so that wordpress doesn't mess up links into my app.
Version: 1.0
Author: Stefan Pauwels
*/

function ss_allow_my_protocol( $protocols ){
    $protocols[] = 'slowfeeds';
	$protocols[] = 'websub';
    return $protocols;
}
add_filter( 'kses_allowed_protocols' , 'ss_allow_my_protocol' );

?>