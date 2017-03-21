<?php require ('core/init.php');?>

<?php 

//Get Template & Assign Vars 
$template = new Template('templates/frontpage.php');

//Create Topic Object
$topics = new Topic;
//Assign Vars
$template->topics = $topics->getAllTopics();
$template->totalTopics = $topics->getTotalTopics();
$template->totalCategories = $topics->getTotalCategories();

//Create User Object
$user = new User;
$template->totalUsers = $user->getTotalUsers();

//Display template
echo $template;

?>
