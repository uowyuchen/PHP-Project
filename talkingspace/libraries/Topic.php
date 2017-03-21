<?php 
class Topic {
	//Init DB Variable
	private $db;

	//Constructor
	public function __construct(){
		$this->db = new Database;
	}

	//Get All Topics
	public function getAllTopics(){
		$this->db->query("select topics.*, users.username, users.avatar, categories.name from topics inner join users on topics.user_id = users.id inner join categories on topics.category_id = categories.id order by create_date desc");

		//Assign Result Set
		$results = $this->db->resultset();

		return $results;	
	}

	//Get Total # of Topics
	public function getTotalTopics(){
		$this->db->query('select * from topics');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}

	//Get Total # of Categories
	public function getTotalCategories(){
		$this->db->query('select * from categories');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}

	//Get Category By ID
	public function getCategory($category_id){
		$this->db->query('select * from categories where id = :category_id');
		$this->db->bind(':category_id', $category_id);

		//Assign Row
		$row = $this->db->single();
		return $row;
	}

	//Get Topics By Category
	public function getByCategory($category_id){
		$this->db->query('select topics.*,categories.*,users.username, users.avatar,categories.name from topics inner join
			categories on topics.category_id = categories.id inner join users on topics.user_id = users.id where topics.category_id = :category_id');
		$this->db->bind(':category_id', $category_id);
		//Assign Result Set
		$results = $this->db->resultset();

		return $results;
	}

	//Get Total # of Replies
	public function getTotalReplies($topic_id){
		$this->db->query('select * from replies where topic_id = '.$topic_id);
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}

	/*
	 * Get Topic By ID
	 */
	public function getTopic($id){
		$this->db->query("SELECT topics.*, users.username, users.name, users.avatar 
						FROM topics
						INNER JOIN users
						ON topics.user_id = users.id
						WHERE topics.id = :id			
		");
		$this->db->bind(':id', $id);
		
		//Assign Row
		$row = $this->db->single();
		
		return $row;
	}
	
	/*
	 * Get Topic Replies
	 */
	public function getReplies($topic_id){
		$this->db->query("SELECT replies.*, users.* FROM replies
						INNER JOIN users
						ON replies.user_id = users.id
						WHERE replies.topic_id = :topic_id 
						ORDER BY create_date ASC	
		");
		$this->db->bind(':topic_id', $topic_id);
	
		//Assign Result Set
		$results = $this->db->resultset();
	
		return $results;
	}
	
	/*
	 * Get Topics By Username
	 */
	public function getByUser($user_id){
		$this->db->query("SELECT topics.*, categories.*, users.username, users.avatar FROM topics
						INNER JOIN categories
						ON topics.category_id = categories.id
						INNER JOIN users
						ON topics.user_id=users.id
						WHERE topics.user_id = :user_id
		");
		$this->db->bind(':user_id', $user_id);
	
		//Assign Result Set
		$results = $this->db->resultset();
	
		return $results;
	}

}
?>