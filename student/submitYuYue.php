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
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>导航栏</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>首页</span></a> </li>
        <li> <a href="queryPaiBanTime1.php"><i class="icon icon-signal"></i> <span>先预约时间后预约教练</span></a> </li>
                <li> <a href="queryPaiBanTeacher.php"><i class="icon icon-signal"></i> <span>先预约教练后预约时间</span></a> </li>

    <li> <a href="queryPaiBanTemp.php"><i class="icon icon-signal"></i> <span>查看教练排班</span></a> </li>
        <li> <a href="submitYuYue.php"><i class="icon icon-signal"></i> <span>快速预约</span></a> </li>

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
          <h5>快捷新增预约</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="../addYuYue.php" method="post" class="form-horizontal">


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



                $conn->close();


            ?>

            <input type="hidden" name="price" value=<?php echo $finalPrice;?>>
            <div class="control-group">
              <label class="control-label">请选择日期</label>
              <div class="controls">
                <input type="text" name="beginDate" data-date="01-02-2013" data-date-format="dd-mm-yyyy"  class="datepicker span11">
                <span class="help-block">日期格式(日日-月月-年年)</span> </div>
            </div>



            <div class="control-group">
              <label class="control-label">开始时间</label>
              <div class="controls">
                <select name="beginTime">
                  <option>08:00</option>
                  <option>09:00</option>
                  <option>10:00</option>
                  <option>11:00</option>
                  <option>12:00</option>
                  <option>13:00</option>
                  <option>14:00</option>
                  <option>15:00</option>
                  <option>16:00</option>
                  <option>17:00</option>
                  <option>18:00</option>
                </select>
              </div>
            </div>



            

            <div class="control-group">
              <label class="control-label">结束时间</label>
              <div class="controls">
                <select name="endTime">
                  <option>08:00</option>
                  <option>09:00</option>
                  <option>10:00</option>
                  <option>11:00</option>
                  <option>12:00</option>
                  <option>13:00</option>
                  <option>14:00</option>
                  <option>15:00</option>
                  <option>16:00</option>
                  <option>17:00</option>
                  <option>18:00</option>
                </select>
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">教练姓名</label>
              <div class="controls">
                <select name="teacherName">

<?php 

                            include '../conn.php';

                            $sql="SELECT * from teacher";
                            $name="";
                            $teacherID="";
                    
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);
                        
                        if ($result) {
                                 while($row = mysqli_fetch_array($result))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $name=$row['name'];
                                       
                                        $teacherID=$row['teacherID'];

                                        echo "<option>".$name."</option>";


                                    }
                        }
                        // echo 'tets';

                $conn->close();

                      ?>




                  
                </select>
              </div>
            </div>


            <!-- <div class="control-group">
              <label class="control-label">Multiple Select input</label>
              <div class="controls">
                <select multiple >
                  <option>First option</option>
                  <option selected>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
              </div>
            </div> -->
            <!-- <div class="control-group">
              <label class="control-label">Radio inputs</label>
              <div class="controls">
                <label>
                  <input type="radio" name="radios" />
                  First One</label>
                <label>
                  <input type="radio" name="radios" />
                  Second One</label>
                <label>
                  <input type="radio" name="radios" />
                  Third One</label>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Checkboxes</label>
              <div class="controls">
                <label>
                  <input type="checkbox" name="radios" />
                  First One</label>
                <label>
                  <input type="checkbox" name="radios" />
                  Second One</label>
                <label>
                  <input type="checkbox" name="radios" />
                  Third One</label>
              </div>
            </div> -->
           <!--  <div class="control-group">
              <label for="checkboxes" class="control-label">Data Toggle checkbox</label>
              <div class="controls">
                <div data-toggle="buttons-checkbox" class="btn-group">
                  <button class="btn btn-primary" type="button">Left</button>
                  <button class="btn btn-primary" type="button">Middle</button>
                  <button class="btn btn-primary" type="button">Right</button>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label for="checkboxes" class="control-label">Data Radio button</label>
              <div class="controls">
                <div data-toggle="buttons-radio" class="btn-group">
                  <button class="btn btn-primary" type="button">Left</button>
                  <button class="btn btn-primary" type="button">Middle</button>
                  <button class="btn btn-primary" type="button">Right</button>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" />
              </div>
            </div> -->
            <div class="control-group">
              <label class="control-label">您的姓名</label>
              <div class="controls">
                <input type="text" name="studentName" placeholder="请输入您的姓名" class="span11">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">您的电话</label>
              <div class="controls">
                <input type="text" name="studentPhone" placeholder="请输入您的电话" class="span11">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">您的身份证号</label>
              <div class="controls">
                <input type="text" name="cityID" placeholder="请输入您的身份证号" class="span11">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">备注</label>
              <div class="controls">
                <input type="text" name="memo" placeholder="请输入您想说的话" class="span11">
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
