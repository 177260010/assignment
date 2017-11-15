<?php
include('header.php');

if ($login <> 'true') {
    echo 'Please Login First';
} else {

    include('sql.php');
    $userid = $_SESSION['userid'];
    $mysqli = ConnectDB();

    $sql = "SELECT * FROM user WHERE id ='$userid'";

    $result = $mysqli->query($sql);

    $row = $result->fetch_object();

    $username = $row->username;
    $email = $row->email;
    $fname = $row->f_name;
    $lname = $row->l_name;
    $tel = $row->tel;


    echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Register</title>
</head>
<body>
<div class=\"container\">
    <h1 class=\"well\">User Information</h1>
	<div class=\"col-lg-12 well\">
	<div class=\"row\">
				<form action='register_process.php' method='post'>
				<div class=\"col-sm-12 form-group\">
					<label>User Name</label>
					<input type=\"text\" value=\"$username\" class=\"form-control\" name='username' readonly>
				</div>
				<div class=\"col-sm-12 form-group\">
					<label>Email Address</label>
					<input type=\"email\" value=\"$email\" class=\"form-control\" name='email' readonly>
				</div>
				<div class=\"col-sm-12 form-group\">
					<label>Current Password</label>
					<input type=\"password\" placeholder=\"Enter Password Here..\" class=\"form-control\" name='password'>
				</div>
				<div class=\"col-sm-12 form-group\">
					<label>New Password</label>
					<input type=\"password\" placeholder=\"Confirm Password Here..\" class=\"form-control\">
				</div>
				<div class=\"col-sm-12 form-group\">
					<label>Confirm New Password</label>
					<input type=\"password\" placeholder=\"Confirm Password Here..\" class=\"form-control\">
				</div>
					<div class=\"col-sm-12\">
						<div class=\"row\">
							<div class=\"col-sm-6 form-group\">
								<label>First Name</label>
								<input type=\"text\" value=\"$fname\" placeholder=\"Enter First Name Here..\" class=\"form-control\" name='fname'>
							</div>
							<div class=\"col-sm-6 form-group\">
								<label>Last Name</label>
								<input type=\"text\" value=\"$lname\" placeholder=\"Enter Last Name Here..\" class=\"form-control\" name='lname'>
							</div>
						</div>						
					<div class=\"form-group\">
						<label>Phone Number</label>
						<input type=\"text\" value=\"$tel\" placeholder=\"Enter Phone Number Here..\" class=\"form-control\" name='tel'>
					</div>		
					
					<button type=\"submit\" class=\"btn btn-lg btn-info\">Update</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
</body>
</html>";
}
?>