<div class="content-wrapper">
    <div class="container">
    <div id='notifications' ><center><h1><?php echo $this->session->flashdata('berhasil');?></h1></center></div>
    <div id='notifications' ><center><h1><?php echo $this->session->flashdata('gagal');?></h1></center></div>
		<section class="content">
			
			<div class="box box-warning">
	      		<div class="box-header">
			        <h3 class="box-title">
			        	<i class="fa fa-fw fa-user"></i> Data Mahasiswa
			        </h3>
	        		<div class="btn-group pull-right">
	            		<a href="<?php echo base_url('C_page/tambahmhs/'); ?>" class="btn btn-flat btn-primary btn-sm"><span class="fa fa-plus-square"></span>&nbsp; Tambah</a>
	          		</div>
	          		<div class="btn-group pull-right">
	            		<a href="<?php echo base_url('C_page/riwayat/'); ?>" class="btn btn-flat btn-primary btn-sm"><span class="fa fa-plus-square"></span>&nbsp; Lihat Riwayat</a>
	          		</div>
	        	</div>
			<div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
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
		
	
<?php $no = 1; foreach ($mhs as $isimhs) { ?>
	</thead>
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
		</td>
	</tr>
<?php } ?>
	</table>
		</div>
		</div>
	</div>
</div>