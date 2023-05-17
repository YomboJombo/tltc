<?php
// Connect to the database
include("./connect_db.php");

// Get the form data
$UserID = $_POST['UserID'];
$content = $_POST['content'];
$Name = $_POST['Name'];
// ID of the post
$PostID = $_POST['PostID'];

//prepare the SQL statement to retrieve the user ID based on the provided information
$stmt = $connect->prepare("SELECT UserID FROM user WHERE UserID = UserID");
$stmt->bindParam('Username', $UserID, PDO::PARAM_STR);

//execute the SQL statement and retrieve the customer ID
$stmt->execute();
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
$user = $UserID;

// Insert the post into the database
$stmt = $connect->prepare("INSERT INTO comments (Comment_contents, Comments_Name, Comments_datetime_stamp, UserID, PostID)
                          VALUES (:a, :b, NOW(), :d, :e) ");
	// Step 2. - Execute the SQL statement
	$stmt->execute(array(
		":a" => $content,
		":b" => $Name,
		":d" => $user,
		":e" => $PostID
    ));

header("Location: ./Announcement_user.php") ;
include("./close_db.php") ;
?>