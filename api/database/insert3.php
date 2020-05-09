<?php

$link = mysqli_connect("localhost", "merclas1_merclasses", "admin", "merclas1_merclasses");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$query = mysqli_real_escape_string($link, $_REQUEST['query']);
 
 
// Attempt insert query execution
$sql = "INSERT INTO query (fullname, email, phone ,query) VALUES ('$fullname', '$email' , '$phone', '$query')";
if(mysqli_query($link, $sql)){
    //echo "<h1 >Thanks , We will Contact You Soon.</h1>";
   
header("Location: index.php");
exit();

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>