<?php
//Get # of replies per topic
function replyCount($topic_id){
	$db = new Database;
	$db->query('select * from replies where topic_id = :topic_id');
	$db->bind(':topic_id', $topic_id);
	//Assign Rows
	$row = $db->resultset();
	//Get Counts
	return $db->rowCount();
}

//Get Categories
function getCategories(){
	$db = new Database;
	$db->query('select * from categories');

	//Assign Result Set
	$results = $db->resultset();
	return $results;
}

/*
 * User Posts
 */
function userPostCount($user_id){
	$db = new Database;
	$db->query('SELECT * FROM topics 
				WHERE user_id = :user_id
				');
	$db->bind(':user_id', $user_id);
	//Assign Rows
	$rows = $db->execute();
	//Get Count
	$topic_count = $db->rowCount();
	
	$db->query('SELECT * FROM replies
				WHERE user_id = :user_id
				');
	$db->bind(':user_id', $user_id);
	//Assign Rows
	$rows = $db->execute();
	//Get Count
	$reply_count = $db->rowCount();
	return $topic_count + $reply_count;
}
?>