<div class="imgwrapper">
  <img src="<?php echo base_url('') ?>assets/img/bg-body.jpg?>" class="atas">
</div>
<nav class="navbar navbar-default" style="background-color: lightgrey;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <!--<img src="<?php echo base_url('') ?>assets/img/icon.png?>" width="30" height="30" class="d-inline-block align-top" alt="" style="float: 1; position: absolute; margin-top: 10px;">-->
      <a class="navbar-brand" href="<?php echo site_url('back/Agenda/Home'); ?>" style="color: green; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Masjid An-Nur Polinema</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
          <a href="<?php echo site_url('back/Agenda/Home'); ?>">Agenda</a>
        </li>
        <li>
          <a href="<?php echo site_url('back/Inventaris'); ?>" class="tombol">Inventaris</a></li>
        <li>
          <a href="<?php echo site_url('back/Keuangan'); ?>" class="tombol">Keuangan</a>
        </li>
       <!--<li>
          <a href="<?php echo site_url('back/Qasidah'); ?>" class="tombol">Qasidah</a>
        </li>-->
        <li>
          <a href="<?php echo site_url('back/Komentar'); ?>" class="tombol">Komentar Pengunjung / Balasan Admin</a>
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-right">   
            <li>
            <div>
            <a href="<?php echo site_url('back/Login/logout'); ?>" class="btn btn-danger" style="margin-top: 10px;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            <div>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
