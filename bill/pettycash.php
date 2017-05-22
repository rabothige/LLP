

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
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> -->
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
       
        <!-- <script type="text/javascript" src="../js/script.js"></script>  -->

    <title>de novo</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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


<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

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
                            <a href="document/documents.php"><i class="fa fa-fw fa-upload"></i> Upload File</a>
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
                            <a href="../bill/pettycash.php"><i class="fa fa-fw fa-user"></i> Petty cash</a>
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

        <!-- Display event calendar -->
    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                             
                           Petty Cash
                        </h2>
                        <ol class="breadcrumb">
                           
                            <li class="active">
                                <i class="fa fa-file"></i> Day bills
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            
            <!-- /.container-fluid -->


<form  class="register" method="POST" id="reg_form" autocomplete="off">
            <h1>Petty Cash Voucher</h1>
            <fieldset class="row1">
                <legend>Receipt Information</legend>
                <p>
                    <label>Petty Cash No. 
                    </label>
                    <input name="petty_no" type="text" required="required" style="width: 125px;"/>
                    <label>Date *. 
                    </label>
                   <input name="dat" type="text" value="<?php echo date('m/d/y');?>"/  required="required" style="width: 125px;">
                <p>
                    <label>To *
                    </label>
                    <input name="petty_to" required="required" type="text" style="width: 125px;"/>
                    <label>A/C *
                    </label>
                    <input name="account" required="required" type="text" style="width: 125px;"/>

                  
                </p>
                <p>
                 <label>Description</label>
                <textarea name="petty_desc" id="comment" class="form-control" rows="3" style="width: 200px; height: 100px;" ></textarea>
                </p>
         <p>
          <label>Payment Type * 
                    </label>
                    <select name="pay_type">
                        <option value="Cash">cash
                        </option>
                        <option value="Mpesa">Mobile money transfer
                        </option>
                    </select>
                    <label>Total Ksh: *
                    </label>
                    <input name="total" required="required" type="text" style="width: 118px;"/>
                    
         </p>
                <p>
                    <label>Checked by: *
                    </label>
                    <input name="checked_by" required="required" type="text" style="width: 125px;" />
                    <label>Authorised by: *
                    </label>
                    <input name="authorised_by" required="required" type="text" style="width: 125px;"/>
                    
                </p>
                <div class="clear"></div>
            </fieldset>
            
           
         <button class="btn btn-primary">Submit</button>
 
            
            <div class="clear"></div>
        </form>




        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <!-- jQuery -->
    <script >
    $("#reg_form").unbind('submit').bind('submit', function() {
    	$.ajax({
    		url: 'submit.php',
    		type: 'POST',
    		dataType: 'json',
    		data: $(this).serialize(),
    		success: function (response) {
    			 if (response.success === true) {
    			 		alert(response.messages);
    			 }else{
    			 	alert(response.messages);

    			 }
    		}

    	});
    	
    	return false;
    });

//     $('#reg_form').submit(function(e){
  
//     e.preventDefault(); // Prevent Default Submission
  
//     $.ajax({
//  url: 'submit.php',
//  type: 'POST',
//  data: $(this).serialize(), // it will serialize the form data
//         dataType: 'php'
//     })
//     .done(function(data){
//      $('#form-content').fadeOut('slow', function(){
//           $('#form-content').fadeIn('slow').php(data);
//         });
//     })
//     .fail(function(){
//  alert('Ajax Submit Failed ...'); 
//     });
// });


    </script>



</body>

</html>
