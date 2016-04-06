<?php

include '../conn.php';

$studentID=$_POST['studentID'];




  $sql="select count(*) as count,name as name,cityID as cityID ,stage as stage,luStatus as luStatus,xiangStatus as xiangStatus from user where studentID='$studentID'";
  $count='';
  $name='';
  $cityID='';
  $stage='';
   $luStatus='';
   $xiangStatus='';

  //echo $sql."<br>";






                            
  $result = mysqli_query($conn,$sql);

  
                        if ($result) {
                                 while($row = mysqli_fetch_array($result))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $count=$row['count'];
                                        $name=$row['name'];
                                        $cityID=$row['cityID'];
                                        $stage=$row['stage'];
                                        $luStatus=$row['luStatus'];
                                        $xiangStatus=$row['xiangStatus'];
                                        
                                      }

                                        }

if (intval($count)>0) {
    // echo "<script>alert('".$name."');</script>";

    if (intval($luStatus!=0)||intval($xiangStatus!=0)) {
      echo "<script>window.location.href='addPhoneYuYueHandle2Temp.php?cityID=".$cityID."&name=".$name."';</script>";
      # code...
    }else{
      echo "<script>alert('未开通电话预约，即将跳转页面！');window.location.href='queryUserByAdmin.php';</script>";
    }
    // echo "<script>window.location.href='addPhoneYuYueHandle2Temp.php?cityID=".$cityID."&name=".$name."';</script>";


}else{
  echo "<script>window.location.href='addUserByAdmin.php?studentID=".$studentID."';</script>";
      // echo "<script>alert('".$name."');</script>";

}





$conn->close();

?>


