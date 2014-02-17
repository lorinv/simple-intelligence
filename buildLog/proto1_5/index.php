
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
			<img src="/images/orchard3.jpg" style="width:800px; height:300px; border-top-style:solid; border-bottom-style:solid;
												 border-width:2px;">
			
			<div style="padding-left:100px; padding-right:100px; float:left; width:285px;">
			<h3> Prototype 1.5 </h3>
			<p>
			<b>Objectives: </b><br><br>
				<b>a)</b> Build a quadcopter from premade parts that could be controlled via wifi from a computer's keyboard.<br><br>
				<b>b)</b> Create a base in which the copter could easily land on and change it's battery.
				<br><br>
				<b>c)</b> The quadcopter would, once positioned over a base, use a downward facing camera to position itself on the base.
				<br><br>
			<b> Summary: </b>
			We had high exceptions for this prototype. This prototype was the one that would take us from something that could be done to something that has been done. Unfortunately we didn't achieve all three of our objectives, but we did make incredible progress. Everyday we confirmed the idea that prototyping allows us to uncover hidden challenges and deal with them successively.<br><br>
			
			<b><a href="planning/index.php"> Planning </a></b><br><br>
			
			<b><a href="execution/index.php"> Execution </a></b><br><br>
			
			<b><a href="problem_solving/index.php"> Problem Solving </b><br><br>
			
			<b><a href="final_product/index.php"> Final Product </a></b><br><br>

			
			</p>
			
			
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
