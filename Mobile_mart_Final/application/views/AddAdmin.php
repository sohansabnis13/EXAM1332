<!DOCTYPE html>
<html lang="en">
<body>
<br>
<div class="col-sm-9 col-sm-offset-5 col-md-7 col-md-offset-2 main formB" style="font-family:Bookman Old Style">
<div class="panel panel-info" >
 <div class="panel-heading">
 <h3 class="panel-title">ADD NEW ADMINISTRATOR</h3>
 </div>
 <div class="panel-body" style="background:#F9F9F9">
 
	<form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>/index.php/welcome/addAdmin	">		
		 <div style='border:1px solid skyblue;text-transform:uppercase'>
	 <div class='panel ' style='background:white;border:1px solid skyblue'>
	
		 <br>
		 <div class="form-group" style="padding:0px">
		 <label for="input" class="col-sm-3 control-label">Admin Name</label>
		 <div class="col-sm-4">
		 <input type="text" class="form-control"  name="name" id="name"
		 placeholder="Name" required="true" />
		 </div>
		 </div>
		<div class="form-group" style="margin-top:-8px;">
		 <label for="input" class="col-sm-3 control-label"></label>
		 </div>
		  <div class="form-group" style="padding:0px">
		 <label for="input" class="col-sm-3 control-label">Admin Contact</label>
		 <div class="col-sm-4">
		 <input type="Number" class="form-control"  name="contact" id="name"
		 placeholder="Name" required="true" />
		 </div>
		 </div>
		 
		  <div class="form-group" style="padding:0px">
		 <label for="input" class="col-sm-3 control-label">Admin Address</label>
		 <div class="col-sm-4">
		 <input type="text" class="form-control"  name="address" id="name"
		 placeholder="Name" required="true" />
		 </div>
		 </div>
		 
		  <div class="form-group" style="padding:0px">
		 <label for="input" class="col-sm-3 control-label">Admin email</label>
		 <div class="col-sm-4">
		 <input type="email" class="form-control"  name="email" id="name"
		 placeholder="Name" required="true" />
		 </div>
		 </div>
		<div class="form-group" style="margin-top:-8px;">
		 <label for="input" class="col-sm-3 control-label"></label>
		 </div>
		 
		  <div class="form-group" style="padding:0px">
		 <label for="input" class="col-sm-3 control-label">Admin photo</label>
		 <div class="col-sm-4">
		 <input type="file" class="form-control"  name="pic" id="name"
		 placeholder="Name" required="true" />
		 </div>
		 </div>
		<div class="form-group" style="margin-top:-8px;">
		 <label for="input" class="col-sm-3 control-label"></label>
		 </div>
		 
		 
		
		
		
	<br>
		 <button type="submit" style="margin-left:px" class="btn btn-info btn-sm">ADD</button>
			 <button type="reset" style="margin-left:" class="btn btn-danger btn-sm">CANCEL</button>

		</div>
		 </div>
		 </div>
		 </div>
		</form>
</div>
</div>
</div>