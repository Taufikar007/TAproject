<?php
  //Errro upload
  if (isset($error)) {
   	echo '<p class="alert-warning">';
   	echo $error;
   	echo '</p>';  
  } 
	// Notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

	// Form Open
echo form_open_multipart(base_url('admin/produk/tambah'),' class="form_horizontal"');
?>

<div class="card card-primary">
	<div class="card-header"></div>
	<form role="form">
		<div class="card-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Nama Produk</label>
				<input type="text" name="NAMA_PRODUK" class="form-control" placeholder="Nama Produk" value="<?php echo set_value('NAMA_PRODUK') ?>" required>
			</div>
			<div class="form-group">
				<label>Jenis Produk</label>
				<select name="ID_WAKTU"class="form-control">
					<?php foreach ($jenis as $jenis) {?>
						<option value="<?php echo $jenis->ID_JENIS_WAKTU ?>">
							<?php echo $jenis->NAMA_JENIS ?>
						</option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Lama Waktu</label>
				<input type="text" name="UKURAN" class="form-control" placeholder="Ukuran Produk" value="<?php echo set_value('UKURAN') ?>" required>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Harga Waktu</label>
				<input type="text" name="HARGA" class="form-control" placeholder="harga Produk" value="<?php echo set_value('HARGA') ?>" required>
			</div>
			<div class="form-group">
				<label for="exampleInputFile">File input</label>
				<div class="input-group">
					<div class="custom-file">
						<input type="file" name="GAMBAR" class="custom-file-input" id="exampleInputFile" required="required">
						<label class="custom-file-label" for="exampleInputFile">Choose file</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
				<button type="reset" name="reset" class="btn btn-danger"><i class="fa fa-times"></i> Reset</button>
			</div>
		</div>
	</form>
</div>

<?php echo form_close(); ?>