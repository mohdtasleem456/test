<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from tblemp where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $salary = $_POST['salary'];
    $date = $_POST['date'];
	
    $edit = mysqli_query($db,"update tblemp set fullname='$fullname', email='$email', designation='$designation', salary='$salary', date='$date' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="fullname" value="<?php echo $data['fullname'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter email" Required>
  <input type="text" name="designation" value="<?php echo $data['designation'] ?>" placeholder="Enter designation" Required>
  <input type="text" name="salary" value="<?php echo $data['salary'] ?>" placeholder="Enter salary" Required>
  <input type="text" name="date" value="<?php echo $data['date'] ?>" placeholder="Enter date" Required>
  <input type="submit" name="update" value="Update">
</form>