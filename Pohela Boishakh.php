<?php
/*
Plugin Name: Pohela Boishakh
Plugin URI: http://bn.sinbadkonicks.com/pohela-boishakh/
Description: This plugin ads a Pohela Boishakh banner to the top right corner of your website.
Author: Sinbad Konick
Version: 1.1
License: GPLv2
Author URI: http://www.SinbadKonicks.com
*/

function Pohela_Boishakh() {
	$banner_url = plugins_url( 'Pohela Boishakh.png', __FILE__ );
	echo "<a href='http://bn.wikipedia.org/wiki/%E0%A6%AA%E0%A6%B9%E0%A7%87%E0%A6%B2%E0%A6%BE_%E0%A6%AC%E0%A7%88%E0%A6%B6%E0%A6%BE%E0%A6%96' class='PohelaBoishakh' target='_blank'><img src='{$banner_url}' alt='Pohela Boishakh' width='188' height='232' title='পহেলা বৈশাখ' style='cursor:pointer; position: fixed; top: 0; right: 0; z-index: 999;' /></a>";
	}
add_action( 'wp_footer', 'Pohela_Boishakh' );
