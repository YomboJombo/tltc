<?php
session_start();
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
$userid = $_POST['userid'];
$user_name = $_POST["User_Name"] ;
$Address1 = $_POST["address_1"] ;
$Address2 = $_POST["address_2"] ;
$city = $_POST["city"] ;
$PostCode = $_POST["post_code"] ;
$Crypted_pass = sha1($_POST['pass']);

	
	// The entered passwords are identical
	// Proceed to update the record based on employee number
	// Step 1. - Prepare the SQL statement
	$stmt = $connect->prepare("update user set Username = :a, Address1 = :b, Address2 = :c, City = :d, Postcode = :e, Password = :f where UserID = :g");
	
	
	// Step 2. - Execute the SQL statement
	$stmt->execute(array(
		":a" => $user_name,
		":b" => $Address1,
		":c" => $Address2,
		":d" => $city,
        ":e" => $PostCode,
		":f" => $Crypted_pass,
		":g" => $userid
    ));
	// lead customer to log out
	header("Location: ./view_users.php");


// Close the database connection
include("./close_db.php") ;
?>
	

