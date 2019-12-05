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
	        	</div>
			<div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
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
	</td>
</tr>
</table>
</div>
</div>
</section>
</div>
</div>