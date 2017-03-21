<?php require ('core/init.php');?>

<?php 
//Get Template & Assign Vars 
$template = new Template('templates/topics.php');

//Create Topics Objest
$topic = new Topic;
//Get category From URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

//Get user From URL
$user_id = isset($_GET['user']) ? $_GET['user'] : null;
//Assign Template Variables
if(isset($category)){
	$template->topics = $topic->getByCategory($category);
	$template->title = 'Posts in "'.$topic->getCategory($category)->name.'"';
}

//Check For User Filter
if(isset($user_id)){
	$template->topics = $topic->getByUser($user_id);
	//$template->title = 'Posts By "'.$user->getUser($user_id)->username.'"';
}

//Assign Vars
if(!isset($category) && !isset($user_id)){
	$template->topics = $topic->getAllTopics();
}

$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

//Display template
echo $template;
?>