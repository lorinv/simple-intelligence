<?php

	$con=mysqli_connect("127.0.0.1","admin","", "my_db");
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ";
  }

// Create database
/*
$sql="CREATE DATABASE my_db";
if (mysqli_query($con,$sql))
  {
  echo "Database my_db created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }


// Create table
$sql="CREATE TABLE Personsuuu(FirstName CHAR(30),LastName CHAR(30),Age INT)";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table personsuuu created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
*/
	
	header('Location: buildlogmain.php');
?>