<?php 

session_start();
$user=$_SESSION['Tuser'];
$name=$_SESSION['Tname'];

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
  <h1><a href="dashboard.html">教师后台中心</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    
    
    
<!--     <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
 -->  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> 导航栏</a>
  <ul>
    <!-- <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li> -->
        <li><a href="index.html"><i class="icon icon-th"></i> <span>首页</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>教师基本信息管理</span> </a>
      <ul>
        <li><a href="teacherInfo.php">查询我的基本信息</a></li>
      </ul>
    </li>

    <li> <a href="queryPaiBan.php"><i class="icon icon-signal"></i> 查询我的排班</a> </li>
    <li> <a href="queryYuYue.php"><i class="icon icon-inbox"></i> <span>查询我的预约</span></a> </li>
    <li><a href="queryOrderTeacher.php"><i class="icon icon-th"></i> <span>查询我的订单</span></a></li>
    <!-- <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li> -->
  </ul>
</div>
<!--sidebar-menu-->


<div id="content">
  
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>查看我的预约</h5>
          </div>
          
        </div>



        <?php 

                            include '../conn.php';
                            $sql="SELECT * from yuyue where teacherName='$name' order by id desc";
                            $studentPhone="";
                                                        $studentName="";

                            $beginDate="";
                            $yuyueType="";
                            $beginTime="";
                            $endTime="";
                            $memo="";
                            $process_date="";
                    
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);
                        
                        if ($result) {
                                 while($row = mysqli_fetch_array($result))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                      $classStatus=$row['classStatus'];
                                        if ($classStatus==1) {
                                          $classStatusFinal='教练点击开始';
                                          # code...
                                        }
                                        if ($classStatus==2) {
                                          $classStatusFinal='学员点击开始';
                                          # code...
                                        }
                                        if ($classStatus==3) {
                                          $classStatusFinal='学员点击结束';
                                          # code...
                                        }
                                        if ($classStatus==4) {
                                          $classStatusFinal='教练点击结束';
                                          # code...
                                        }
                                        if ($classStatus==0) {
                                          $classStatusFinal='初始状态';
                                          # code...
                                        }
                                                                                $id=$row['id'];
                                        $studentPhone=$row['studentPhone'];
                                        $studentName=$row['studentName'];

                                       
                                        $beginDate=$row['beginDate'];

                                        $beginTime=$row['beginTime'];
                                       
                                        $endTime=$row['endTime'];
                                        $yuyueType=$row['yuyueType'];
                                        if ($yuyueType==1) {
                                          $finalType='路考预约';
                                          # code...
                                        }else{
                                          $finalType='普通预约';
                                        }

                                        $memo=$row['memo'];
                                       
                                        $process_date=$row['process_date'];

                                        

                                       echo "
<div class=\"row-fluid\">
      <div class=\"span4\">
        <div class=\"widget-box\">
          <div class=\"widget-title\"> 
            <h5>我的预约详情</h5>
          </div>
          <div class=\"widget-content\"> ".
          "学生姓名:&nbsp&nbsp&nbsp&nbsp".
          $studentName.
          "<br>排班日期:&nbsp&nbsp&nbsp&nbsp".
          $beginDate.
          "<br>预约类型:&nbsp&nbsp&nbsp&nbsp".
          $finalType.
          "<br>开始时间:&nbsp&nbsp&nbsp&nbsp".
          $beginTime.
          "<br>结束时间:&nbsp&nbsp&nbsp&nbsp".
          $endTime.
          "<br>上课状态（点击右下可以改变）:&nbsp&nbsp&nbsp&nbsp".
          $classStatusFinal
          ."<br><br><a href=\"\">请线下支付</a> &nbsp&nbsp &nbsp&nbsp<a href=\"saoma.php?id=".$id."\">点击更新上课状态</a> "
          
          ."</div>
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
