<?php
/*
*建立一個09月的table
*table的第一行是2016年09月
*第二行是日一二三...等等
*第三行之後出現日期
*/
function sepV1(){
// *建立一個09月的table
	$sep.= sepTable();
// *table的第一行是2016年09月
	$sep.= title();
// *第二行是日一二三...等等
	$sep.= week();
// *第三行之後出現日期
	$sep.= sepDate();
	
	return $sep;
}

// *建立一個09月的table
function sepTable(){
	$sepTable = "<table width='726' height='614' align='center'>";
	
	return $sepTable;
}

// *table的第一行是2016年09月
function title(){
	$title = "<tr bgcolor='#c69fba'>".
	"<th colspan='7' align='center'>".
	"<font size='5' face='微軟正黑體'>".
	"2016年09月".
	"</th>".
	"</tr>";
	
	return $title;
}

// *第二行是日一二三...等等
function week(){
	$week = "<tr align='center' bgcolor='#fae6ff'>".
	"<th bgcolor='#ffdbdd'><font size='4'>日</font></th>".
	"<th><font size='4'>一</font></th>".
	"<th><font size='4'>二</font></th>".
	"<th><font size='4'>三</font></th>".
	"<th><font size='4'>四</font></th>".
	"<th><font size='4'>五</font></th>".
	"<th bgcolor='#ffdbdd'><font size='4'>六</font></th>".
	"</tr>";
	
	return $week;
}

// *第三行之後出現日期
/*
 *一周七天 (第一層for)
 *2016年09月會需要5周 (第二層for)
 *今天是哪一天、假日用不同顏色標示 (第一層for內拿到代表日期的$k，用if判斷)
 *用變數設定顯示任何一天的月曆 ($today)
 */
function sepDate(){
	// *用變數設定顯示任何一天的月曆 ($today)
	// 另外給一個變數可以改變今天日期，讓下面的if判斷式可以調整
	$today = 11;
	// *2016年09月會需要5周 (第二層for)
	for ($j = 0; $j < 5; $j++){
		// *一周七天 (第一層for)
		for ($i = 1; $i <= 7; $i++){
			// *今天是哪一天、假日用不同顏色標示 (第一層for內拿到代表日期的$k，用if判斷)
			// 判斷哪一天是什麼背景色，跟日期直接相關的變數為$k
			$k = $j*7 + $i - 4;
			if ($k <= 0){  //日期沒有小於等於0的，所以要排除掉
				if ($i ==1){
					$sepDate.="<tr align='center' bgcolor='#fae6ff'>";
					$sepDate.="\n\t\t\t\t";
					$sepDate.="<td bgcolor='#f6f2f7'><font size='5'></font></td>\n";
				}else {
					$sepDate.= "\t\t\t\t";
					$sepDate.="<td bgcolor='#f6f2f7'><font size='5'></font></td>\n";
				}
			}if($k > 0 & $k < 10){  //為了讓單位元日期跟雙位元日期能夠對齊
				if ($k == $today){
					if ($i ==1){
						$sepDate.= "\t\t\t";
						$sepDate.= "<tr align='center' bgcolor='#fae6ff'>\n\t\t\t\t<td bgcolor='#fff19e'><font size='5' color='red'><b>&nbsp;$k</b></font></td>\n";
					}else{
						$sepDate.= "\t\t\t\t";
						$sepDate.= "<td bgcolor='#fff19e'><font size='5' color='red'><b>&nbsp;$k</b></font></td>\n";
					}
				}else if ($i ==7){
					$sepDate.= "\t\t\t\t<td bgcolor='#ffdbdd'><font size='5'>&nbsp;$k</font></td>\n\t\t\t</tr>\n";
				}else if ($i ==1){
					$sepDate.= "\t\t\t<tr align='center' bgcolor='#fae6ff'>\n\t\t\t\t<td  bgcolor='#ffdbdd'><font size='5'>&nbsp;$k</font></td>\n";
				}else{
					$sepDate.= "\t\t\t\t<td bgcolor='#fae6ff'><font size='5'>&nbsp;$k</font></td>\n";
				}
			}if($k >= 10 & $k < 31){
				if ($k == $today){
					if ($i ==1){
						$sepDate.= "\t\t\t";
						$sepDate.= "<tr align='center' bgcolor='#fae6ff'>\n\t\t\t\t<td bgcolor='#fff19e'><font size='5' color='red'><b>$k</b></font></td>\n";
					}else{
						$sepDate.= "\t\t\t\t";
						$sepDate.= "<td bgcolor='#fff19e'><font size='5' color='red'><b>$k</b></font></td>\n";
					}
				}else if ($i ==7){
					$sepDate.= "\t\t\t\t<td bgcolor='#ffdbdd'><font size='5'>$k</font></td>\n\t\t\t</tr>\n";
				}else if ($i ==1){
					$sepDate.= "\t\t\t<tr align='center' bgcolor='#fae6ff'>\n\t\t\t\t<td  bgcolor='#ffdbdd'><font size='5'>$k</font></td>\n";
				}else{
					$sepDate.= "\t\t\t\t<td bgcolor='#fae6ff'><font size='5'>$k</font></td>\n";
				}
			}if ($k >=31){  //9月沒有31號，所以排除掉
				$sepDate.= "\t\t\t\t<td bgcolor='#f6f2f7'><font size='5'></font></td>\n\t\t\t</tr>";
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