<?php
session_start();
// connect to databse
include("./connect_db.php") ;

// Assign the transferred POST variables from the form name="" variables.
// Cusotmer info variables
$user_name = $_REQUEST["user_name"] ;
$address1 = $_REQUEST["address1"] ;
$address2 = $_REQUEST["address2"] ;
$city = $_REQUEST["city"] ;
$postcode = $_REQUEST["postcode"] ;
// Initiate role
$roles = 'user';
// Initiate role
$status = 'offline';
// Password variables 
$enter_password = $_REQUEST["enter_password"] ;
$confirm_password = $_REQUEST["confirm_password"] ;

// Create adn encrypt a copy of the password 
// In this exercise we are going to use shal encryption in its simplest form
$crypted_pass = sha1($enter_password);

// Check that the passwords entered match.
if ($enter_password == $confirm_password)
{
	
	// PDO statement for the insert row requirement, 
	// defends against SQL injection attack by using parameterised values.
	// Step 1. - Prepare the SQL statement
	// Customer table
	$stmt = $connect->prepare("insert into user (Username, Address1, Address2, City, Postcode, Roles, Password) 
												values (:a, :b, :c, :d, :e, '$roles', :f) ");

	// Step 2. - Execute the SQL statement
	// for Customer 
	$stmt->execute(array(
		":a" => $user_name,
		":b" => $address1,
		":c" => $address2,
		":d" => $city,
		":e" => $postcode,
		":f" => $crypted_pass
	));
// Get the inserted user ID
// $user_id = $connect->lastInsertId();

header("Location: ./login.php") ;
}
else
{
	// Output message to the employee that the passwords do not match
	include("./header.php") ;
	?>
	<!-- Add the page content container -->
	<div class="container-fluid">
		<h6 style="text-align: left; color: blue; font-style: italic;">Add a User</h6>
		<p style="text-align: left; color: black;">Oops - the passwords you have entered do not match, please use your browser 
													back button to return to the form and enter the passwords again.</p>
	</div> <!-- Container -->
	<?php
	//Inlcude teh footer
	include("./footer.php") ;
}

// Close the database connection
include("./close_db.php") ;

?>

