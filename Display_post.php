<?php
include("./header.php") ;
// Connect to the database
include("./connect_db.php");
?>
<br>
<div class="container-fluid">
  <h1 style="text-align: center; color: black; font-style: italic;">Post and Updates</h1>
  <p style="text-align: center; color: black;">Authors posts</p>
  <link rel="stylesheet" type="text/css" href="style.css">
</div> <!-- Container -->

<!-- Add 2nd table container -->
<div class="row justify-content-center">
  <div class="col-auto">
    <table class="table table-hover table-sm table-responsive">
      <?php
      // Retrieve the posts from the database
      $stmt = $connect->prepare("SELECT post.Post_title, post.Post_content, post.Post_time_and_Date, comments.Comments_Name, comments.Comment_contents, comments.Comments_datetime_stamp, user.Username
                                  FROM post
                                  INNER JOIN comments ON comments.PostID = post.PostID
                                  INNER JOIN user ON user.UserID = comments.UserID
                                  ORDER BY post.PostID DESC;");

      // Step 2: execute the statement and produce an array of results									 
      $stmt->execute(array());

      while ($a_row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
        <th>Post</th>
    </tr>
    <tr>
      <td>
            <div id="post" class="post">
              <h2><?php echo $a_row["Post_title"];?></h2>
              <p><?php echo $a_row["Post_content"];?></p>
              <small><?php echo $a_row["Post_time_and_Date"];?></small>
            
          </td>
        </tr>
        <tr>
          <th>Comment</th>
        <tr>
      <td>
        <ul class="comments">
              <li class="comment-user"><?php echo $a_row["Username"];?></li>
              <li class="comment-name"><?php echo $a_row["Comments_Name"];?></li>
              <li class="comment-content"><?php echo $a_row["Comment_contents"];?></li>
              <li class="comment-content"><?php echo $a_row["Comments_datetime_stamp"];?></li>
        </ul> <!-- End of post container -->
      </div> <!-- End of post container -->
      </td>
        </tr>
      <?php } ?>
    </table>
  </div> <!-- End of column container -->
</div> <!-- End of row container -->

<style>

h2 {
  font-size: 24px;
  color: #333;
}

p {
  font-size: 16px;
  color: #555;
  margin-bottom: 10px;
}

.comments {
  list-style-type: none;
  padding: 0;
}

.comments li {
  font-size: 14px;
  color: #777;
  margin-bottom: 5px;
}


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
  include("./footer.php") ;
  include("./close_db.php") ;

