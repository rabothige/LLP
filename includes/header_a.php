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
   <!--  <link rel="stylesheet" type="text/css" href="../css/default.css"/> -->
       
        <script type="text/javascript" src="../js/script.js"></script> 

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