<html>
	<head>
		<title>月曆</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style>
			.table {
				width:726;
				height:614;
				margin-left:auto;
				margin-right:auto;
				text-align:center
			}
			.titleColor {
				background-color:#c69fba;
			}
			.trColor {
				background-color:#fae6ff;
			}
			.weekendColor {
				background-color:#ffdbdd;
			}
			.noDateColor {
				background-color:#f6f2f7;
			}
			.font {
				font-size:24px;
			}
		</style>
	</head>
	<body>
		<table class="table font">
			<tr class="titleColor">
				<th colspan='7'>2017年02月</th>
			</tr>
			<tr class ="trColor">
				<th class ="weekendColor">日</th>
				<th>一</th>
				<th>二</th>
				<th>三</th>
				<th>四</th>
				<th>五</th>
				<th class ="weekendColor">六</th>
			</tr>
<?php
for ($j = 0; $j < 5; $j++) {
	echo "<tr class ='trColor'>";
	for ($i = 0; $i < 7; $i++) {
		$k = $j * 7 + $i - 2;
		if ($k <= 0 || $k >= 29) {
			echo "<td class='noDateColor'>";
		} elseif ($k % 7 == 4 || $k % 7 == 5) {
			echo "<td class='weekendColor'>";
		} else {
			echo "<td>";
		}
		if ($k >= 1 && $k <= 28) {
			echo $k;
		}
		echo "</td>\n";
	}
	echo "</tr>\n";
}
?>
		</table>
	</body>
</html>