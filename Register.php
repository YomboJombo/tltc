<?php
include("./header.php") ;
include("./connect_db.php");
?>    
    <!-- Add teh page content container -->
    <div class="container-fluid">
        <h6 style="text-align: center; color: black; font-style: italic;">Register page</h6>
        <p style="text-align: center; color: black;">Once you have finished filling your details bellow click the "Register" button.</p>
    </div> <!-- Container -->

    <!-- Add the form container -->
    <div class="container-fluid">
        <form action="process_register.php" method="POST">
            <fieldset class="form-group">

                <!-- General Info -->
                <div class="form-group">
                    <label class="form-control-label" for="user_name" style="font-weight: bold;">UserName:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="user_name" name="user_name" placeholder="Type in the user name" required>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="address1" style="font-weight: bold;">address 1:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="address1" name="address1" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="address2" style="font-weight: bold;">address 2:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="address2" name="address2" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="city" style="font-weight: bold;">City</label>
                    <input class="form-control" style="width: 50%;" type="text" id="city" name="city" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="postcode" style="font-weight: bold;">Post Code:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="postcode" name="postcode" placeholder="" required>
                </div>
                
                <!-- Password -->
                <div class="form-group">
                    <label class="form-control-label" for="enter_password" style="font-weight: bold;">Enter Password :</label>
                    <input class="form-control" style="width: 50%;" type="text" id="enter_password" name="enter_password" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="confirm_password" style="font-weight: bold;">Confirm Password:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="confirm_password" name="confirm_password" placeholder="" required>
                </div> 
                </fieldset> <!-- Feildset-->

            <!-- The form button -->
            <div style="text-align: center;"><button class="btn btn-success" id="submit">Register</button></div>
        </form> <!-- Form-->
    </div> <!-- Container -->
</html>   
<?php
include("./footer.php") ;
?>