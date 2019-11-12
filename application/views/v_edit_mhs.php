<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTS PWFL</title>
</head>
<body>
	<center>
		<h3>
			<a href="<?php echo base_url('c_page/') ?>">Kembali</a> &nbsp; &nbsp;
		</h3>
	</center>
	<?php foreach ($mhs as $itemmhs) {?> 
<center>
	<table>
		<form action="<?php echo base_url('c_mhs/ubahmhs'); ?>" method="POST">
			<tr>
				<input type="hidden" value="<?php echo $itemmhs['id']; ?>" name="id"></input>
			</tr>
			<tr>
				<td>Nim :</td>
				<td><input type="text" name="nim"value="<?php echo $itemmhs['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama" value="<?php echo $itemmhs['nama_mahasiswa']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td>
					<select name="jkl">
						<option value="L" <?php echo $itemmhs['jk'] == 'L'?'selected':'' ?>>Laki-laki</option>
						<option value="P" <?php echo $itemmhs['jk'] == 'P'?'selected':'' ?>>Perempuan</option>		
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><input type="text" name="alamat"value="<?php echo $itemmhs['alamat']; ?>"></td>
			</tr>
			<tr>
				<td>No. Telp :</td>
				<td><input type="text" name="nohp"value="<?php echo $itemmhs['no_hp']; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Update" class="btn btn-primary">
			</tr>
			
		</form>
	<?php } ?>
	</table>
</center>
</body>
</html>