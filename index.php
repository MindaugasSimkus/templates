<?php

//sesijos kintamieji

session_start();

$title = "Templates";
$content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$templates = ["green", "orange", "pink", "yellow",];

if (isset($_POST['username'])) {
	$title = "Čia lankosi " . $_POST['username'];
	$_SESSION['user'] = $_POST['username'];
} elseif (isset($_POST['username'])) {
	$title = "Čia lankosi " . $_POST['username'];
}


if (isset($_POST['t'])) {
	$template_name = $_POST['t'];
	$_SESSION['session_template'] = $_POST['t'];
} else if (isset($_SESSION['session_template'])) {
	$template_name = $_SESSION['session_template'];
} else {
	$template_name = $templates[0];
}


include 'templates/' . $template_name . '.php';


?>