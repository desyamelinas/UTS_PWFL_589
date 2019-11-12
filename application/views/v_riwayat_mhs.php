<!DOCTYPE html>
<html>
<head>
	<title>yuhu</title>
</head>
<body>
	<center>
		<a href="<?php echo base_url ('C_page/tambahmhs/'); ?>">Tambah</a>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>No HP Lama</th>
				<th>No HP Baru</th>
				<th>Tgl Diubah</th>
			</tr>
		</thead>
	
<?php $no = 1; foreach ($mhs as $isimhs) { ?>
	<tr>
		<th><?php echo $no++; ?></th>
		<th><?php echo $isimhs ['nim']; ?></th>
		<th><?php echo $isimhs ['no_hp_lama']; ?></th>
		<th><?php echo $isimhs ['no_hp_baru']; ?></th>
		<th><?php echo $isimhs ['tgl_diubah']; ?></th>
	</tr>
<?php } ?>
	</table>
	</center>
</body>
</html>