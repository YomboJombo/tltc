<?php
session_start();
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
$Username = $_POST["username"];
$City = $_POST["City"];
$newrole = $_POST["role"];

// prepare the SQL statement to retrieve the order ID based on the provided information
$stmt = $connect->prepare("SELECT UserID FROM user WHERE Username = :Username OR City = :City");
$stmt->bindParam(':Username', $Username, PDO::PARAM_STR);
$stmt->bindParam(':City', $City, PDO::PARAM_STR);

// execute the SQL statement and retrieve the user ID
if ($stmt->execute()) {
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $UserID = $result['UserID'];

        // prepare the SQL statement to update the user's role
        $stmt = $connect->prepare("UPDATE user SET roles = :roles WHERE UserID = :UserID");

        // bind parameters to the statement
        $stmt->bindParam(':roles', $newrole);
        $stmt->bindParam(':UserID', $UserID);

        // execute the SQL statement to update the user's role
        ($stmt->execute()); 
        header("Location: ./view_users.php");

    } else {
        echo "No user found with username and city.";
    }
} else {
    echo "Error retrieving user ID: " . $stmt->errorInfo()[2];
}
include("./close_db.php");