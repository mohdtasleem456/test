<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("dbConn.php");

if(isset($_POST['Submit'])) {	
	$fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $salary = $_POST['salary'];
    $date = $_POST['date'];
		
	// checking empty fields
	if(empty($fullname) || empty($email) || empty($designation) || empty($salary) || empty($date)) {
				
		if(empty($fullname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}
		if(empty($designation)) {
			echo "<font color='red'>designation field is empty.</font><br/>";
		}
		if(empty($salary)) {
			echo "<font color='red'>salary field is empty.</font><br/>";
		}
		if(empty($date)) {
			echo "<font color='red'>date field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$records = mysqli_query($db, "INSERT INTO tblemp(fullname,email,designation,salary,date) VALUES('$fullname','$email','$designation','$salary','$date')");
		
		if ($records) {
			echo "<font color='green'>Data added successfully.";//display success message
			echo "<br/><a href='all_records.php'>View Result</a>";
  
} else {
  			echo "Error: " . $records . "<br>" . mysqli_error($db);
}
		
		
	}
}
?>
</body>
</html>
