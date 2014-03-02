
<html>
<title> Home </title>
<head>
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
							 <b>LOGIN</b>
						</td>
					</tr>
					<tr>
						<td>
							 &nbsp;
						</td>
					</tr>
				</table>	
				
				<table>
					<tr>
						<td>
							<form action="verification.php" method="post">
								<table>
									<tr>
										<td>
											<p>Username</p>
										</td>
										<td>
											<p><input style="margin-left:20px;" type="text" name="username"></p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Password</p>
										</td>
										<td>
											<p><input style="margin-left:20px;" type="password" name="password"></p>
										</td>
									</tr>
									<tr>
										<td>
											&nbsp;
										</td>
										<td>
											<p><input style="margin-left:20px;" type="submit" value="Submit"></p>
										</td>
									</tr>
								</table>
							</form
						</td>
					</tr>
				</table>
			</div>	
			<?php include("footer.php"); ?>
	</body>
</html>


	