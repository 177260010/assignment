<?php
include 'header.php';
if ($login <> 'false') {
    echo "You have already login to the site.<p>";
    echo "<a href='index.php'>Return to home page.</a>";
} else
    echo "
    <html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Login Page</title>
</head>
<body>
<div class=\"container\" style=\"margin-top:30px\">
    <div class=\"col-md-4 col-md-offset-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h3 class=\"panel-title\"><strong>Sign in </strong></h3>
            </div>

            <div class=\"panel-body\">
                <form role=\"form\" method='post' action='login_process.php'>
                    <div style=\"margin-bottom: 12px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"username\" value=\"\" placeholder=\"username or email\">
                    </div>

                    <div style=\"margin-bottom: 12px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                        <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"password\">
                    </div>

                    <div class=\"input-group\">
                        <div class=\"checkbox\" style=\"margin-top: 0px;\">
                            <label>
                                <input id=\"login-remember\" type=\"checkbox\" name=\"remember\" value=\"1\"> Remember me
                            </label>
                        </div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-success\">Sign in</button>

                    <hr style=\"margin-top:10px;margin-bottom:10px;\" >

                    <div class=\"form-group\">

                        <div style=\"font-size:85%\">
                            Don't have an account!
                            <a href=register.php onClick=\"$('#loginbox').hide(); $('#signupbox').show()\">
                                Sign Up Here
                            </a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
    "

?>



