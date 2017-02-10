<?php
/*
*建立table
*table的第一行是2016年09月
*第二行是日一二三...等等
*第三行之後出現日期
*/
function sepV1(){
// *建立table
	$a = creTable();
// *table的第一行是2016年09月
// *第二行是日一二三...等等
// *第三行之後出現日期
	
	return $a;
}

//建立table
/*

*/
function creTable(){
	$title = "<tr bgcolor='#c69fba'>".
	"<th colspan='7' align='center'>".
	"<font size='5' face='微軟正黑體'>".
	"2016年09月</th></tr>";
	$week = "";
	$creDate = creDate();
	
	$table.="<table width='726' height='614' align='center'>$title</table>";
	
	return $table;
}


?>
<html>
	<head>
		<title>2016_09</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	</head>
	<body>
<?php echo sepV1(); ?>
	</body>
</html>