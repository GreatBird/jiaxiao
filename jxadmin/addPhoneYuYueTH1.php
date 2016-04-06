
<?php 

date_default_timezone_set('Asia/Shanghai'); 


$yuYueType=$_POST['yuYueType'];
$studentName=$_POST['studentName'];
$cityID=$_POST['cityID'];

$todayDate=date("m-d",strtotime("+0 day"));

$array1Temp=explode('-', $todayDate);

                            if ($array1Temp[0][0]=='0') {
                              $monthTemp=$array1Temp[0][1];
                            }else{
                              $monthTemp=$array1Temp[0];
                            }

                            if ($array1Temp[1][0]=='0') {
                              $paibanDateTemp=$array1Temp[1][1];
                            }else{
                              $paibanDateTemp=$array1Temp[1];
                            }


// $paibanDate=$_POST['paibanDate'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Proton - Admin Template</title>    
    
    <!-- Import google fonts - Heading first/ text second -->
        <link rel='stylesheet' type='text/css' href='http://fonts.useso.com/css?family=Open+Sans:400,700|Droid+Sans:400,700' />
        <!--[if lt IE 9]>
<link href="http://fonts.useso.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
<![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico" type="image/x-icon" />

      <!-- Css files -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">   
    <link href="assets/css/jquery.mmenu.css" rel="stylesheet">    
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
      <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="assets/css/add-ons.min.css" rel="stylesheet">

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
</head>

<body>
  
  <div class="container-fluid content">
  
    <div class="row">
        
      <!-- start: Main Menu -->
      <div class="sidebar ">
                
        <div class="sidebar-collapse">
          <div class="sidebar-header t-center">
                        <span><img class="text-logo" src="assets/img/logo1.png"><i class="fa fa-space-shuttle fa-3x blue"></i></span>
                    </div>                    
          <div class="sidebar-menu">            
            <ul class="nav nav-sidebar">
              <li><a href="index.html"><i class="fa fa-laptop"></i><span class="text"> 驾校后台管理</span></a></li>


              <li>
                <a href="#"><i class="fa fa-list-alt"></i><span class="text">参数管理</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">
                  <li><a href="addCanShu.php"><i class="fa fa-indent"></i><span class="text"> 添加参数配置</span></a></li>

                  <li><a href="queryCanShu.php"><i class="fa fa-indent"></i><span class="text"> 查看参数配置</span></a></li>

                  <li><a href="updateCanShu.php"><i class="fa fa-indent"></i><span class="text"> 更改参数配置</span></a></li>
                  
                </ul>
              </li>


              <li>
                <a href="#"><i class="fa fa-list-alt"></i><span class="text">教学时段管理</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">
                  <li><a href="addSchedule.php"><i class="fa fa-indent"></i><span class="text"> 添加教学时段</span></a></li>

                  <li><a href="querySchedule.php"><i class="fa fa-indent"></i><span class="text"> 查看当月教学时段</span></a></li>

                  <li><a href="queryScheduleTemp.php"><i class="fa fa-indent"></i><span class="text"> 查看所有教学时段</span></a></li>
                  
                </ul>
              </li>

              <li>
                <a href="#"><i class="fa fa-list-alt"></i><span class="text">排班管理</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">
                  <li><a href="addPaiBan.php"><i class="fa fa-indent"></i><span class="text"> 添加排班</span></a></li>

                  <li><a href="queryPaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 查看排班</span></a></li>

                  <!-- <li><a href="updatePaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 更改排班</span></a></li> -->
                  
                </ul>
              </li>

              <li>
                <a href="#"><i class="fa fa-list-alt"></i><span class="text">订单管理</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">
                  <li><a href="queryOrder.php"><i class="fa fa-indent"></i><span class="text"> 查看订单</span></a></li>

<!--                  <li><a href="queryPaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 查看排班</span></a></li>
 -->
                  <!-- <li><a href="updatePaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 更改排班</span></a></li> -->
                  
                </ul>
              </li>

<li>
                <a href="#"><i class="fa fa-list-alt"></i><span class="text">电话预约管理</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">
                  <li><a href="addPhoneYuYue.php"><i class="fa fa-indent"></i><span class="text"> 添加电话预约</span></a></li>

                  <li><a href="queryPhoneYuYue.php"><i class="fa fa-indent"></i><span class="text"> 查看所有电话预约</span></a></li>

<!--                  <li><a href="queryPaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 查看排班</span></a></li>
 -->
                  <!-- <li><a href="updatePaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 更改排班</span></a></li> -->
                  
                </ul>
              </li>

              <li>
                <a href="#"><i class="fa fa-list-alt"></i><span class="text">教练员管理</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">
                  <li><a href="addTeacherByAdmin.php"><i class="fa fa-indent"></i><span class="text"> 添加教练员</span></a></li>

                  <li><a href="queryTeacherByAdmin.php"><i class="fa fa-indent"></i><span class="text"> 查看所有教练员</span></a></li>

<!--                  <li><a href="queryPaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 查看排班</span></a></li>
 -->
                  <!-- <li><a href="updatePaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 更改排班</span></a></li> -->
                  
                </ul>
              </li>

              <li>
                <a href="#"><i class="fa fa-list-alt"></i><span class="text">学员管理</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">
                  <li><a href=""><i class="fa fa-indent"></i>批量添加请联系技术员</a></li>

                  <li><a href="queryUserByAdmin.php"><i class="fa fa-indent"></i><span class="text"> 查看所有学员</span></a></li>
                </ul>
              </li>





              <!-- <li>
                <a href="#"><i class="fa fa-file-text"></i><span class="text"> Pages</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">
                  <li><a href="page-activity.html"><i class="fa fa-car"></i><span class="text"> Activity</span></a></li>
                  <li><a href="page-inbox.html"><i class="fa fa-envelope"></i><span class="text"> Mail</span></a></li>
                  <li><a href="page-invoice.html"><i class="fa fa-credit-card"></i><span class="text"> Invoice</span></a></li>            
                  <li><a href="page-profile.html"><i class="fa fa-heart-o"></i><span class="text"> Profile</span></a></li>
                  <li><a href="page-pricing-tables.html"><i class="fa fa-columns"></i><span class="text"> Pricing Tables</span></a></li>
                  <li><a href="page-404.html"><i class="fa fa-puzzle-piece"></i><span class="text"> 404</span></a></li>
                  <li><a href="page-500.html"><i class="fa fa-puzzle-piece"></i><span class="text"> 500</span></a></li>
                  <li><a href="page-lockscreen.html"><i class="fa fa-lock"></i><span class="text"> LockScreen1</span></a></li>
                  <li><a href="page-lockscreen2.html"><i class="fa fa-lock"></i><span class="text"> LockScreen2</span></a></li>
                  <li><a href="page-login.html"><i class="fa fa-key"></i><span class="text"> Login Page</span></a></li>
                  <li><a href="page-register.html"><i class="fa fa-sign-in"></i><span class="text"> Register Page</span></a></li>
                </ul> 
              </li>
              <li>
                <a href="#"><i class="fa fa-list-alt"></i><span class="text"> Forms</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">
                  <li><a href="form-elements.html"><i class="fa fa-indent"></i><span class="text"> Form elements</span></a></li>
                  <li><a href="form-wizard.html"><i class="fa fa-tags"></i><span class="text"> Wizard</span></a></li>
                  <li><a href="form-dropzone.html"><i class="fa fa-plus-square-o"></i><span class="text"> Dropzone Upload</span></a></li>
                  <li><a href="form-x-editable.html"><i class="fa fa-pencil"></i><span class="text"> X-editable</span></a></li>
                </ul>
              </li>
              <li><a href="table.html"><i class="fa fa-table"></i><span class="text"> Tables</span></a></li>
              <li>
                <a href="#"><i class="fa fa-signal"></i><span class="text"> Visual Chart</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">
                  <li><a href="chart-flot.html"><i class="fa fa-random"></i><span class="text"> Flot Chart</span></a></li>
                  <li><a href="chart-xchart.html"><i class="fa fa-retweet"></i><span class="text"> xChart</span></a></li>
                  <li><a href="chart-other.html"><i class="fa fa-bar-chart-o"></i><span class="text"> Other</span></a></li>
                </ul>
              </li>
              <li>
                <a href="#"><i class="fa fa-briefcase"></i><span class="text"> UI Features</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">
                  <li><a href="ui-sliders-progress.html"><i class="fa fa-align-left"></i><span class="text"> Progress</span></a></li>
                  <li><a href="ui-nestable-list.html"><i class="fa fa-outdent"></i><span class="text"> Nestable Lists</span></a></li>
                  <li><a href="ui-elements.html"><i class="fa fa-list"></i><span class="text"> Elements</span></a></li>
                  <li><a href="ui-panels.html"><i class="fa fa-list-alt"></i><span class="text"> Panels</span></a></li>
                  <li><a href="ui-buttons.html"><i class="fa fa-th"></i><span class="text"> Buttons</span></a></li>
                </ul>
              </li>
              <li><a href="widgets.html"><i class="fa fa-life-bouy"></i><span class="text"> Widgets</span></a></li>
              <li><a href="typography.html"><i class="fa fa-font"></i><span class="text"> Typography</span></a></li>
              <li>
                <a href="#"><i class="fa fa-bolt"></i><span class="text"> Icons</span> <span class="fa fa-angle-down pull-right"></span></a>
                <ul class="nav sub">                  
                  <li><a href="icons-font-awesome.html"><i class="fa fa-meh-o"></i><span class="text"> Font Awesome</span></a></li>
                  <li><a href="icons-climacons.html"><i class="fa fa-meh-o"></i><span class="text"> Climacons</span></a></li>
                </ul>
              </li>
              <li><a href="gallery.html"><i class="fa fa-picture-o"></i><span class="text"> Gallery</span></a></li>             
              <li><a href="calendar.html"><i class="fa fa-calendar"></i><span class="text"> Calendar</span></a></li> -->
            </ul>
          </div>          
        </div>
        <div class="sidebar-footer">          
          
          <div class="sidebar-brand">
            Proton
          </div>
          
          <!-- <ul class="sidebar-terms">
            <li><a href="index.html#">Terms</a></li>
            <li><a href="index.html#">Privacy</a></li>
            <li><a href="index.html#">Help</a></li>
            <li><a href="index.html#">About</a></li>
          </ul> -->
          
                  
        </div>  
        
      </div>
      <!-- end: Main Menu -->
            
    <!-- start: Content -->
    <div class="main sidebar-minified">
    
      
          
      
      
      <div class="row">   
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2><i class="fa fa-table red"></i><span class="break"></span><strong>所有教练员</strong></h2>
              
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                  <tr>
                  <th>教练员姓名</th>
                  <th>月份</th>
                  <th>日</th>
                  <th>开始时间</th>
                   <th>结束时间</th>
                   
                   <th>添加预约</th>
<!--                   <th>修改信息</th>
 -->
                

                </tr>
                </thead>   
                <tbody> 



                <?php 

                            include '../conn.php';

                            $month="";
                            $oaibanDate="";
                            $teacherName="";

                            $beginTime="";
                            $endTime="";

                            $finalDate='';
                            $finalTime='';


                            if (intval($yuYueType)==0) {
                                $sql0="SELECT * from paiban where lukaoRenShu<2 and bukeyuyue!=1 and lukaoStatus=0 and ((month='$monthTemp' and paibanDate>='$paibanDateTemp') or ( month>'$monthTemp')) order by teacherName, month,paibanDate,beginTime";

                              # code...
                            }

                            if (intval($yuYueType)==1) {
                                $sql0="SELECT * from paiban where lukaoRenShu<2 and bukeyuyue!=1 and lukaoStatus=1 and ((month='$monthTemp' and paibanDate>='$paibanDateTemp') or ( month>'$monthTemp')) order by teacherName, month,paibanDate,beginTime";

                              # code...
                            }



                           
                    
                        $result = mysqli_query($conn,$sql0);
                        
                        if ($result) {
                                 while($row = mysqli_fetch_array($result))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $id=$row['id'];

                                        $teacherName=$row['teacherName'];

                                        $month=$row['month'];

                                       
                                        $paibanDate=$row['paibanDate'];

                                        $beginTime=$row['beginTime'];
                                        $endTime=$row['endTime'];
                                        $finalDate=$month.'-'.$paibanDate;
                                        $finalTime=$beginTime.'--'.$endTime;


                                       

                                  
                                        

                                       

echo " <tr >";
                                        echo "
                  <td>".$teacherName."</td>
                  <td>".$month."</td>
                  <td>".$paibanDate."</td>
                  <td>".$beginTime."</td>
                  <td>".$endTime."</td>";

                  echo "<td><a href='addPhoneYuYueHandle3.php?studentName=".$studentName."&cityID=".$cityID."&beginDate=".$finalDate.
                  "&teacherName=".$teacherName."&yuYueType=".$yuYueType."&yuYueTime=".$finalTime."'>添加预约</a></td>";



                                        

                  


                  
                  




                  
                  echo "                </tr>
  ";



                                    }
                        }
                        // echo 'tets';

                $conn->close();

                      ?>


                <!-- <tr>
                  <td>Willson</td>
                                    <td>Developer</td>
                                    <td>2563$</td>
                  <td>
                    <span class="label label-warning">Pending</span>
                  </td>
                  <td>
                    <a class="btn btn-success" href="table.html#">
                      <i class="fa fa-search-plus "></i>                                            
                    </a>
                    <a class="btn btn-info" href="table.html#">
                      <i class="fa fa-edit "></i>                                            
                    </a>
                    <a class="btn btn-danger" href="table.html#">
                      <i class="fa fa-trash-o "></i> 

                    </a>
                  </td>
                </tr>
 -->
                <!-- <tr>
                  <td>Willson</td>
                                    <td>Developer</td>
                                    <td>2563$</td>
                                </tr> -->
                
                </tbody>
              </table>            
            </div>
          </div>
        </div><!--/col-->
      
      </div><!--/row-->
  
      
   
    </div>
    <!-- end: Content -->
    <br><br><br>    

    
    
    <div id="usage">
      <ul>
        <li>
          <div class="title">Memory</div>
          <div class="bar">
            <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
            </div>
          </div>      
          <div class="desc">4GB of 8GB</div>
        </li>
        <li>
          <div class="title">HDD</div>
          <div class="bar">
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
            </div>
          </div>      
          <div class="desc">250GB of 1TB</div>
        </li>
        <li>
          <div class="title">SSD</div>
          <div class="bar">
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
            </div>
          </div>      
          <div class="desc">700GB of 1TB</div>
        </li>
        <li>
          <div class="title">Bandwidth</div>
          <div class="bar">
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
            </div>
          </div>      
          <div class="desc">90TB of 100TB</div>
        </li>       
      </ul> 
    </div>      
    
  </div><!--/container-->
    
  
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <p>Here settings can be configured...</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  <div class="clearfix"></div>
  
    
  <!-- start: JavaScript-->
  <!--[if !IE]>-->

      <script src="assets/js/jquery-2.1.1.min.js"></script>

  <!--<![endif]-->

  <!--[if IE]>
  
    <script src="assets/js/jquery-1.11.1.min.js"></script>
  
  <![endif]-->

  <!--[if !IE]>-->

    <script type="text/javascript">
      window.jQuery || document.write("<script src='assets/js/jquery-2.1.1.min.js'>"+"<"+"/script>");
    </script>

  <!--<![endif]-->

  <!--[if IE]>
  
    <script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
    </script>
    
  <![endif]-->
  <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>  
  
  
  <!-- page scripts -->
  <script src="assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
  <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>
  
  <!-- theme scripts -->
  <script src="assets/js/SmoothScroll.js"></script>
  <script src="assets/js/jquery.mmenu.min.js"></script>
  <script src="assets/js/core.min.js"></script>
  
  <!-- inline scripts related to this page -->
  <script src="assets/js/pages/table.js"></script>
  
  <!-- end: JavaScript-->
  
</body>
</html>