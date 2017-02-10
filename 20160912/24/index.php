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
 *第一周為前面有空號
 *中間是連貫沒空號的日期
 *最後一周為後面有空號
 */
function sepDate(){
	// 第一周有幾個空號
	$noDate = 4;
	// 一個月有幾天
	$mon = 30;
	// 可以用$nodDate+$mon組合出需要多少空格
	
	// *第一周為前面有空號
	$sepDate.= firstWeek($noDate, $mon);
	
	// *中間是連貫沒空號的日期
	$sepDate.= midWeek($noDate, $mon);
	
	// *最後一周為後面有空號
	$sepDate.= lastWeek($noDate, $mon);
	
	return $sepDate;
}

// *第一周為前面有空號
function firstWeek($noDate, $mon){
	// $i用於迴圈計算
	$sepDate ="<tr class='trStyle'>";
	for ($i = 1; $i <= 7; $i++){
		$days = $i - $noDate;
		if ($days > 0){
			$sepDate.= "<td>$days</td>\n";
		}else{
			$sepDate.= "<td class='noDate'></td>\n";
		}
	}
	$sepDate.="</tr>";
	return $sepDate;
}

// *中間是連貫沒空號的日期
function midWeek($noDate, $mon){
	// $i用於迴圈計算
	// 算出需要多少空格來放日期，28或35個，以輔助迴圈的上下限
	$cell = (($noDate+$mon) - ($noDate+$mon) % 7);
	for ($i = 8; $i <= $cell; $i++){
		$days = $i - $noDate;
		if ($i % 7 == 1){
			$sepDate.="<tr class='trStyle'>";
			$sepDate.="<td>$days</td>\n";
		}else if ($i % 7 == 0){
			$sepDate.= "<td>$days</td>\n";
			$sepDate.="</tr>";
		}else{
			$sepDate.= "<td>$days</td>\n";
		}
	}
	return $sepDate;
}

// *最後一周為後面有空號
function lastWeek($noDate, $mon){
	// $i用於迴圈計算
	// 最後一周的空格判斷
	$cell_1 = (($noDate+$mon) - ($noDate+$mon) % 7)+1;
	$cell_2 = (($noDate+$mon) - ($noDate+$mon) % 7)+7;
	
	$sepDate.="<tr class='trStyle'>";
	for ($i = $cell_1; $i <= $cell_2; $i++){
		$days = $i - $noDate;
		if ($days < $mon+1){
			$sepDate.= "<td>$days</td>\n";
		}else{
			$sepDate.= "<td class='noDate'></td>\n";
		}
	}
	$sepDate.="</tr>";
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