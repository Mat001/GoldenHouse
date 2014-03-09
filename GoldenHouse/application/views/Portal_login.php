<?php include_once 'Portal_header.php'; ?>
<?php include_once 'Portal_navbar.php';?>


<div align="center" id="container">

<h1>Login
    <div style="font-size: 0.40em">[agency employees only]</div>
</h1>

<?php 

// in form_open() specify in parameter the controller that handles validation and (/) 
// its function that will handle the validation!
// otherwise the form resubmits to the same url
echo form_open('Login_controller/loginValidation');

echo validation_errors();	// print validation errors if no email or passw or if one of them or both are incorrect

echo "<p> Email: ";
echo form_input('email');
echo "</p>";

echo "<p> Password: ";
echo form_password('password');
echo "</p>";

echo "<p>";
echo form_submit('login_submit', 'Login');
echo "</p>";

echo form_close();
?>

</div>

<?php include_once 'Portal_footer.php';?>
