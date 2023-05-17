<?php
session_start();
include("./connect_db.php");

// Assign submitted POST variables
$user_name = $_POST["user_name"];
$enter_password = $_POST["enter_password"];
$confirm_password = $_POST["confirm_password"];

// Check that the passwords match
if ($enter_password === $confirm_password) {
    // Create and encrypt a copy of the password 
    // In this exercise we are going to use sha1 encryption in its simplest form
    $crypted_pass = sha1($enter_password);

    // Prepare the SQL statement to select the user
    $stmt = $connect->prepare("select * from user where 
                        Username = :a 
                        and Password = :b") ;

    // Step 2. Execute the SQL statement
    $stmt->execute(array(
        ":a" => $user_name,
        ":b" => $crypted_pass
    ));


    // Only one row should be returned from this query
    if ($stmt->rowCount() === 1) {
        // Fetch the user as an associative array
        $a_row = $stmt->fetch(PDO::FETCH_ASSOC);
        // Set session variables to indicate authentication
        $_SESSION['UserID'] = $a_row['UserID'];
        $_SESSION['Username'] = $a_row['Username'];
        $_SESSION['roles'] = $a_row['roles'];
        
        // Assign submitted POST variables
        $UserID = $_SESSION['UserID'];

        // Check if the user exists in user table
        $stmt = $connect->prepare("SELECT * FROM user WHERE UserID = :UserID");
        $stmt->bindParam(':UserID', $UserID);
        $stmt->execute();
        // Only one row should be returned from this query
        if ($stmt->rowCount() === 1) {
            // Fetch the user as an associative array
            $status = $stmt->fetch(PDO::FETCH_ASSOC);
            // Set session variables to indicate authentication
            $_SESSION['status'] = $status['status'];

             // Define the status based on the action
             if ($status['status'] === 'ban') {
                include("./header.php") ;
                echo "You have been banned!. <br>";
                echo " Back to log in screen. "; ?>
                <a href='./login.php'>login page</a> 
                <?php	include("./footer.php") ;
              exit();
              
            } elseif ($status['status'] === 'suspend') {
                include("./header.php") ;
                    // Suspension period has not expired, show an error or a message indicating the remaining time
                    echo "You have been suspended for 5 mins. <br> Please wait until the suspension period is over.";
                    echo " Back to log in screen. "; ?>
                    <a href='./login.php'>login page</a> 
                <?php 
                 include("./footer.php") ;
              exit();

            } elseif ($status['status'] === 'unban') {
            }
        }

        // Assign submitted POST variables
        $user_status = 'online';
        $UserID = $_SESSION['UserID'];

        // Check if the user exists
        $stmt = $connect->prepare("SELECT UserID FROM user WHERE UserID = :UserID");
        $stmt->bindParam(':UserID', $UserID);
        $stmt->execute();
        $result = $stmt->fetch();

        if ($result) {
            // Update their status
            $UserStatus = $result['UserID'];
            $stmt = $connect->prepare("UPDATE user SET status = :status WHERE UserID = :UserID");
            $stmt->execute(array(
                ":status" => $user_status,
                ":UserID" => $UserID
            ));
        } else {
            // Insert a new user status
            $UserStatus = $result['UserID'];
            $stmt = $connect->prepare("INSERT INTO user (UserID, status) VALUES (:UserID, :status)");
            $stmt->execute(array(
                ":UserID" => $UserID,
                ":status" => $user_status
            ));
        }

        if ($a_row['roles'] === 'admin') {
            // Redirect to admin pages
            include("./admin_announcements.php");

            exit;
        } else if ($a_row['roles'] === 'user'){
            // Redirect to user pages
            include("./Announcement_user.php");
            exit;
        } else {
            // User is not authenticated, show error message
            echo "Invalid username or password.";
        }
    } 
}
else
{
    // Output message to the employee that the passowrd does not match 
    include("./header.php");
        ?>
        <!-- Add the page content -->
        <div class="container-fluid">
            <h6 style="text-align: left; color: blue; font-style:
            italic">The Admin Login</h6>
            <p style="text-align: left; color: black;">Oops - the 
            password you entered does not match, please try again
    
                                                                back button to retrun 
                                                                to the form and enter  
                                                                the password again.</p>
        </div> <!-- Container -->
        <?php
        include("./footer.php");
}
include("./close_db.php");
?>
