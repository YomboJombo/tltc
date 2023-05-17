<?php
include("./connect_db.php");
// Assuming you have already established a database connection ($connect) and stored the user ID in $user.

    $updatedComment = $_POST['content'];
    $updatedName = $_POST['Name'];
    $commentid = $_POST['commentid'];

    // Prepare the update statement
    $stmt = $connect->prepare("UPDATE comments SET Comment_contents = :a, Comments_Name = :b WHERE CommentID = :c");

    // Execute the update statement
    $stmt->execute(array(
        ":a" => $updatedComment,
		":b" => $updatedName,
		":c" => $commentid
    ));

    // Redirect the user back to the comments page or perform any other desired action
    header("Location: user_edit_comment.php");
    exit();


include("./close_db.php");
?>

	

