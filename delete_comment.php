<?php
session_start();
include("./connect_db.php");

// Check if an item has been added to the basket
$CommentID = $_POST['commentID'];

//prepare the SQL statement to retrieve the user ID based on the provided information
$stmt = $connect->prepare("SELECT CommentID FROM comments WHERE CommentID = ?");
$stmt->bindParam(1, $CommentID, PDO::PARAM_STR);

//execute the SQL statement and retrieve the customer ID
$stmt->execute();
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
if (!empty($result)) {
    $Commentid = $result[0]['CommentID'];
}
//store the customer ID in a session variable
$_SESSION['Commentid'] = $Commentid;


// prepare the SQL statement to update the order information
    $stmt = $connect->prepare("delete from comments 
                               where CommentID = :a ");
    // execute the SQL statement
    $stmt->execute(array(
        ":a" => $_SESSION['Commentid'],
    ));
$stmt->execute();

header("Location: ./deleted_comment_success.php");
// Close the database connection
include("./close_db.php");
?>