<?php
include 'conn.php';
    global $sql;
    global $tempColumn;
    global $tempValues;
    $sql=$sql."insert into user ";
    foreach ($_POST as $key => $value) {
        if ($key=='cityID') {
            $tempColumn=$tempColumn. 'username'.','.  'password'.',';
            $tempValues=$tempValues.'\''.$value.'\''.','.'\''.substr($value, -4).'\''.' , ';
        }
        $tempColumn=$tempColumn.$key.' , ';
        $tempValues=$tempValues.'\''.$value.'\''.' , ';
    }
    $sql=$sql.' ('.substr($tempColumn, 0,-2).') '.'values'.' ('.substr($tempValues, 0,-2).' )';
    // echo $sql;
    $result=mysqli_query($conn,$sql);
    if ($result) {
        echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"jxadmin/index.html\"; 


    </script>";
    }else{
        echo " <script language=\"javascript\">

alert(\"操作失败，即将返回首页\");
           window.location.href=\"jxadmin/index.html\"; 


    </script>";
    }
    
    // //$arr = array ('code'=>1,'update success and nickname is '=>$nickname); 
    // // $arr["json"]=json_encode($arr,JSON_UNESCAPED_UNICODE);
    // echo json_encode($arr,JSON_UNESCAPED_UNICODE); 
$conn->close();
?>