<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "denovo");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM clients 
  WHERE first_name LIKE '%".$search."%'
  OR last_name LIKE '%".$search."%'
  OR phone LIKE '%".$search."%' 
  OR county LIKE'%".$search."%'  
 ";
}
else
{
 $query = "
  SELECT * FROM clients ORDER BY clientid
 ";
}
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result)>0) 

{
 $output .= '
  <div class="table-responsive">
   <table class="table table-bordered">
    <tr>
     <th width>CustomerId</th>
     <th>First Name</th>
     <th >Last Name</th>
     <th >Email</th>
     <th>Phone No.</th>
     <th >Address</th>
     <th>County</th>
     <th >Comments</th>
      
    </tr>
 ';

 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <td>'.$row["clientid"].'</td>
    <td>'.$row["first_name"].'</td>
    <td>'.$row["last_name"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["phone"].'</td>
    <td>'.$row["address"].'</td>
    <td>'.$row["county"].'</td>
    <td>'.$row["comments"].'</td>
   
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