<?php
include('header.php');

if ($login <> 'user') {
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
    <title>User Edit</title>
</head>
<body>
<div class=\"container\">
    <h1 class=\"well\">User Information</h1>
	<div class=\"col-lg-12 well\">
	<div class=\"row\">
				<form action='user_edit_process.php' method='post' onsubmit='return passwordcheck()'>
				<div class=\"col-sm-12 form-group\">";

if ((isset($_POST['return']))){
    $return = $_POST['return'];
    switch ($return) {

        case 'ok':
            echo "<label style='color: green'>Update Success</label></p>";
            break;

        case 'passwordfail':
            echo "<label style='color: red'>Password Incorrect</label></p>";
            break;


        case 'fail':
            echo "<label style='color: red'>Edit Fail</label></p>";

    }
}

    echo "<label>User Name</label>
					<input type=\"text\" value=\"$username\" class=\"form-control\" name='username' readonly>
				</div>
				<div class=\"col-sm-12 form-group\">
					<label>Email Address</label>
					<input type=\"email\" value=\"$email\" class=\"form-control\" name='email' readonly>
				</div>
				<div class=\"col-sm-12 form-group\">
					<label>Current Password</label>
					<input type=\"password\" placeholder=\"Enter Password Here..\" class=\"form-control\" name='password' required>
				</div>
				<div class=\"col-sm-12 form-group\">
					<label>New Password</label>
					<input type=\"password\" placeholder=\"Confirm Password Here..\" class=\"form-control\" name='newpassword' id='newpassword'>
				</div>
				<div class=\"col-sm-12 form-group\">
					<label>Confirm New Password</label>
					<input type=\"password\" placeholder=\"Confirm Password Here..\" class=\"form-control\" id='newpassword2'>
				</div>
					<div class=\"col-sm-12\">
						<div class=\"row\">
							<div class=\"col-sm-6 form-group\">
								<label>First Name</label>
								<input type=\"text\" value=\"$fname\" placeholder=\"Enter First Name Here..\" class=\"form-control\" name='fname' required>
							</div>
							<div class=\"col-sm-6 form-group\">
								<label>Last Name</label>
								<input type=\"text\" value=\"$lname\" placeholder=\"Enter Last Name Here..\" class=\"form-control\" name='lname' required>
							</div>
						</div>						
					<div class=\"form-group\">
						<label>Phone Number</label>
						<input type=\"text\" value=\"$tel\" placeholder=\"Enter Phone Number Here..\" class=\"form-control\" name='tel' required>
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

echo "<script type='text/javascript'>
checkfield();
</script>;"
?>


<html>
<script type="text/javascript">
    function checkfield() {
        var pass1 = document.getElementById("newpassword").value;
        var pass2 = document.getElementById("newpassword2").value;
        var ok = true;
        if (pass1 != pass2) {
            alert("Passwords Do not match");
            document.getElementById("newpassword").style.borderColor = "#E34234";
            document.getElementById("newpassword2").style.borderColor = "#E34234";
            ok = false;
        }
        return ok;
    }
</script>
</html>
