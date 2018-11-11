<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?=$row[0]?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[1]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[2]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[3]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" value="<?=$row[4]?>" size="45"/></td>
				</tr>
				<tr>
					<td>Genre film yang disukai</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="genre[]" value="Horror">Horror<br>
						<input type="checkbox" name="genre[]" value="Action">Action<br>
						<input type="checkbox" name="genre[]" value="Anime">Anime<br>
						<input type="checkbox" name="genre[]" value="Thriller">Thriller<br>
						<input type="checkbox" name="genre[]" value="Animasi">Animasi<br>
					</td>
				</tr>
				<tr>
					<td>Tempat wisata tujuan travelling</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="travel[]" value="Bali">Bali<br>
						<input type="checkbox" name="travel[]" value="Raja Ampat">Raja Ampat<br>
						<input type="checkbox" name="travel[]" value="Pulau Derawan">Pulau Derawan<br>
						<input type="checkbox" name="travel[]" value="Bangka Belitung">Bangka Belitung<br>
						<input type="checkbox" name="travel[]" value="Labuan Bajo">Labuan Bajo<br>
					</td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		//panggil controller update
		$main->update();
	}
?>