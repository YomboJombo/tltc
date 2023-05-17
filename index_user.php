<?php
// Include header
include("./header_user.php") ;
// Access session data
if (isset($_SESSION['UserID'])) {
    echo "Welcome back, " . $_SESSION['UserID'];
} else {
    echo "Please log in";
}
?>
	<!-- Add the page content container -->
	<div class="container-fluid">
		<h1 class="mt-5" style="text-align: center; color: black; font-size: 20px; font-weight: bold;">Welcome to Local Theatre Company</h1>
		<p class="mt-5" style="text-align: center; color: black; font-size: 20px;">We are a threatre company that produces live shows, to entertain you!</p>
		<h2 class="mt-5" style="text-align: center; color: black; font-size: 20px; font-weight: bold;">Navigation </h2>
		<p class="mt-5" style="text-align: center; color: black; font-size: 20px;">please use the links on either the left side, or tabns abover. If you want to register click on the Register tab
		and fill in your information (Your must be a resgitsered user to comment on out posts). <br> Then once u are a registered user log into your account. <br>
		There are other additional links; Home where your are now is where you will find info about us, and what we do. <br> Posts view the latest news or updates on our side, and contacts, where you will find
		info regarding to contact us via email or phone, and locate our theatre.</p>
	</div> <!-- Container -->
	
<?php
// Include footer
include("./footer.php") ;
?>