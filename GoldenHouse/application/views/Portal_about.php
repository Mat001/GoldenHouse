<?php //include_once 'Portal_header.php'; ?>
<?php //include_once 'portal_navbar.php';?>
<!-- 
<center>
<div id="content" style="background-color:#EEEEEE;height:200px;width:650px;">

	<p align="center">GoldenHouse is a family owned real estate agency since 1965.</br>
	We are prod to have three generations of family members actively involved in the business.</br></br>
	Our speciality is high quality homes. We have extremely rigorous standards of property assessment.</br></br>
	To buyers we guarantee that the price will reflect real value of the property.</br>
	To sellers we guarantee that we will find buyers that want exactly what you offer.</br>
</p>
</div>
</center>
 -->

<?php //include_once 'Portal_footer.php';?>

<!DOCTYPE html>

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>About Golden House</title>
     <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_home.css">
     <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_about.css">   
</head>

<body>

    <header class=center>
        <h1>Golden House LLC</h1>
    </header>       
    

    <nav class=center>
	<ul>
		<li><a href="<?php echo base_url(); ?>Home_controller">Home</a></li>
		<li><a href="<?php echo base_url(); ?>FindEstate_controller">Find Estate</a></li>
		<li><a href="<?php echo base_url(); ?>Home_controller/ContactUs">Contact Us</a></li>
		<li><a href="<?php echo base_url(); ?>Home_controller/About">About</a></li>
	</ul>
    </nav>

    <section>
        <h2>Find your Dreamhome</h2>
        <article>
            <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel 
            eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan 
            et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta 
            nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus 
            legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam 
            processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, 
            anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, 
            fiant sollemnes in futurum.
            </p>        
        </article>   
            <h2>Philosophy</h2>
        <article>
            <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel 
            eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan 
            et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta 
            nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus 
            legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam 
            processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, 
            anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, 
            fiant sollemnes in futurum.
            </p>
        </article>
            <h2>What Our Customers Say</h2>
        <article>
            <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel 
            eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan 
            et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta 
            nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus 
            legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam 
            processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, 
            anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, 
            fiant sollemnes in futurum.
            </p>        
        </article>   
    </section>
    


    <footer class=center>
        <h6>Copyright 2014 &copy; GoldenHouseLLC  |  
        <?php
		$attributes = array (
		'width' => '750',
		'height' => '400',
		'scrollbars' => 'yes',
		'status' => 'yes',
		'resizable' => 'yes',
		'screenx' => '600',
		'screeny' => '250' 
		);

		echo anchor_popup ( 'Home_controller/terms', 'Terms and Conditions', $attributes );
		?>
        |  <a style="color:#8B6914" href="<?php echo base_url(); ?>Login_controller">Agency Login</a></h6>
        
    </footer>
    
</body>
</html>