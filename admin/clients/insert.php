<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $image = '';
  if($_FILES["user_image"]["name"] != '')
  {
   $image = upload_image();
  }
  $statement = $connection->prepare("
   INSERT INTO files (cases, description, file_name, dfile) 
   VALUES (:cases, :description, :file_name, :dfile)
  ");
  $result = $statement->execute(
   array(
    ':cases' => $_POST["cases"],
    ':description' => $_POST["description"],
    ':file_name' => $_POST["file_name"],
    ':dfile' => $_POST["dfile"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  $image = '';
  if($_FILES["user_image"]["name"] = '')
  {
   $image = upload_image();
  }
  else
  {
   $image = $_POST["hidden_user_image"];
  }
  $statement = $connection->prepare(
   "UPDATE files 
   SET cases = :cases, description = :description, file_name = file_name, dfile = :dfile  
   WHERE id = :id
   "
  );
 $result = $statement->execute(
   array(
    ':cases' => $_POST["cases"],
    ':description' => $_POST["description"],
    ':file_name' => $_POST["file_name"],
    ':dfile' => $_POST["dfile"]
   )
  );
}}
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }
}

?>
   