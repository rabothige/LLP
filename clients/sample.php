<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="denovo"; // Database name 
$tbl_name="clients"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$county=$_POST['coounty'];
$comment=$_POST['comment'];


// Insert data into mysql 
$sql="INSERT INTO $tbl_name(first_name, last_name, email, phone, address, county, comment )VALUES('$first_name', '$last_name', '$email', '$phone', '$address', '$county','$comment')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='clients_form.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>