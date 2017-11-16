<?php
include 'header.php';

if ($login <> 'userg') {
    echo 'Please Login First.<p>';
    echo "<a href='login.php'>login.</a>";

} else echo "

<html>
<title>Vehicle Booking</title>
<body>
<div class='container'>
    <form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend>Booking Form</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"name\">Car Type</label>  
  <div class=\"col-md-4\">
  <input id=\"cartype\" name=\"cartype\" type=\"text\" placeholder=\"Enter your name\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Email</label>  
  <div class=\"col-md-4\">
  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Enter your email id\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Password input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"password\">Password</label>
  <div class=\"col-md-4\">
    <input id=\"password\" name=\"password\" type=\"password\" placeholder=\"Enter a password\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"contact\">Contact no.</label>  
  <div class=\"col-md-4\">
  <input id=\"contact\" name=\"contact\" type=\"text\" placeholder=\"Enter your contact no.\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"blood_group\">Blood Group</label>
  <div class=\"col-md-4\">
    <select id=\"blood_group\" name=\"blood_group\" class=\"form-control\">
      <option value=\"-1\">Select</option>
      <option value=\"1\">A+</option>
      <option value=\"2\">B+</option>
      <option value=\"3\">AB+</option>
      <option value=\"4\">O+</option>
      <option value=\"5\">A-</option>
      <option value=\"6\">B-</option>
      <option value=\"7\">AB-</option>
      <option value=\"8\">O-</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"street\">Street</label>  
  <div class=\"col-md-4\">
  <input id=\"street\" name=\"street\" type=\"text\" placeholder=\"Enter your street\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"area\">Area</label>  
  <div class=\"col-md-4\">
  <input id=\"area\" name=\"area\" type=\"text\" placeholder=\"Enter your area\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"city\">City</label>  
  <div class=\"col-md-4\">
  <input id=\"city\" name=\"city\" type=\"text\" placeholder=\"Enter your city\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"dist\">District</label>  
  <div class=\"col-md-4\">
  <input id=\"dist\" name=\"dist\" type=\"text\" placeholder=\"Enter your district\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"signup\"></label>
  <div class=\"col-md-4\">
    <button id=\"signup\" name=\"signup\" class=\"btn btn-success\">Sign Up</button>
  </div>
</div>

</fieldset>
</form>

</div>
</body>
</html>
";