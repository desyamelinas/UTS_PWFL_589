<div class="content-wrapper">
  <div class="container">
  <div id='notifications' ><center><h1><?php echo $this->session->flashdata('berhasil');?></h1></center></div>
  <div id='notifications' ><center><h1><?php echo $this->session->flashdata('gagal');?></h1></center></div>
	<section class="content">
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="box box-warning">
				    <div class="box-header with-border">
				        <h3 class="box-title">
				        <i class="fa fa-fw fa-edit"></i>Edit Data Mahasiswa</h3>   
				        <div class="btn-group pull-right">
				            <a href="<?php echo base_url('C_page/mhs/'); ?>" class="btn btn-flat btn-danger btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp; Kembali</a>
				        </div>
				    </div>

	<?php foreach ($mhs as $itemmhs) {?> 

		<form action="<?php echo base_url('c_mhs/ubahmhs'); ?>" method="POST" class="form-horizontal" role="form">
			<div class="box-body">
				<input type="hidden" value="<?php echo $itemmhs['id']; ?>" name="id"></input>
				<div class="form-group">
				<label class="col-sm-2 control-label">NIM</label>
				<div class="col-sm-8">
		         <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $itemmhs['nim']; ?>" placeholder="Isikan NIM" required="">
		         </div>
		    </div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Nama Mahasiswa</label>
				<div class="col-sm-8">
		         <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $itemmhs['nama_mahasiswa']; ?>" placeholder="Isikan Nama Mahasiswa" required="">
		        </div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Jenis Kelamin</label>
		        <div class="col-sm-8">
				<select name="jkl" class="form-control">
				<option value="L" <?php echo $itemmhs['jk'] == 'Laki-laki'?'selected':''?> >Laki-laki</option>
				<option value="P" <?php echo $itemmhs['jk'] == 'Perempuan'?'selected':''?> >Perempuan</option>
				</select>
				</div>
		    </div>
	
			<div class="form-group">
				<label class="col-sm-2 control-label">Alamat</label>
				<div class="col-sm-8">
		        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $itemmhs['alamat']; ?>" placeholder="Isikan Alamat" required="">
		        </div>
		    </div>

		    <div class="form-group">
				<label class="col-sm-2 control-label">No. Hp</label>
				<div class="col-sm-8">
		        <input type="number" class="form-control" id="no_hp" name="nohp" value="<?php echo $itemmhs['no_hp']; ?>" placeholder="Isikan No. Hp" required="">
		        </div>
		    </div>
						
			<div class="box-footer">
		        <label class="col-sm-2 control-label"></label>
		        <div class="col-sm-8">
		        <button type="submit" value="Update" class="btn btn-warning">Update</button>
		        </div>
		    </div>
		</div>	
		</form>
	<?php } ?>
</div>
</div>
</div>
</section>
</div>
</div>