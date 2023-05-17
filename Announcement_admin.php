<?php
include("./header_admin.php");
// Connect to the database
include("./connect_db.php");
?>
<br>
<div class="container-fluid">
  <h1 style="text-align: center; color: black; font-style: italic;">Post and Updates</h1>
  <p style="text-align: center; color: black;">Authors posts</p>
</div> <!-- Container -->


<!-- Add 2nd table container -->
<div class="row justify-content-center">
  <div class="col-auto">
    <form action="add_comment.php" method="post">
      <table class="table table-hover table-sm table-responsive">
        <?php
        // Retrieve the posts from the database
        $stmt = $connect->prepare("SELECT * from post order by postID desc");

        // Step 2: execute the statement and produce an array of results									 
        $stmt->execute(array());
        ?>
        <?php
        // DO a loop to display all contents within the post table in db
        while ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {

          ?>
          <div class="post">
            <h2><?php echo htmlspecialchars($post["Post_title"]); ?></h2>
            <p><?php echo htmlspecialchars($post["Post_content"]); ?></p>
            <small><?php echo htmlspecialchars($post["Post_time_and_Date"]); ?></small>
            <br>
            <br> 
          </div> <!-- Container -->
        <?php } ?>
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
</style>
<?php
include("./footer.php");
include("./close_db.php");
?>

