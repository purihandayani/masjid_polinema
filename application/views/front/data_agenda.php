<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Agenda Masjid</title>		
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
	<style type="text/css">
		img.atas{
        height: 185.2px;
        width: 100%;
        margin:auto;
      	}
       	a.readmorebtn {
	        cursor:pointer;
	    }
	    a.readmorebtn:hover {
	        border-bottom:1px green solid;
	    }
	    p {
	    margin:1.4em 0;
	    }
	    p.more, ul.more {
	        display:none;
	        color: blue;
	        text-decoration: bold;
	    }
	   
	</style>
	
<?php $this->load->view('front/header'); ?>
	<body style="background-color:lightblue;">
		<body bgcolor="red">
	<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
		<?php foreach ($daftar_agenda as $key) { ?>
		 <div class="col-md-3">
                    <div style="color: white; font-size: 12pt;"><br /><?php echo $key->nama_agenda ?><br /></div>
                        <a class="readmorebtn btn btn-warning">Baca Selengkapnya...</a>   
                    <!-- isi dari read more -->
                    <p class="more">
                    <br /><?php echo "$key->jenis_agenda <br>Waktu : $key->waktu <br>Pelaksana : $key->pelaksana<br>";?>
                    </p>
         </div>
         <?php }  ?>
	</div>
	<p></p>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="border-radius: 10px;">
			<?php echo form_open('back/komentar/add'); ?>
				<?php echo validation_errors(); ?>
					<div class="form-group">
			            <h3 style="color:blue; text-align: right">KOMENTAR PENGUNJUNG</h3>
						<input type="text" name="komentator" id="input" class="form-control" value="" placeholder="Nama .."><br>
			            <!-- <input type="hidden" name="halaman" value="agenda"> -->
			            <textarea name="isi" class="form-control" placeholder="Isi Komentar .."></textarea><br>
			            <input type="submit" name="simpanKomen" class="btn btn-warning" value="Kirim komentar">
    				</div>
    			<?php echo form_close(); ?>
    	</div>
    	<br>
    	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7" style="float: right; text-align: right;" >
			<?php foreach ($daftar_komentar as $key) { ?>
			<div style="color: white;">
				<b>Pengunjung : <?php echo $key->oleh; ?></b><br />
  				Isi Komentar<i> <?php echo $key->isi_komentar; ?></i> &nbsp;&nbsp;&nbsp;<br/>
  			</div>
    				Admin :  <?php echo $key->balasan; ?><br /><br />
    	<?php } ?>
    	</div>
    	
	</div>
<?php  $this->load->view('back/footer'); ?>
<script>
    var moreText = "Tutup",
                    lessText = "Baca Selengkapnya...",
                    moreButton = $("a.readmorebtn");

                    moreButton.click(function (){
                        var $this = $(this);
                        $this.text($this.text() == moreText ? lessText : moreText).next("p.more").slideToggle("fast");
                    });
</script>
</body>
</html>