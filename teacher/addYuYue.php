<?php 


$paibanDate=$_GET['paibanDate'];
$month=$_GET['month'];

$beginTime=$_GET['beginTime'];
$endTime=$_GET['endTime'];



$teacherName=$_GET['teacherName'];
$user=$_GET['user'];



$beginDate=$month."月-".$paibanDate."日";
                            include '../conn.php';
                            $sql="insert into yuyue(studentPhone,teacherName,beginDate,beginTime,endTime) values ('$user','$teacherName','$beginDate','$beginTime','$endTime') ";
                            
                    
                        //echo $sql;
                        $result = mysqli_query($conn,$sql);
                        
                        if ($result) {
                                 echo "success";
                        }else{
                          echo "fail";
                        }
                        // echo 'tets';

                $conn->close();

                      ?>