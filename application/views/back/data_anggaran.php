<!DOCTYPE html>
<html lang="">
  <head>
  	<meta name="viewport" content="initial-scale=200, maximum-scale=200, user-scalable=no" />
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
	<div class="container-fluid">
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" >
	<h1>Daftar Anggaran</h1>	<p></p>
	
						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>
										<th>Nama masjid</th>
										<th>Jenis kotak</th>
										<th> tanggal </th>
										<th>Saldo</th>
										<th>Pemasukan</th>
										<th>Pengeluaran</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($daftar_anggaran as $key) { ?>
									<tr>
										<td><?php echo $key->nama_masjid ?></td>
									    <td><?php echo $key->jenis_kotak ?></td>
										<td><?php echo $key->bulan ?></td>
										<td>Rp. <?php echo $key->donatur ?></td>
										<td>Rp. <?php echo $key->pemasukan ?></td>
										<td>Rp. <?php echo $key->pengeluaran ?></td>
										
										<td>
										<a href="<?php echo site_url();?>/back/Keuangan/add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Anggaran</a><p></p>
											<a href="javascript:;" onclick="return isconfirm('<?php echo site_url('back/Keuangan/update/').$key->id_anggaran ?>');" type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
											<a href="javascript:;" onclick="return isconfirm('<?php echo site_url('back/Keuangan/delete/').$key->id_anggaran ?>');" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
											
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
							<!-- <?php foreach ($saldo as $key) {
								$saldoawal =0.00;
								echo "Rp. $key->total_donatur ";
								echo "Rp. $key->total_pemasukan ";
								echo "Rp. $key->total_pengeluaran ";
								$saldoawal = ($key->total_donatur + $key->total_pemasukan)-$key->total_pengeluaran;
								echo "Saldo : ".$saldoawal;
							} ?>  -->
							<div class="btn btn-warning"><?php foreach ($saldo as $key){ $saldoawal =0.00; $saldoawal = ($key->total_donatur + $key->total_pemasukan)-$key->total_pengeluaran; echo "Saldo : ".$saldoawal; } ?></div>
			</div>
		</div>
	</div>
<?php $this->load->view('back/footer_urd'); ?>
<script type="text/javascript">
	function isconfirm(url_val) {
		//alert(url_val);
		if(confirm('Apakah anda yakin ?') == false){
			return false;
		}else{
			location.href=url_val;
		}
	}
</script>
</body>
</html>