
<html>
<title> Home </title>
<head>
<script src="js_functions.js"></script>
<?php include("proto_content.php"); ?>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='style/style.css' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/x-icon" href="./images/Logo.jpg" />
</head>
	<body>
		<?php include("header.php"); ?>
			<div class="content" >
				<table>
					<tr>
						<td>
							 <b><a class="link" href="buildlogmain.php"> Build Log </a> - <a class="link" href="coptermain.php">Simple Quad</a> - Prototype 1.0</b>
						</td>
					</tr>
					<tr><td>&nbsp;</td></tr>
				</table>
				<table>
					<tr>
						<td style="width:100px;" class="category"><p><button onclick="change_visibility('software', 'electrical', 'mechanical')">Software</button></p></td>
						<td style="width:100px;" class="category"><p><button onclick="change_visibility('electrical','software','mechanical')">Electrical</button></p></td>
						<td style="width:100px;" class="category"><p><button onclick="change_visibility('mechanical','software','electrical')">Mechanical</button></p></td>
					</tr>
				</table>
				<table id="software" style="padding:20px; border-style:solid; border-width:1px; box-shadow: 5px 5px 5px #B8B8B8;">
					<?php proto10_software(); ?>
				</table>
				<table id="electrical" style="display:none; padding:20px; border-style:solid; border-width:1px; box-shadow: 5px 5px 5px #B8B8B8;">
					<?php proto10_electrical(); ?>
				</table>
				<table id="mechanical" style="display:none; padding:20px; border-style:solid; border-width:1px; box-shadow: 5px 5px 5px #B8B8B8;">
					<?php proto10_mechanical(); ?>
				</table>
			</div>	
			<?php include("footer.php"); ?>
	</body>
</html>


	