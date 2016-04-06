<?php
include 'conn.php';
$id=$_POST['id'];
if ($id!=null && strlen($id)>0) {
    global $idTemp;
    $selectS = mysqli_query($conn,"SELECT * FROM paramConfigs WHERE id='$id'");
    while($row = mysqli_fetch_array($selectS))
    {
      $idTemp=$row['id'];
    }
    //验证数据库中是否有数据
    if ($id==$idTemp) {
        global $sql;
        $sql=$sql."update paramConfigs set ";
        foreach ($_POST as $key => $value) {
            $sql=$sql.$key.' = '.'\''.$value.'\''.' ,';
        }
        $sql= substr($sql,0,strlen($sql)-1); 
        $sql=$sql."where id='$id'";
        //echo $sql;
        mysqli_query($conn,$sql);

        echo " <script language=\"javascript\">

alert(\"操作成功，即将返回首页\");
           window.location.href=\"jxadmin/index.html\"; 


    </script>";
        // $arr = array ('code'=>1,'info'=>'update success and id is '.$id); 
    }else{
        // $arr = array ('code'=>0,'info'=>'update failed id not exist'); 

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