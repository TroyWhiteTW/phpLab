=====================  admin.html  =====================
程式說明:管理者登入
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理者登入</title>
</head>
<body>
<form name="form1" method="post" action="userWork.php">
<p>請輸入帳號：<input type="text" name="name"></p>
<p>請輸入密碼：<input type="password" name="pass"></p>
<input type="hidden" name="hidden" value="adminLogin"> 
<p><input type="submit" name="Submit" value="送出"></p>
</form>      
</body>
</html>
 
=====================  userWork.php  =====================
程式說明:重建資料庫、新增帳號、列出清單
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>使用者帳號維護作業</title>
</head>
<?php
if (@$_GET["logout"]=="logout"){
setcookie("passCheck","true",time()-120);
header("Location:admin.html");
exit;
}
//管理者帳密比對
if (@$_POST["hidden"]=="adminLogin"){
$name=@$_POST["name"];
$pass=@$_POST["pass"];
if ($name != "admin" || $pass != "123456"){ 
echo "資料庫帳密錯誤，三秒後自動回上一頁";
header("refresh:3;URL=admin.html");      //修改 php.ini 中 output_buffering = On
exit;
}else{
setcookie("passCheck","true");
}
}else if($_COOKIE["passCheck"]!="true"){
header("Location:admin.html"); 
exit;
}
include("DBini.php");
if (@$_POST["Submit1"]=="重建資料庫"){
connectDB();
header("Location:modify.php?data=資料庫重建完成，三秒後自動回上一頁");
exit;
}
if (@$_POST["Submit2"]=="新增帳號"){
if ($_POST["T1"]!='' and $_POST["T2"]!='' and $_POST["T3"]!='')
insertData($_POST["T1"],$_POST["T2"],$_POST["T3"],$_POST["R1"]);
header("Location:modify.php?data=帳號新增完成，三秒後自動回上一頁");
exit;
}   
?>
<body>
<form name="form1" method="post" action="">
<p><input type="submit" name="Submit1" value="重建資料庫"><hr/></p>
</form>
<form method="POST" action="">
<p>姓名:<input type="text" name="T1" size="14">
權限:<input type="radio" value="1" name="R1">管理者
<input type="radio" name="R1" value="2" checked>公差</p>
<p>帳號:<input type="text" name="T2" size="9">
密碼:<input type="text" name="T3" size="14"></p>
<p><input type="submit" name="Submit2" value="新增帳號">
<a href="userWork.php?logout=logout">登出</a></p>
</form>   
<?php ListUser(); //列出所有使用者 ?>    
</body>
</html>
<?php   
//重建資料庫
function connectDB(){
//刪除舊資料庫
mysql_query("DROP DATABASE IF EXISTS db3");
//建立資料庫和資料表
if (mysql_query('CREATE DATABASE db3')){
$sqlstr="use db3";
mysql_query($sqlstr);    //使用者代號,姓名,帳號,密碼,權限>
$sqlstr="CREATE TABLE tb1(id int  auto_increment primary key, name varchar(10),
username varchar(8), passwd varchar(8),class int) CHARSET=utf8";
mysql_query($sqlstr) or die("資料庫和資料表建立失敗");
}
}
//寫入資料
function insertData($name,$username,$passwd,$class){
$sqlStr="INSERT INTO tb1 (id,name,username,passwd,class)";
$sqlStr.="VALUES(0, '$name','$username','$passwd','$class')";
echo $sqlStr;
mysql_query($sqlStr) or die("寫入失敗");
}
//列出所有使用者
function ListUser(){
$sql="SELECT * FROM tb1 ORDER BY id ASC";
$q=mysql_query($sql);
if (mysql_num_rows($q)>0){
echo "<hr/><table border='1'>
<tr><td>編號</td><td>姓名</td><td>帳號</td><td>密碼</td><td>權限</td><td>編輯</td></tr>";
while ($row=mysql_fetch_array($q)){
echo "<tr><td>$row[0]</td><td>$row[1]</td>
<td>$row[2]</td><td>$row[3]</td>
<td>$row[4]</td><td><a href='modify.php?del={$row[0]}'>刪除</a>
<a href='modify.php?edit={$row[0]}'>修改</a>
</td></tr>";
}
echo "</table>";
}
}
?>
 
=====================  modify.php  =====================
程式說明:帳號修改輸入、刪除帳號、跳轉網頁(避免重新整理時資料重複)
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
 
=====================  update.php  =====================
程式說明:執行帳號更新
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
 
=====================  DBini.php  =====================
程式說明:資料庫連接設定
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<?php
$link=mysql_connect("localhost","root","") or die("連接失敗");
mysql_select_db("db3");   
mysql_query("SET NAMES utf8");
?>
<body>
</body>
</html>