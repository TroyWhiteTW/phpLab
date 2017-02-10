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
			</tr>
<?php for ($j = 0; $j < 5; $j++){
?>
			<tr align='center' bgcolor='#fae6ff'>
<?php for ($i = 1; $i <=7; $i++){
	$k = $j * 7 + $i - 4;
?>
				<td  bgcolor='<?php
					if ($k > 0){
						if ($k < 31){
							if (($k+4)%7==0 | ($k+4)%7==1){
								echo "#ffdbdd";
							}else{
								if ($k==6){
								echo "#fff19e";
								}else{
									echo "#fae6ff";
								}
							}
						}
					}if ($k <= 0 | $k >= 31){
						echo "#f6f2f7";
					}
					?>'><font size='5'<?php
					if ($k == 6){
						echo " color='red'";
					}
					?>><?php
					if ($k == 6){
						echo "<b>";
					}
					?><?php
						if ($k > 0){
							if ($k <31){
								if ($k <10){
									echo "&nbsp;{$k}";
								}else{
									echo $k;
								}
							}
						}
				?><?php
					if ($k == 6){
						echo "</b>";
					}
				?></font></td>
<?php
}
?>
			</tr>
<?php
}
?>
		</table>
	</body>
</html>