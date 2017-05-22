
<?php
include('../login/session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>de novo</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="../admin/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="../admin/css/style.css" rel="stylesheet"> -->
  
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
.navbar-brand>img {
   max-height: 200%;
   height: 150%;
   width: auto;
   margin: 0 auto;


   /* probably not needed anymore, but doesn't hurt */
   -o-object-fit: contain;
   object-fit: contain; 

}
h2 {
    color: white;
    text-shadow: 2px 2px 4px #000000;
}

   
</style>



</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar bg-primary navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
          <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="Dispute Bills"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                 <li class="">
                    <a  class="" data-toggle=""><i class="fa fa-user"></i> Welcome:<?php echo $login_session; ?> </a>
                    
                </li>

                <li>
                            <a href="../login/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="../profile.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="../clients.php"><i class="fa fa-users"></i> Clients</a>
                    </li>
                    <li>
                        <a href="../Calender.php"><i class="fa fa-calendar"></i> Calender</a>
                    </li>
                   
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i> Documents</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../document/documents.php"><i class="fa fa-fw fa-upload"></i> Upload File</a>
                        </li>
                        <li>
                            <a href="../document/Search.php"><i class="fa fa-fw fa-search"></i> Search file</a>
                        </li>
                         
                        
                        <li class="divider"></li>
                    </ul>
                </li>
                    <li>
                        <a href="../matters.php"><i class="fa fa-legal"></i> Matters</a>
                    </li>
                
                 <li class="dropdown">
                    <a href="#" class="dropdown-submenu" data-toggle="dropdown"><i class="fa fa-briefcase" aria-hidden="true"></i> Billing </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../bill/pettycash.php"><i class="fa fa-fw fa-user"></i> petty Cash</a>
                        </li>
                        
                        <li>
                            <a href="../bill/bill.php"><i class="fa fa-fw fa-gear"></i> clients bills</a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </li>
                    <li>
                        <a href="../reports.php"><i class="fa fa-fw fa-folder-open"></i> Reports</a>
                    </li>
                     <li>
                        <a href="../admin/logout.php"><i class="fa fa-fw fa-lock"></i> Admin</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Filling 
                        </h2>
                        
                    </div>
                </div>
              <div class="table-responsive">
    
    <div align="right">
    <button type="button" id="add_button"  class="btn btn-info btn-lg" ><a href="documents.php"> <i class="fa fa-cloud-upload" aria-hidden="true"></i></a></button>
     
    </div>
    <br />
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th width="5%"> File</th>
       <th width="10%"><i class="fa fa-sort" aria-hidden="true"></i> File No.</th>
       <th width="25%"><i class="fa fa-sort" aria-hidden="true"></i> Description of Parties</th>
       <th width="10%">File Ref.</th>
      <th width="10%">File</th>
       <th width="30%">Description of Advocates</th>
       <th width="5%"> Edit</th>
       <th width="5%"> View</th>
      </tr>
     </thead>
    </table>
    
   </div>
  </div>
                <!-- /.row -->




</body>

</html>
<div id="userModal" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="user_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Add User</h4>
    </div>
    <div class="modal-body">
     <label>Case</label>
     <input type="text" name="cases" id="cases" class="form-control" />
     <br />
     <label>Description of parties</label>
     <input type="text" name="description" id="description" class="form-control" />
     <br/>
      <label>File Ref:</label>
     <input type="text" name="file_name" id="file_name" class="form-control" />
     <br/>
      <label>Description of Advocates</label>
     <input type="text" name="dfile" id="dfile" class="form-control" />
     <br/>
     
    </div>
    <div class="modal-footer">
     <input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </form>
 </div>
</div>




<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#user_form')[0].reset();
  $('.modal-title').text("Add User");
  $('#action').val("Add");
  $('#operation').val("Add");
  $('#user_uploaded_image').html('');
 });
 
 var dataTable = $('#user_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"../admin/clients/fetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0, 3, 4],
    "orderable":false,
   },
  ],

 });

 $(document).on('submit', '#user_form', function(event){
  event.preventDefault();
  var firstName = $('#first_name').val();
  var lastName = $('#last_name').val();
  var extension = $('#user_image').val().split('.').pop().toLowerCase();
  if(extension != '')
  {
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#user_image').val('');
    return false;
   }
  } 
  if(firstName != '' && lastName != '')
  {
   $.ajax({
    url:"../admin/clients/insert.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#user_form')[0].reset();
     $('#userModal').modal('hide');
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.update', function(){
  var user_id = $(this).attr("id");
  $.ajax({
   url:"../admin/clients/fetch_single.php",
   method:"POST",
   data:{user_id:user_id},
   dataType:"json",
   success:function(data)
   {
    $('#userModal').modal('show');
    $('#cases').val(data.cases);
    $('#description').val(data.description);
    $('#file_name').val(data.file_name);
     $('#dfile').val(data.dfile);
    $('.modal-title').text("Edit User");
    $('#user_id').val(user_id);
    $('#user_uploaded_image').html(data.user_image);
    $('#action').val("Edit");
    $('#operation').val("Edit");
   }
  })
 });
$(document).on('click', '.delete', function(){
  var user_id = $(this).attr("id");
  $.ajax({
   url:"../admin/clients/fetch_single.php",
   method:"POST",
   data:{user_id:user_id},
   dataType:"json",
   success:function(data)
   {
    $('#userModal').modal('show');
    $('#cases').val(data.cases);
    $('#description').val(data.description);
    $('#file_name').val(data.file_name);
     $('#dfile').val(data.dfile);
    $('.modal-title').text("Edit User");
    $('#user_id').val(user_id);
    $('#user_uploaded_image').html(data.user_image);
    $('#action').val("Edit");
    $('#operation').val("Edit");
   }
  })
 });

 
 $(document).on('click', '.delete', function(){
  var user_id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
    url:"../admin/clients/delete.php",
    method:"POST",
    data:{user_id:user_id},
    success:function(data)
    {
     alert(data);
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
 });
 
 
});
</script>
<script type="text/javascript">
  $(document).on('click', '.view', function(){
  var user_id = $(this).attr("id");
  if(confirm("do you want to view?"))
  {
   $.ajax({
    url:"../admin/clients/view.php",
    method:"POST",
    data:{user_id:user_id},
    success:function(datas)
    {
      console.log(datas)
     var url = "http://localhost/llp/upload/"+datas.trim();
url =url.replace(/['"]+/g, '');
     console.log(url)
window.open(url,'_blank','toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400')

     
         }
   });
  }
  else
  {
   return false; 
  }
 });





</script>
