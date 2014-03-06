<?php include_once 'Portal_header.php'; ?>
<?php include_once 'portal_navbar.php'; ?>


		<div class="pane">
			<div id="home">Hello from home.</div>
			<div id="findEstate">This is Find Estate tab.</div>
			<div id="contactUs">This is Contact Us tab.</div>
			<div id="login">This is Login tab.</div>
			<div id="about">This is About tab.</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $("ul.portaltabs a").click(function() {
        $(".pane div").hide();
        $($(this).attr("href")).show();
    });
})
</script>

<center>
	<figure>
		<img alt="Home Page House" width="900" src="images/homepage6_img.jpg">
	</figure>
</center>

<?php include_once 'Portal_footer.php'; ?>
