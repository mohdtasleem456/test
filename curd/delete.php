<?php

include_once("dbConn.php");
 
$id = $_GET['id'];
 
// Attempt delete query execution
$del = "DELETE FROM tblemp WHERE id='$id'";
if(mysqli_query($db , $del)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $del. " . mysqli_error($db );
}
 
// Close connection
mysqli_close($db );
?>