<?php 

session_start();
                            include '../conn.php';

$studentName=$_SESSION['name'];
$cityID=$_SESSION['user'];

$user=$_GET['user'];



$paibanDate=$_GET['paibanDate'];
$month=$_GET['month'];

$beginTime=$_GET['beginTime'];
$endTime=$_GET['endTime'];




$teacherName=$_GET['teacherName'];

$price=$_GET['price'];

$yuyueType=$_GET['yuyueType'];

if ($yuyueType=='lukao') {
  $finalYuYueType=1;
}else{
  $finalYuYueType=0;
}


date_default_timezone_set('Asia/Shanghai'); 

$tempDate1=date("Y-m-d",strtotime("+0 day"));    
$tempDate2=date("Y-m-d",strtotime("+1 day"));  




// $count10='';
// $count9='';
// $sql10="SELECT count(*) as count10 from paiban where teacherName='$teacherName' and month='$month' and paibanDate='$paibanDate' and beginTime='$beginTime' and endTime='$endTime' and lukaoStatus='$finalYuYueType' ";

// $sql9="SELECT count(*) as count9 from yuyue where teacherName='$teacherName' and month='$month' and paibanDate='$paibanDate' and beginTime='$beginTime' and endTime='$endTime' and yuyueType='$finalYuYueType' ";
// echo 'sql9 is'.$sql9;
// echo '<br>';
// echo 'sql10 is'.$sql10;
// $result9 = mysqli_query($conn,$sql9);
// $result10 = mysqli_query($conn,$sql10);



                            // if ($result10) {
                            //      while($row10 = mysqli_fetch_array($result10))
                            //         { 
                            //             // array_push($finalArr, $row['cate']);
                            //             $count10=$row10['count10'];}}

                            // if ($result9) {
                            //      while($row9 = mysqli_fetch_array($result9))
                            //         { 
                            //             // array_push($finalArr, $row['cate']);
                            //             $count9=$row9['count9'];}}


                            // if (intval($count9)>=intval($count10)) {
//                               echo " <script language=\"javascript\">

// alert(\"对不起，预约已满，请换个时间段进行预约！\");
//            window.location.href=\"index.html\"; 


//     </script>"; 

                              // echo $count9.'<br>'.$count10;
                            // }else{

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

if ($yuyueType=='lukao') {
  $status=1;
  $price=$lukaoPrice;
}else{
  $status=0;
}


$yuyueDate=$month.'-'.$paibanDate;



$beginDate=$month."-".$paibanDate;





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





                                      $sqlDate="SELECT count(*) as countDate from yuyue where cityID='$cityID' and month='$month' and paibanDate='$paibanDate'";
                                                                            //$sqlDate="SELECT count(*) as countDate from yuyue where cityID='$cityID' and process_date> '$tempDate1' and process_date<'$tempDate2'";

                            

                            $resultDate = mysqli_query($conn,$sqlDate);
                            $countDate="";

                            if ($resultDate) {
                                 while($rowDate = mysqli_fetch_array($resultDate))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $countDate=$rowDate['countDate'];
                                      }
                                      }

