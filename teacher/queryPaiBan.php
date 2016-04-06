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
            <h5>查看我的排班</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>排班日期</th>
                  <th>开始时间</th>
                  <th>结束时间</th>
                                    
                </tr>
              </thead>
              <tbody>
               


<?php 

                            include '../conn.php';

                            $sql="SELECT * from paiban where teacherName='$name' order by id desc";
                            $paibanDate="";
                                                        $month="";

                            $endTime="";
                            $beginTime="";
                            
                    
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);
                        
                        if ($result) {
                                 while($row = mysqli_fetch_array($result))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $paibanDate=$row['paibanDate'];
                                        $month=$row['month'];
                                        $beginTime=$row['beginTime'];
                                       
                                        $endTime=$row['endTime'];

                                        

echo " <tr class=\"odd gradeX\">";
                                        echo "<td>".$month."月".$paibanDate."日"."</td>
                  <td>".$beginTime."</td>
                  <td>".$endTime."</td>"
                                   ;

                  // echo "<td><a href=\"../wxpay/example/jsapi.php?studentPhone=".$studentPhone."&beginDate=".$beginDate."&beginTime=".$beginTime."&endTime=".$endTime."&user=".$user."\">点击支付</a></td>";

                  echo "                </tr>
  ";



                                    }
                        }
                        // echo 'tets';

                $conn->close();

                      ?>

                  
                  
                
              </tbody>
            </table>
          </div>
        </div>
        
        
        
        
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
