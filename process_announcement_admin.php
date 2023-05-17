<?php
// Connect to the database
include("./connect_db.php");

// Get the form data
$UserID = $_POST['UserID'];
$date_post = $_POST['date_post'];
$post_content = $_POST['post_content'];
$post_title = $_POST['post_title'];


// Insert the post into the database
$stmt = $connect->prepare("INSERT INTO post (Post_time_and_Date, Post_content, Post_title, UserID) 
							VALUES (:a, :b, :c, :d) ");
	// Step 2. - Execute the SQL statement
	$stmt->execute(array(
		":a" => $date_post,
		":b" => $post_content,
		":c" => $post_title,
		":d" => $UserID
    ));


 header("Location: ./Announcement_admin.php") ;
include("./close_db.php") ;
?>
