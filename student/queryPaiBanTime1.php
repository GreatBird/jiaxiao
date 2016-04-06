<?php 

$type=$_GET['type'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
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
<!--sidebar-menu-->



<!--close-left-menu-stats-sidebar-->

<div id="content">

<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="row-fluid">
      
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>查询排班</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="queryPaiBanTimeHandle1.php" method="post" class="form-horizontal">
            <input type="hidden" name="type" value=<?php echo $type;?>>
            <div class="control-group">
              <label class="control-label">选择日期（最近五天）</label>
              <div class="controls">

                <select id="select" name="date" class="form-control input-lg" size="1">

                  <?php 

for ($i=0; $i < 5; $i++) { 
  # code...
  $today=date("m-d",strtotime("+$i day"));
  $array=explode('-', $today);

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

echo "<option >".$month."-".$day."</option>";

}



                  ?>
                                    <!-- <option value="1">1月</option>
                                    <option value="2">2月</option>
                                    <option value="3">3月</option>
                                    <option value="4">4月</option>
                                    <option value="5">5月</option>
                                    <option value="6">6月</option>
                                    <option value="7">7月</option>
                                    <option value="8">8月</option>
                                    <option value="9">9月</option>
                                    <option value="10">10月</option>
                                    <option value="11">11月</option>
                                    <option value="12">12月</option> -->
                                </select>
              </div>
                            



            </div>
            
            
            
            <div class="form-actions">
              <button type="submit" class="btn btn-success">提交</button>
            </div>
          </form>
        </div>
      </div>
      
    </div>
    
  </div>
  
</div></div>
<!--Footer-part-->

<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.html"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
