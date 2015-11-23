<!DOCTYPE html>
<html lang="en">
<?php
session_start();
unset($_SESSION['sess_member_id']);
unset($_SESSION['sess_firstname']);
?>


<style>

#new{

padding-left:25px;
padding-right:25px;
margin-left:272px;
}

</style>
<body>
<br>
<div class="col-sm-9 col-sm-offset-5 col-md-7 col-md-offset-2 main formB" style="font-family:Bookman Old Style">
<div class="panel panel-info" >
 <div class="panel-heading">
 <h3 class="panel-title">LOGIN</h3>
 <?php
						
						if(isset($_SESSION['errmsg_arr'])&&is_array($_SESSION['errmsg_arr']) &&count($_SESSION['errmsg_arr']) >0)
						{
							echo '<ul class="err">';
							
							
							foreach ($$_SESSION['errmsg_arr'] as $msg)
							 {
								echo '<li>',$msg,'<li>';
							}
							 echo'<ul>';
							 unset($_SESSION['errmsg_arr']);
						}
						
						
						?>
						
 </div>
 <div class="panel-body" style="background:#F9F9F9">
 
	<form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>/index.php/welcome/login1	">		
		 <div style='border:1px solid skyblue;text-transform:uppercase'>
	 <div class='panel ' style='background:white;border:1px solid skyblue'>
	
		 <br>
		 <div class="form-group" style="padding:0px">
		 <label for="input" class="col-sm-3 control-label">Admin UserName</label>
		 <div class="col-sm-4">
		 <input type="text" class="form-control"  name="username" id="name"
		 placeholder="Name" required="true" />
		 </div>
		 </div>
		<div class="form-group" style="margin-top:-8px;">
		 <label for="input" class="col-sm-3 control-label"></label>
		 </div>
		  <div class="form-group" style="padding:0px">
		 <label for="input" class="col-sm-3 control-label">Admin Password</label>
		 <div class="col-sm-4">
		 <input type="password" class="form-control"  name="password" id="name"
		 placeholder="password" required="true" />
		 </div>
		 </div>
		
		
		
		
	<br>
		 <button type="submit" style="margin-left:px" class="btn btn-success btn-sm" id="new">LOGIN</button>
			 <button type="reset" style="margin-left:" class="btn btn-danger btn-sm">CANCEL</button>

		</div>
		 </div>
		 </div>
		 </div>
		</form>
</div>
</div>
</div>