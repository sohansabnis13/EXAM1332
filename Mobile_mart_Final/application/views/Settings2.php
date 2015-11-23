

<div class="col-sm-9 col-sm-offset-5 col-md-7 col-md-offset-2 main formB" style="font-family:Times New Roman">
<div class="panel panel-primary" >
 <div class="panel-heading">
 <h2 class="panel-title">CHANGE SETTINGS</h2>
 </div>
 <div class="panel-body" style="background:#F9F9F9">
 
	<form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>/index.php/faculty/Faculty/addAttendance2	">		
		 <div style='border:1px solid skyblue;text-transform:uppercase'>
	 <div class='panel ' style='background:white;border:1px solid white'>
	
		 <br>
		 <div class="form-group" style="padding:0px">
		 <label for="input" class="col-sm-3 control-label">Change UserName</label>
		 <div class="col-sm-4">
		 <input type="text" class="form-control"  name="name" id="name"
		 placeholder="Enter new UserName" required="true" />
		 </div>
		 </div>
		<div class="form-group" style="margin-top:-8px;">
		 <label for="input" class="col-sm-3 control-label"></label>
		 </div>
		 <br>
		 <div class="form-group">
		 <label for="input" class="col-sm-3 control-label">New Password:</label>
		 <div class="col-sm-4">
		 <input type="password" class="form-control" id="starttime" name="starttime"
		 placeholder="New Password" required="true">
		 </div>
		 </div>
		  <div class="form-group">

		 <label for="input" class="col-sm-3 control-label" style="color:red">Confirm Password:</label>
		  <div class="col-sm-4">
		 <input type="password" class="form-control" id="starttime" name="starttime"
		 placeholder="Retype Password" required="true">
		 </div>
		 </div>
		<br>
		 <div class="form-group">
		 <label for="input" class="col-sm-3 control-label">Change Contact</label>
		 <div class="col-sm-4">
		 <input type="text" class="form-control" id="date" name="contact"
		 placeholder="Enter new Contact" required="true">
		 </div>
		 </div>
		 <br>
		 <div class="form-group">
		 <label for="input" class="col-sm-3 control-label">Change Email:</label>
		 <div class="col-sm-4">
		 <input type="email" class="form-control"  name="hours" 
		 placeholder="New Email" required="true">
		 </div>
		 </div>
		 
		
		
	<br>
	 <div class="form-group">
		 <label for="input" class="col-sm-3 control-label">Change Address:</label>
		 <div class="col-sm-4">
		 <input type="textarea" class="form-control"  name="hours" 
		 placeholder="New Address" required="true">
		 </div>
		 </div>
		 <button type="submit" style="margin-left:px" class="btn btn-success btn-sm">UPDATE</button>
			 <button type="reset" style="margin-left:" class="btn btn-danger btn-sm">CANCEL</button>

		</div>
		 </div>
		 </div>
		 </div>
		</form>
</div>
</div>
</div>
</div>
