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
			
			if ($i == 1){ //星期日的話就多加一個<tr>
				$sepDate.="<tr align='center' bgcolor='#fae6ff'>";
			}
			
			if ($k == $today){ //純粹處理td的顏色
				if ($i == 1 ){
					$sepDate.="<td bgcolor='#fff19e'>";
				}else{
					$sepDate.="<td bgcolor='#fff19e'>";
				}
			}else if ($k <= 0 | $k >= 31){
				if ($i == 1){
					$sepDate.="<td bgcolor='#f6f2f7'>";
				}else{
					$sepDate.="<td bgcolor='#f6f2f7'>";
				}
			}else if ($i == 1 | $i == 7){
				$sepDate.="<td bgcolor='#ffdbdd'>";
			}else{
				$sepDate.="<td bgcolor='#fae6ff'>";
			}
			
			if ($k == $today){ //純粹處理字的大小，若是今天的日期就換成紅色的字
				$sepDate.="<font size='5' color='red'>";
			}else{
				$sepDate.="<font size='5'>";
			}
			
			if ($k > 0 & $k < 31){ //印出日期
				$sepDate.="$k";
			}
			
			$sepDate.="</font></td>\n"; //大家都有的結尾符號
			
			if ($i == 7){ //是星期六的話就多加</tr>結尾
				$sepDate.="</tr>\n";
			}
			
			// if ($k <= 0 | $k >=31){  //日期沒有小於等於0的，也沒有大於等於31的，所以要排除掉
				// if ($i ==1){
					// $sepDate.="<tr align='center' bgcolor='#fae6ff'>";
					// $sepDate.="<td bgcolor='#f6f2f7'>";
					// $sepDate.="<font size='5'>";
					// $sepDate.="</font></td>";
				// }else {
					// $sepDate.="<td bgcolor='#f6f2f7'>";
					// $sepDate.="<font size='5'>";
					// $sepDate.="</font></td>";
				// }
			// }if($k > 0 & $k < 10){  //為了讓單位元日期跟雙位元日期能夠對齊
				// if ($k == $today){
					// if ($i ==1){
						// $sepDate.="<tr align='center' bgcolor='#fae6ff'>";
						// $sepDate.="<td bgcolor='#fff19e'>";
						// $sepDate.="<font size='5' color='red'>";
						// $sepDate.="<b>&nbsp;$k</b>";
						// $sepDate.="</font></td>";
					// }else{
						// $sepDate.="<td bgcolor='#fff19e'>";
						// $sepDate.="<font size='5' color='red'>";
						// $sepDate.="<b>&nbsp;$k</b>";
						// $sepDate.="</font></td>";
					// }
				// }else if ($i ==7){
					// $sepDate.="<td bgcolor='#ffdbdd'>";
					// $sepDate.="<font size='5'>";
					// $sepDate.="&nbsp;$k";
					// $sepDate.="</font></td>";
					// $sepDate.="</tr>";
				// }else if ($i ==1){
					// $sepDate.="<tr align='center' bgcolor='#fae6ff'>";
					// $sepDate.="<td  bgcolor='#ffdbdd'>";
					// $sepDate.="<font size='5'>";
					// $sepDate.="&nbsp;$k";
					// $sepDate.="</font></td>";
				// }else{
					// $sepDate.="<td bgcolor='#fae6ff'><font size='5'>";
					// $sepDate.="&nbsp;$k";
					// $sepDate.="</font></td>";
				// }
			// }if($k >= 10 & $k < 31){
				// if ($k == $today){
					// if ($i ==1){
						// $sepDate.="<tr align='center' bgcolor='#fae6ff'>";
						// $sepDate.="<td bgcolor='#fff19e'>";
						// $sepDate.="<font size='5' color='red'>";
						// $sepDate.="<b>$k</b>";
						// $sepDate.="</font></td>";
					// }else{
						// $sepDate.="<td bgcolor='#fff19e'>";
						// $sepDate.="<font size='5' color='red'>";
						// $sepDate.="<b>$k</b>";
						// $sepDate.="</font></td>";
					// }
				// }else if ($i ==7){
					// $sepDate.="<td bgcolor='#ffdbdd'>";
					// $sepDate.="<font size='5'>";
					// $sepDate.="$k";
					// $sepDate.="</font></td>";
					// $sepDate.="</tr>";
				// }else if ($i ==1){
					// $sepDate.="<tr align='center' bgcolor='#fae6ff'>";
					// $sepDate.="<td  bgcolor='#ffdbdd'>";
					// $sepDate.="<font size='5'>";
					// $sepDate.="$k";
					// $sepDate.="</font></td>";
				// }else{
					// $sepDate.="<td bgcolor='#fae6ff'>";
					// $sepDate.="<font size='5'>";
					// $sepDate.="$k";
					// $sepDate.="</font></td>";
				// }
			// }
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