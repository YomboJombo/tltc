<?php
// Include function
// Include connection to database
// Include header
include("./connect_db.php") ;

include("./header_admin.php") ;

?>
	<!-- Add the page content container -->
<div class="container-fluid">
		<h5 style="text-align: center; color: black; font-style: italic;">All users comments</h5>
    <br>
<br>
<br>

<!-- Add 2nd table container -->
<div class="row justify-content-center">
  <div class="col-auto">
    <form action="delete_comment.php" method="POST">
      <table class="table table-hover table-sm table-responsive">
        <div class="form-group">
          <label class="form-control-label" for="commentID" style="font-weight: bold;">Enter the usres comment ID:</label>
          <input class="form-control" style="width: 50%;" type="number" id="commentID" name="commentID" placeholder="Type in the user name" required>
          <button type="submit">Delete</button>
        </div>

        <?php
            // execute the statement and produce an array of results									 
              $stmt = $connect->prepare("SELECT comments.CommentID, comments.Comment_contents, comments.Comments_datetime_stamp, user.Username
              FROM user 
              JOIN comments ON comments.UserID = user.UserID 
              order by comments.CommentID desc");
              // executre the statement
              $stmt->execute(array());
              // DO a loop to display all contents within the comments table in db
              while ($comment = $stmt->fetch(PDO::FETCH_ASSOC)){
              // this variable is giong to hold the Userid that is in the post table in db to display 
              // the comments that is associated to the post
             ?>
  
            <div class="post">
                <h3 style="text-align: center; color: black; font-style: italic;">CommentID:</h5>
                <p><?php echo $comment["CommentID"]; ?></p>
                <h3 style="text-align: center; color: black; font-style: italic;">Users name:</h5>
                <p><?php echo $comment["Username"]; ?></p>
                <p style="text-align: center; color: black; font-style: italic;">Their comments:</p>
                <p><?php echo $comment["Comment_contents"]; ?></p>
                <br>
                <small><?php echo $comment["Comments_datetime_stamp"]; ?></small>
              </div>


            <?php } ?>
          </div> <!-- Container -->

        </table>
    </form>
  </div> <!-- Column container -->
</div> <!-- Row container -->

<style>
  .post {
    display: block;
    border: 3px solid #ccc;
    padding: 10px;
    margin: 30px;
    width: 500px;
    text-align: center;
  }

  .post h2 {
    font-size: 2.0em;
    margin-bottom: 10px;
  }

  .post p {
    font-size: 1.2em;
    margin-bottom: 10px;
  }

  .post small {
    font-size: 1.1em;
    margin-bottom: 10px;
  }

<?php
// Include footer
// Close the database connection
include("./footer.php") ;

include("./close_db.php") ; 
?>