// echo 'stage is'.$stage;
// echo 'cityID is'.$cityID;
// echo 'user is'.$user;
                           if (intval($luStatus)==0 && $finalYuYueType==1 ) {
                                                        echo " <script language=\"javascript\">

                          alert(\"对不起，您未开通路训预约功能，请联系管理员！\");
                                     window.location.href=\"index.html\"; 


                              </script>"; 
                                                      }

                            elseif (intval($xiangStatus)==0 && $finalYuYueType==0 ) {
                              echo " <script language=\"javascript\">

alert(\"对不起，您未开通项训预约功能，请联系管理员！\");
           window.location.href=\"index.html\"; 


    </script>"; 
                            }


                            elseif (intval($countDate)>intval($studentTimeMax)-1) {
                              echo " <script language=\"javascript\">

alert(\"对不起，一天只能预一课哦！\");
           window.location.href=\"index.html\"; 


    </script>"; 
                            }

                            else{


                              //xiang xun
                              if ($finalYuYueType==0) {
                                  $sql="insert into yuyue(cityID,teacherName,beginDate,beginTime,endTime,month,paibanDate,price,yuyueType,studentName) values ('$user','$teacherName','$beginDate','$beginTime','$endTime','$month','$paibanDate','$price','$status','$studentName') ";
                            $sql1="insert into dingdan(yuyueDate,teacherName,beginTime,endTime,cityID,money,yuyueType,studentName) values ('$yuyueDate','$teacherName','$beginTime','$endTime','$user','$price','$status','$studentName') ";
                            $updateXiangXsql="update paiban set bukeyuyue=1 where teacherName='$teacherName' and month='$month' and paibanDate='$paibanDate' and beginTime='$beginTime' and endTime='$endTime' and lukaoStatus='$finalYuYueType'";
                         mysqli_query($conn,$sql1);

                    
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);
                        mysqli_query($conn,$updateXiangXsql);
                        
                        if ($result) {
                                 echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"index.html\"; 


    </script>"; 
                        }else{
                          echo " <script language=\"javascript\">

alert(\"操作失败，即将返回首页\");
           window.location.href=\"index.html\"; 


    </script>"; 
                        }
  
                              }


                              if ($finalYuYueType==1) {
                                # code...
                                $sql="insert into yuyue(cityID,teacherName,beginDate,beginTime,endTime,month,paibanDate,price,yuyueType,studentName) values ('$user','$teacherName','$beginDate','$beginTime','$endTime','$month','$paibanDate','$price','$status','$studentName') ";
                            // echo $sql.'<br>';
                            
                            $sql1="insert into dingdan(yuyueDate,teacherName,beginTime,endTime,cityID,money,yuyueType,studentName) values ('$yuyueDate','$teacherName','$beginTime','$endTime','$user','$price','$status','$studentName') ";
                            // echo $sql1.'<br>';
                            $updateXiangXsql="update paiban set lukaoRenShu=lukaoRenShu+1 where teacherName='$teacherName' and month='$month' and paibanDate='$paibanDate' and beginTime='$beginTime' and endTime='$endTime' and lukaoStatus='$finalYuYueType'";
                            // echo $updateXiangXsql.'<br>';
                            // echo $updateXiangXsql;
                         mysqli_query($conn,$sql1);

                    
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);

                        mysqli_query($conn,$updateXiangXsql);

                        
                        if ($result) {
                                 echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"index.html\"; 


    </script>"; 
                        }else{
                          echo " <script language=\"javascript\">

alert(\"操作失败，即将返回首页\");
           window.location.href=\"index.html\"; 


    </script>"; 
                        }

                              }

                             




                            




// $count11='';
// $count12='';
// $sql11="SELECT count(*) as count11 from paiban where teacherName='$teacherName' and month='$month' and paibanDate='$paibanDate' and beginTime='$beginTime' and endTime='endTime' and lukaoStatus='$finalYuYueType' ";
// $sql12="SELECT count(*) as count12 from yuyue where teacherName='$teacherName' and month='$month' and paibanDate='$paibanDate' and beginTime='$beginTime' and endTime='endTime' and yuyueType='$finalYuYueType' ";
// $result11 = mysqli_query($conn,$sql11);
// $result12 = mysqli_query($conn,$sql12);

                            // if ($result11) {
                            //      while($row11 = mysqli_fetch_array($result11))
                            //         { 
                            //             // array_push($finalArr, $row['cate']);
                            //             $count11=$row11['count11'];}}


                            // if ($result12) {
                            //      while($row12 = mysqli_fetch_array($result12))
                            //         { 
                            //             // array_push($finalArr, $row['cate']);
                            //             $count12=$row12['count12'];}}

// if (intval($count11)==intval($count12)) {
//                               $sqlFinal10="update paiban set bukeyuyue=1 where teacherName='$teacherName' and month='$month' and paibanDate='$paibanDate' and beginTime='$beginTime' and endTime='endTime' and lukaoStatus='$finalYuYueType'";
//                               mysqli_query($conn,$sqlFinal10);

//                               # code...
//                             }



                            }









                            // }


                            






 



    




                            




                            




                            
                        // echo 'tets';

                $conn->close();

                      ?>