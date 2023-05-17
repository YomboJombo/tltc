<?php 
include("./header_admin.php");
// connect to connect_db.php
include("./connect_db.php");
?> 

    <!-- Add teh page content container -->
    <div class="container-fluid">
        <h6 style="text-align: center; color: black; font-style: italic;">edit user</h6>
    </div> <!-- Container -->

<tbody>
<table>
<div class="container-fluid">
	  <form action="process_user_information.php" method="POST">

        <!-- General user info -->
        <p style="text-align: left; color: black;">Update users general information</p>
        <p style="text-align: left; color: black; font-weight: bold;">update user information.</p>
		<fieldset class="form-group">
        <div class="form-group">
            <label class="form-control-label" for="userid" style="font-weight: bold;">Enter the users ID:</label>
            <input class="form-control" type="number" id="userid" name="userid">
          </div>
        <div class="form-group">
            <label class="form-control-label" for="User_Name" style="font-weight: bold;">User Name:</label>
            <input class="form-control" type="text" id="User_Name" name="User_Name">
          </div>

		  <div class="form-group">
            <label class="form-control-label" for="address_1" style="font-weight: bold;">Address 1:</label>
            <input class="form-control" type="text" style="width: 250px ;" id="address_1" name="address_1">
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="address_2" style="font-weight: bold;">Address 2:</label>
            <input class="form-control" type="text" id="address_2" name="address_2">
          </div>
          <div class="form-group">
            <label class="form-control-label" for="city" style="font-weight: bold;">City:</label>
            <input class="form-control" type="text" id="city" name="city">
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="post_code" style="font-weight: bold;">Post Code:</label>
            <input class="form-control" type="text" style="width: 250px ;" id="post_code" name="post_code">
        </div>
        <div class="form-group">
            <label class="form-control-label" for="pass" style="font-weight: bold;">Enter the same or update your password:</label>
            <input class="form-control" type="text" id="pass" name="pass" placeholder="Enter your password" required>
          </div>
          <input type="hidden" name="CustomerID">
        </fieldset> <!-- Fieldset -->
    
         <div style="text-align: center;"><button class="btn btn-primary" type="submit">Update general information</button></div>
	      </form> <!-- Form -->
	    </div> <!-- Container -->
<br>
<br>
<br>
    <!-- Add the form container -->
    <div class="container-fluid">
        <p>Who do you want to recieve this role?</p>
        <form action="process_update_user.php" method="POST">
            <fieldset class="form-group">
                <div class="form-group">
                    <label class="form-control-label" for="username" style="font-weight: bold;">Enter username</label>
                    <input class="form-control" style="width: 50%;" type="text" id="username" name="username" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="City" style="font-weight: bold;">Enter users City:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="City" name="City" required>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="role" style="font-weight: bold;">Enter a role for the user:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="role" name="role" required>
                </div>
              </fieldset> <!-- Feildset-->
            <!-- The form button -->
            <div style="text-align: center;">
                 <button class="btn btn-primary" type="submit">submit</button>
            <div>
        </form> <!-- Form-->
    </div>

    <!-- update user -->
    <div class="container-fluid">
        <p style="text-align: left; color: black; font-weight: bold;">Set a user to be either ban, unban, or suspended</p>
            <form action="process_user.php" method="POST">
                <fieldset class="form-group">
                    <div class="form-group">
                        <label class="form-control-label" for="name" style="font-weight: bold;">enter users username:</label>
                        <input class="form-control" type="text" id="name" name="name"  >
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="city" style="font-weight: bold;">enter ursers city:</label>
                        <input class="form-control" type="text" id="city" name="city"  >
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="action" style="font-weight: bold;">Enter ban, unban, or suspend:</label>
                        <input class="form-control" type="text" id="action" name="action"  >
                    </div>
                </fieldset> <!-- Fieldset -->
    
                <div style="text-align: center;"><button class="btn btn-primary" type="submit">Submit</button></div>
	      </form> <!-- Form -->
        </div> <!-- Container -->
            <!-- update user -->
    <div class="container-fluid">
        <p style="text-align: left; color: black; font-weight: bold;">DELETE USER?</p>
            <form action="delete_user.php" method="POST">
                <fieldset class="form-group">
                    <div class="form-group">
                        <label class="form-control-label" for="userid" style="font-weight: bold;">enter users ID:</label>
                        <input class="form-control" type="number" id="userid" name="userid"  >
                </fieldset> <!-- Fieldset -->
    
                <div style="text-align: center;"><button class="btn btn-primary" type="submit">Submit</button></div>
	      </form> <!-- Form -->
        </div> <!-- Container -->
    </table>
</tbody>
<?php
include("./footer.php")
?>  
	

