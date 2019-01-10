<!DOCTYPE html>
<html lang="">
  <head>
  	<meta name="viewport" content="initial-scale=200, maximum-scale=200, user-scalable=no" />
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
	<div class="container-fluid">
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" >
	<h1>Daftar Agenda</h1>	<p></p>
	<a href="<?php echo site_url();?>/back/agenda/add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Agenda</a><p></p>
						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>
										<th>Agenda</th>
										<th>Jenis Agenda</th>
										<th>Waktu</th>
										<th>Pelaksana</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($daftar_agenda as $key) { ?>
									<tr>
										<td><?php echo $key->nama_agenda ?></td>
										<td><?php echo $key->jenis_agenda ?></td>
										<td>
											<?php
											$hari = new DateTime("$key->waktu");
										      		echo $hari->format('l') . PHP_EOL;
										        	echo $key->waktu; 
											?>
										</td>
										<td><?php echo $key->pelaksana ?></td>
										<td>
											<a href="javascript:;" onclick="return isconfirm('<?php echo site_url('back/agenda/update/').$key->id_agenda ?>');" type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
											<a href="javascript:;" onclick="return isconfirm('<?php echo site_url('back/agenda/delete/').$key->id_agenda ?>');" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
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