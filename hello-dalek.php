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
	I am and always will be the optimist. The hoper of far-flung hopes and the dreamer of improbable dreams. - Reboot Season 6, Episode 6
	You think you know your own name? How stupid are you? - Reboot Season 1, Episode 4
	Never say never ever. - Reboot Season 2, Episode 11
	As we learn about each other, so we learn about ourselves. - Original Season 1, Episode 3
	The universe is big. It’s vast and complicated and ridiculous. And sometimes, very rarely, impossible things just happen and we call them miracles. - Reboot Season 5, Episode 12
	Amy Pond, there's something you'd better understand about me 'cause it's important, and one day your life may depend on it: I am definitely a mad man with a box! - Reboot Season 5, Episode 1

	Some people live more in 20 years than others do in 80. It's not the time that matters, it's the person. - Reboot Season 3, Episode 6
	Do what I do. Hold tight and pretend it's a plan! - Reboot Season 7, Christmas Special
	In 900 years of time and space, I've never met anyone who wasn't important. - Reboot Season 6, Christmas Special
	Never ignore coincidence. Unless, of course, you're busy. In which case, always ignore coincidence. - Reboot Season 5, Episode 12
	900 years of time and space, and I've never been slapped by someone's mother. - Reboot Season 1, Episode 4
	This is who I am, right here, right now, all right? All that counts is here and now, and this is me! - Reboot Season 1, Episode 2
	Always take a banana to a party, Rose: bananas are good! - Reboot Season 2, Episode 4
	It all started out as a mild curiosity in the junkyard, and now it's turned out to be quite a great spirit of adventure. - Original Season 1, Episode 7
	Our lives are important - at least to us - and as we see, so we learn... Our destiny is in the stars, so let's go and search for it. - Original Season 1, Episode 8
	We're nowhere. It's as simple as that. - Original Season 6, Episode 1
	I do tend to get involved. - Original Season 6, Episode 7
	Well, I'll tell you something that should be of vital interest to you. That you, sir, are a NITWIT! - Original Season 7, Episode 4
	Allow me to congratulate you, sir. You have the most totally closed mind that I've ever encountered. - Original Season 10, Episode 3
	A straight line may be the shortest distance between two points, but it is by no means the most interesting. - Original Season 11, Episode 1
	You may be a doctor. But I'm THE Doctor. The definite article, you might say. - Original Season 12, Episode 1
	There's no point being grown-up if you can't be childish sometimes. - Original Season 12, Episode 1
	Excuse me, can you help me? I'm a spy. - Original Season 12, Episode 4
	Something's going on contrary to the laws of the universe. I must find out what! - Original Season 13, Episode 5
	If you don't stop wallowing in self-pity, I'll bite your nose. - Original Season 13, Episode 5
	You thought I was dead, didn't you? You're always making that mistake. - Original Season 13, Episode 5
	Answers are easy. It's asking the right questions which is hard. - Original Season 14, Episode 4
	I'm the Doctor. Who are you, and why are you shooting at me? - Original Season 14, Episode 4
	I'm a very dangerous fellow when I don't know what I'm doing. - Original Season 17, Episode 1
	Love has never been noted for its rationality. - Original Season 24, Episode 3
	Anybody remotely interesting is mad in some way. - Original Season 25, Episode 4
	The paper's slightly psychic, makes them see whatever I want them to see. - Reboot Season 1, Episode 2
	I love a happy medium! - Reboot Season 1, Episode 3
	There's no such thing as an ordinary human. - Reboot Season 3, Episode 6
	We're at the end of the universe. Okay?! Right at the edge of knowledge itself! Any you're busy... blogging! - Reboot Season 3, Episode 11
	I have a thing. It's like a plan, but with more greatness. - Reboot Season 5, Episode 10";

	$quotes = explode( "\n", $quotes );
	return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ] );
}

/**
 * The main function
 */
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