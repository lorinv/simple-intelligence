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
<link rel="shortcut icon" type="image/x-icon" href="./images/Logo.jpg" />
</head>
	<body style="background-color:black; font-family:garamond;">
		<main style="background-color:gray; height:1250px; width: 800px; margin:0 auto;">
			<logo style="padding-left:5px; font-family:garamond; font-size:20px;"> SI </logo>
			<img src="./images/city.jpg" style="width:800px; height:300px; border-top-style:solid; border-bottom-style:solid;
														 border-width:2px;">
			<div style="padding-left:100px; padding-right:100px;">
                        	<h3> Simple Intelligence </h3>
				<div style="float:left; width:285px; font-size:12px;">
					<span style="padding-left:30px"></span>
					Someone once said that Robotics is today, what computers were 30 years ago,
					 we agree. Computers have revolutionized the world in a way no one ever expected.
					 They changed the way we work, the way we learn, and the way we go about our lives.
					 We expect robotics to do the same and would like to be apart of it. <br>
					 <span style="padding-left:30px"></span>
					 Simple Intelligence is a growing group of engineers looking to better the world through
					 robotics. We have several products currently in development, but due to
			</div>
			<div style="float:right; width:285px; font-size:12px;">
                               		 security,
                                         we can't share them with the world quite yet. We will be presenting a prototype of
					  our work at the University of Washington Environmental Innovation Challenge on 
                                         April 3rd, 2014. From there, we plan on moving to production and continuing to grow.
					<br><span style="padding-left:30px"></span>
                                        Simple Intelligence is currently based out of Washington State University in Pullman. 
                                         We are partnering with the WSU Intelligent Robotics Learning Lab and want to thank Dr. 
                                         Matt Taylor for making this all possible.


                        </div>

			<h3 style="padding-top:230px;">The Team<h3>
			<div style="float:left; width:285px; font-size:12px;">
				<img src="./images/lorin.jpg" style="width:200px; height:200px; border-style:solid; border-width:2px;">
				<br>
				Lorin Vandegrift <br>
				Software Developer & Team Lead <br>
				lorin.vandegrift@email.wsu.edu <br>
				<br><br>
				<img src="./images/dustin.jpg" style="width:200px; height:200px; border-style:solid; border-width:2px;">
                                <br>
                                Dustin Crossman <br>
                                Lead Software Developer <br>
                                dustin.crossman@gmail.com <br>

			</div>
			<div style="float:right; width:285px; font-size:12px;">
                                        <img src="./images/alan.jpg" style="width:200px; height:200px; border-style:solid; border-width:2px;">
                                        <br>
                                        Alan Vandegrift <br>
                                        Mechanical Engineer <br>
                                        alvandegrift@hotmail.com <br>
                                	<br><br>
					<img src="./images/cameron.jpg" style="width:200px; height:200px; border-style:solid; border-width:2px;">
                                        <br>
                                        Cameron Mehl <br>
                                        Electrical Engineer <br>
                                        me@cameronmehl.com <br>
			</div>
		</main>

	</body>
</html>

<h7 style="color:white"> <?php echo $views;?></h7>
