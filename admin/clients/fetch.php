<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM files ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE case_no LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR file_name LIKE "%'.$_POST["search"]["value"].'%" ';
  $query .= 'OR dfile LIKE "%'.$_POST["search"]["value"].'%" ';
  $query .= 'OR dfile LIKE "%'.$_POST["search"]["value"].'%" ';
   $query .= 'OR cases LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $image = '';
 if($row["file"] != '')
 {
  $image = '<img src="../upload/pdf.png" class="img-thumbnail" width="25" height="30" />';
 }
 else
 {
  $image = '';
 }
 $sub_array = array();
 $sub_array[] = $image;
 $sub_array[] = $row["case_no"];
 $sub_array[] = $row["description"];
  $sub_array[] = $row["file_name"];
   $sub_array[] = $row["cases"];
   $sub_array[] = $row["dfile"];

 $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Update</button>';
 $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-info view"><i class="fa fa-eye"></i>View</button>';
 $data[] = $sub_array;
}
$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records(),
 "data"    => $data
);
echo json_encode($output);
?>