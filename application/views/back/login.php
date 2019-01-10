<!DOCTYPE html>
<html lang="">
	<head>
		<meta name="viewport" content="initial-scale=200, maximum-scale=200, user-scalable=no" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Masjid An-Nur Polinema</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('');?>assets/css/bootstrap.min.css">
		<style type="text/css">
			#panel-login{
				padding-top: auto;
				padding-left: 50%;
			}

			.panel-heading{
				padding-top: 3%;
				padding-bottom: 2%;
			}

			.panel-title{
				font-size: 18px;
			}

			.panel-body{
				padding-bottom: 3%;
			}

			legend{
				margin-bottom: 0.75%;
			}

		</style>

	</head>
	<body>
		<div class="col-md-6" style="margin-left: 20%; margin-top: 10%;">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><b><i class="glyphicon glyphicon-lock"></i>&nbsp;Masjid An-Nur Polinema</b></h3>
				</div>
				<div class="panel-body">
						<?php echo form_open('back/Login/login'); ?>
						<div class="form-group">
							<legend>Login Administrator</legend>
						</div>
						<div class="col-sm-12" style="padding-left: 15%;">
							<div class="input-group username" style="margin-bottom: 3%; width: 85%;">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input class="form-control" type="text" id="fk_pengguna" name="username" placeholder="Username .." required="required" >
							</div>
							<div class="input-group password" style="margin-bottom: 3%; width: 85%">
								<span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
								<input class="form-control" type="password" id="password" name="password" placeholder="Password .." required="required">
							</div>	
							<div class="input-group" style="width: 85%">
									<button type="submit" class="btn btn-success pull-right"><i class="glyphicon glyphicon-log-in"></i>&nbsp;&nbsp;Sign In</button>
									</div>
									
									
							</div>


							<?php echo form_close(); ?>
						</div>						
				</div>
				<div class="panel-footer" style="text-align: center; font-size: 12px;">
					Copyright &copy; <?php echo date("D") ?> - Proyek Tingkat 2 MI 3D
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="<?php echo base_url();?>assets/jquery/jquery-2.2.4.js"></script>
		
		<!-- <script type="text/javascript">
			$(document).ready(function(){
				$("#div-alert").fadeIn("slow");
				$("#div-alert").fadeOut(5000);
			});
		
			function hanyaAngka(evt){
				var charCode = (evt.which) ? evt.which : event.keyCode
				if(charCode > 31 && (charCode < 48 || charCode > 57))
					return false;
				return true;
			};
			
		</script> -->

		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 10 bug -->
	</body>
</html>