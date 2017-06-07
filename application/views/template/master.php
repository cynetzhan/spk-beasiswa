<?php
//header('Cache-Control: max-age=900');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="<?php echo base_url("bootstrap/images/ikon.png");?>">
 <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
 <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/code.css'); ?>">
 <link rel="stylesheet" href="<?php echo base_url('bootstrap/datatables/dataTables.bootstrap.css'); ?>">
 <title>Sistem Pendukung Keputusan Pemberian Beasiswa SMA</title>
 <script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
 <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
<a name="#top"></a>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>" style="color:#fff;font-size:14pt;padding-top:15px">SMP Negeri 7 Padang</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li <?php if($this->uri->segment(2)=='dashboard') echo 'class="active"'; ?>><a href="<?php echo base_url('master/dashboard'); ?>">Dashboard</a></li>
          <li class="dropdown <?php if($this->uri->segment(2)=='datasiswa') echo ' active'; ?>">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Siswa <span class="caret"></span></a>
           <ul class="dropdown-menu">
            <li><a href="<?= base_url('master/datasiswa')?>">Data Siswa</a></li>
            <li><a href="<?= base_url('master/pembobotan') ?>">Proses Penerima Beasiswa</a></li>
            <li><a href="<?= base_url('master/beasiswa') ?>">Lihat Penerima Beasiswa</a></li>
           </ul>
          </li>
          <li class="dropdown<?php if($this->uri->segment(2)=='ahpset') echo ' active'; ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengaturan <span class="caret"</span></a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('master/ahpset') ?>">Pengaturan Kriteria Berpasangan</a></li>
              <li><a href="<?= base_url('master/sawset')?>">Pengaturan Pembobotan</a></li>
              <li><a href="<?= base_url('master/pengaturan')?>">Kelola Pengguna</a></li>
              <li><a href="<?= base_url('master/chpassword/'.$this->session->user_id)?>">Ubah Password</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right nav-login">
          <li><a href="<?php echo base_url('master/logout'); ?>">Logout</a>
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php if($this->session->flashdata('message')){ ?>
      <br>
      <div class="container">
        <div class="alert alert-<?php echo $this->session->flashdata('class'); ?>">
          <strong><?php echo $this->session->flashdata('message'); ?></strong> <?php echo $this->session->flashdata('value'); ?>
        </div>
      </div>
    <?php } 
    if($this->session->userdata('login_status')==0) echo "<div style='min-height:90vh'>".$contents."</div>"; else { 
    ?>
      <div class="container" style="min-height:90vh">
       <div class="row">
        <div class="col-sm-12">
    <?php echo $contents; ?>
        </div>
       </div>
      </div>
    <?php } ?>
	<footer id="section-bot" class="text-center hidden-print" style="padding:20px">
	 <a class="up-arrow" href="#top" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
		Sistem Pendaftaran Peserta Didik Baru <a href="<?php echo base_url('master/login'); ?>" style="color:#000;text-decoration:none">Madrasah Ibtidaiyah Negeri 1 Pekanbaru</a>
	</footer>

</body>
</html>