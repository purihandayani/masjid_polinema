<!DOCTYPE html>
<html lang="">
  <head>
  	<meta name="viewport" content="initial-scale=200, maximum-scale=200, user-scalable=no" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Inventaris</title>

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
	<h1>Daftar Inventaris</h1>	<p></p>
	<a href="<?php echo site_url();?>/back/Inventaris/add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Inventaris</a><p></p>
						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>
										<th>Nama Barang</th>
										<th>Jumlah</th>
										<th>Kondisi</th>
										<th>Keterangan </th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($daftar_inventaris as $key) { ?>
									<tr>
										<td><?php echo $key->nama_barang ?></td>
										<td><?php echo $key->jumlah_barang ?></td>
										<td><?php echo $key->kondisi_barang	?></td>
										<td><?php if ($key->keterangan_barang == null) {
											echo "-";	
										} echo $key->keterangan_barang ?></td>
										<td>
											<a href="javascript:;" onclick="return isconfirm('<?php echo site_url('back/Inventaris/update/').$key->kd_barang ?>');" type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
											<a href="javascript:;" onclick="return isconfirm('<?php echo site_url('back/Inventaris/delete/').$key->kd_barang ?>');" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
			</div>
		</div>
	</div>
<?php $this->load->view('back/footer'); ?>
<script type="text/javascript">
	function isconfirm(url_val) {
		alert(url_val);
		if(confirm('Apakah anda yakin ?') == false){
			return false;
		}else{
			location.href=url_val;
		}
	}
</script>
</body>
</html>