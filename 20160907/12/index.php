<html>
	<head>
		<title>2016_09</title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	</head>
	<body>
		<h1 align='center'>2016年09月</h1>
		<table border='1' width='80%' align='center'>
			<tr align='center'>
				<th height='100px'>日</th>
				<th>一</th>
				<th>二</th>
				<th>三</th>
				<th>四</th>
				<th>五</th>
				<th>六</th>
			</tr>
			<tr align='center'>
<?php for ($i = 1; $i <= 7; $i++){
		$k = $i-4;
		?>
				<td height='100px'><?php if ($k > 0){
					echo $k;	
				} ?></td>
<?php 
	}
?>
			</tr>
			<tr align='center'>
<?php for ($i = 1; $i <= 7; $i++){
		$k = $i-4+7;
		?>
				<td height='100px'><?php echo $k; ?></td>
<?php 
	}
?>
			</tr>
			<tr align='center'>
<?php for ($i = 1; $i <= 7; $i++){
		$k = $i-4+14;
		?>
				<td height='100px'><?php echo $k; ?></td>
<?php 
	}
?>
			</tr>
			<tr align='center'>
<?php for ($i = 1; $i <= 7; $i++){
		$k = $i-4+21;
		?>
				<td height='100px'><?php echo $k; ?></td>
<?php 
	}
?>
			</tr>
			<tr align='center'>
<?php for ($i = 1; $i <= 7; $i++){
		$k = $i-4+28;
		?>
				<td height='100px'><?php if ($k < 31){
						echo $k;
				} ?></td>
<?php 
	}
?>
			</tr>
		</table>
	</body>
</html>