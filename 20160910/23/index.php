<?php
/*
*建立一個09月的table
*table的第一行是2016年09月
*第二行是日一二三...等等
*第三行之後出現日期
*/
$table=sepV1();
function sepV1(){
// *建立一個09月的table
	$sep = "<table class='tableSize'>";
// *table的第一行是2016年09月
	$sep.= title();
// *第二行是日一二三...等等
	$sep.= week();
// *第三行之後出現日期
	$sep.= sepDate();
// 結尾的table
	$sep.= "</table>";
	
	return $sep;
}

// *table的第一行是2016年09月
function title(){
	$title = "<tr class= 'title'>".
	"<th colspan='7'>".
	"2016年09月".
	"</th>".
	"</tr>";
	return $title;
}

// *第二行是日一二三...等等
function week(){
	$week = "<tr class='trStyle week'>".
	"<th class='weekend'>日</th>".
	"<th>一</th>".
	"<th>二</th>".
	"<th>三</th>".
	"<th>四</th>".
	"<th>五</th>".
	"<th class='weekend'>六</th>".
	"</tr>";
	
	return $week;
}

// *第三行之後出現日期
/*
 *一周七天 (第一層for)
 *2016年09月會需要5周 (第二層for)
 *今天是哪一天($today)、
 *假日用不同顏色標示
 */

function sepDate(){
	// *今天是哪一天($today)、假日用不同顏色標示 (第一層for內拿到代表日期的$days，用if判斷)
	$today = 11;
	
	// *2016年09月會需要5周 (第二層for)
	for ($j = 0; $j < 5; $j++){
		// *一周七天 (第一層for)
		for ($i = 1; $i <= 7; $i++){
			
			// 用兩層for的$i和$j來組合出代表日期的$days
			$days = $j * 7 + $i - 4;
			
			// 想法是印出<tr><td>日期($days)</td></tr>
			
			//星期日的話就多加一個<tr>
			if ($i == 1){
				$sepDate.="<tr class='trStyle'>";
			}
			
			//處理每天的顏色(td)
			if ($days == $today){
				$sepDate.="<td class='today'>";
			}else if ($days <= 0 | $days >= 31){
				$sepDate.="<td class='noDate'>";
			}else if ($i == 1 | $i == 7){
				$sepDate.="<td class='weekend'>";
			}else{
				$sepDate.="<td>";
			}
			
			//印出日期
			if ($days > 0 & $days < 31){
				$sepDate.="$days";
			}
			
			//大家都有的結尾符號
			$sepDate.="</td>\n";
			
			//是星期六的話就多加</tr>結尾
			if ($i == 7){
				$sepDate.="</tr>\n";
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
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
<?php echo $table; ?>
	</body>
</html>