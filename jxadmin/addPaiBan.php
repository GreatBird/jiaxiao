
<?php 
// $month=intval($_POST['month']);


$todayDate=date('m-d',strtotime('+0 day'));

$array=explode('-',$todayDate);

if ($array[0][0]=='0') {
  $month=$array[0][1];
  # code...
}else{
  $month=$array[0];
}
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
		
			<!-- <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-indent"></i>Form elements</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-list-alt"></i><a href="#">Forms</a></li>
						<li><i class="fa fa-indent"></i>Form elements</li>				
					</ol>
				</div>
			</div> -->

			
			<div class="row">
			    <div class="col-lg-12">
			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h2><i class="fa fa-indent red"></i><strong>添加排班（可批量）</strong></h2>
			            </div>
						<div class="panel-body">
							<form action="addPaiBanFinal.php" method="post" enctype="multipart/form-data" class="form-horizontal ">
				                

								<div class="form-group">
				                    <label class="col-md-3 control-label" for="select">排班日期(最近一周)</label>
				                    <div class="col-md-9">
				                        <select id="select" name="paibanDate" class="form-control input-lg" size="1">


				                        	<?php 


for ($i=0; $i < 7; $i++) { 

	echo "<option value=\"".date('m-d',strtotime("+$i day"))."\">".date('m-d',strtotime("+$i day"))."</option>";

	
	
}


				                        	?>
				                            
				                        </select>
				                    </div>
				                </div>

				                


				                <div class="form-group">

				                    <label class="col-md-3 control-label">排班时间段</label>
				                    <div class="col-md-9">
				                        <!-- <label class="checkbox-inline" for="inline-checkbox1">
				                        	<input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1"> One
				                        </label> -->
				                        <input type="button" name="select" onclick="selectAll1()" value="全选时间和教练"/>

				                        <?php 

								            include '../conn.php';

								            $sql="SELECT * from schedule where month='$month' group by beginTime asc";
								            $beginTime="";
								            $endTime="";
								    
										    //echo $sql;
										    $result = mysqli_query($conn,$sql);
										    
										    if ($result) {
										             while($row = mysqli_fetch_array($result))
										                { 
										                    // array_push($finalArr, $row['cate']);
										                    $beginTime=$row['beginTime'];
										                   
										                    $endTime=$row['endTime'];

										                    echo "<label class=\"checkbox-inline\" for=\"inline-checkbox1\">
				                        	<input type=\"checkbox\" id=\"inline-checkbox1\" name=\"paiBanTime[]\" value=".$beginTime."--".$endTime."> ".$beginTime."--".$endTime."
				                        </label>";


										                }
										    }
										    // echo 'tets';

								$conn->close();

											?>

				                    </div>


				                </div>





				                <div class="form-group">

				                    <label class="col-md-3 control-label">教练姓名（教练编号）</label>
				                    <div class="col-md-9">
				                        <!-- <label class="checkbox-inline" for="inline-checkbox1">
				                        	<input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1"> One
				                        </label> -->
