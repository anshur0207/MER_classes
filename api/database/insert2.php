<?php

$link = mysqli_connect("localhost", "merclas1_merclasses", "admin", "merclas1_merclasses");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$fathername = mysqli_real_escape_string($link, $_REQUEST['fathername']);
$eaddress = mysqli_real_escape_string($link, $_REQUEST['eaddress']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$address1 = mysqli_real_escape_string($link, $_REQUEST['address1']);
$address2 = mysqli_real_escape_string($link, $_REQUEST['address2']);
$class = mysqli_real_escape_string($link, $_REQUEST['class']);
 
 
// Attempt insert query execution
$sql = "INSERT INTO register (fullname, fathername, eaddress ,phone , address1 , address2 ,class) VALUES ('$fullname', '$fathername' , '$eaddress', '$phone' ,'$address1' ,'$address2','$class')";
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