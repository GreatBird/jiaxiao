<?php 
session_start();
$user=$_SESSION['user'];

$date=$_POST['date'];

$type=$_POST['type'];



$array=explode('-', $date);

// print_r($array);


if ($array[0][0]=='0') {

  $month=$array[0][1];
  # code...
}else{
    $month=$array[0];
}



if ($array[1][0]=='0') {

  $day=$array[1][1];
  # code...
}else{
    $day=$array[1];
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->


<!--start-top-serch-->

<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> 导航栏</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>首页</span></a> </li>
       <!--  <li> <a href="queryPaiBanTime1.php"><i class="icon icon-signal"></i> <span>先预约时间后预约教练</span></a> </li>
                <li> <a href="queryPaiBanTeacher.php"><i class="icon icon-signal"></i> <span>先预约教练后预约时间</span></a> </li> -->

<li class="bg_ls"> <a href="yuYueTemp.php?type=lukao"> <i class="icon-tint"></i> 路训预约</a> </li>
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
<div id="content">
  <div id="content-header">
<!--     <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Grid Layout</a> </div>
 -->    <h1>查看<?php echo $month."月".$day."日所有教练的排班";?></h1>
  </div>



  <?php 

                            include '../conn.php';


                            $sql1="SELECT * from paramConfigs ";
                            $normalPrice="";
                            $weekPrice="";
                            $finalPrice="";

                            $result1 = mysqli_query($conn,$sql1);

                            if ($result1) {
                                 while($row1 = mysqli_fetch_array($result1))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $normalPrice=$row1['normalPrice'];
                                        $weekPrice=$row1['weekPrice'];

                                      }
                                    }


                                    $a = date("w",strtotime("日期"));
                                    if($a =="0" || $a=="6"){
                                      // echo "是周末";
                                      $finalPrice=$weekPrice;
                                  }else{
                                      // echo "不是周末";
                                    $finalPrice=$normalPrice;
                                  }


                             $lukaoStatusTemp='';
                            if ($type=='lukao') {
                              $lukaoStatusTemp=1;
                            }else{
                              $lukaoStatusTemp=0;
                            }

                            $sql="SELECT * from paiban where month='$month' and paibanDate='$day' and lukaoStatus='$lukaoStatusTemp' and bukeyuyue!=1 and lukaoRenShu<2";

                            $teacherName="";
                            $beginTime="";
                            $endTime="";
                            
                    
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);
                        
                        if ($result) {
                                 while($row = mysqli_fetch_array($result))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $teacherName=$row['teacherName'];
                                       
                                        $beginTime=$row['beginTime'];
                                                                                $endTime=$row['endTime'];


                                        

                                       echo "
<div class=\"row-fluid\">
      <div class=\"span4\">
        <div class=\"widget-box\">
          <div class=\"widget-title\"> 
            <h5>教练排班详情</h5>
          </div>
          <div class=\"widget-content\"> ".
          "教练姓名:&nbsp&nbsp&nbsp&nbsp".
          $teacherName.
          "<br>排班日期:&nbsp&nbsp&nbsp&nbsp".
          $month.
          "-".
          $day.
          "<br>开始时间:&nbsp&nbsp&nbsp&nbsp".
          $beginTime.
          "<br>结束时间:&nbsp&nbsp&nbsp&nbsp".
          $endTime.
          "<br>价格（工作日/周末价格不同,系统自动清算，当前价格为）:&nbsp&nbsp&nbsp&nbsp".
          $finalPrice."人民币"
          ."<br><br>";
          if ($type=='lukao') {
            echo "<a href=\"addYuYue.php?month=".$month."&paibanDate=".$day."&teacherName=".$teacherName."&beginTime=".$beginTime."&endTime=".$endTime."&user=".$user."&price=".$finalPrice."&yuyueType=".'lukao'."\">点击路训预约</a> ";
          }else{
            echo "<a href=\"addYuYue.php?month=".$month."&paibanDate=".$day."&teacherName=".$teacherName."&beginTime=".$beginTime."&endTime=".$endTime."&user=".$user."&price=".$finalPrice."&yuyueType=".'normal'."\">点击项训预约</a>";
          }
          echo "</div>
        </div>
      </div>
    </div>

                                       ";




                                    }
                        }
                        // echo 'tets';

                $conn->close();

                      ?>
  
    <!-- <div class="row-fluid">
      <div class="span4">
        <div class="widget-box">
          <div class="widget-title"> 
            <h5>教练排班详情</h5>
          </div>
          <div class="widget-content"> a<br>b<br>c<br>d<br><br><a href="">点击预约</a> </div>
        </div>
      </div>
    </div> -->
    
    
  </div>
</div>
<!--Footer-part-->

<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/matrix.js"></script>
</body>
</html>
