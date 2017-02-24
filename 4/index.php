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
			<tr class ="trColor">
<?php
for ($i = 0; $i < 3; $i++) {
	echo "\t\t\t\t<td class='noDateColor'></th>\n";
}
for ($i = 1; $i <= 3; $i++) {
	echo "\t\t\t\t<td>$i</td>\n";
}
?>
				<td class ="weekendColor">4</th>
			</tr>
			<tr class ="trColor">
				<td class ="weekendColor">5</td>
<?php
for ($i = 6; $i <= 10; $i++) {
	echo "\t\t\t\t<td>$i</td>\n";
}
?>
				<td class ="weekendColor">11</td>
			</tr>
			<tr class ="trColor">
				<td class ="weekendColor">12</td>
<?php
for ($i = 13; $i <= 17; $i++) {
	echo "\t\t\t\t<td>$i</td>\n";
}
?>
				<td class ="weekendColor">18</td>
			</tr>
			<tr class ="trColor">
				<td class ="weekendColor">19</td>
<?php
for ($i = 20; $i <= 24; $i++) {
	echo "\t\t\t\t<td>$i</td>\n";
}
?>
				<td class ="weekendColor">25</td>
			</tr>
			<tr class ="trColor">
				<td class ="weekendColor">26</td>
<?php
for ($i = 27; $i <= 28; $i++) {
	echo "\t\t\t\t<td>$i</td>\n";
}
for ($i = 0; $i < 4; $i++) {
	echo "\t\t\t\t<td class='noDateColor'></th>\n";
}
?>
			</tr>
		</table>
	</body>
</html>