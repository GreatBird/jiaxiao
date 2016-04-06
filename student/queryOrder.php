<?php 

session_start();
$user=$_SESSION['user'];
// echo $user;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">学生中心</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<!-- <div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div> -->
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> 导航栏</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>首页</span></a> </li>
       <!--  <li> <a href="queryPaiBanTime1.php"><i class="icon icon-signal"></i> <span>先预约时间后预约教练</span></a> </li>
                <li> <a href="queryPaiBanTeacher.php"><i class="icon icon-signal"></i> <span>先预约教练后预约时间</span></a> </li> -->

<li class="bg_ls"> <a href="yuYueTemp.php?type=lukao"> <i class="icon-tint"></i> 路考预约</a> </li>
        <li class="bg_lb"> <a href="yuYueTemp.php?type=normal"> <i class="icon-pencil"></i>项训预约</a> </li>
    <li> <a href="queryPaiBanTemp.php"><i class="icon icon-signal"></i> <span>查看教练排班</span></a> </li>
<!--         <li> <a href="submitYuYue.php"><i class="icon icon-signal"></i> <span>快速预约</span></a> </li>
 -->
    <li> <a href="queryYuYue.php"><i class="icon icon-signal"></i> <span>查看我的预约</span></a> </li>
    <li> <a href="queryOrder.php"><i class="icon icon-signal"></i> <span>查看我的订单</span></a> </li>
    <li> <a href="studentInfo.php"><i class="icon icon-signal"></i> <span>查看我的信息</span></a> </li>


    
    <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> </a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li> -->
    
  </ul>
</div>
<!--sidebar-menu-->


<div id="content">
  
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        



        <?php 

                            include '../conn.php';


                            




                            $sql="SELECT * from dingdan where cityID='$user' order by id desc";
                            $yuyueDate="";

                            $teacherName="";
                            $beginTime="";
                            $endTime="";
                            $money="";
                            $payStatus="";
                            $process_date="";
                    
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);
                        
                        if ($result) {
                                 while($row = mysqli_fetch_array($result))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $teacherName=$row['teacherName'];
                                       
                                        $yuyueDate=$row['yuyueDate'];

                                        $beginTime=$row['beginTime'];
                                       
                                        $endTime=$row['endTime'];

                                        $money=$row['money'];
                                        $payStatus=$row['payStatus'];

                                        $yuyueType=$row['yuyueType'];
                                        if ($yuyueType==1) {
                                          $finalType='路考预约';
                                          # code...
                                        }else{
                                          $finalType='普通预约';
                                        }

                                        if ($payStatus==0) {
                                          $payZT="未支付";
                                        }else{
                                          $payZT="支付成功";
                                        }

                                       
                                        $process_date=$row['process_date'];

                                        

                                       echo "
<div class=\"row-fluid\">
      <div class=\"span4\">
        <div class=\"widget-box\">
          <div class=\"widget-title\"> 
            <h5>我的订单详情</h5>
          </div>
          <div class=\"widget-content\"> ".
          "预约日期:&nbsp&nbsp&nbsp&nbsp".
          $yuyueDate.
          "<br>教练姓名:&nbsp&nbsp&nbsp&nbsp".
          $teacherName.
          
          "<br>开始时间:&nbsp&nbsp&nbsp&nbsp".
          $beginTime.
          "<br>结束时间:&nbsp&nbsp&nbsp&nbsp".
          $endTime.
          "<br>预约类型:&nbsp&nbsp&nbsp&nbsp".
          $finalType.
          "<br>支付费用:&nbsp&nbsp&nbsp&nbsp".
          $money."&nbsp&nbsp人民币".

          "<br>支付状态:&nbsp&nbsp&nbsp&nbsp".
          $payZT.
          "<br>支付日期:&nbsp&nbsp&nbsp&nbsp".
          $process_date
          ."<br><br><a href=\"\">请线下支付</a> </div>
        </div>
      </div>
    </div>

                                       ";




                                    }
                        }
                        // echo 'tets';

                $conn->close();

                      ?>


                     
        
        
        
        
        
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
