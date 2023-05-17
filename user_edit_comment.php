<?php
include("./header_user.php") ;
include("./connect_db.php");
$user = $_SESSION['UserID'];
?>
  <!-- Add the page content container -->
	<div class="container-fluid">
		<h6 style="text-align: center; color: black; font-style: italic; font-size: 20px;">Edit comment page</h6>
		<p style="text-align: center; color: black;">Use this page to update your comment.</p>
	</div> <!-- Container -->
        <!-- General user info -->
        <p style="text-align: center; color: black; font-weight: bold;">update your comment.</p>

		<fieldset class="form-group">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <form action="update_comment.php" method="post">
                        <table class="table table-hover table-sm table-responsive">
                            <tr>
                            <?php
                            $stmt = $connect->prepare("SELECT * FROM comments WHERE UserID = ? ORDER BY CommentID DESC");
                            $stmt->bindParam(1, $user);

                            // Execute the statement
                            $stmt->execute();

                            // Fetch the result as an associative array
                            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                // Loop through each comment and display it
                                foreach ($result as $row) {
                                    $Comments_name = $row['Comments_Name'];
                                    $Comment_contents = $row['Comment_contents'];
                                    $Comments_datetime_stamp = $row['Comments_datetime_stamp'];
                                    $commentid = $row['CommentID'];
                                }
                                ?>
                                <div class="POST">
                                <label for="name">Enter the comment ID:</label>
                                <input type="number" name="commentid">
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
                                <label for="content">Comment:</label>
                                <textarea id="content" name="content" value="<?php echo  $Comment_contents; ?>"></textarea>
                                <small id="content" value="<?php echo   $Comments_datetime_stamp; ?>"></small>
                                <div style="text-align: center;"><button class="btn btn-primary" type="submit">Update your comment</button></div>
                                </div> <!-- Container -->
                                </tr>
                            </table>
                        </form>
                </div>
	        </div> <!-- Column container -->
        </fieldset> <!-- Fieldset -->

        <!-- General user info -->
        <p style="text-align: center; color: black; font-weight: bold;">update your comment.</p>
		<fieldset class="form-group">
        <div class="row justify-content-center">
            <div class="col-auto">
                <table class="table table-hover table-sm table-responsive">
                    <tr>
                    <?php
                    $stmt = $connect->prepare("SELECT * FROM comments WHERE UserID = ? ORDER BY CommentID DESC");
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
                        <label style="font-weight: bold;" for="name">The comment ID:</label>
                        <p type="" name=""><?php echo $row["CommentID"];?></p>
                        <label style="font-weight: bold;" for="">Name:</label>
                         <p><?php echo htmlspecialchars($row["Comments_Name"]); ?></p>
                        <label style="font-weight: bold;"  for="content">Comment:</label>
                        <p><?php echo htmlspecialchars($row["Comment_contents"]); ?></p>
                        <label style="font-weight: bold;"  for="content">Comment date and time:</label>
                        <p><?php echo htmlspecialchars($row["Comments_datetime_stamp"]); ?></p>
                        </div> <!-- Container -->
                        </td>
                    </tr>
                        <?php } ?>
                    </table>
	        </div> <!-- Column container -->
        </fieldset> <!-- Fieldset -->
<style>
  .POST {
  border: 1px solid #ccc;
  position: right;
  padding: 10px;
  margin-bottom: 10px;
}

.comment-user {
  font-weight: bold;
  margin-top: 10px;
}
.comment-name {
  font-weight: bold;
}

.comment-content {
  margin-top: 5px;
}

  </style>
  <?php

  include("./footer.php") ;
  ?>