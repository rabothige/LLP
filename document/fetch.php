<?php
header('Content-type: application/pdf');
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "denovo");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM files 
  WHERE case_no LIKE '%".$search."%'
  OR description LIKE '%".$search."%' 
  OR file_name LIKE'%".$search."%' 
  OR dfile LIKE '%".$search."%' 
  OR file LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM files ORDER BY id
 ";
}

$result = mysqli_query($connect, $query);


if(mysqli_num_rows($result)>0) 
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-bordered">
    <tr>
     <th width="5%">Type.</th>
    <th width="8%">File No.</th>
     <th width="15%">Parties description</th>
     <th width="5%" >Ref No.</th>
     <th width="15%">File description</th>
     <th width="15%">File name</th>
     <th width="5%">File</th>  
    </tr>
 ';

 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <td><img src="../upload/pdf.png" class="img-thumbnail" width="25" height="20" /></td>
    <td>'.$row["case_no"].'</td>
    <td>'.$row["description"].'</td>
    <td>'.$row["file_name"].'</td>
    <td>'.$row["dfile"].'</td>
    <td>'.$row["file"].'</td>
    <td><a href="'.$row["file"].'" download="'.$row["file"].'">

    
    <i class="material-icons" style="font-size:20px">&#xe2c0;</i>

    </td> 
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found'; 
}

?>