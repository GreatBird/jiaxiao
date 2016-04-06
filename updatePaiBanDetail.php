<?php
include 'conn.php';
$teacherName=$_GET['teacherName'];
$month=$_GET['month'];
$paibanDate=$_GET['paibanDate'];

$beginTime=$_GET['beginTime'];
$endTime=$_GET['endTime'];


$sqlTemp="SELECT * from paiban where teacherName='$teacherName' and month='$month' and paibanDate='$paibanDate' and beginTime='$beginTime' and endTime='$endTime'";
                            
                    
                        //echo $sql;
                        $resultTemp = mysqli_query($conn,$sqlTemp);
                        
                        if ($resultTemp) {
                                 while($rowTemp = mysqli_fetch_array($resultTemp))
                                    { 
                                        // array_push($finalArr, $row['cate']);
                                        $id=$rowTemp['id'];
                                    }
                                }



if ($id!=null && strlen($id)>0) {
    global $idTemp;
    $selectS = mysqli_query($conn,"SELECT * FROM paiban WHERE id='$id'");
    while($row = mysqli_fetch_array($selectS))
    {
      $idTemp=$row['id'];
    }
    //验证数据库中是否有数据
    if ($id==$idTemp) {
        global $sql;
        $sql=$sql."update paiban set ";
        foreach ($_POST as $key => $value) {
            $sql=$sql.$key.' = '.'\''.$value.'\''.' ,';
        }
        $sql= substr($sql,0,strlen($sql)-1); 
        $sql=$sql."where id='$id'";
        //echo $sql;
        mysqli_query($conn,$sql);
        $arr = array ('code'=>1,'info'=>'update success and id is '.$id); 
    }else{
        $arr = array ('code'=>0,'info'=>'update failed id not exist'); 
    }
        //$arr["json"]=json_encode($arr,JSON_UNESCAPED_UNICODE);
        echo json_encode($arr,JSON_UNESCAPED_UNICODE); 
}
$conn->close();
?>