<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
 $output = array();
 $statement = $connection->prepare(
  "SELECT * FROM files 
  WHERE id = '".$_POST["user_id"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  

$output = ($row['file']);
 $filepath  =explode('/', $output);
 $filepath = trim($filepath[count($filepath)-1]);

}
 echo json_encode($filepath);
}
?>