<?php
 $host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="denovo"; // Database name 
$tbl_name="pettycash"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
if ($_POST) {
  // Get values from form 
    $petty_no=$_POST['petty_no'];
    $account=$_POST['account'];
    $dat=$_POST['dat'];
    $petty_to=$_POST['petty_to'];
    $petty_desc=$_POST['petty_desc'];
    $pay_type=$_POST['pay_type'];
    $total=$_POST['total'];   
    $checked_by=$_POST['checked_by']; 
    $authorised_by=$_POST['authorised_by'];      
     


    $sql="INSERT INTO $tbl_name(petty_no , account, dat, petty_to, petty_desc, pay_type,total,checked_by, authorised_by )
    VALUES('$petty_no','$account', '$dat','$petty_to', '$petty_desc' , '$pay_type', '$total',$checked_by','$authorised_by')";

    $result=mysql_query($sql);

    if ($result == TRUE) {
       $validator['success'] = true;
       $validator['messages'] = "Succesfully entered";
    }else{
      $validator['success'] = false;
       $validator['messages'] = "Error while inserting the data";
    }
   
    mysql_close();

    echo json_encode($validator);
  
  }   

   // Insert data into mysql 







// else {
// echo "ERROR";
// }
?> 