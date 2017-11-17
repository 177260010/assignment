<?php
include 'header.php';

if ($login <> 'false') {
    echo "You have already login to the site.<p>";
    echo "<a href='index.php'>Return to home page.</a>";

} else{
    echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Register</title>
</head>
<body>
<div class=\"container\">
    <h1 class=\"well\">Registration Form</h1>
	<div class=\"col-lg-12 well\">
	<div class=\"row\">
				<form action='register_process.php'  onsubmit='return passwordcheck()' method='post'>
				<div class=\"col-sm-12 form-group\">";

if (isset($_POST['regfail'])) {
    echo "<label style='color: red'>Registration Fail</label></p>";
}
				echo
                "<label>User Name</label>
					<input type=\"text\" placeholder=\"Enter Username Here..\" class=\"form-control\" name='username' required>
				</div>
				<div class=\"col-sm-12 form-group\">
					<label>Email Address</label>
					<input type=\"email\" placeholder=\"Enter Email Address Here..\" class=\"form-control\" name='email' required>
				</div>
				<div class=\"col-sm-12 form-group\">
					<label>Password</label>
					<input type=\"password\" placeholder=\"Enter Password Here..\" class=\"form-control\" name='password' id='password' required>
				</div>
				<div class=\"col-sm-12 form-group\">
					<label>Confirm Password</label>
					<input type=\"password\" placeholder=\"Confirm Password Here..\" class=\"form-control\" id='password2' required>
				</div>
					<div class=\"col-sm-12\">
						<div class=\"row\">
							<div class=\"col-sm-6 form-group\">
								<label>First Name</label>
								<input type=\"text\" placeholder=\"Enter First Name Here..\" class=\"form-control\" name='fname' required>
							</div>
							<div class=\"col-sm-6 form-group\">
								<label>Last Name</label>
								<input type=\"text\" placeholder=\"Enter Last Name Here..\" class=\"form-control\" name='lname' required>
							</div>
						</div>						
					<div class=\"form-group\">
						<label>Phone Number</label>
						<input type=\"text\" placeholder=\"Enter Phone Number Here..\" class=\"form-control\" name='tel' required>
					</div>		
					
					<button type=\"submit\" class=\"btn btn-lg btn-info\">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
</body>
</html>";

echo "<script type='text/javascript'>
checkfield();
</script>;";
}
?>

<html>
<script type="text/javascript">
    function passwordcheck() {
        var pass1 = document.getElementById("password").value;
        var pass2 = document.getElementById("password2").value;
        var ok = true;
        if (pass1 != pass2) {
            alert("Passwords Do not match");
            document.getElementById("password").style.borderColor = "#E34234";
            document.getElementById("password2").style.borderColor = "#E34234";
            ok = false;
        }
        return ok;
    }
</script>
</html>