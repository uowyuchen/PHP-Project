<?php require ('core/init.php');?>

<?php 
//Get Template & Assign Vars 
$template = new Template('templates/topic1.php');

//Create Topic Object
$topic = new Topic;
//Get ID From URL
$topic_id = $_GET['id'];
//Assign Vars
$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->getTopic($topic_id)->title;

//Display template
echo $template;
?>