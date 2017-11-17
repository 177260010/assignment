<?php
include 'header.php';

if ($login <> 'user') {
    echo 'Please Login First.<p>';
    echo "<a href='login.php'>login.</a>";

} else {

    $carid = $_POST['id'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $name = $_POST['name'];

    echo "

<html>
<title>Vehicle Booking</title>
<body>
<div class='container'>
    <form class=\"form-horizontal\" method='post' action='book_process.php'>
<fieldset>


<legend>Booking Form</legend>


<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" >Car Type</label>  
  <div class=\"col-md-4\">
  <img src='$img'>
    
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"name\">Car Name</label>  
  <div class=\"col-md-4\">
  <input id=\"name\" name=\"name\" type=\"text\" value='$name' class=\"form-control input-md\" readonly>
    
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"bloc\">Book Location</label>  
  <div class=\"col-md-4\">
  <input id=\"bloc\" name=\"bloc\" type=\"text\" placeholder=\"Enter your book location\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"rloc\">Return location</label>  
  <div class=\"col-md-4\">
  <input id=\"rloc\" name=\"rloc\" type=\"text\" placeholder=\"Enter your return location\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"stime\">Start Time</label>  
  <div class=\"col-md-4\">
  <input id=\"stime\" name=\"stime\" type=\"datetime-local\" onchange='price()' class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"etime\">End Time</label>  
  <div class=\"col-md-4\">
  <input id=\"etime\" name=\"etime\" type=\"datetime-local\" onchange='price()' onkeyup='this.onchange' onkeydown='this.onchange' class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"price\">Price</label>  
  <div class=\"col-md-4\">
  <input id=\"price\" name=\"price\" type=\"text\" class=\"form-control input-md\" value='$$price /H' readonly>
    
  </div>
</div>


<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"submit\"></label>
  <div class=\"col-md-4\">
  <input type='text' value='$carid' name='carid' hidden>
    <input type='submit' id=\"submit\" name=\"submit\" class=\"btn btn-success\">
  </div>
</div>

</fieldset>
</form>

</div>
</body>
</html>
";
}

?>
