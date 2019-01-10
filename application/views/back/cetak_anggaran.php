<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Anggaran</title>

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
					<h3 class="panel-title">Data Anggaran Masjid An-Nur Polinema</h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('back/keuangan/cetak/'.$this->uri->segment(4)); ?>
						<?php echo validation_errors(); ?>
						<?php foreach ($selectedAnggaran as $key) { ?>
							<div class="form-group">
							<label for="">Nama Masjid</label>
								<input type="text" name="nama_masjid" class="form-control" value="<?php echo $key->nama_masjid; ?>">
								
								<!--<label for="">Nama Masjid</label>
								<select name="jenis" id="input" class="form-control" required="required">
									<option value="" enabled="" selected=""> --> <!--Jenis Kotak Amal</option>
									<option value="Masjid An-Nur Polinema">Masjid An-Nur Polinema</option>
									<option value="Masjid Raya Polinema">Masjid Raya Polinema</option>
								</select>-->
								<label for="">jenis kotak</label>
								<input type="text" name="jenis_kotak" class="form-control" value="<?php echo $key->jenis_kotak; ?>">
								<label for="">Waktu</label>
								<input type="date" name="waktu" class="form-control" value="<?php echo $key->bulan; ?>">
								<label for="">Dari donatur</label>
								<input type="text" name="donatur" class="form-control" value="<?php echo $key->donatur; ?>" placeholder="Rp. ... (Jika tidak ada kosongkan saja)">
								<label for="">Pemasukan</label>
								<input type="text" name="pemasukan" class="form-control" value="<?php echo $key->pemasukan; ?>" >
								<label for="">Pengeluaran</label>
								<input type="text" name="pengeluaran" class="form-control" value="<?php echo $key->pengeluaran; ?>" ">
							</div>
								
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('back/footer_urd'); ?>
</body>
</html>