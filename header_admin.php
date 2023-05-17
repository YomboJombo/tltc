<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  
  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  
	<script type="text/javascript" 
		src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart'],'language':'ru'}]}">
	</script>
	
	<link rel="stylesheet" type="text/css" href="style/mainstyle.css">
	
	<script type="text/javascript">


	//load api package
	google.load('visualization', '1', {packages: ['corechart']});
	
	</script>
  
  <title>the Local Theatre Company</title>
</head>

</head>
<body>

	<div class="container-fluid no-padding"> <!-- containers are 1200px wide with default 15px padding -->
		<div class="row">
		  <div class="col-md-12">

			<img class="img-fluid float-center img-responsive" src="img/theatre.jpg" alt="the Local Theatre Company header image, a view of the stage" width="100%"/>

		  </div> <!-- col -->
		</div> <!-- row -->
	</div><!-- container -->

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
		  <p class="list-group-item list-group-item-action bg-light" style="color: Maroon; ">Site Menu</p>
		  <a href="./index.php" class="list-group-item list-group-item-action bg-light" style="color: black; ">Home Page</a>
      <a href="./Logout.php" class="list-group-item list-group-item-action bg-light" style="color: black;">Logout</a>
      <a href="./Announcement_admin.php" class="list-group-item list-group-item-action bg-light" style="color: black;">Announcements</a>
      <a href="./edit_post.php" class="list-group-item list-group-item-action bg-light" style="color: black;">Edit announcements</a>
      <a href="./admin_announcements.php" class="list-group-item list-group-item-action bg-light" style="color: black;">Create Announcements</a>
      <a href="./admin_comment.php" class="list-group-item list-group-item-action bg-light" style="color: black;">Comment on announcements</a>
      <a href="./view_admins_announcements.php" class="list-group-item list-group-item-action bg-light" style="color: black;">View admins announcements</a>
      <a href="./view_users.php" class="list-group-item list-group-item-action bg-light" style="color: black;">View users</a>
      <a href="./contact_admin.php" class="list-group-item list-group-item-action bg-light" style="color: black;">Contacts</a>
      <a href="./users_comments.php" class="list-group-item list-group-item-action bg-light" style="color: black;">View users comments</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
	
    <!-- Navigation (RHS) Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-danger" id="menu-toggle"> Show/Hide Menu </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
				aria-controls="navbarSupportedContent" 
				aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="./index_admin.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="./admin_announcements.php">Create Announcements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="./Announcement_admin.php">Announcements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="./view_users.php">View users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="./users_comments.php">View users comments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="./contact_admin.php">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: black;" href="./Logout.php">Log out</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h3 class="mt-4" style="text-align: center; color: Maroon;">the Local Theatre Company</h3>
      </div>
</body>