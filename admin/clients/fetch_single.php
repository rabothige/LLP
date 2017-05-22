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
   $output["cases"] = $row["cases"];
  $output["description"] = $row["description"];
    $output["file_name"] = $row["file_name"];
   
      $output["dfile"] = $row["dfile"];



  if($row["file"] != '')
  {
   $output['user_image'] = '<img src="../upload/'.$row["file"].'" class="img-thumbnail" width="10" height="15" /><input type="hidden" value=""'.$row["file"].'" />';
  }
  else
  {
   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
  }
 }
 echo json_encode($output);
}
?>