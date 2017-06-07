<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
 #buktidaftar>tbody>tr>td{max-width:30px;padding:4px;border-bottom:1px grey solid}
 #buktidaftar>tbody>tr>th{width:180px;padding:4px}
 #buktidaftar{width:100%;margin:0 auto;font-size:12pt}
</style>
<div class="container">
 <div class="row hidden-print">
  <div class="col-sm-12">
  <?php /*if(isset($this->session->flpendaftartemp)) { 
  <div class="alert alert-warning">
    <strong>Konfirmasi</strong> Apakah ini data yang telah Anda masukkan? Jika iya, maka Anda hanya perlu mencetak form dibawah. Jika tidak, <strong><a href="<?php echo base_url('publik/tempdaftar'); ?>">klik disini</a></strong> untuk mendaftarkan data yang telah Anda masukkan sebelumnya. <br>Apabila Anda salah memasukkan data pada pendaftaran sebelumnya, silahkan perbaiki datanya pada kertas cetakan bukti pendaftran. 
   </div>
  <?php } */ ?>
   <h2>Pendaftaran Berhasil</h2>
   <p>Silahkan cetak bukti pendaftaran dibawah untuk diberikan pada saat masa pemberkasan.<br><span style="font-size:14pt"><strong>Mohon dicatat Nomor Pendaftaran Anda (<span style="color:red"><?php echo $datasiswa->no_daftar;?></span>) untuk dapat di cek kembali pada saat pengumuman hasil.</strong><br>Jika terdapat kesalahan saat mengisi data, silahkan diperbaiki pada kertas cetakan bukti pendaftaran sebelum diberikan pada masa pemberkasan administrasi. </span></p>
   <p><a href="#" class="btn btn-info" onclick="print()"><span class="glyphicon glyphicon-print"></span> Cetak</a></p>
  </div>
 </div>
 <div class="row">
  <div class="col-sm-12">
   <div class="panel panel-default">
    <div class="panel-heading" style="text-align:center">
     DATA SISWA/I MADRASAH IBTIDAIYAH NEGERI 1 PEKANBARU<br>
     (SISWA BARU TP 2017/2018)
    </div>
    <div class="panel-body">
     <table class="table" id="buktidaftar">
      <tr>
       <td colspan="2" style="border-color:#4aba70;border-width:2px"><h3>Data Siswa <strong>#<?php echo $datasiswa->no_daftar;?></strong></h3></td>
       <th colspan="2" style="text-align:center;border-bottom:2px #4aba70 solid"><h3>Foto Siswa</h3></th>
      </tr>
      <tr>
       <th>Nama</th>
       <td><?php echo $datasiswa->nama;?></td>
       <td rowspan="7" colspan="2" style="text-align:center;border:none"><div style="border:1px gray solid;width:4cm;height:6cm;display:block;margin:0 auto;z-index:0">Tempelkan Foto Siswa berukuran 3x4 di sini<!--img src="<?php //echo base_url('images/img'.$datasiswa->no_daftar.".JPG"); ?>" alt="foto siswa" class="imgthum" style="z-index:1;max-width:100%;max-height:100%"/--></div></td>
      </tr>
      <tr>
       <th>Nama Panggilan</th>
       <td><?php echo $datasiswa->nama_panggilan;?></td>
      </tr>
      <!--tr>
       <th>NIK Siswa</th>
       <td><?php //echo $datasiswa->nikk_siswa;?></td>
      </tr-->
      <tr>
       <th>Jenis Kelamin</th>
       <td><?php echo jkel($datasiswa->jenis_kel);?></td>
      </tr>
      <tr>
       <th>Tempat & Tanggal Lahir</th>
       <td><?php echo $datasiswa->tempat_lahir.", "; echo tanggal($datasiswa->tgl_lahir); ?></?php></td>
      </tr>
      <tr>
       <th>Agama</th>
       <td><?php echo agama($datasiswa->agama);?></td>
      </tr>
      <tr>
       <th>Alamat</th>
       <td><?php echo $datasiswa->alamat;?></td>
      </tr>
      <tr>
       <th>Anak ke</th>
       <td><strong><?php echo $datasiswa->anak_ke;?></strong> dari <strong><?php echo $datasiswa->jumlah_saudara;?></strong> bersaudara</td>
      </tr>
      <tr>
       <th>Usia</th>
       <td><?php echo umur($datasiswa->tgl_lahir);?></td>
       <th>Golongan Darah</th>
       <td><?php echo $datasiswa->goldar;?></td>
      </tr>
      <!--tr>
       <th>Tinggi Badan</th>
       <td><?php //echo $datasiswa->tinggi." cm";?></td>
       <th>Berat Badan</th>
       <td><?php //echo $datasiswa->berat." kg";?></td>
      </tr-->
      <tr>
       <th>Prestasi</th>
       <td><?php echo $datasiswa->prestasi;?></td>
       <th>Penyakit yang Pernah Diderita</th>
       <td><?php echo $datasiswa->penyakit;?></td>
      </tr>
      <tr>
       <th>Tanggal Daftar</th>
       <td><?php echo tanggal($datasiswa->tgl_daftar);?></td>
       <th>Duduk di Kelas<br><small style="color:gray"><em>(Diisi oleh Guru)</em></small></th>
       <td></td>
      </tr>
     </table>
     <table class="table table-responsive" id="buktidaftar">
      <tr>
       <td colspan="4" style="border-color:#4aba70;border-width:2px"><h3>Data Orang Tua Siswa</h3></td>
      </tr>
      <tr>
       <th>Nama Ayah</th>
       <td><?php echo $datasiswa->nama_ayah; ?></td>
       <th>Nama Ibu</th>
       <td><?php echo $datasiswa->nama_ibu; ?></td>
      </tr>
      <!--tr>
       <th>NIK Ayah</th>
       <td><?php //echo $datasiswa->nikk_ayah; ?></td>
       <th>NIK Ibu</th>
       <td><?php //echo $datasiswa->nikk_ibu; ?></td>
       </td>
      </tr-->
      <tr>
       <th>Agama Ayah</th>
       <td><?php echo agama($datasiswa->agama_ayah); ?></td>
       <th>Agama Ibu</th>
       <td><?php echo agama($datasiswa->agama_ibu); ?></td>
      </tr>
      <tr>
       <th>Pekerjaan Ayah</th>
       <td><?php echo $datasiswa->kerja_ayah; ?></td>
       <th>Pekerjaan Ibu</th>
       <td><?php echo $datasiswa->kerja_ibu; ?></td>
      </tr>
      <tr>
       <th>Penghasilan Ayah</th>
       <td><?php echo "Rp".number_format($datasiswa->hasil_ayah,0,",","."); ?></td>
       <th>Penghasilan Ibu</th>
       <td><?php echo "Rp".number_format($datasiswa->hasil_ibu,0,",","."); ?></td>
      </tr>
      <tr>
       <th>Nomor Telepon</th>
       <td><?php echo $datasiswa->no_telp;?></td>
      </tr>
      <tr>
       <th>Alamat Orang Tua</th>
       <td><?php echo $datasiswa->alamat_ortu; ?></td>
       <th>Jarak dari Rumah ke Sekolah</th>
       <td><?php echo $datasiswa->jarak_sekolah; ?> km</td>
      </tr>
      <tr>
       <th>Status Tempat Tinggal</th>
       <td><?php echo $datasiswa->status_tinggal; ?></td>
       <th>Status Orang Tua</th>
       <td><?php echo statusortu($datasiswa->status_ortu); ?></td>
      </tr>
      <tr>
       <td colspan="4" style="border-color:#4aba70;border-width:2px"><h3>Data Wali Siswa</h3></td>
      </tr>
      <tr>
       <th>Nama Wali Siswa</th>
       <td><?php echo $datasiswa->nama_wali; ?></td>
      </tr>
      <tr>
       <th>Kerja Wali Siswa</th>
       <td><?php echo $datasiswa->kerja_wali; ?></td>
      </tr>
      <tr>
       <th>Penghasilan Wali Siswa</th>
       <td><?php echo $datasiswa->hasil_wali; ?></td>
      </tr>
     </table>
     <br>
     <table class="table show-on-print" style="float:left;width:inherit;font-size:12pt;">
      <tr>
       <td style="width:250px">Lampirkan</td>
      </tr>
      <tr>
       <td>- FC Akte Kelahiran<br>- FC Kartu Keluarga</td>
      </tr>
     </table>
     <table class="table show-on-print" style="float:right;width:inherit;font-size:12pt;margin-right:10vw;">
      <tr>
       <td style="width:250px">Pekanbaru,</td>
       <td>2017</td>
      </tr>
      <tr>
       <td style="height:150px;border-bottom:1px grey solid;vertical-align:top;" colspan="2">Orang Tua/Wali Siswa</td>
      </tr>
     </table>
    </div>
   </div>
  </div>
 </div>
</div>