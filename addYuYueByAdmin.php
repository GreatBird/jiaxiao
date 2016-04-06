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
    $sql=$sql.' ('.substr($tempColumn, 0,-2).') '.'values'.' ('.substr($tempValues, 0,-2).' )';
    //echo $sql;
    $result=mysqli_query($conn,$sql);
    if ($result) {
        // $arr = array ('code'=>1,'info'=>'publish success'); 
        echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"jxadmin/index.html\"; 


    </script>";
    }else{
        // $arr = array ('code'=>0,'info'=>'publish failed');
        echo " <script language=\"javascript\">

alert(\"操作失败，即将返回首页\");
           window.location.href=\"jxadmin/index.html\"; 


    </script>"; 
    }
    
    //$arr = array ('code'=>1,'update success and nickname is '=>$nickname); 
    // $arr["json"]=json_encode($arr,JSON_UNESCAPED_UNICODE);
    // echo json_encode($arr,JSON_UNESCAPED_UNICODE); 
$conn->close();
?>