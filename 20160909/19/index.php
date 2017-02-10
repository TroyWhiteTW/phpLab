<?php
/*
*建立table
*table的第一行是2016年09月
*第二行是日一二三...等等
*第三行之後出現日期
*/
function sepV1(){
// *建立table (跟table有關的都讓creTable的副程式去做)
	$a = creTable();

	return $a;
}

//建立table
/*
*table的第一行是2016年09月
*第二行是日一二三...等等
*第三行之後出現日期 (日期的處理交由另外一支程式去處理，這裡只負責呼叫這支程式)
*/
function creTable(){
	$title = "<tr bgcolor='#c69fba'>".
		"\n\t\t\t\t".
		"<th colspan='7' align='center'>".
		"<font size='5' face='微軟正黑體'>".
		"2016年09月</th>".
		"\n\t\t\t".
		"</tr>";
	$week = "<tr align='center' bgcolor='#fae6ff'>
				<th bgcolor='#ffdbdd'><font size='4'>日</font></th>
				<th><font size='4'>一</font></th>
				<th><font size='4'>二</font></th>
				<th><font size='4'>三</font></th>
				<th><font size='4'>四</font></th>
				<th><font size='4'>五</font></th>
				<th bgcolor='#ffdbdd'><font size='4'>六</font></th>
			</tr>";
//處理日期
	$creDate = creDate();
	
	$table = "\t\t".
	"<table width='726' height='614' align='center'>".
	"\n\t\t\t".
	"$title".
	"\n\t\t\t".
	"$week".
	"\n\t\t\t".
	"$creDate".
	"\n\t\t".
	"</table>".
	"\n";
	
	return $table;
}

//處理日期
/*
 *一周七天 (for)
 *2016年09月會需要5周 (for)
 *今天是哪一天、假日用不同顏色標示 (if)
 */
function creDate(){
	for ($j = 0; $j < 5; $j++){
		for ($i = 1; $i <= 7; $i++){
			$k = $j*7 + $i - 4;
			if ($k <= 0){
				if ($i ==1){
					$sepDate.="<tr align='center' bgcolor='#fae6ff'>";
					$sepDate.="\n\t\t\t\t";
					$sepDate.="<td  bgcolor='#f6f2f7'><font size='5'></font></td>\n";
				}else {
					$sepDate.= "\t\t\t\t";
					$sepDate.="<td  bgcolor='#f6f2f7'><font size='5'></font></td>\n";
				}
			}if($k > 0 & $k < 10){
				if ($k == 6){
					$sepDate.= "\t\t\t\t";
					$sepDate.= "<td  bgcolor='#fff19e'><font size='5' color='red'><b>&nbsp;$k</b></font></td>\n";
				}else if ($i ==7){
					$sepDate.= "\t\t\t\t<td  bgcolor='#ffdbdd'><font size='5'>&nbsp;$k</font></td>\n\t\t\t</tr>\n";
				}else if ($i ==1){
					$sepDate.= "\t\t\t<tr align='center' bgcolor='#fae6ff'>\n\t\t\t\t<td  bgcolor='#ffdbdd'><font size='5'>&nbsp;$k</font></td>\n";
				}else{
					$sepDate.= "\t\t\t\t<td  bgcolor='#fae6ff'><font size='5'>&nbsp;$k</font></td>\n";
				}
			}if($k >= 10 & $k < 31){
				if ($i ==7){
					$sepDate.= "\t\t\t\t<td  bgcolor='#ffdbdd'><font size='5'>$k</font></td>\n\t\t\t</tr>\n";
				}else if ($i ==1){
					$sepDate.= "\t\t\t<tr align='center' bgcolor='#fae6ff'>\n\t\t\t\t<td  bgcolor='#ffdbdd'><font size='5'>$k</font></td>\n";
				}else{
					$sepDate.= "\t\t\t\t<td  bgcolor='#fae6ff'><font size='5'>$k</font></td>\n";
				}
			}if ($k >=31){
				$sepDate.= "\t\t\t\t<td  bgcolor='#f6f2f7'><font size='5'></font></td>\n\t\t\t</tr>";
			}
		}
	}
	
	return $sepDate;
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