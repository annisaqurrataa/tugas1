<?php  

	@$alas = $_GET['alas'];
	@$tinggi = $_GET['tinggi'];
	@$luas = 1/2 * $alas * $tinggi;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>SEGITIGA SIKU-SIKU</title>
	</head>
	<body>
		<form method="GET">
			<table>
				<tr>
					<td>alas</td>
					<td>=</td>
					<td><input type="text" name="alas" value="<?php echo $alas; ?>"/>cm<br/></td>
				</tr>
				<tr>
					<td>tinggi</td>
					<td>=</td>
					<td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
				</tr>
			</table>
			<input type="submit" name="submit" value="SUBMIT"/><br/><br/>
			<?php
				echo "Luas Segitiga = ".$luas." cm^2<br/>";
			?>
		</form>
	</body>
</html>

<?php  

	@$jari_jari = $_GET['jari_jari'];
	@$luas = 22/7 * $jari_jari * $jari_jari;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>LINGKARAN</title>
	</head>
	<body>
		<form action="lingkaran.php" method="GET">
			<table>
				<tr>
					<td>jari-jari</td>
					<td>=</td>
					<td><input type="text" name="jari_jari" value="<?php echo $jari_jari; ?>"/>cm<br/></td>
				</tr>
			</table>
			<input type="submit" name="submit" value="SUBMIT"/><br/><br/>
			<?php
				echo "Luas Lingkaran = ".$luas." cm^2<br/>";
			?>
		</form>
	</body>
</html>

<?php 

	@$alas = $_GET['alas'];
	@$tinggi = $_GE['tinggi']
	@$luas = $alas * $tinggi;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>JAJAR GENJANG</title>
	</head>
	<body>
		<form method="GET">
			<table>
				<tr>
					<td>alas</td>
					<td>=</td>
					<td><input type="text" name="alas" value="<?php echo $alas; ?>"/>cm<br/></td>
				</tr>
				<tr>
					<td>tinggi</td>
					<td>=</td>
					<td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
				</tr>
			</table>
			<input type="submit" name="submit" value="SUBMIT"/><br/><br/>
			<?php
				echo "Luas Jajargenjang = ".$luas." cm^2<br/>";
			?>
		</form>

	</body>
</html>