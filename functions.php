<?php

function check_input($required_args, $args) {
	global $argc;
	global $argv;
	if ($argc != $required_args) {
	    $msg = "Usage: \n  " . $argv[0] . " ";
		foreach ($args as $arg) {
			$msg .= "<$arg>";
		}
		echo $msg;
	    exit;
	}
}
