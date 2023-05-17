<?php
// Include function
// Include connection to database
// Include header
include("./connect_db.php") ;

include("./header_admin.php") ;

?>
	<!-- Add the page content container -->
<div class="container-fluid">
		<h5 style="text-align: center; color: black; font-style: italic;">Deleted post success! <a href="./view_admins_announcements.php" class="list-group-item list-group-item-action bg-light" style="color: black;">Back to look at admin announcements?</a></h5>


<?php
// Include footer
// Close the database connection
include("./footer.php") ;

?>