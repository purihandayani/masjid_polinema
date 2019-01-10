<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Inventaris</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  </head>
<?php $this->load->view('back/header'); ?>
<body>
	<div class="container">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Edit Data Inventaris Masjid An-Nur Polinema</h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('back/inventaris/update/'.$this->uri->segment(4)); ?>
						<?php echo validation_errors(); ?>
							<?php foreach ($selectedInventaris as $key) { ?>
							<div class="form-group">
								<label for="">Nama Barang</label>
								<input type="text" name="nama" id="input" class="form-control" value="<?php echo $key->nama_barang; ?>" placeholder="Nama Agenda">
								<label for="">Kondisi Barang</label>
								<select name="kondisi" id="input" class="form-control" required="required">
									<option value="" disabled="" selected="">--Kondisi Barang--</option>
									<option value="Bagus">Bagus</option>
									<option value="Cukup Bagus">Cukup Bagus</option>
									<option value="Kurang Bagus">Kurang Bagus</option>
								</select>
								<label for="">Jumlah</label>
								<input type="text" name="jumlah" id="inputTanggal" class="form-control" value="<?php echo $key->jumlah_barang; ?>">
								<label for="">Keterangan Tambahan</label>
								<textarea name="keterangan" id="input" class="form-control" rows="3" placeholder="Keterangan Tambahan"><?php echo $key->keterangan_barang; ?></textarea>
							</div>
								<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
								<a href="<?php echo site_url('back/inventaris'); ?>" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-close"></span> Cancel</a>
							<?php } ?>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('back/footer_urd'); ?>
</body>
</html>