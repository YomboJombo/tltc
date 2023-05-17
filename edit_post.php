<?php
include("./header_admin.php") ;
include("./connect_db.php");
$user = $_SESSION['UserID'];
?>
  <!-- Add the page content container -->
	<div class="container-fluid">
		<h6 style="text-align: center; color: black; font-style: italic; font-size: 20px;">Edit Annoucement page</h6>
		<p style="text-align: center; color: black;">Use this page to update your Post.</p>
	</div> <!-- Container -->

        <!-- General user info -->
        <p style="text-align: center; color: black; font-weight: bold;">update your Post.</p>

		    <fieldset class="form-group">
                <div class="row justify-content-center">
                    <div class="col-auto">
                    <form action="update_announcement.php" method="post">
                    <table class="table table-hover table-sm table-responsive">
                        <tr>
                        <?php
                        $stmt = $connect->prepare("SELECT * FROM post WHERE UserID = ? ORDER BY PostID DESC");
                        $stmt->bindParam(1, $user);

                        // Execute the statement
                        $stmt->execute();

                        // Fetch the result as an associative array
                        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            // Loop through each comment and display it
                            foreach ($result as $row) {
                                $Post_title = $row['Post_title'];
                                $Post_content = $row['Post_content'];
                                $Post_time_and_Date = $row['Post_time_and_Date'];
                                $UserID = $row['UserID'];
                            }
                            ?>
                            <div class="POST">
                            <label for="name">Enter the Post ID:</label>
                            <input type="number" name="postid">
                            <br>
                            <div>
                            <label for="name">Your ID:</label>
                            <br>
                            <input type="" name="" value="<?php echo $user; ?>">
                            <br>
                            <label for="name">Name:</label>
                            <br>
                            <input type="text" id="name" name="Name">
                            <br>
                            <label for="content">Post:</label>
                            <textarea id="content" name="content" value="<?php echo  $Post_content; ?>"></textarea>
                            <small id="content" value="<?php echo   $Post_time_and_Date; ?>"></small>
                            <div style="text-align: center;"><button class="btn btn-primary" type="submit">Update your post</button></div>
                            </div> <!-- Container -->
                            </tr>
                            </form>
                        </table>
                </div> <!-- Column container -->
        </fieldset> <!-- Fieldset -->

        <!-- General user info -->
        <p style="text-align: center; color: black; font-weight: bold;">Here are your post.</p>
		<fieldset class="form-group">
        <div class="row justify-content-center">
            <div class="col-auto">
                <table class="table table-hover table-sm table-responsive">
                    <tr>
                        <td> 
                            <?php
                            $stmt = $connect->prepare("SELECT * FROM post WHERE UserID = ? ORDER BY PostID DESC");
                            $stmt->bindParam(1, $user);

                            // Execute the statement
                            $stmt->execute();

                            // Fetch the result as an associative array
                            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                // Loop through each comment and display it
                                foreach ($result as $row) {
                                
                                ?>
                               <tr>
                                <td> 
                                <div class="POST">
                                <label style="font-weight: bold;" for="name">The post ID:</label>
                                <p type="" name=""><?php echo $row["PostID"];?></p>
                                <label style="font-weight: bold;" for="">Name:</label>
                                <p><?php echo htmlspecialchars($row["Post_title"]); ?></p>
                                <label style="font-weight: bold;"  for="content">Comment:</label>
                                <p><?php echo htmlspecialchars($row["Post_content"]); ?></p>
                                <label style="font-weight: bold;"  for="content">Comment date and time:</label>
                                <p><?php echo htmlspecialchars($row["Post_time_and_Date"]); ?></p>
                                </div> <!-- Container -->
                                <?php } ?>
                        </td> 
                    </tr>
                    </table>
                </div>
	        </div> <!-- Column container -->
        </fieldset> <!-- Fieldset -->
    <style>
        .POST {
  border: 1px solid #ccc;
  position: right;
  padding: 10px;
  margin-bottom: 10px;
}
</style>

  <?php

  include("./footer.php") ;
  ?>