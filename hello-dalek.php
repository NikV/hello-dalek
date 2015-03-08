<?php
/**
 * Plugin Name: Hello Dalek
 * Description: Quotes from Dr. Who. Need I say more?
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * Version: 1.0
 * Plugin URI:
 * License: GNU GPLv2+
 */

function hello_dalek_get_quotes() {

	$quotes = "Excuse me, can you help me? I'm a spy. - Original Season 12, Episode 4
	Crossing into established events is strictly forbidden. Except for cheap tricks. - Reboot Season 3, Episode 1
	Sometimes the only choices you have are bad ones. But you still have to choose. - Reboot Season 8, Episode 8
	Life depends on change, and renewal. - Original Season 4, Episode 3
	You want weapons? We're in a library! Books! The best weapons in the world! - Reboot Season 2, Episode 2
	I am and always will be the optimist. The hoper of far-flung hopes and the dreamer of improbable dreams. - Reboot Season 6, Episode 6";
// Remember to split it into lines....
	$quotes = explode( "\n", $quotes );
// Then you begin to make it random ,random , random...
	return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ] );
}
function hello_dalek() {
	$chosen_quote = hello_dalek_get_quotes();
	echo "<p id='dalek'>$chosen_quote</p>";
}
add_action( 'admin_notices', 'hello_dalek' );

/**
 * The CSS stuff
 */
function hello_dalek_css() {
// RTL stuff
	$x = is_rtl() ? 'left' : 'right';
	echo "<style type='text/css'>
			#dalek {
			float: $x;
			padding-$x: 15px;
			padding-top: 5px;
			margin: 0;
			font-size: 12px;
			}
		</style>
		";
}
add_action( 'admin_head', 'hello_dalek_css' );