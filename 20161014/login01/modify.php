<html>   
<head>
<title>帳號更新作業</title>
</head>  
<?php
header("Content-Type:text/html; charset=utf-8");
if ($_COOKIE["passCheck"]!="true"){
header("Location:admin.html"); 
exit;
}
include("DBini.php");
//更新作業
$temp= @$_GET["edit"];
if (!empty($temp)){ 
$sql="SELECT * FROM tb1 WHERE id='$temp'";
$q=mysql_query($sql);
$row=mysql_fetch_array($q);  
?>    
<body>
<form method="POST" action="update.php">
<p>姓名:<?php echo $row[1] ?>
<input type="radio" value="1" name="R1"
<?php if ($row[4]==1) echo "checked"; ?> >管理者 
<input type="radio" name="R1" value="2"
<?php if ($row[4]==2) echo "checked"; ?> >公差 </p>
<p>帳號: <input type="text" name="T2" size="9" value="<?php echo $row[2] ?>">
  密碼: <input type="text" name="T3" size="14" value="<?php echo $row[3] ?>"> </p> 
<input type="hidden" name="T1" value="<?php echo $temp ?>">
<p><input type="submit" name="Submit" value="送 出"></p>
</form>
</body>
</html> 
<?php
exit;
}  
//刪除作業
if (!empty($_GET["del"])){
$sql="DELETE FROM tb1 WHERE id='{$_GET["del"]}'";
mysql_query($sql);
$rowDel=mysql_affected_rows();
if ($rowDel>0)
echo "刪除成功，三秒後自動回上一頁";
else
echo "刪除失敗，三秒後自動回上一頁";
}
//顯示訊息
if (!empty($_GET["data"])){
echo $_GET["data"];  
}   
//三秒後自動回帳號維護作業
header("refresh:3;URL=userWork.php");
?>