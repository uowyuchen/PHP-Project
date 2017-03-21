<?php
/*
 * URL Format
 */
function urlFormat($str){
	//Strip out all whitespace
	$str = preg_replace('/\s*/','',$str);
	//Convert the string to all lowercase
	$str = strtolower($str);
	//URL Encode
	$str = urlencode($str);
	return $str;
}

function formatDate($date){
	$data = date("F j, Y, g:i a", strtotime($date));
	return $data;
}

//Add classname active if category is active
function is_active($category){
	if(isset($_GET['category'])){
		if($_GET['category']==$category){
			return 'active';
		}else{
			return '';
		}
	}else{
		if($category == null){
			return 'active';
		}
	}
}

?>