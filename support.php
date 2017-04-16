<?php
  //include header file
  require_once("header.php");
?>
<div class="main" style="height:650px;background-image:url(images/imageedit_1_9282509114.jpg)" id="support" >
	<center><h1 style="color: #339966;padding-top:100px;">Support</h1></center>
	<div id="main_form">
	 <form type="post">
	 <div class="form-group">
	 <label style="color: #009933;font-size:20px;">Title</label>
	 <center><input type="text" name="title" class="form-control" style="width:450px;height:45px;" /></center>
	 </div>
	 <div class="form-group">
	  <label style="color: #009933;font-size:20px;">Query</label>
	 <center><textarea name="query" class="form-control" rows="10" cols="50"   style="width:450px;"></textarea></center>
	 </div>
	 <br />
	 <center><button class="btn btn-success" style="width:300px;">Submit</button></center>
	 </form>
	</div>
</div>


<?php
  require_once("footer.php");
?>