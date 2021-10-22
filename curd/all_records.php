<html>

<body align="center">
<a href="add.html" align="center">Add Data</a>
<h2>Employee Details</h2>

<table border ="1" width ="100" height ="100" align="center">
  <tr>
    <td>Sr.No.</td>
    <td>Full Name</td>
    <td>Email</td>
    <td>Designation</td>
    <td>salary</td>
    <td>Date</td>
    <td colspan="2">Update</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from tblemp"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  	<tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['fullname']; ?></td>
    <td><?php echo $data['email']; ?></td>  
    <td><?php echo $data['designation']; ?></td>    
    <td><?php echo $data['salary']; ?></td>  
    <td><?php echo $data['date']; ?></td>  
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>