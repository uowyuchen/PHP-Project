<?php
//Start Session
session_start();

//Include Configuration
require_once('config/config.php');

//Helper Function Files
require_once('helper/system_helper.php');
require_once('helper/format_helper.php');
require_once('helper/db_helper.php');

//Autoload Classes
function __autoload($class_name){
	require_once('libraries/'.$class_name . '.php');
}