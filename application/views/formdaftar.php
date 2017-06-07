<div id="section-mid">
 <div class="container">
  <div class="row">
   <div class="col-sm-8">
   <div class="alert alert-warning"><strong>Perhatian</strong> Pendaftaran dibuka sampai tanggal <?php echo tanggal($set['setting']->tgl_daftar_tutup); ?> pukul 16:00 WIB</div>
   <h1>Form Pendaftaran Calon Siswa Baru</h1>
   <p>Isikan kolom dibawah ini dengan data yang sesuai dan benar.<br>
   <strong><span style="color:red"><em>(*)</em></span> Wajib Diisi</strong></p>
   <?php echo form_open_multipart('publik/daftar','class="form-horizontal"'); ?>
    <div class="panel panel-default">
     <div class="panel-heading">Identitas Calon Siswa</div>
     <div class="panel-body">
       <div class="form-group">
        <label class="control-label col-sm-4" >Nama Lengkap<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nama') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="nama" maxlength="35" value="<?php echo $nama; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Nama Panggilan<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nama_panggilan') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="nama_panggilan" maxlength="10" value="<?php echo $nama_panggilan; ?>">
        </div>
       </div>
       <!--div class="form-group">
        <label class="control-label col-sm-4" >NIK Siswa<br><small style="color:red"><em>(*)</em></small><?php //echo form_error('nikk_siswa') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="nikk_siswa" maxlength="16" value="<?php //echo $nikk_siswa; ?>">
        </div>
       </div-->
       <div class="form-group">
        <label class="control-label col-sm-4" >Jenis Kelamin<br><small style="color:red"><em>(*)</em></small><?php echo form_error('jenis_kel') ?></label>
        <div class="col-sm-8">
         <label class="radio-inline"><input type="radio" name="jenis_kel" value="1" <?php if($jenis_kel==1) echo "checked"; ?>>Laki-laki</label>
         <label class="radio-inline"><input type="radio" name="jenis_kel" value="0" <?php if($jenis_kel===0) echo "checked"; ?>>Perempuan</label>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Tempat Lahir<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tempat_lahir') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control"  name="tempat_lahir" maxlength="15" value="<?php echo $tempat_lahir; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Tanggal Lahir<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tgl_lahir') ?></label>
        <div class="col-sm-8">
        <small style="color:red">Anak harus berusia minimal 6 tahun pada 1 Juli <?php echo date('Y'); ?></small><br>
         <?php 
          $tgl=$tgl_lahir ? explode('-',$tgl_lahir) : array('','','');
          //echo var_dump($tgl);
         ?>
         <input type="number" required class="form-control tglahir_anak" id="anak_haritgl" style="width:100px;display:inline" name="anak_hari" placeholder="Tanggal" min="1" max="31" value="<?php echo $tgl[2]; ?>">
         <?php echo form_month("anak",$tgl[1]); ?>
         <input type="number" required class="form-control tglahir_anak" id="anak_thntgl" style="width:100px;display:inline" name="anak_tahun" placeholder="Tahun" min="2000" max="2011" value="<?php echo $tgl[0]; ?>">
         <button type="button" class="btn btn-xs btn-info" id="hitungusia">Hitung Usia</button><br>
         <span id="usia"></span>
         <input type='hidden' required name="tgl_lahir" id="anak_tglahir" value="<?php echo $tgl_lahir; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Agama<br><small style="color:red"><em>(*)</em></small><?php echo form_error('agama') ?></label>
        <div class="col-sm-8">
         <select name="agama" class="form-control">
          <option value="1" <?php if($agama==1) echo "selected"; ?>>Islam</option>
          <option value="2" <?php if($agama==2) echo "selected"; ?>>Katolik</option>
          <option value="3" <?php if($agama==3) echo "selected"; ?>>Protestan</option>
          <option value="4" <?php if($agama==4) echo "selected"; ?>>Hindu</option>
          <option value="5" <?php if($agama==5) echo "selected"; ?>>Buddha</option>
          <option value="6" <?php if($agama==6) echo "selected"; ?>>Konghucu</option>
         </select>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Alamat Lengkap<br><small style="color:red"><em>(*)</em></small><?php echo form_error('alamat') ?></label>
        <div class="col-sm-8">
         <textarea name="alamat" class="form-control" rows="3"><?php echo $alamat; ?></textarea>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >No Telp/HP<br><small style="color:red"><em>(*)</em></small><?php echo form_error('no_telp') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control"  name="no_telp" maxlength="20" value="<?php echo $no_telp; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Prestasi yang pernah diraih</label>
        <div class="col-sm-8">
         <textarea class="form-control" name="prestasi" rows="2"><?php echo $prestasi; ?></textarea>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Jumlah Saudara<br><small style="color:red"><em>(*)</em></small><?php echo form_error('jumlah_saudara') ?></label>
        <div class="col-sm-8">
         <input type='number' required class="form-control" name="jumlah_saudara" value="<?php echo $jumlah_saudara; ?>">
        </div>
       </div>
       <!--div class="form-group">
        <label class="control-label col-sm-4" >Tinggi<br><small style="color:gray">dalam cm</small><small style="color:red"><em>(*)</em></small><?php //echo form_error('tinggi') ?></label>
        <div class="col-sm-8">
         <input type='number' required class="form-control" name="tinggi" value="<?php //echo $tinggi; ?>">
        </div>
       </div-->
       <!--div class="form-group">
        <label class="control-label col-sm-4" >Berat<br><small style="color:gray">dalam kg</small><small style="color:red"><em>(*)</em></small><?php //echo form_error('berat') ?></label>
        <div class="col-sm-8">
         <input type='number' required class="form-control" name="berat" value="<?php //echo $berat; ?>">
        </div>
       </div-->
       <div class="form-group">
        <label class="control-label col-sm-4" >Golongan Darah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('goldar') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="goldar" maxlength="2" value="<?php echo $goldar; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Penyakit Khusus</label>
        <div class="col-sm-8">
         <input type='text' class="form-control" name="penyakit" maxlength="25" value="<?php echo $penyakit; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Anak ke-<br><small style="color:red"><em>(*)</em></small><?php echo form_error('anak_ke') ?></label>
        <div class="col-sm-8">
         <input type='number' required class="form-control" name="anak_ke" value="<?php echo $anak_ke; ?>">
        </div>
       </div>
       <!--div class="form-group">
        <label class="control-label col-sm-4" >Foto Calon Siswa<br><small>Max. Ukuran File: 500 kB.</small></label>
        <div class="col-sm-8">
         <input type='file' class="form-control" name="userfile">
       </div>
     </div-->
    </div>
   </div>
   <div class="panel panel-default">
     <div class="panel-heading">Identitas Orang Tua Calon Siswa</div>
     <div class="panel-body">
     <em>Isikan dengan data Ayah dan Ibu siswa<br>
     </em>
      <div class="form-group">
        <label class="control-label col-sm-4" >Nama Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nama_ayah') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="nama_ayah" maxlength="25" value="<?php echo $nama_ayah; ?>">
        </div>
       </div>
      <!--div class="form-group">
        <label class="control-label col-sm-4" >NIK Ayah<br><small style="color:red"><em>(*)</em></small><?php //echo form_error('nikk_ayah') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="nikk_ayah" maxlength="16" value="<?php //echo $nikk_ayah; ?>">
        </div>
       </div-->
      <div class="form-group">
        <label class="control-label col-sm-4" >Tempat Lahir Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tplahir_ayah') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="tplahir_ayah" maxlength="25" value="<?php echo $tplahir_ayah; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Tanggal Lahir Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tglahir_ayah') ?></label>
        <div class="col-sm-8">
        <?php 
          $tgl_ayah=$tglahir_ayah ? explode('-',$tglahir_ayah) : array('','','');
          //echo var_dump($tgl);
         ?>
         <input type="number" required class="form-control tglahir_ayah" style="width:100px;display:inline" name="ayah_hari" id="ayah_hari" placeholder="Tanggal" min="1" max="31" value="<?php echo $tgl_ayah[2]; ?>">
         <?php echo form_month("ayah",$tgl_ayah[1]); ?>
         <input type="number" required class="form-control tglahir_ayah" style="width:100px;display:inline" name="ayah_tahun" id="ayah_tahun" placeholder="Tahun" value="<?php echo $tgl_ayah[0]; ?>">
         <input type='hidden' name="tglahir_ayah" id="tglahir_ayah" value="<?php echo $tglahir_ayah; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Agama Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('agama_ayah') ?></label>
        <div class="col-sm-8">
         <select name="agama_ayah" class="form-control">
          <option value="1" <?php if($agama_ayah==1) echo "selected"; ?>>Islam</option>
          <option value="2" <?php if($agama_ayah==2) echo "selected"; ?>>Katolik</option>
          <option value="3" <?php if($agama_ayah==3) echo "selected"; ?>>Protestan</option>
          <option value="4" <?php if($agama_ayah==4) echo "selected"; ?>>Hindu</option>
          <option value="5" <?php if($agama_ayah==5) echo "selected"; ?>>Buddha</option>
          <option value="6" <?php if($agama_ayah==6) echo "selected"; ?>>Konghucu</option>
         </select>
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Pekerjaan Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('kerja_ayah') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="kerja_ayah" value="<?php echo $kerja_ayah; ?>">
         <small><em>Jelaskan pekerjaan beserta jabatannya. Apabila Wiraswasta, tuliskan pada bidang apa</em></small>
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Penghasilan Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('hasil_ayah') ?></label>
        <div class="col-sm-8">
         <input type='number' class="form-control"  name="hasil_ayah" value="<?php echo $hasil_ayah; ?>">
         <small><em>Hanya isi dengan angka, tanpa titik atau koma!</em></small>
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Nama Ibu<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nama_ibu') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="nama_ibu" maxlength="25" value="<?php echo $nama_ibu; ?>">
        </div>
       </div>
      <!--div class="form-group">
        <label class="control-label col-sm-4" >NIK Ibu<br><small style="color:red"><em>(*)</em></small><?php //echo form_error('nikk_ibu') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="nikk_ibu" maxlength="16" value="<?php //echo $nikk_ibu; ?>">
        </div>
       </div-->
      <div class="form-group">
        <label class="control-label col-sm-4" >Tempat Lahir Ibu<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tplahir_ibu') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="tplahir_ibu" maxlength="25" value="<?php echo $tplahir_ibu; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Tanggal Lahir Ibu<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tglahir_ibu') ?></label>
        <div class="col-sm-8">
        <?php 
          $tgl_ibu=$tglahir_ibu ? explode('-',$tglahir_ibu) : array('','','');
          //echo var_dump($tgl);
         ?>
         <input type="number" required class="form-control tglahir_ibu" style="width:100px;display:inline" name="ibu_hari" id="ibu_hari" placeholder="Tanggal" min="1" max="31" value="<?php echo $tgl_ibu[2]; ?>">
         <?php echo form_month("ibu",$tgl_ibu[1]); ?>
         <input type="number" required class="form-control tglahir_ibu" style="width:100px;display:inline" name="ibu_tahun" id="ibu_tahun" placeholder="Tahun" value="<?php echo $tgl_ibu[1]; ?>">
         <input type='hidden' name="tglahir_ibu" id="tglahir_ibu" value="<?php echo $tglahir_ibu; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Agama Ibu<br><small style="color:red"><em>(*)</em></small><?php echo form_error('agama_ibu') ?></label>
        <div class="col-sm-8">
         <select name="agama_ibu" class="form-control">
          <option value="1" <?php if($agama_ibu==1) echo "selected"; ?>>Islam</option>
          <option value="2" <?php if($agama_ibu==2) echo "selected"; ?>>Katolik</option>
          <option value="3" <?php if($agama_ibu==3) echo "selected"; ?>>Protestan</option>
          <option value="4" <?php if($agama_ibu==4) echo "selected"; ?>>Hindu</option>
          <option value="5" <?php if($agama_ibu==5) echo "selected"; ?>>Buddha</option>
          <option value="6" <?php if($agama_ibu==6) echo "selected"; ?>>Konghucu</option>
         </select>
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Pekerjaan Ibu<br><small style="color:red"><em>(*)</em></small><?php echo form_error('kerja_ibu') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="kerja_ibu" value="<?php echo $kerja_ibu; ?>">
         <small><em>Jelaskan seperti pekerjaan ayah</em></small>
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Penghasilan Ibu<br><small style="color:red"><em>(*)</em></small><?php echo form_error('hasil_ibu') ?></label>
        <div class="col-sm-8">
         <input type='number' class="form-control"  name="hasil_ibu" value="<?php echo $hasil_ibu; ?>">
         <small><em>Hanya isi dengan angka, tanpa titik atau koma!</em></small>
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Alamat Orang Tua<br><small style="color:red"><em>(*)</em></small><?php echo form_error('alamat_ortu') ?></label>
        <div class="col-sm-8">
         <textarea class="form-control" name="alamat_ortu" rows="3"><?php echo $alamat_ortu; ?></textarea>
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Status Orang Tua<br><small style="color:red"><em>(*)</em></small><?php echo form_error('status_ortu') ?></label>
        <div class="col-sm-8">
         <select name="status_ortu" class="form-control">
          <option value="1" <?php if($status_ortu==1) echo "selected"; ?>>Masih Hidup</option>
          <option value="2" <?php if($status_ortu==2) echo "selected"; ?>>Cerai</option>
          <option value="3" <?php if($status_ortu==3) echo "selected"; ?>>Keduanya Meninggal</option>
          <option value="4" <?php if($status_ortu==4) echo "selected"; ?>>Ayah Meninggal</option>
          <option value="5" <?php if($status_ortu==5) echo "selected"; ?>>Ibu Meninggal</option>
         </select>
        </div>
       </div>
     </div>
  </div>
  <div class="panel panel-default">
     <div class="panel-heading">Informasi Tambahan</div>
     <div class="panel-body">
      <div class="form-group">
        <label class="control-label col-sm-4" >Jarak dari Sekolah ke Rumah<br><small style="color:gray">dalam km</small><small style="color:red"><em>(*)</em></small><?php echo form_error('jarak_sekolah') ?></label>
        <div class="col-sm-8">
         <input type='number' class="form-control"  name="jarak_sekolah" value="<?php echo $jarak_sekolah; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Status Tinggal<br><small style="color:red"><em>(*)</em></small><?php echo form_error('status_tinggal') ?></label>
        <div class="col-sm-8">
         <select name="status_tinggal" class="form-control">
          <option value="Milik Sendiri" <?php if($status_tinggal=="Milik Sendiri") echo "selected"; ?>>Milik Sendiri</option>
          <option value="Sewa/Kontrak" <?php if($status_tinggal=="Sewa/Kontrak") echo "selected"; ?> >Sewa/Kontrak</option>
         </select>
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Nama Wali<br><small style="color:gray">Jika Ada</small></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="nama_wali" maxlength="30" value="<?php echo $nama_wali; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Pekerjaan Wali<br><small style="color:gray">Jika Ada</small></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="kerja_wali" value="<?php echo $nama_wali; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Penghasilan Wali<br><small style="color:gray">Jika Ada</small></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="hasil_wali" maxlength="20" value="<?php echo $hasil_wali; ?>"><small><em>Hanya isi dengan angka, tanpa titik atau koma!</em></small>
        </div>
       </div>
     </div>
     
  </div>
  <button type="button" class="btn btn-info form-control" data-toggle="modal" data-target="#confirm" id="konfirmdaftar">Daftar</button>
  <div id="confirm" class="modal fade" role="dialog">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Konfirmasi Pendaftaran</h4>
     </div>
     <div class="modal-body">
      <p><strong>Mohon diperiksa kembali data yang telah Anda masukkan.</strong></p>
      <p>Jika data yang Anda masukkan telah sesuai, silahkan tekan tombol "Daftar"</p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>&nbsp;<input type="submit" class="btn btn-info" id="submitdaftar" name="daftar" value="Daftar" />
     </div> 
    </div>
   </div>
  <?php echo form_close(); ?>
 </div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
 var usiaAnak=0;
 $('.collapse').on('shown.bs.collapse',function(){
  $('html,body').animate({
    'scrollTop': '-='+1000+'px'
  }, 1000);
 });
 $('#confirm').on('show.bs.modal', function() {
  //event.preventDefault();
  console.log('woof');
  if(usiaAnak<6){
   //console.log("woof woof");
   $('.modal-body').html("<p><strong>Usia pendaftar tidak mencapai batas minimum usia yang ditetapkan. Anda tidak dapat melanjutkan pendaftaran.</strong></p><p>Silahkan cek tanggal lahir pendaftar apabila ada kesalahan dalam pengisiannya, dan tekan tombol 'Hitung Usia' untuk memastikan usia pendaftar sesuai.</p>");
   $('#submitdaftar').attr('type','hidden');
  } else {
   $('.modal-body').html('<p><strong>Mohon diperiksa kembali data yang telah Anda masukkan.</strong></p><p>Jika data yang Anda masukkan telah sesuai, silahkan tekan tombol "Daftar"</p>');
   $('#submitdaftar').attr('type','submit');
  }
 });
 $('#submitdaftar').submit(function(e) {
  e.preventDefault();
  $("#confirm").modal("hide");
  return false;
 });
 $('#hitungusia').click(function()  {
  haritgl = $('#anak_haritgl').val();
  blntgl = $('#anak_bln').val();
  thntgl = $('#anak_thntgl').val();
  batas = new Date(<?php echo date('Y'); ?>,7,1);
  tglahir = new Date(thntgl,blntgl,haritgl);
  usia = new Date(batas-tglahir);
  $('span#usia').text(usia.getYear()-70 + " tahun "+ usia.getMonth() + " bulan");
  $('#anak_tglahir').val(thntgl+"-"+blntgl+"-"+haritgl);
  usiaAnak=usia.getYear()-70;
 });
 $('.tglahir_ayah').change(function() {
  $('#tglahir_ayah').val($('#ayah_tahun').val()+"-"+$('#ayah_bln').val()+"-"+$('#ayah_hari').val());
 });
 $('.tglahir_ibu').change(function() {
  $('#tglahir_ibu').val($('#ibu_tahun').val()+"-"+$('#ibu_bln').val()+"-"+$('#ibu_hari').val());
 });
 $('.tglahir_anak').change(function() {
  $('#anak_tglahir').val($('#anak_thntgl').val()+"-"+$('#anak_bln').val()+"-"+$('#anak_haritgl').val());
 });
});
</script>