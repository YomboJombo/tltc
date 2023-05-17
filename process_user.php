<?php
session_start();
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
$Username = $_POST["name"];
$City = $_POST["city"];
$action = $_POST["action"];

// prepare the SQL statement to retrieve the order ID based on the provided information
$stmt = $connect->prepare("SELECT UserID FROM user WHERE Username = :Username OR City = :City");
$stmt->bindParam(':Username', $Username, PDO::PARAM_STR);
$stmt->bindParam(':City', $City, PDO::PARAM_STR);

// execute the SQL statement and retrieve the user ID
if ($stmt->execute()) {
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $UserID = $result['UserID'];
            

    } else {
        echo "No user found with username and city."; 
    }
}
   
        // prepare the SQL statement to update the user's status
        $stmt = $connect->prepare("UPDATE user SET status = :status WHERE UserID = :UserID");

        // bind parameters to the statement
        $stmt->bindParam(':UserID', $UserID);
        $stmt->bindParam(':status', $action);

        // execute the SQL statement to update the user's role
        ($stmt->execute()); 
        header("Location: ./view_users.php");
    


include("./close_db.php");