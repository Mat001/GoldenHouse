<!-- PORTAL FOOTER -->

<center>
	<h6>Copyright &copy; GoldenHouseLLC</h6>
</center>

<center>
<?php
$attributes = array(
    'width'     =>  '400',
    'height'    =>  '300',
    'scrollbars' => 'yes',
    'status'     => 'yes',
    'resizable'  => 'yes',
    'screenx'    => '600',
    'screeny'    => '250'
);
echo anchor_popup('Home_controller/terms', 'Terms and conditions', $attributes);
?>
</center>

</div>
</body>
</head>