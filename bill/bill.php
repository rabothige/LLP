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
    <!-- <link rel="stylesheet" type="text/css" href="../css/default.css"/>
        -->
        <script type="text/javascript" src="../js/script.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

    <title>de novo</title>


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">



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

<style type="text/css">
/* required style*/ 
.none{display: none;}

/* optional styles */
table tr th, table tr td{font-size: 1.2rem;}
.row{ margin:0px 0px 0px 0px;width: 90%;}
.glyphicon{font-size: 20px;}
.glyphicon-plus{float: right;}
a.glyphicon{text-decoration: none;cursor: pointer;}
.glyphicon-trash{margin-left: 0px;}
.alert{
    width: 50%;
    border-radius: 0;
    margin-top: 0px;
    margin-left: 0px;
}
</style>


</head>

<body  ng-app="crudApp">

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
                            <a href="../bill/Billing.php"><i class="fa fa-fw fa-envelope"></i> invo</a>
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
            <div class="container-fluid"  ng-controller="userController" ng-init="getRecords()">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                             Invoices 
                        </h2>
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                <i class="fa fa-file"></i>  Clients bills
                            </li>
                        </ol>
                    </div>





                </div>
                <!-- /.row -->

            
            <!-- /.container-fluid -->
           
<div class="container" ng-controller="userController" ng-init="getRecords()"  >
    <div class="row">
        <div class="panel panel-default users-content">
            <div class="panel-heading">bills <a href="javascript:void(0);" class="glyphicon glyphicon-plus" onclick="$('.formData').slideToggle();"></a></div>
            <div class="alert alert-danger none"><p></p></div>
            <div class="alert alert-success none"><p></p></div>
            <div class="panel-body none formData">
                <form class="form" name="userForm">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="state" ng-model="tempUserData.state">
                         <option>Refunded</option>
                          <option>Opened</option>
                           <option>Sent</option>
                             <option>Paid</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Case_no</label>
                        <input type="text" class="form-control" name="case_no" ng-model="tempUserData.case_no"/>
                    </div>
                    <div class="form-group">
                        <label>Customer</label>
                        <input type="text" class="form-control" name="customer" ng-model="tempUserData.customer"/>
                    </div>
                    <div class="form-group">
                        <label>Payment(ksh)</label>
                        <input type="text" class="form-control" name="ksh" ng-model="tempUserData.ksh"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('.formData').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" ng-hide="tempUserData.id" ng-click="addUser()">Add User</a>
                    <a href="javascript:void(0);" class="btn btn-success" ng-hide="!tempUserData.id" ng-click="updateUser()">Update User</a>
                </form>
            </div>
              
            <table class="table table-striped">
                <tr>
                    <th width="10%"># invoice_No.</th>
                    <th width="10%">Status</th>
                    <th width="15%">Case_no</th>
                    <th width="15%">Customer</th>
                    <th width="10%">Payment(ksh)</th>
                    <th width="14%">Created</th>
                    <th width="10%"></th>
                </tr>
                <tr ng-repeat="user in users | orderBy:'-created'">
                    <td>#{{user.id}}</td>
                    <td class="btn btn-primary" width="70px">{{user.state}}</td>
                    <td>{{user.case_no}}</td>
                    <td>{{user.customer}}</td>
                    <td>Ksh.{{user.ksh}}</td>
                    <td>{{user.created}}</td>
                    <td>
                        <a href="javascript:void(0);" class="glyphicon glyphicon-edit" ng-click="editUser(user)"></a>
                        <a href="javascript:void(0);" class="glyphicon glyphicon-trash" ng-click="deleteUser(user)"></a>
                        <a href="" class="glyphicon glyphicon-print"  ng-click="printUser(User)"></a>
                        
                    </td>
                </tr>
            </table>
        </div>
    </div>







        </div>
        <!-- /#page-wrapper -->
      

        

    </div>
    <!-- /#wrapper -->
    
    <!-- jQuery -->
   
 
       <script src="angular.min.js"></script>

    <script src="../js/jquery.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<script>
// define application
angular.module("crudApp", [])
.controller("userController", function($scope,$http){
    $scope.users = [];
    $scope.tempUserData = {};
    // function to get records from the database
    $scope.getRecords = function(){
        $http.get('action.php', {
            params:{
                'type':'view'
            }
        }).success(function(response){
            if(response.status == 'OK'){
                $scope.users = response.records;
            }
        });
    };
    
    // function to insert or update user data to the database
    $scope.saveUser = function(type){
        var data = $.param({
            'data':$scope.tempUserData,
            'type':type
        });
        var config = {
            headers : {
                'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
            }
        };
        $http.post("action.php", data, config).success(function(response){
            if(response.status == 'OK'){
                if(type == 'edit'){
                    $scope.users[$scope.index].id = $scope.tempUserData.id;
                    $scope.users[$scope.index].state = $scope.tempUserData.state;
                    $scope.users[$scope.index].case_no = $scope.tempUserData.case_no;
                     $scope.users[$scope.index].customer = $scope.tempUserData.customer;
                    $scope.users[$scope.index].ksh = $scope.tempUserData.ksh;
                    
                    $scope.users[$scope.index].created = $scope.tempUserData.created;
                }else{
                    $scope.users.push({
                        id:response.data.id,
                        state:response.data.state,
                        case_no:response.data.case_no,
                        customer:response.data.customer,
                        ksh:response.data.ksh,
                        created:response.data.created
                    });
                    
                }
                $scope.userForm.$setPristine();
                $scope.tempUserData = {};
                $('.formData').slideUp();
                $scope.messageSuccess(response.msg);
            }else{
                $scope.messageError(response.msg);
            }
        });
    };
    
    // function to add user data
    $scope.addUser = function(){
        $scope.saveUser('add');
    };

    
    
    // function to edit user data
    $scope.editUser = function(user){
        $scope.tempUserData = {
            id:user.id,
            state:user.state,
            case_no:user.case_no,
            customer:user.customer,
            ksh:user.ksh,
            created:user.created
        };
        $scope.index = $scope.users.indexOf(user);
        $('.formData').slideDown();
    };


    //print user 

// function to edit user data
    $scope.printUser = function(user){
        
        window.location = "../document/invoice.php";
    };

    // function to update user data
    $scope.updateUser = function(){
        $scope.saveUser('edit');
    };
    
    // function to delete user data from the database
    $scope.deleteUser = function(user){
        var conf = confirm('Are you sure to delete the user?');
        if(conf === true){
            var data = $.param({
                'id': user.id,
                'type':'delete'    
            });
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }    
            };
            $http.post("action.php",data,config).success(function(response){
                if(response.status == 'OK'){
                    var index = $scope.users.indexOf(user);
                    $scope.users.splice(index,1);
                    $scope.messageSuccess(response.msg);
                }else{
                    $scope.messageError(response.msg);
                }
            });
        }
    };
    
    // function to display success message
    $scope.messageSuccess = function(msg){
        $('.alert-success > p').html(msg);
        $('.alert-success').show();
        $('.alert-success').delay(5000).slideUp(function(){
            $('.alert-success > p').html('');
        });
    };
    
    // function to display error message
    $scope.messageError = function(msg){
        $('.alert-danger > p').html(msg);
        $('.alert-danger').show();
        $('.alert-danger').delay(5000).slideUp(function(){
            $('.alert-danger > p').html('');
        });
    };
});


function printInfo(id = null) {

    if (id) {
        alert(id);
    
    }


   
}
</script>

</body>

</html>
