<?php
$views = 0;
$visitors_file = "views.txt";

// Load up the persisted value from the file and update $views
if (file_exists($visitors_file))
{
    $views = (int)file_get_contents($visitors_file); 
}

// Increment the views counter since a new visitor has loaded the page
$views++;

// Save the contents of this variable back into the file for next time
file_put_contents($visitors_file, $views);
?>
<html>
<head>
<title> Home </title>
<link rel="shortcut icon" type="image/x-icon" href="../images/Logo.jpg" />
</head>
	<body style="background-color:black; font-family:garamond;">
		<main style="background-color:gray; height:1250px; width: 800px; margin:0 auto;">
			<logo style="padding-left:5px; font-family:garamond; font-size:20px;"> SI </logo>
			<img src="./images/orchard3.jpg" style="width:800px; height:300px; border-top-style:solid; border-bottom-style:solid;
												 border-width:2px;">
			
			<div style="padding-left:100px; padding-right:100px; float:left; width:285px;">
				<h3> Autonomous Copter Build Log </h3>
				<p> A breakdown of the project. </p>		
				<ul>
					<li> Proto .5 
						<ul>
							<li> Drawings </li>
						</ul>
					</li>
					<li> Initial Design </li>
				</ul>
			</div>
			<div style="float:right; width:285px">
			<img src="../images/alan.jpg" style="width:200px; margin-top:50px; height:200px; border-style:solid; border-width:2px;">
			<br>
			<img src="../images/alan.jpg" style="width:200px; margin-top:50px; height:200px; border-style:solid; border-width:2px;">
			<br>
			<img src="../images/alan.jpg" style="width:200px; margin-top:50px; height:200px; border-style:solid; border-width:2px;">
			</div>
		</main>

	</body>
</html>

<h7 style="color:white"> <?php echo $views;?></h7>
