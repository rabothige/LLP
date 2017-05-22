<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="denovo"; // Database name 
$tbl_name="clients"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
if ($_POST) {
  // Get values from form 
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $county=$_POST['county'];
  $comment=$_POST['comment'];      
}
if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($phone) && !empty($address) &&  !empty($county) &&  !empty($comment)) {

    $query = "SELECT * FROM $tbl_name WHERE first_name = '$first_name' AND  last_name = '$last_name' ";
    $query_result = mysql_query( $query);
    if (mysql_num_rows($query_result) > 0) {
       // $response = '<div class="alert alert-info" role="alert"> Client already exists</div>';
    }else{
          $sql="INSERT INTO $tbl_name(first_name, last_name, email, phone, address, county, comments )VALUES('$first_name', '$last_name', '$email', '$phone', '$address', 
                '$county','$comment')";
              $result=mysql_query($sql);

              // if successfully insert data into database, displays message "Successful". 
            if($result){
                unset($_POST);
                header("location: clients_form.php"); //mbona inahung ama net iko slow
            }
    }






}





   // Insert data into mysql 







// else {
// echo "ERROR";
// }
?> 





 <?php include('../includes/header_a.php'); ?>


            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                        <ol class="breadcrumb">
                            <h2>New Client</h2>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
    <form class="well form-horizontal" action="" method="post"  id="registerClient">
<fieldset>

<!-- Form Name -->
<legend>Register</legend>
<div id="messages">
  
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">County</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
  <input name="county" placeholder="County" class="form-control"  type="text">
    </div>
  </div>
</div>
 
<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Client Description</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i></span>
            <textarea class="form-control" name="comment" placeholder="client Description"></textarea>
  </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
  </div>
</div>

</fieldset>
</form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

             
                    <div class="container">

    
</div>
    </div><!-- /.container -->

    
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <!-- <script src="../js/plugins/morris/morris.min.js"></script> -->
    <script src="../js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="../js/plugins/flot/jquery.flot.js"></script>
    <script src="../js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../js/plugins/flot/flot-data.js"></script>


<script type="text/javascript">
  
$(document).ready(function () {

   $("#registerClient").unbind('submit').bind('submit', function() {
  
    alert("Greaaaaaat");


     return false;
   });
});


</script>

</body>

</html>

