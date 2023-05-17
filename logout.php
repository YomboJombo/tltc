<?php
include("./connect_db.php");
session_start();
$_SESSION = array();

// Assign the transferred POST variables from the form name="" variables.
$UserID = $_SESSION["UserID"];

// prepare the SQL statement to retrieve the order ID based on the provided information
$stmt = $connect->prepare("SELECT UserID FROM user WHERE UserID = :UserID");
$stmt->bindParam(':UserID', $UserID, PDO::PARAM_STR);

// execute the SQL statement and retrieve the user ID
if ($stmt->execute()) {
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $UserID = $result['UserID'];
    }
}

// prepare the SQL statement to retrieve the user status based on the provided information
$stmt = $connect->prepare("SELECT UserID FROM user WHERE UserID = :UserID");
$stmt->bindParam(':UserID', $UserID, PDO::PARAM_STR);

// execute the SQL statement and retrieve the user status
if ($stmt->execute()) {
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $UserStatus = $result['UserStatus'];
        $status = 'offline';
        
        // prepare the SQL statement to update the user's status
        $stmt = $connect->prepare("UPDATE user SET status = :status WHERE UserID = :UserID");

        // bind parameters to the statement
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':UserID', $UserID, PDO::PARAM_STR);

        // execute the SQL statement to update the user's status
        $stmt->execute(); 
    }
}

session_destroy(); // terminate the session
header('Location: login.php'); // redirect to the login page
include("./close_db.php");
?>

