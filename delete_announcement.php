<?php
session_start();
include("./connect_db.php");

$postID = $_POST['postID'];

$stmt = $connect->prepare("SELECT PostID FROM post WHERE PostID = ?");
$stmt->bindParam(1, $postID, PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!empty($result)) {
    $PostID = $result[0]['PostID'];

    // prepare the SQL statement to delete the comments
    $stmt = $connect->prepare("DELETE FROM comments WHERE PostID = ?");
    $stmt->bindParam(1, $PostID, PDO::PARAM_STR);
    $stmt->execute();

    // prepare the SQL statement to delete the post
    $stmt = $connect->prepare("DELETE FROM post WHERE PostID = ?");
    $stmt->bindParam(1, $PostID, PDO::PARAM_STR);
    $stmt->execute();

    echo "Post and associated comments deleted successfully.";
} else {
    echo "No post found with the provided ID.";
}

header("Location: ./deleted_post_success.php");
// Close the database connection
include("./close_db.php");
?>