<?php
include 'conn.php';
$month=$_POST['month'];
if ($month!=null && strlen($month)>0) {
    global $monthTemp;
    $selectS = mysqli_query($conn,"SELECT * FROM schedule WHERE month='$month'");
    while($row = mysqli_fetch_array($selectS))
    {
      $monthTemp=$row['month'];
    }
    //验证数据库中是否有数据
    if ($month==$monthTemp) {
        global $sql;
        $sql=$sql."update schedule set ";
        foreach ($_POST as $key => $value) {
            $sql=$sql.$key.' = '.'\''.$value.'\''.' ,';
        }
        $sql= substr($sql,0,strlen($sql)-1); 
        $sql=$sql."where month='$month'";
        //echo $sql;
        mysqli_query($conn,$sql);
        // $arr = array ('code'=>1,'info'=>'update success and month is '.$month); 
        echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"jxadmin/index.html\"; 


    </script>";
    }else{
        // $arr = array ('code'=>0,'info'=>'update failed month not exist'); 
        echo " <script language=\"javascript\">

alert(\"操作失败，即将返回首页\");
           window.location.href=\"jxadmin/index.html\"; 


    </script>";
    }
        //$arr["json"]=json_encode($arr,JSON_UNESCAPED_UNICODE);
        // echo json_encode($arr,JSON_UNESCAPED_UNICODE); 
}
$conn->close();
?>