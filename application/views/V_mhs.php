<!DOCTYPE html>
<html>
<head>
	<title>yuhu</title>
</head>
<body>
	<center>
		<a href="<?php echo base_url ('C_page/tambahmhs/'); ?>">Tambah</a>
		<a href="<?php echo base_url ('C_page/riwayat/'); ?>">Lihat Riwayat</a>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No HP</th>
				<th>Action</th>
			</tr>
		</thead>
	
<?php $no = 1; foreach ($mhs as $isimhs) { ?>
	<tr>
		<th><?php echo $no++; ?></th>
		<th><?php echo $isimhs ['nim']; ?></th>
		<th><?php echo $isimhs ['nama_mahasiswa']; ?></th>
		<th><?php echo $isimhs ['jk']; ?></th>
		<th><?php echo $isimhs ['alamat']; ?></th>
		<th><?php echo $isimhs ['no_hp']; ?></th>
		<td align="center">
			<a href="<?php echo base_url ('C_page/editmhs/').$isimhs['id']; ?>">Edit</a>
			<a href="<?php echo base_url ('C_mhs/hapusmhs/').$isimhs['id']; ?>">Hapus</a>
	</tr>
<?php } ?>
	</table>
	</center>
</body>
</html>