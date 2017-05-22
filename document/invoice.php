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


    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    
    
    <link rel='stylesheet' type='text/css' href='css/style.css' />
    <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
    <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='js/example.js'></script>


    <title>de novo</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

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
</style>



</head>

<body>

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

                        <li>
                        <a href="" onClick="window.print()" 
                      value="Print Invoice"><i class="fa fa-fw fa-print"></i> Print</a>
                        </li>
                       
                        
                </ul>

                
            <!-- /.navbar-collapse -->
        </nav>     
              
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
<div id="page-wrap">

        <textarea id="header" style="height:50%;">INVOICE</textarea>
        
        <div id="identity" lass="container" ng-controller="userController" ng-init="getRecords()">
        
            <textarea id="address">Nairobi legal LLp
123 westlands
Bussiness Park, WI 53719

Phone: (+254)725959830</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/log2.png" alt="logo" />
            </div>
        
        </div>
        
        <div style="clear:both"></div>
        
        <div id="customer">

            <textarea id="customer-title">Widget Corp.
c/o Steve Widget</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea>5/08/2017</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">ksh 875.00</div></td>
                </tr>

            </table>
        
        </div>
        
        <table id="items">
        
          <tr>
              <th>Item</th>
              <th>Description</th>
              <th>Unit Cost</th>
              <th>Quantity</th>
              <th>Price</th>
          </tr>
          
          <tr class="item-row">
              <td class="item-name"><div class="delete-wpr"><textarea>Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
              <td class="description"><textarea>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</textarea></td>
              <td><textarea class="cost">Ksh650.00</textarea></td>
              <td><textarea class="qty">1</textarea></td>
              <td><span class="price">ksh650.00</span></td>
          </tr>
          
          <tr class="item-row">
              <td class="item-name"><div class="delete-wpr"><textarea>SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

              <td class="description"><textarea>Yearly renewals of de novo certificates on main domain and several subdomains</textarea></td>
              <td><textarea class="cost">ksh75.00</textarea></td>
              <td><textarea class="qty">3</textarea></td>
              <td><span class="price">225.00</span></td>
          </tr>
          
          <tr id="hiderow">
            <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
          </tr>
          
          <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Subtotal</td>
              <td class="total-value"><div id="subtotal">ksh875.00</div></td>
          </tr>
          <tr>

              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Total</td>
              <td class="total-value"><div id="total">ksh875.00</div></td>
          </tr>
          <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Amount Paid</td>

              <td class="total-value"><textarea id="paid">ksh0.00</textarea></td>
          </tr>
          <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line balance">Balance Due</td>
              <td class="total-value balance"><div class="due">ksh875.00</div></td>
          </tr>
        
        </table>
        
        <div id="terms">
          <h5>Terms</h5>
          <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
        </div>
    
    </div>





        <!-- /#page-wrapper -->
    <!-- /#wrapper -->

     <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
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
</script>

    


</body>

</html>
