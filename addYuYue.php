<?php
include 'conn.php';
    global $sql;
    global $tempColumn;
    global $tempValues;
    $sql=$sql."insert into yuyue ";
    foreach ($_POST as $key => $value) {
        $tempColumn=$tempColumn.$key.' , ';
        $tempValues=$tempValues.'\''.$value.'\''.' , ';
    }


    $tempColumn=$tempColumn.'month,'.'paibanDate';


    $array=explode('-',$_POST['beginDate']);

    if ($array[1][0]=='0') {
        $month=$array[1][1];
        # code...
    }else{
        $month=$array[1];
    }


    if ($array[0][0]=='0') {
        $day=$array[0][1];
        # code...
    }else{
        $day=$array[0];
    }


    // echo $month;
    // echo $day;

    $tempValues=$tempValues.'\''.$month.'\''.' , '.'\''.$day.'\'';






    $sql=$sql.' ('.$tempColumn.') '.'values'.' ('.$tempValues.' )';
    // $sql=$sql.' ('.substr($tempColumn, 0,-2).') '.'values'.' ('.substr($tempValues, 0,-2).' )';
    //echo $sql;
    $result=mysqli_query($conn,$sql);




    $price=$_POST['price'];
    $yuyueDate=$_POST['beginDate'];
    $beginTime=$_POST['beginTime'];
    $endTime=$_POST['endTime'];
    $teacherName=$_POST['teacherName'];
    $cityID=$_POST['cityID'];



    $sql1="insert into dingdan(yuyueDate,teacherName,beginTime,endTime,cityID,money) values ('$yuyueDate','$teacherName','$beginTime','$endTime','$cityID','$price') ";
    mysqli_query($conn,$sql1);


    if ($result) {
        // $arr = array ('code'=>1,'info'=>'publish success'); 
        echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"student/index.html\"; 


    </script>";
    }else{
        // $arr = array ('code'=>0,'info'=>'publish failed');
        echo " <script language=\"javascript\">

alert(\"操作失败，即将返回首页\");
           window.location.href=\"student/index.html\"; 


    </script>"; 
    }
    
    //$arr = array ('code'=>1,'update success and nickname is '=>$nickname); 
    // $arr["json"]=json_encode($arr,JSON_UNESCAPED_UNICODE);
    // echo json_encode($arr,JSON_UNESCAPED_UNICODE); 
$conn->close();
?>