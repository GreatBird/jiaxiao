<?php 

								            include '../conn.php';

								            $studentName=$_GET['studentName'];
								            $cityID=$_GET['cityID'];
								            $beginDate=$_GET['beginDate'];

								            $array1Temp=explode('-', $beginDate);

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


								            $yuYueTime=$_GET['yuYueTime'];
								            $teacherName=$_GET['teacherName'];

								            $yuYueType=$_GET['yuYueType'];
								            $price='';




date_default_timezone_set('Asia/Shanghai'); 

$tempDate1=date("Y-m-d",strtotime("+0 day"));    
$tempDate2=date("Y-m-d",strtotime("+1 day"));  

								            // $sqlDate="SELECT count(*) as countDate from yuyue where cityID='$cityID'  and process_date> '$tempDate1' and process_date<'$tempDate2'";
                            $sqlDate="SELECT count(*) as countDate from yuyue where cityID='$cityID'  and month='$monthTemp' and paibanDate='$paibanDateTemp'";


                            $resultDate = mysqli_query($conn,$sqlDate);
                            $countDate="";

                            if ($resultDate) {
                                 while($rowDate = mysqli_fetch_array($resultDate))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $countDate=$rowDate['countDate'];
                                      }
                                      }



                                      $sqlSX="SELECT * from paramConfigs ";
                            
                            $studentTimeMax="";

                            $resultSX = mysqli_query($conn,$sqlSX);

                            if ($resultSX) {
                                 while($rowSX = mysqli_fetch_array($resultSX))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $studentTimeMax=$rowSX['studentTimeMax'];
                                      }
                                      }





								            if (intval($yuYueType)==1) {

								            	$sql0="SELECT * from paramConfigs ";
                            
                            $lukaoPrice="";

                            $result0 = mysqli_query($conn,$sql0);

                            if ($result0) {
                                 while($row0 = mysqli_fetch_array($result0))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $lukaoPrice=$row0['lukaoPrice'];
                                      }
                                      }
                                      $price=$lukaoPrice;

								            	# code...
								            }


								            if (intval($yuYueType)==0) {
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

                                  $price=$finalPrice;
								            }

								            $array1=explode('-', $beginDate);

								            if ($array1[0][0]=='0') {
								            	$month=$array1[0][1];
								            }else{
								            	$month=$array1[0];
								            }

								            if ($array1[1][0]=='0') {
								            	$paibanDate=$array1[1][1];
								            }else{
								            	$paibanDate=$array1[1];
								            }


								            $array2=explode('--', $yuYueTime);

								            $beginTime=$array2[0];
								            $endTime=$array2[1];


								   



$sqlFirst="SELECT * from user where cityID='$cityID'";
                            

                            $resultFirst = mysqli_query($conn,$sqlFirst);
                            $stage="";
                            $luStatus='';
                            $xiangStatus='';

                            if ($resultFirst) {
                                 while($rowFirst = mysqli_fetch_array($resultFirst))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $stage=$rowFirst['stage'];
                                        $luStatus=$rowFirst['luStatus'];
                                        $xiangStatus=$rowFirst['xiangStatus'];
                                      }
                                      }



                            if (intval($luStatus)==0 && intval($yuYueType)==1 ) {
                                                        echo " <script language=\"javascript\">

                          alert(\"对不起，该用户未开通路训预约功能！\");
                                     window.location.href=\"queryUserByAdmin.php\"; 


                              </script>"; 
                                                      }

                            elseif (intval($xiangStatus)==0 && intval($yuYueType)==0 ) {
                              echo " <script language=\"javascript\">

alert(\"对不起，该用户未开通项训预约功能！\");
           window.location.href=\"queryUserByAdmin.php\"; 


    </script>"; 
                            }else{





if (intval($countDate)>(intval($studentTimeMax)-1)) {
	echo "<script>alert('该用户今天已经预约，不可再预约！');window.location.href='index.html';</script>";
	# code...
}else{

if (intval($yuYueType)==1) {
		$sql2="insert into yuyue(cityID,teacherName,beginDate,beginTime,endTime,month,paibanDate,price,yuyueType,studentName,phoneYuYue) values ('$cityID','$teacherName','$beginDate','$beginTime','$endTime','$month','$paibanDate','$price','$yuYueType','$studentName',1) ";
	    $updateXiangXsql="update paiban set lukaoRenShu=lukaoRenShu+1 where teacherName='$teacherName' and month='$month' and paibanDate='$paibanDate' and beginTime='$beginTime' and endTime='$endTime' and lukaoStatus=1";
                         mysqli_query($conn,$sql2);
                                                  mysqli_query($conn,$updateXiangXsql);


	# code...
}

if (intval($yuYueType)==0) {
	# code...
	$sql2="insert into yuyue(cityID,teacherName,beginDate,beginTime,endTime,month,paibanDate,price,yuyueType,studentName,phoneYuYue) values ('$cityID','$teacherName','$beginDate','$beginTime','$endTime','$month','$paibanDate','$price','$yuYueType','$studentName',1) ";
    $updateXiangXsql="update paiban set bukeyuyue=1 where teacherName='$teacherName' and month='$month' and paibanDate='$paibanDate' and beginTime='$beginTime' and endTime='$endTime' and lukaoStatus=0";
    mysqli_query($conn,$sql2);
                                                  mysqli_query($conn,$updateXiangXsql);
}



                            $sql3="insert into dingdan(yuyueDate,teacherName,beginTime,endTime,cityID,money,yuyueType,studentName) values ('$beginDate','$teacherName','$beginTime','$endTime','$cityID','$price','$yuYueType','$studentName') ";
                          mysqli_query($conn,$sql3);


                          echo "<script>alert('添加预约成功!');window.location.href='index.html';</script>";


}

}


								            




								$conn->close();

											?>