<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <a name="utama"></a>
    <div id="cover">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6" id="cover-desc" style="padding-top:30vh;color:#fff">
            <h1 class="description">Pendaftaran Peserta Didik Baru<br><small style="color:#fff">Madrasah Ibtidaiyah Negeri 1 Pekanbaru</small></h1>
            <h3>Pendaftaran dibuka pada <?php echo tanggal($setting->tgl_daftar_buka)." sampai ".tanggal($setting->tgl_daftar_tutup)." pukul 16.00 WIB"; ?></h3>
            <a href="<?php echo base_url('publik/formdaftar'); ?>" class="btn btn-large btn-info">Pendaftaran</a>
			<a href="<?php echo base_url('publik/cari'); ?>" class="btn btn-large btn-info">Cek Pendaftaran</a>
          </div>
        </div>
      </div>
    </div>
    <div class="section-divider">
     <a name="syarat"></a>
      <div class="container">
        <h1>Syarat Pendaftaran</h1>        
      </div>
    </div>
  <div class="container" id="syarat">
    <div class="row">
      <div class="col-xs-9">
        <ol style="font-size:1.5em;">
         <li>Mengisi dan mencetak formulir pendaftaran melalui Website <a href="<?php echo base_url('publik/formdaftar'); ?>">PPDB MIN 1 Pekanbaru</a></li>
         <li>Foto copy Kartu Keluarga/KK rangkap 2</li>
         <li>Foto copy KTP Orang Tua ( suami & istri ) rangkap 2</li>
         <li>Foto copy Akte Kelahiran rangkap 2</li>
         <li>Foto copy Surat Tanda Tamat Belajar RA / TK, Kelompok Bermain / surat keterangan (Jika ada) rangkap 2</li>
         <li>Pas Photo 3 x 4 ( Warna ) 2 lembar</li>
         <li>Foto copy Sertifikat / Piagam Prestasi ( Jika ada )</li>
         <li>Calon Siswa Telah Berusia Minimal 6 Tahun, Terhitung Mulai Tanggal 01 Juli 2017</li>
         <li>Calon Siswa Telah Menguasai Minimal Iqro’ 4</li>
       </ol>
      </div>
    </div>
  </div>

 <div class="section-divider">
  <a name="jadwal"></a>
  <div class="container">
    <h1>Tahapan Pendaftaran</h1>
  </div>
 </div>
<style>
 .card-title{padding:5px;width:20%;height:100%;background-color:#d2ff5d;float:left;font-size:7em;margin-right:15px;text-align:center;color:#f27b00;margin-left:20px}
 #jadwal .card-content{background-color:#fff;min-height:200px}
 #jadwal p{font-size:13pt}
</style>
<div class="container-fluid" id="jadwal" style="background-color:#20a286">
 <div class="container">
   <div class="row">
     <div class="col-xs-12">
      <!--h1>Tahapan Pendaftaran</h1-->
      <div class="row">
       <div class="col-xs-4 col-sm-3 card-title">1</div>
       <div class="col-xs-8 col-sm-9 card-content">
        <h2>Pendaftaran Online<br><small>16 - 20 Maret 2016</small></h2>
        <p>
        Orang Tua mendaftarkan anaknya melalui portal PPDB MIN 1 Pekanbaru dengan mengisi form pendaftaran yang telah disediakan. Form pendaftaran nantinya dicetak untuk diberikan saat pemberkasan.</p>
        </div>
      </div>
      <div class="row">
       <div class="col-xs-4 col-sm-3 card-title">2</div>
       <div class="col-xs-8 col-sm-9 card-content">
        <h2>Pemberkasan Administrasi<br><small>21 - 22 Maret 2016</small></h2>
        <p>
        Orang Tua membawa syarat-syarat administrasi dan form pendaftaran untuk diberikan kepada sekolah.</p>
       </div>
      </div>
      <div class="row">
       <div class="col-xs-4 col-sm-3 card-title">3</div>
       <div class="col-xs-8 col-sm-9 card-content">
        <h2>Pengumuman Hasil Administrasi<br><small>23 - 24 Maret 2016</small></h2>
        <p>Setelah memberikan syarat administrasi, Orang Tua dapat melihat diterima atau tidaknya syarat yang telah diberikan pada halaman Cek Pendaftaran dengan memasukkan nomor pendaftaran. Bagi anak yang lulus administrasi dapat kemudian melanjutkan untuk Tes Calon Siswa.</p>
       </div>
      </div>
      <div class="row">
       <div class="col-xs-4 col-sm-3 card-title">4</div>
       <div class="col-xs-8 col-sm-9 card-content">
        <h2>Tes Calon Siswa<br><small>25 - 26 Maret 2016</small></h2>
        <p>Calon siswa yang telah lulus administrasi harus mengikuti tes masuk. Bagi yang tidak mengikuti tes dinyatakan tidak lulus. </p>
       </div>
      </div>
      <div class="row">
       <div class="col-xs-4 col-sm-3 card-title">5</div>
       <div class="col-xs-8 col-sm-9 card-content">
        <h2>Pengumuman Kelulusan<br><small>31 Maret 2016</small></h2>
        <p>Hasil tes masuk dapat dilihat pada halaman Cek Pendaftaran dengan memasukkan nomor pendaftaran. Apabila calon siswa lulus, maka Orang Tua perlu melakukan pendaftaran ulang.</p>
       </div>
      </div>
      <div class="row">
       <div class="col-xs-4 col-sm-3 card-title">6</div>
       <div class="col-xs-8 col-sm-9 card-content">
        <h2>Daftar Ulang<br><small>3 - 5 April 2016</small></h2>
        <p>Orang Tua calon siswa mendaftarkan ulang anaknya di sekolah.<br></p>
       </div>
      </div>
      
     </div>
  </div>
 </div>
</div>
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-50
        }, 1000);
        return false;
      }
    }
  });
});
</script>