<?php
header("Content-Type:text/html; charset=utf-8");
if ($_COOKIE["passCheck"]!="true"){
header("Location:admin.html"); 
exit;
}
include("DBini.php");
if ($_POST["T1"]!='' and $_POST["T2"]!='' and $_POST["T3"]!=''){
$sql="UPDATE tb1 SET username='{$_POST['T2']}', passwd='{$_POST['T3']}',";
$sql.="class ='{$_POST['R1']}' WHERE id='{$_POST['T1']}'";
mysql_query($sql); 
$rowDel=mysql_affected_rows();
if ($rowDel>0)
echo "更新成功，三秒後自動回上一頁";
else
echo "更新失敗，三秒後自動回上一頁";
}else
echo "資料輸入錯誤，三秒後自動回上一頁"; 
header("refresh:3;URL=userWork.php");
exit; 
?>