<!-- 				                        <input type="button" name="select" onclick="selectAll()" value="全选"/>
 -->
				                        <?php 

								            include '../conn.php';

								            $sql="SELECT * from teacher";
								            $name="";
								            $teacherID="";
								            $lukaoStatus='';
								    
										    //echo $sql;
										    $result = mysqli_query($conn,$sql);
										    
										    if ($result) {
										             while($row = mysqli_fetch_array($result))
										                { 
										                    // array_push($finalArr, $row['cate']);
										                    $name=$row['name'];
										                   
										                    $teacherID=$row['teacherID'];
										                    $lukaoStatus=$row['lukaoStatus'];

										                    echo "<label class=\"checkbox-inline\" for=\"inline-checkbox1\">
				                        	<input type=\"checkbox\" id=\"inline-checkbox1\" name=\"teacher[]\" value=".$name."--".$teacherID."--".$lukaoStatus."> ".$name."(".$teacherID.")"."
				                        </label>";


										                }
										    }
										    // echo 'tets';

								$conn->close();

											?>

				                    </div>


				                </div>

				                <!-- <div class="form-group">
				                    <label class="col-md-3 control-label" for="email-input">Email Input</label>
				                    <div class="col-md-9">
				                        <input type="email" id="email-input" name="email-input" class="form-control" placeholder="Email address">
				                        <span class="help-block">Please enter your email</span>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="password-input">Password</label>
				                    <div class="col-md-9">
				                        <input type="password" id="password-input" name="password-input" class="form-control" placeholder="Password">
				                        <span class="help-block">Please enter a complex password</span>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="disabled-input">Disabled Input</label>
				                    <div class="col-md-9">
				                        <input type="text" id="disabled-input" name="disabled-input" class="form-control" placeholder="Disabled" disabled>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="textarea-input">Textarea</label>
				                    <div class="col-md-9">
				                        <textarea id="textarea-input" name="textarea-input" rows="9" class="form-control" placeholder="Content.."></textarea>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="select">Select</label>
				                    <div class="col-md-9">
				                        <select id="select" name="select" class="form-control" size="1">
				                            <option value="0">Please select</option>
				                            <option value="1">Option #1</option>
				                            <option value="2">Option #2</option>
				                            <option value="3">Option #3</option>
				                        </select>
				                    </div>
				                </div>
								<div class="form-group">
				                    <label class="col-md-3 control-label" for="select">Select Large</label>
				                    <div class="col-md-9">
				                        <select id="select" name="select" class="form-control input-lg" size="1">
				                            <option value="0">Please select</option>
				                            <option value="1">Option #1</option>
				                            <option value="2">Option #2</option>
				                            <option value="3">Option #3</option>
				                        </select>
				                    </div>
				                </div>								
								<div class="form-group">
									<label class="col-md-3 control-label" for="select">Disabled Select</label>
									<div class="col-md-9">
										<select id="disabledSelect" class="form-control" disabled>
								        	<option value="0">Please select</option>
				                            <option value="1">Option #1</option>
				                            <option value="2">Option #2</option>
				                            <option value="3">Option #3</option>
								      	</select>
								    </div>
								</div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="multiple-select">Multiple select</label>
				                    <div class="col-md-9">
				                        <select id="multiple-select" name="multiple-select" class="form-control" size="5" multiple>
				                            <option value="1">Option #1</option>
				                            <option value="2">Option #2</option>
				                            <option value="3">Option #3</option>
				                            <option value="4">Option #4</option>
				                            <option value="5">Option #5</option>
				                            <option value="6">Option #6</option>
				                            <option value="7">Option #7</option>
				                            <option value="8">Option #8</option>
				                            <option value="9">Option #9</option>
				                            <option value="10">Option #10</option>
				                        </select>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label">Radios</label>
				                    <div class="col-md-9">
				                        <div class="radio">
				                            <label for="radio1">
				                            <input type="radio" id="radio1" name="radios" value="option1"> Option 1
				                            </label>
				                        </div>
				                        <div class="radio">
				                            <label for="radio2">
				                            <input type="radio" id="radio2" name="radios" value="option2"> Option 2
				                            </label>
				                        </div>
				                        <div class="radio">
				                            <label for="radio3">
				                            <input type="radio" id="radio3" name="radios" value="option3"> Option 3
				                            </label>
				                        </div>
										<div class="radio">
				                            <label for="radio4">
				                            <input type="radio" id="radio4" name="radios" value="option4"> Option 4
				                            </label>
				                        </div>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label">Inline Radios</label>
				                    <div class="col-md-9">
				                        <label class="radio-inline" for="inline-radio1">
				                        	<input type="radio" id="inline-radio1" name="inline-radios" value="option1"> One
				                        </label>
				                        <label class="radio-inline" for="inline-radio2">
				                        	<input type="radio" id="inline-radio2" name="inline-radios" value="option2"> Two
				                        </label>
				                        <label class="radio-inline" for="inline-radio3">
				                        	<input type="radio" id="inline-radio3" name="inline-radios" value="option3"> Three
				                        </label>
										<label class="radio-inline" for="inline-radio4">
				                        	<input type="radio" id="inline-radio4" name="inline-radios" value="option4"> Four
				                        </label>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label">Checkboxes</label>
				                    <div class="col-md-9">
				                        <div class="checkbox">
				                            <label for="checkbox1">
				                            	<input type="checkbox" id="checkbox1" name="checkbox1" value="option1"> Option 1
				                            </label>
				                        </div>
				                        <div class="checkbox">
				                            <label for="checkbox2">
				                            	<input type="checkbox" id="checkbox2" name="checkbox2" value="option2"> Option 2
				                            </label>
				                        </div>
				                        <div class="checkbox">
				                            <label for="checkbox3">
				                            	<input type="checkbox" id="checkbox3" name="checkbox3" value="option3"> Option 3
				                            </label>
				                        </div>
										<div class="checkbox">
				                            <label for="checkbox4">
				                            	<input type="checkbox" id="checkbox4" name="checkbox4" value="option4"> Option 4
				                            </label>
				                        </div>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label">Inline Checkboxes</label>
				                    <div class="col-md-9">
				                        <label class="checkbox-inline" for="inline-checkbox1">
				                        	<input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1"> One
				                        </label>
				                        <label class="checkbox-inline" for="inline-checkbox2">
				                        	<input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2"> Two
				                        </label>
				                        <label class="checkbox-inline" for="inline-checkbox3">
				                        	<input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3"> Three
				                        </label>
										<label class="checkbox-inline" for="inline-checkbox4">
				                        	<input type="checkbox" id="inline-checkbox4" name="inline-checkbox3" value="option4"> Four
				                        </label>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="file-input">File input</label>
				                    <div class="col-md-9">
				                        <input type="file" id="file-input" name="file-input">
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="col-md-3 control-label" for="file-multiple-input">Multiple File input</label>
				                    <div class="col-md-9">
				                        <input type="file" id="file-multiple-input" name="file-multiple-input" multiple>
				                    </div>
				                </div> -->
								<br>
								<div class="">
		                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> 提交</button>
	                        <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> 重置</button>
		                        </div>	
				            </form>
						</div>
						<!-- <div class="panel-footer">
		                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> Submit</button>
	                        <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
		                </div>	 -->
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

	<script language=javascript>
function selectAll(){
var a = document.getElementsByTagName("input");
if(a[0].checked){
for(var i = 0;i<a.length;i++){
if(a[i].type == "checkbox") a[i].checked = false;
}
}
else{
for(var i = 0;i<a.length;i++){
if(a[i].type == "checkbox") a[i].checked = true;
}
}
}


function selectAll1(){
var a = document.getElementsByTagName("input");
if(a[0].checked){
for(var i = 0;i<a.length;i++){
if(a[i].type == "checkbox") a[i].checked = false;
}
}
else{
for(var i = 0;i<a.length;i++){
if(a[i].type == "checkbox") a[i].checked = true;
}
}
}
</script>

	
	
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