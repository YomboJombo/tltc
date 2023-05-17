<?php
// Include header
include("./header_user.php");
?>
<!DOCTYPE html>
<html>
	<body>
		
		<!-- Add the page content container -->
		<div class="container-fluid">
			<h1 class="mt-5" style="text-align: center; color: black; font-size: 20px; font-weight: bold;">This is the Contact page.</h1>
            <p class="mt-5" style="text-align: center; color: black; font-size: 20px;">use it to find to contacts us.</p>
            <p class="mt-5" style="text-align: center; color: black; font-size: 20px;">Local Theatre Theatre, 13-29 Nicolson St, Edinburgh EH8 9FT <br>
            Call: 0112 123 1234 <br><br> Email: localtheatrecompany.com</p>
		</div>

        <p class="mt-5" style="text-align: center; color: black; font-size: 20px;">Location to Local Theatre</p>
    
    <iframe
        id="map"
        width="800" 
        height="600"
        style="border:0;"
        allowfullscreen=""
        frameborder="0"
        src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3069.611413364618!2d-3.186015123342175!3d55.946862230120935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x4887c78446b7b6c3%3A0x5e23e9643c8f09!2sEdinburgh%20Festival%20Theatre!3m2!1d55.946767799999996!2d-3.1859523!5e0!3m2!1sen!2suk!4v1684247363371!5m2!1sen!2suk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"   
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    
<style>
    #map {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
    }

</style>
	</body>
</html>
<?php
// Include footer
include("./footer.php");
?>