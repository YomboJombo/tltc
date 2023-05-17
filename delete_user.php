<?php
session_start();
include("./connect_db.php");

// Check if an item has been added to the basket
$UserID = $_POST['userid'];

//prepare the SQL statement to retrieve the user ID based on the provided information
$stmt = $connect->prepare("SELECT UserID FROM user WHERE UserID = ?");
$stmt->bindParam(1, $UserID, PDO::PARAM_STR);

//execute the SQL statement and retrieve the customer ID
$stmt->execute();
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
if (!empty($result)) {
    $UserID = $result[0]['UserID'];
}
//store the customer ID in a session variable
$_SESSION['UserID'] = $UserID;


// prepare the SQL statement to update the order information
$stmt = $connect->prepare("delete from comments 
where UserID = :a ");
// execute the SQL statement
$stmt->execute(array(
":a" => $_SESSION['UserID'],
));

// prepare the SQL statement to update the order information
    $stmt = $connect->prepare("delete from user 
                               where UserID = :a ");
    // execute the SQL statement
    $stmt->execute(array(
        ":a" => $_SESSION['UserID'],
    ));

header("Location: ./view_users.php");
// Close the database connection
include("./close_db.php");
?>