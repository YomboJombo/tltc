<?php
// Include function
// Include connection to database
// Include header
include("./connect_db.php") ;

include("./header_admin.php") ;

?>

	
	<!-- Add the page content container -->
	<div class="container-fluid">
		<h5 style="text-align: center; color: black; font-style: italic;">All current users and admins that are resgistered.</h5>
	</div> <!-- Container -->
	<br>
	

	<!-- Add the table container -->
<div class="row justify-content-center">
	<div class="col-auto">
		<fieldset class="form-group">
			<table class="table table-hover table-sm table-responsive" id="Customers">

				<thead>
					<tr>
						<th style="font-weight: bold;"></th>
						<th style="font-weight: bold;">role</th>
						<th style="font-weight: bold;">User Status</th>
						<th style="font-weight: bold;">User ID</th>
						<th style="font-weight: bold;">User Name</th>
						<th style="font-weight: bold;">Address 1</th>
						<th style="font-weight: bold;">Address 2</th>
						<th style="font-weight: bold;">City</th>
						<th style="font-weight: bold;">Postcode</th>
					</tr>
				</thead>

				<?php
				// Step 1: prepare the statement to list all the employees
				$stmt=$connect->prepare("select * from user
										where user.roles = 'admin'") ;

				// Step 2: execute the statement and produce an array of results									 
				$stmt->execute(array());
				?>				
				
				<!-- The employee table content -->
				<?php
				// Loop through the array assigning one row at a 
				// time to the $a_row variable
				// loop continues while rows exist!
				while ($a_row = $stmt->fetch(PDO::FETCH_ASSOC)){

				// Display the table contents here?>
			<thead class="thead-silver">
				<form action="update_or_delete_user.php" method="POST">
					<tr>
						<td><button type="submit">Edit or delete user</button></td>
						<td><?php echo $a_row["roles"];?></td>
						<td><input type="" name="ID" value="<?php echo $a_row['status']; ?>"></td>
						<td><input type="" name="ID" value="<?php echo $a_row['UserID']; ?>"></td>
						<td><input type="" name="user_name" value="<?php echo $a_row['Username']; ?>"></td> 
						<td><input type="" name="FirstName" value="<?php echo $a_row['Address1']; ?>"></td> 
						<td><input type="" name="LastName" value="<?php echo $a_row['Address2']; ?>"></td> 
						<td><input type="" name="dob" value="<?php echo $a_row['City']; ?>"></td> 
						<td><input type="" name="Address1" value="<?php echo $a_row['Postcode']; ?>"></td> 

					  	<?php }	// End of while loop
				  		?>
				  	</tr>
				</form>
			</thead>
		</table>
	</fieldset>
</div> <!-- Container -->
</div> <!-- Row container -->

<!-- Add the table container -->
<div class="row justify-content-center">
	<div class="col-auto">
		<fieldset class="form-group">
			<table class="table table-hover table-sm table-responsive" id="Customers">

				<thead>
					<tr>
						<th style="font-weight: bold;"></th>
						<th style="font-weight: bold;">role</th>
						<th style="font-weight: bold;">status</th>
						<th style="font-weight: bold;">User ID</th>
						<th style="font-weight: bold;">User Name</th>
						<th style="font-weight: bold;">Address 1</th>
						<th style="font-weight: bold;">Address 2</th>
						<th style="font-weight: bold;">City</th>
						<th style="font-weight: bold;">Postcode</th>
					</tr>
				</thead>

				<?php
				// Step 1: prepare the statement to list all the employees
				$stmt=$connect->prepare("select * from user
										where user.roles = 'user'") ;

				// Step 2: execute the statement and produce an array of results									 
				$stmt->execute(array());
				?>				
				
				<!-- The employee table content -->
				<?php
				// Loop through the array assigning one row at a 
				// time to the $a_row variable
				// loop continues while rows exist!
				while ($a_row = $stmt->fetch(PDO::FETCH_ASSOC)){

				// Display the table contents here?>
			<thead class="thead-silver">
				<form action="update_or_delete_user.php" method="POST">
					<tr>
						<td><button type="submit">Edit or delete user</button></td>
						<td><?php echo $a_row["roles"];?></td>
						<td><input type="" name="ID" value="<?php echo $a_row['status']; ?>"></td>
						<td><input type="" name="ID" value="<?php echo $a_row['UserID']; ?>"></td>
						<td><input type="" name="user_name" value="<?php echo $a_row['Username']; ?>"></td> 
						<td><input type="" name="FirstName" value="<?php echo $a_row['Address1']; ?>"></td> 
						<td><input type="" name="LastName" value="<?php echo $a_row['Address2']; ?>"></td> 
						<td><input type="" name="dob" value="<?php echo $a_row['City']; ?>"></td> 
						<td><input type="" name="Address1" value="<?php echo $a_row['Postcode']; ?>"></td> 

					  	<?php }	// End of while loop
				  		?>
				  	</tr>
				</form>
			</thead>
		</table>
	</fieldset>
</div> <!-- Container -->
</div> <!-- Row container -->

<style>
.button {
  display: block;
  width: 100px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  background-color: #5A5A5A;
  color: #FFFFFF;
  border-radius: 5px;
  margin: 0 auto;
}
</style>

<?php
// Include footer
// Close the database connection
include("./footer.php") ;

include("./close_db.php") ; 
?>