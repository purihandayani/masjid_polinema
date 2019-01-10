<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Agenda</title>

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
					<h3 class="panel-title">Tambah Data Agenda Masjid An-Nur Polinema</h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('back/agenda/add'); ?>
						<?php echo validation_errors(); ?>
							<div class="form-group">
								<label for="">Nama Agenda</label>
								<input type="text" name="nama_agenda" id="input" class="form-control" value="" placeholder="Nama Agenda">
								<label for="">Jenis Kegiatan</label>
								<select name="jenis_agenda" id="input" class="form-control" required="required">
									<option value="" disabled="" selected="">--Jenis Agenda--</option>
									<option value="Mingguan">Mingguan</option>
									<option value="Bulanan">Bulanan</option>
									<option value="Tahunan">Tahunan</option>
								</select>
								<label for="">Waktu</label>
								<input type="date" name="waktu" id="inputTanggal" class="form-control" value="">
								<label for="">Pelaksana</label>
								<input type="text" name="pelaksana" id="inputTanggal" class="form-control" value="" placeholder="Pelaksana Kegiatan">
							</div>
								<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
								<a href="<?php echo site_url('back/agenda'); ?>" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-close"></span> Cancel</a>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('back/footer_urd'); ?>
</body>
</html>