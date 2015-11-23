<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MOBILE MART</title>

<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/datepicker3.css" rel="stylesheet">
<!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>css/morris.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Mobile</span>Mart</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
					<form id="formhome" method="get" name="searchform" action="#">
           
             <span class="search-title" style="color:red">Google Search</span>
             <input type="text" name="name1" id="searchInput">
             <button type="submit" onclick="search2()">go</button>
      
       </form>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=""></span><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/Welcome/changeSettings"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
		<br>
			<li class="active"><a href="<?php echo base_url(); ?>index.php/Welcome/Home"><span class="glyphicon glyphicon-dashboard"></span>Home</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/Welcome/Aboutus"><span class="glyphicon glyphicon-pencil"></span>About us</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/Welcome/Login"><span class="glyphicon glyphicon-user"></span>Login</a></li>

			<li class="parent ">
				<a href="#">
					<span class="glyphicon glyphicon-list"></span>Extra<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?php echo base_url(); ?>index.php/Welcome/addBrand">
							<span class="glyphicon glyphicon-briefcase"></span>Features
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-phone-alt"></span>Contact Us
						</a>
					</li>
					
	</div><!--/.sidebar-->
		
	<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>js/chart-data.js"></script>
	<script src="<?php echo base_url(); ?>js/easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>js/easypiechart-data.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>
	
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
<script>
		  function search2(){
		     var name1=document.forms['searchform']['name1'].value;
		     var res ='http://www.google.co.in/search?q='.concat(name1);
		     window.open(res);
		   }
		  </script>	
	
	
</body>

</html>
