

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
		<link href="assets/plugins/chosen/css/chosen.css" rel="stylesheet">
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
	<!-- start: Header -->
	
	<!-- end: Header -->
	
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

									<li><a href="querySchedule.php"><i class="fa fa-indent"></i><span class="text"> 查看教学时段</span></a></li>

									<li><a href="updateSchedule.php"><i class="fa fa-indent"></i><span class="text"> 更改教学时段</span></a></li>
									
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

<!-- 									<li><a href="queryPaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 查看排班</span></a></li>
 -->
									<!-- <li><a href="updatePaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 更改排班</span></a></li> -->
									
								</ul>
							</li>


							<li>
								<a href="#"><i class="fa fa-list-alt"></i><span class="text">电话预约管理</span> <span class="fa fa-angle-down pull-right"></span></a>
								<ul class="nav sub">
									<li><a href="addPhoneYuYue.php"><i class="fa fa-indent"></i><span class="text"> 添加电话预约</span></a></li>

									<li><a href="queryPhoneYuYue.php"><i class="fa fa-indent"></i><span class="text"> 查看所有电话预约</span></a></li>

<!-- 									<li><a href="queryPaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 查看排班</span></a></li>
 -->
									<!-- <li><a href="updatePaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 更改排班</span></a></li> -->
									
								</ul>
							</li>

							<li>
								<a href="#"><i class="fa fa-list-alt"></i><span class="text">教练员管理</span> <span class="fa fa-angle-down pull-right"></span></a>
								<ul class="nav sub">
									<li><a href="addTeacherByAdmin.php"><i class="fa fa-indent"></i><span class="text"> 添加教练员</span></a></li>

									<li><a href="queryTeacherByAdmin.php"><i class="fa fa-indent"></i><span class="text"> 查看所有教练员</span></a></li>

<!-- 									<li><a href="queryPaiBanTemp.php"><i class="fa fa-indent"></i><span class="text"> 查看排班</span></a></li>
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
		<div class="main ">
		
			
			<?php 

            include '../conn.php';

            $sql='SELECT * from schedule where month=1';
        	$beginTime="未设置";
        	$endTime="未设置";
		    //echo $sql;
		    $result = mysqli_query($conn,$sql);
		    
		    if ($result) {
		             while($row = mysqli_fetch_array($result))
		                { 
		                    $beginTime=$row['beginTime'];
		                    $endTime=$row['endTime'];
		                  

		                }
		    }

		    $sql2='SELECT * from schedule where month=2';
        	$beginTime2="未设置";
        	$endTime2="未设置";
		    //echo $sql;
		    $result2 = mysqli_query($conn,$sql2);
		    
		    if ($result2) {
		             while($row2 = mysqli_fetch_array($result2))
		                { 
		                    $beginTime2=$row2['beginTime'];
		                    $endTime2=$row2['endTime'];
		                  

		                }
		    }


		    $sql3='SELECT * from schedule where month=3';
        	$beginTime3="未设置";
        	$endTime3="未设置";
		    //echo $sql;
		    $result3 = mysqli_query($conn,$sql3);
		    
		    if ($result3) {
		             while($row3 = mysqli_fetch_array($result3))
		                { 
		                    $beginTime3=$row3['beginTime'];
		                    $endTime3=$row3['endTime'];
		                  

		                }
		    }

			$sql4='SELECT * from schedule where month=4';
        	$beginTime4="未设置";
        	$endTime4="未设置";
		    //echo $sql;
		    $result4 = mysqli_query($conn,$sql4);
		    
		    if ($result4) {
		             while($row4= mysqli_fetch_array($result4))
		                { 
		                    $beginTime4=$row4['beginTime'];
		                    $endTime4=$row4['endTime'];
		                  

		                }
		    }


			$sql5='SELECT * from schedule where month=5';
        	$beginTime5="未设置";
        	$endTime5="未设置";
		    //echo $sql;
		    $result5= mysqli_query($conn,$sql5);
		    
		    if ($result5) {
		             while($row5 = mysqli_fetch_array($result5))
		                { 
		                    $beginTime5=$row5['beginTime'];
		                    $endTime5=$row5['endTime'];
		                  

		                }
		    }

		    $sql6='SELECT * from schedule where month=6';
        	$beginTime6="未设置";
        	$endTime6="未设置";
		    //echo $sql;
		    $result6 = mysqli_query($conn,$sql6);
		    
		    if ($result6) {
		             while($row6 = mysqli_fetch_array($result6))
		                { 
		                    $beginTime6=$row6['beginTime'];
		                    $endTime6=$row6['endTime'];
		                  

		                }
		    }


		    $sql7='SELECT * from schedule where month=7';
        	$beginTime7="未设置";
        	$endTime7="未设置";
		    //echo $sql;
		    $result7 = mysqli_query($conn,$sql7);
		    
		    if ($result7) {
		             while($row7 = mysqli_fetch_array($result7))
		                { 
		                    $beginTime7=$row7['beginTime'];
		                    $endTime7=$row7['endTime'];
		                  

		                }
		    }


		    $sql8='SELECT * from schedule where month=8';
        	$beginTime8="未设置";
        	$endTime8="未设置";
		    //echo $sql;
		    $result8 = mysqli_query($conn,$sql8);
		    
		    if ($result8) {
		             while($row8= mysqli_fetch_array($result8))
		                { 
		                    $beginTime8=$row8['beginTime'];
		                    $endTime8=$row8['endTime'];
		                  

		                }
		    }

			$sql9='SELECT * from schedule where month=9';
        	$beginTime9="未设置";
        	$endTime9="未设置";
		    //echo $sql;
		    $result9 = mysqli_query($conn,$sql9);
		    
		    if ($result9) {
		             while($row9 = mysqli_fetch_array($result9))
		                { 
		                    $beginTime9=$row9['beginTime'];
		                    $endTime9=$row9['endTime'];
		                  

		                }
		    }


			$sql10='SELECT * from schedule where month=10';
        	$beginTime10="未设置";
        	$endTime10="未设置";
		    //echo $sql;
		    $result10 = mysqli_query($conn,$sql10);
		    
		    if ($result10) {
		             while($row10 = mysqli_fetch_array($result10))
		                { 
		                    $beginTime10=$row10['beginTime'];
		                    $endTime10=$row10['endTime'];
		                  

		                }
		    }

		    $sql11='SELECT * from schedule where month=11';
        	$beginTime11="未设置";
        	$endTime11="未设置";
		    //echo $sql;
		    $result11 = mysqli_query($conn,$sql11);
		    
		    if ($result11) {
		             while($row11 = mysqli_fetch_array($result11))
		                { 
		                    $beginTime11=$row11['beginTime'];
		                    $endTime11=$row11['endTime'];
		                  

		                }
		    }

		    $sql12='SELECT * from schedule where month=12';
        	$beginTime12="未设置";
        	$endTime12="未设置";
		    //echo $sql;
		    $result12 = mysqli_query($conn,$sql12);
		    
		    if ($result12) {
		             while($row12 = mysqli_fetch_array($result12))
		                { 
		                    $beginTime12=$row12['beginTime'];
		                    $endTime12=$row12['endTime'];
		                  

		                }
		    }



