<!DOCTYPE html>
<html>
<head>
	<title>Thunder Express</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
</head>

<body>

	<header>
		<div class="navbar">
			<img id="logo" src="<?php echo base_url(); ?>assets/img/logo.png">
			<img class="menu-toggle" src="<?php echo base_url(); ?>assets/img/toggle.png" width="10vw" >
			
			<nav class="site-nav">
				<ul>
					<!--<li><font color="yellow">Home</font></li>-->
					<li><a href="<?php echo base_url(); ?>index.php/c_index">Home</a></li>
					<li class="active-link">Deliver Now</li>
					<li><a href="<?php echo base_url(); ?>index.php/c_index/services">Services</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/c_index/about">About Us</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<h1 class="header">Deliver Now</h1> <br>
		<div class="row">

			<div class="sender-info col-sm-6">

				<form method="POST" name="sender-info">
					<h2 class="label">Sender Information</h2>
					<table border="0">
						<tr>
							<td><label>Name</label></td>
							<td><input type="text"></td>
						</tr>

						<tr>
							<td><label>Phone</label></td>
							<td><input type="text"></td>
						</tr>

						<tr>
							<td><label>City</label></td>
							<td><input type="text"></td>
						</tr>

						<tr>
							<td><label>Address</label></td>
							<td><input class="address" type="text"></td>
						</tr>
					</table>
					</div>

				<div class="recipient-info col-sm-6">
					<h2 class="label">Recipient Information</h2>
					<table border="0">
						<tr>
							<td><label>Name</label></td>
							<td><input type="text"></td>
						</tr>

						<tr>
							<td><label>Phone</label></td>
							<td><input type="text"></td>
						</tr>

						<tr>
							<td><label>City</label></td>
							<td><input type="text"></td>
						</tr>

						<tr>
							<td><label>Address</label></td>
							<td><input class="address" type="text"></td>
						</tr>
					</table>
				</div>

				<div class="package-info col-sm-6">
					<h2 class="label">Package Information</h2>
					<table>
						<tr>
							<td><label>Item Name</label></td>
							<td><input type="text"></td>
						</tr>

						<tr>
							<td><label>Weight</label></td>
							<td><input type="text"></td>
						</tr>

						
					</table>
				</div>
				
				<div class="package-info col-sm-6">
					<table class="dimension">
						<tr>
							<td><label>Dimension</label></td>
							<td><input type="text" placeholder="L"></td>
							<td><input type="text" placeholder="W"></td>
							<td><input type="text" placeholder="H"></td>
						</tr>
					</table>
				</div>

				<button class="button deliver-btn">Deliver Now</button>

			</form>
		</div>
	</div>


</body>
</html>
