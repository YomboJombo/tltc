<?php
include("./connect_db.php");
// Assuming you have already established a database connection ($connect) and stored the user ID in $user.

    $updatedPost = $_POST['content'];
    $updatedName = $_POST['Name'];
    $postid = $_POST['postid'];

    // Prepare the update statement
    $stmt = $connect->prepare("UPDATE post SET Post_content = :a, Post_title = :b WHERE PostID = :c");

    // Execute the update statement
    $stmt->execute(array(
        ":a" => $updatedPost,
		":b" => $updatedName,
		":c" => $postid
    ));

    // Redirect the user back to the comments page or perform any other desired action
    header("Location: edit_post.php");
    exit();


include("./close_db.php");
?>

	