$conn->close();

			?>
			<div class="row">
			    <div class="col-lg-12">
			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>1月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime" class="form-control" placeholder="Text" value=<?php echo $beginTime;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime" class="form-control" placeholder="Text" value=<?php echo $endTime;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	

			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>2月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime2" class="form-control" placeholder="Text" value=<?php echo $beginTime2;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime2" class="form-control" placeholder="Text" value=<?php echo $endTime2;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	

			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>3月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime3" class="form-control" placeholder="Text" value=<?php echo $beginTime3;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime3" class="form-control" placeholder="Text" value=<?php echo $endTime3;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	


			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>4月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime4" class="form-control" placeholder="Text" value=<?php echo $beginTime4;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime4" class="form-control" placeholder="Text" value=<?php echo $endTime4;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	


			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>5月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime5" class="form-control" placeholder="Text" value=<?php echo $beginTime5;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime5" class="form-control" placeholder="Text" value=<?php echo $endTime5;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	


			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>6月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime6" class="form-control" placeholder="Text" value=<?php echo $beginTime6;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime6" class="form-control" placeholder="Text" value=<?php echo $endTime6;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	


			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>7月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime7" class="form-control" placeholder="Text" value=<?php echo $beginTime7;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime7" class="form-control" placeholder="Text" value=<?php echo $endTime7;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	



			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>8月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime8" class="form-control" placeholder="Text" value=<?php echo $beginTime8;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime8" class="form-control" placeholder="Text" value=<?php echo $endTime8;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	



			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>9月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime9" class="form-control" placeholder="Text" value=<?php echo $beginTime9;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime9" class="form-control" placeholder="Text" value=<?php echo $endTime9;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	



			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>10月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime10" class="form-control" placeholder="Text" value=<?php echo $beginTime10;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime10" class="form-control" placeholder="Text" value=<?php echo $endTime10;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	



			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>11月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime11" class="form-control" placeholder="Text" value=<?php echo $beginTime11;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime11" class="form-control" placeholder="Text" value=<?php echo $endTime11;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	


			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>12月驾校时间安排</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">				      
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">开始时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="beginTime12" class="form-control" placeholder="Text" value=<?php echo $beginTime12;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>

				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="text-input">结束时间</label>
				                    <div class="col-md-9">
				                        <input type="text" id="text-input" name="endTime12" class="form-control" placeholder="Text" value=<?php echo $endTime12;?>>
				                        <span class="help-block"> </span>
				                    </div>
				                </div>         			           				            
								<br>
								
				            </form>
						</div>
						
			        </div>	
			    </div>
				
			    <!-- <div class="col-md-6">			        
			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>Normal Form</strong></h2>
			            </div>
			            <div class="panel-body">
							<form action="" method="post">
				                <div class="form-group">
				                    <label for="nf-email">Email</label>
				                    <input type="email" id="nf-email" name="nf-email" class="form-control" placeholder="Email address">
				                    <span class="help-block">Please enter your email</span>
				                </div>
				                <div class="form-group">
				                    <label for="nf-password">Password</label>
				                    <input type="password" id="nf-password" name="nf-password" class="form-control" placeholder="Password">
				                    <span class="help-block">Please enter your password</span>
				                </div>
				            </form>
						</div>
						<div class="panel-footer">
		                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> Submit</button>
	                        <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
		                </div>
			        </div>
			        
					
					<div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>Input Grid</strong></h2>
			            </div>
			            <div class="panel-body">
							<form action="" method="post" class="form-horizontal ">
				                
				                <div class="form-group">
				                    <div class="col-sm-3">
				                        <input type="text" class="form-control" placeholder=".col-sm-3">
				                    </div>
				                </div>
								<div class="form-group">
				                    <div class="col-sm-4">
				                        <input type="text" class="form-control" placeholder=".col-sm-4">
				                    </div>
				                </div>
								<div class="form-group">
				                    <div class="col-sm-5">
				                        <input type="text" class="form-control" placeholder=".col-sm-5">
				                    </div>
				                </div>
								<div class="form-group">
				                    <div class="col-sm-6">
				                        <input type="text" class="form-control" placeholder=".col-sm-6">
				                    </div>
				                </div>
								<div class="form-group">
				                    <div class="col-sm-7">
				                        <input type="text" class="form-control" placeholder=".col-sm-7">
				                    </div>
				                </div>
								<div class="form-group">
				                    <div class="col-sm-8">
				                        <input type="text" class="form-control" placeholder=".col-sm-8">
				                    </div>
				                </div>
								<div class="form-group">
				                    <div class="col-sm-9">
				                        <input type="text" class="form-control" placeholder=".col-sm-9">
				                    </div>
				                </div>
								<div class="form-group">
				                    <div class="col-sm-10">
				                        <input type="text" class="form-control" placeholder=".col-sm-10">
				                    </div>
				                </div>
								<div class="form-group">
				                    <div class="col-sm-11">
				                        <input type="text" class="form-control" placeholder=".col-sm-11">
				                    </div>
				                </div>
								<div class="form-group">
				                    <div class="col-sm-12">
				                        <input type="text" class="form-control" placeholder=".col-sm-12">
				                    </div>
				                </div>
				            </form>
						</div>
						<div class="panel-footer">
							<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Login</button>
	                        <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
						</div>	
			        </div>
					
					<div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>Input Sizes</strong></h2>
			            </div>
			            <div class="panel-body">
							<form action="" method="post" class="form-horizontal ">
				                <div class="form-group">
				                    <label class="col-sm-3 control-label" for="input-small">Small Input</label>
				                    <div class="col-sm-6">
				                        <input type="text" id="input-small" name="input-small" class="form-control input-sm" placeholder=".input-sm">
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-sm-3 control-label" for="input-normal">Normal Input</label>
				                    <div class="col-sm-6">
				                        <input type="text" id="input-normal" name="input-normal" class="form-control" placeholder="Normal">
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-sm-3 control-label" for="input-large">Large Input</label>
				                    <div class="col-sm-6">
				                        <input type="text" id="input-large" name="input-large" class="form-control input-lg" placeholder=".input-lg">
				                    </div>
				                </div>
				            </form>
						</div>
						<div class="panel-footer">
		                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> Submit</button>
	                        <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
		                </div>					
			        </div>
					<div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>Inline Form</strong></h2>
			            </div>
			            <div class="panel-body">
							<form action="" method="post" class="form-inline">
				                <div class="form-group">
				                    <label class="sr-only" for="if-email">Email</label>
				                    <input type="email" id="if-email" name="if-email" class="form-control" placeholder="Email address">
				                </div>
				                <div class="form-group">
				                    <label class="sr-only" for="if-password">Password</label>
				                    <input type="password" id="if-password" name="if-password" class="form-control" placeholder="Password">
				                </div>
				            </form>
						</div>
						<div class="panel-footer">
		                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> Submit</button>
	                        <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
		                </div>
			        </div>
				</div> --><!--/.col-->
			</div><!--/.row-->
			
			<!--/container-->
		
	
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
	<script src="assets/plugins/chosen/js/chosen.jquery.min.js"></script>
	<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
	<script src="assets/plugins/placeholder/jquery.placeholder.min.js"></script>
	<script src="assets/plugins/maskedinput/jquery.maskedinput.min.js"></script>
	<script src="assets/plugins/inputlimiter/js/jquery.inputlimiter.1.3.1.min.js"></script>
	<script src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/plugins/moment/moment.min.js"></script>
	<script src="assets/plugins/daterangepicker/js/daterangepicker.min.js"></script>
	<script src="assets/plugins/hotkeys/jquery.hotkeys.min.js"></script>
	<script src="assets/plugins/wysiwyg/bootstrap-wysiwyg.min.js"></script>
	<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
	
	<!-- theme scripts -->
	<script src="assets/js/SmoothScroll.js"></script>
	<script src="assets/js/jquery.mmenu.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="assets/js/pages/form-elements.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>