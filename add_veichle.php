<?php
include ('header.php');
include ('check_admin.php');

echo "
<form class=\"form-horizontal\" method='post' action='add_veichle_process.php' enctype=\"multipart/form-data\">
<fieldset>

<!-- Form Name -->
<legend>Add Vehicle</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"name\">Vehicle Name</label>  
  <div class=\"col-md-4\">
  <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"vehicle name\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"price\">Price</label>  
  <div class=\"col-md-4\">
  <input id=\"price\" name=\"price\" type=\"number\" placeholder=\"price\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"img\">Image</label>
  <div class=\"col-md-4\">
  <input id=\"img\" name=\"img\" type=\"file\"required=\"\">
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"submit\"></label>
  <div class=\"col-md-4\">
    <button id=\"submit\" name=\"submit\" class=\"btn btn-primary\">SUBMIT</button>
  </div>
</div>



</fieldset>
</form>

"


?>