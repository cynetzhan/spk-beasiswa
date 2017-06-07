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
 <title>Pendaftaran Peserta Didik Baru Madrasah Ibtidaiyah Negeri 1 Pekanbaru</title>
 <script src="<?php echo base_url('bootstrap/js/jquery-1.11.2.min.js'); ?>"></script>
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
          <a class="navbar-brand" href="<?php echo base_url(); ?>" style="color:#fff;font-size:14pt;padding-top:15px">PPDB MIN 1 Pekanbaru</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a style="color:#fff" href="<?php echo base_url('/#syarat');?>"><strong>Syarat</strong></a></li>
            <li><a style="color:#fff" href="<?php echo base_url('/#jadwal');?>"><strong>Jadwal</strong></a></li>
            <li><a style="color:#fff" href="<?php echo base_url('publik/cari');?>"><strong>Cek Pendaftaran</strong></a></li>
            <li><a style="color:#fff" href="<?php echo base_url('publik/formdaftar');?>"><strong>Daftar</strong></a></li>
          </ul>
        <!--ul class="nav navbar-nav navbar-right nav-login">
        </ul-->
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <?php if($this->session->flashdata('message')){ ?>
      <br>
      <div class="container">
        <div class="alert alert-<?php echo $this->session->flashdata('class'); ?>">
          <strong><?php echo $this->session->flashdata('alert'); ?></strong> <?php echo $this->session->flashdata('message'); ?>
        </div>
      </div>
    <?php } ?>
    <div style="min-height:90vh">
    <?php echo $contents; ?>
    </div>
	<footer id="section-bot" class="text-center hidden-print" style="padding:20px">
	 <a class="up-arrow" href="#top" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
		Sistem Pendaftaran Peserta Didik Baru <a href="<?php echo base_url('master/login'); ?>" style="color:#000;text-decoration:none">Madrasah Ibtidaiyah Negeri 1 Pekanbaru</a>
	</footer>

</body>
</html>