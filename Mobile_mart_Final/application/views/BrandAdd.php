
<div class="col-sm-9 col-sm-offset-5 col-md-7 col-md-offset-2 main formB" style="font-family:Times New Roman">
<div class="panel panel-info" >
 <div class="panel-heading">
 <h3 class="panel-title">INPUT DIET</h3>
 </div>
 <div class="panel-body" style="background:#F9F9F9">
 
	<form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>/index.php/faculty/Faculty/addAttendance2	">		
		 <div style='border:1px solid skyblue;text-transform:uppercase'>
	 <div class='panel ' style='background:white;border:1px solid white'>
	
		 <br>
		 <div class="form-group" style="padding:0px">
		 <label for="input" class="col-sm-3 control-label">BREAKFAST DETAILS</label>
		 <div class="col-sm-4">

		 </div>
		 </div>
		
		 
		 <div class="form-group">
		 <label for="input" class="col-sm-3 control-label">DAIRY:</label>
		 <div class="col-sm-4">
		 <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes()">
            <select>
                <option>Select an option</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes">
            <label for="one"><input type="checkbox" id="one"/>MILK</label>
            <label for="two"><input type="checkbox" id="two"/>CREAM</label>
            <label for="three"><input type="checkbox" id="three"/>YOGHURT</label>
			            <label for="three"><input type="checkbox" id="three"/>OATS</label>
					<label for="three"><input type="checkbox" id="three"/>CHEESE</label>
					<label for="three"><input type="checkbox" id="three"/>BUTTER</label>

        </div>
    </div>
		 </div>
		 </div>
		<br>
		 <div class="form-group">
		 <label for="input" class="col-sm-3 control-label">Date</label>
		 <div class="col-sm-4">
		 <input type="date" class="form-control" id="date" name="date"
		 placeholder="" required="true">
		 </div>
		 </div>
		 <br>
		 <div class="form-group">
		 <label for="input" class="col-sm-3 control-label">DINNER</label>
		 <div class="col-sm-4">
		 <input type="text" class="form-control"  name="hours" 
		 placeholder="Hours per lecture" required="true">
		 </div>
		 </div>
		  <div class="form-group">
		 <label for="input" class="col-sm-3 control-label">Logo</label>
		 <div class="col-sm-4">
		 <input type="file" class="form-control"  name="hours" 
		 placeholder="Hours per lecture" required="true">
		 </div>
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
</div>
