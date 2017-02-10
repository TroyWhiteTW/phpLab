<html>
	<head>
		<title>2016_09</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	</head>
	<body>
		<table width='726' height='614' align='center'>
			<tr bgcolor='#c69fba'>
				<th colspan='7' align='center'><font size='5' face='微軟正黑體'><b>2016年09月</th>
			</tr>
			<tr align='center' bgcolor='#fae6ff'>
				<th bgcolor='#ffdbdd'><font size='4'>日</font></th>
				<th><font size='4'>一</font></th>
				<th><font size='4'>二</font></th>
				<th><font size='4'>三</font></th>
				<th><font size='4'>四</font></th>
				<th><font size='4'>五</font></th>
				<th bgcolor='#ffdbdd'><font size='4'>六</font></th>
			</tr><?php 
				for ($j = 0; $j < 5; $j++){
					for ($i = 1; $i <= 7; $i++){
						$k = $j*7 + $i - 4;
						if ($k <= 0){
							if ($i ==1){
								$tr1.= "\t\t\t<tr align='center' bgcolor='#fae6ff'>\n\t\t\t\t<td  bgcolor='#f6f2f7'><font size='5'></font></td>\n";
							}else {
								$tr1.= "\t\t\t\t<td  bgcolor='#f6f2f7'><font size='5'></font></td>\n";
							}
						}if($k > 0 & $k < 10){
							if ($k == 6){
								$tr1.= "\t\t\t\t<td  bgcolor='#fff19e'><font size='5' color='red'><b>&nbsp;$k</b></font></td>\n";
							}else if ($i ==7){
								$tr1.= "\t\t\t\t<td  bgcolor='#ffdbdd'><font size='5'>&nbsp;$k</font></td>\n\t\t\t</tr>\n";
							}else if ($i ==1){
								$tr1.= "\t\t\t<tr align='center' bgcolor='#fae6ff'>\n\t\t\t\t<td  bgcolor='#ffdbdd'><font size='5'>&nbsp;{$k}</font></td>\n";
							}else{
								$tr1.= "\t\t\t\t<td  bgcolor='#fae6ff'><font size='5'>&nbsp;{$k}</font></td>\n";
							}
						}if($k >= 10 & $k < 31){
							if ($i ==7){
								$tr1.= "\t\t\t\t<td  bgcolor='#ffdbdd'><font size='5'>{$k}</font></td>\n\t\t\t</tr>\n";
							}else if ($i ==1){
								$tr1.= "\t\t\t<tr align='center' bgcolor='#fae6ff'>\n\t\t\t\t<td  bgcolor='#ffdbdd'><font size='5'>{$k}</font></td>\n";
							}else{
								$tr1.= "\t\t\t\t<td  bgcolor='#fae6ff'><font size='5'>{$k}</font></td>\n";
							}
						}if ($k >=31){
							$tr1.= "\t\t\t\t<td  bgcolor='#f6f2f7'><font size='5'></font></td>\n\t\t\t</tr>\n";
						}
					}
				}
			?>	
<?php echo $tr1; ?>
		</table>
	</body>
</html>