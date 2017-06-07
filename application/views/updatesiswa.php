   <?php echo form_open_multipart('master/updatesiswa_action','class="form-horizontal"'); ?>
    <div class="panel panel-default">
     <div class="panel-heading">Identitas Calon Siswa</div>
     <div id="collapse1" class="panel-collapse collapse in">
     <div class="panel-body">
     <input type="hidden" name="id" value="<?php echo $datasiswa->id; ?>"/>
       <div class="form-group">
        <label class="control-label col-sm-4" >Nama Lengkap<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nama') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="nama" maxlength="35" value="<?php echo $nama ?: $datasiswa->nama; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Nama Panggilan<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nama_panggilan') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="nama_panggilan" maxlength="10" value="<?php echo $nama_panggilan ?: $datasiswa->nama_panggilan; ?>">
        </div>
       </div>
       <!--div class="form-group">
        <label class="control-label col-sm-4" >NIK Siswa<br><small style="color:red"><em>(*)</em></small><?php //echo form_error('nikk_siswa') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="nikk_siswa" maxlength="16" value="<?php //echo $nikk_siswa ?: $datasiswa->nikk_siswa; ?>">
        </div-->
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Jenis Kelamin<br><small style="color:red"><em>(*)</em></small><?php echo form_error('jenis_kel') ?></label>
        <div class="col-sm-8">
         <label class="radio-inline"><input type="radio" name="jenis_kel" value="1" <?php if(($jenis_kel ?: $datasiswa->jenis_kel)==1) echo "checked"; ?>>Laki-laki</label>
         <label class="radio-inline"><input type="radio" name="jenis_kel" value="0" <?php if(($jenis_kel ?: $datasiswa->jenis_kel)==0) echo "checked"; ?>>Perempuan</label>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Tempat Lahir<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tempat_lahir') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control"  name="tempat_lahir" maxlength="15" value="<?php echo $tempat_lahir ?: $datasiswa->tempat_lahir; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Tanggal Lahir<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tgl_lahir') ?></label>
        <div class="col-sm-8">
         <input type='date' required class="form-control"  name="tgl_lahir" value="<?php echo $tgl_lahir ?: $datasiswa->tgl_lahir; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Agama<br><small style="color:red"><em>(*)</em></small><?php echo form_error('agama') ?></label>
        <div class="col-sm-8">
         <select name="agama" class="form-control">
          <option value="1" <?php if(($agama ?: $datasiswa->agama)==1) echo "selected"; ?>>Islam</option>
          <option value="2" <?php if(($agama ?: $datasiswa->agama)==2) echo "selected"; ?>>Katolik</option>
          <option value="3" <?php if(($agama ?: $datasiswa->agama)==3) echo "selected"; ?>>Protestan</option>
          <option value="4" <?php if(($agama ?: $datasiswa->agama)==4) echo "selected"; ?>>Hindu</option>
          <option value="5" <?php if(($agama ?: $datasiswa->agama)==5) echo "selected"; ?>>Buddha</option>
          <option value="6" <?php if(($agama ?: $datasiswa->agama)==6) echo "selected"; ?>>Konghucu</option>
         </select>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Alamat Lengkap<br><small style="color:red"><em>(*)</em></small><?php echo form_error('alamat') ?></label>
        <div class="col-sm-8">
         <textarea name="alamat" class="form-control" rows="3"><?php echo $alamat ?: $datasiswa->alamat; ?></textarea>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >No Telepon<br><small style="color:red"><em>(*)</em></small><?php echo form_error('no_telp') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control"  name="no_telp" maxlength="13" value="<?php echo $no_telp ?: $datasiswa->no_telp; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Prestasi yang pernah diraih</label>
        <div class="col-sm-8">
         <textarea class="form-control" name="prestasi" rows="2"><?php echo $prestasi ?: $datasiswa->prestasi; ?></textarea>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Jumlah Saudara<br><small style="color:red"><em>(*)</em></small><?php echo form_error('jumlah_saudara') ?></label>
        <div class="col-sm-8">
         <input type='number' required class="form-control" name="jumlah_saudara" value="<?php echo $jumlah_saudara ?: $datasiswa->jumlah_saudara; ?>">
        </div>
       </div>
       <!--div class="form-group">
        <label class="control-label col-sm-4" >Tinggi<br><small style="color:red"><em>(*)</em></small><?php //echo form_error('tinggi') ?></label>
        <div class="col-sm-8">
         <input type='number' required class="form-control" name="tinggi" value="<?php //echo $tinggi ?: $datasiswa->tinggi; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Berat<br><small style="color:red"><em>(*)</em></small><?php //echo form_error('berat') ?></label>
        <div class="col-sm-8">
         <input type='number' required class="form-control" name="berat" value="<?php //echo $berat ?: $datasiswa->berat; ?>">
        </div>
       </div-->
       <div class="form-group">
        <label class="control-label col-sm-4" >Golongan Darah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('goldar') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="goldar" maxlength="2" value="<?php echo $goldar ?: $datasiswa->goldar; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Penyakit</label>
        <div class="col-sm-8">
         <input type='text' class="form-control" name="penyakit" maxlength="25" value="<?php echo $penyakit ?: $datasiswa->penyakit; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Anak ke-<br><small style="color:red"><em>(*)</em></small><?php echo form_error('anak_ke') ?></label>
        <div class="col-sm-8">
         <input type='number' required class="form-control" name="anak_ke" value="<?php echo $anak_ke ?: $datasiswa->anak_ke; ?>">
        </div>
       </div>
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
         <input type='text' class="form-control"  name="nama_ayah" maxlength="25" value="<?php echo $nama_ayah ?: $datasiswa->nama_ayah; ?>">
        </div>
       </div>
      <!--div class="form-group">
        <label class="control-label col-sm-4" >NIK Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nikk_ayah') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="nikk_ayah" maxlength="16" value="<?php echo $nikk_ayah ?: $datasiswa->nikk_ayah; ?>">
        </div>
       </div-->
      <div class="form-group">
        <label class="control-label col-sm-4" >Tempat Lahir Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tplahir_ayah') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="tplahir_ayah" maxlength="25" value="<?php echo $tplahir_ayah ?: $datasiswa->tplahir_ayah; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Tanggal Lahir Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tglahir_ayah') ?></label>
        <div class="col-sm-8">
         <input type='date' class="form-control"  name="tglahir_ayah" value="<?php echo $tglahir_ayah ?: $datasiswa->tglahir_ayah; ?>">
        </div>
       </div>
      <!--div class="form-group">
        <label class="control-label col-sm-4" >Agama Ayah<br><small style="color:red"><em>(*)</em></small><?php //echo form_error('agama_ayah') ?></label>
        <div class="col-sm-8">
         <select name="agama_ayah" class="form-control">
          <option value="1">Islam</option>
          <option value="2">Katolik</option>
          <option value="3">Protestan</option>
          <option value="4">Hindu</option>
          <option value="5">Buddha</option>
          <option value="6">Konghucu</option>
         </select>
        </div>
       </div-->
      <div class="form-group">
        <label class="control-label col-sm-4" >Pekerjaan Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('kerja_ayah') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="kerja_ayah" maxlength="20" value="<?php echo $kerja_ayah ?: $datasiswa->kerja_ayah; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Penghasilan Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('hasil_ayah') ?></label>
        <div class="col-sm-8">
         <input type='number' class="form-control"  name="hasil_ayah" value="<?php echo $hasil_ayah ?: $datasiswa->hasil_ayah; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Nama Ibu<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nama_ibu') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="nama_ibu" maxlength="25" value="<?php echo $nama_ibu ?: $datasiswa->nama_ibu; ?>">
        </div>
       </div>
      <!--div class="form-group">
        <label class="control-label col-sm-4" >NIK Ibu<br><small style="color:red"><em>(*)</em></small><?php //echo form_error('nikk_ibu') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="nikk_ibu" maxlength="25" value="<?php //echo $nikk_ibu ?: $datasiswa->nikk_ibu; ?>">
        </div>
       </div-->
      <div class="form-group">
        <label class="control-label col-sm-4" >Tempat Lahir Ibu<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tplahir_ibu') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="tplahir_ibu" maxlength="25" value="<?php echo $tplahir_ibu ?: $datasiswa->tplahir_ibu; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Tanggal Lahir Ibu<br><small style="color:red"><em>(*)</em></small><?php echo form_error('tglahir_ibu') ?></label>
        <div class="col-sm-8">
         <input type='date' class="form-control"  name="tglahir_ibu" value="<?php echo $tglahir_ibu ?: $datasiswa->tglahir_ibu; ?>">
        </div>
       </div>
      <!--div class="form-group">
        <label class="control-label col-sm-4" >Agama Ibu<br><small style="color:red"><em>(*)</em></small><?php //echo form_error('agama_ibu') ?></label>
        <div class="col-sm-8">
         <select name="agama_ibu" class="form-control">
          <option value="1">Islam</option>
          <option value="2">Katolik</option>
          <option value="3">Protestan</option>
          <option value="4">Hindu</option>
          <option value="5">Buddha</option>
          <option value="6">Konghucu</option>
         </select>
        </div>
       </div-->
      <div class="form-group">
        <label class="control-label col-sm-4" >Pekerjaan Ibu<br><small style="color:red"><em>(*)</em></small><?php echo form_error('kerja_ibu') ?></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="kerja_ibu" maxlength="20" value="<?php echo $kerja_ibu ?: $datasiswa->kerja_ibu; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Penghasilan Ibu<br><small style="color:red"><em>(*)</em></small><?php echo form_error('hasil_ibu') ?></label>
        <div class="col-sm-8">
         <input type='number' class="form-control"  name="hasil_ibu" value="<?php echo $hasil_ibu ?: $datasiswa->hasil_ibu; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Alamat Orang Tua<br><small style="color:red"><em>(*)</em></small><?php echo form_error('alamat_ortu') ?></label>
        <div class="col-sm-8">
         <textarea class="form-control" name="alamat_ortu" rows="3"><?php echo $alamat_ortu ?: $datasiswa->alamat_ortu; ?></textarea>
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Status Orang Tua<br><small style="color:red"><em>(*)</em></small><?php echo form_error('status_ortu') ?></label>
        <div class="col-sm-8">
         <select name="status_ortu" class="form-control" required>
          <option value="1" <?php if(($status_ortu ?: $datasiswa->status_ortu)==1) echo "selected"; ?>>Masih Hidup</option>
          <option value="2" <?php if(($status_ortu ?: $datasiswa->status_ortu)==2) echo "selected"; ?>>Cerai</option>
          <option value="3" <?php if(($status_ortu ?: $datasiswa->status_ortu)==3) echo "selected"; ?>>Keduanya Meninggal</option>
          <option value="4" <?php if(($status_ortu ?: $datasiswa->status_ortu)==4) echo "selected"; ?>>Ayah Meninggal</option>
          <option value="5" <?php if(($status_ortu ?: $datasiswa->status_ortu)==5) echo "selected"; ?>>Ibu Meninggal</option>
         </select>
        </div>
       </div>
     </div>
  </div>
  <div class="panel panel-default">
     <div class="panel-heading">Informasi Tambahan</div>
     <div class="panel-body">
      <div class="form-group">
        <label class="control-label col-sm-4" >Jarak dari Sekolah ke Rumah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('jarak_sekolah') ?></label>
        <div class="col-sm-8">
         <input type='number' class="form-control"  name="jarak_sekolah" value="<?php echo $jarak_sekolah ?: $datasiswa->jarak_sekolah; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Status Tinggal<br><small style="color:red"><em>(*)</em></small><?php echo form_error('status_tinggal') ?></label>
        <div class="col-sm-8">
         <select name="status_tinggal" class="form-control">
          <option value="Milik Sendiri" <?php if(($status_tinggal ?: $datasiswa->status_tinggal)=="Milik Sendiri") echo "selected"; ?>>Milik Sendiri</option>
          <option value="Sewa/Kontrak" <?php if(($status_tinggal ?: $datasiswa->status_tinggal)=="Sewa/Kontrak") echo "selected"; ?> >Sewa/Kontrak</option>
         </select>
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Nama Wali<br><small style="color:gray">Jika Ada</small></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="nama_wali" maxlength="30" value="<?php echo $nama_wali ?: $datasiswa->nama_wali; ?>">
        </div>
       </div>
      <div class="form-group">
        <label class="control-label col-sm-4" >Pekerjaan Wali<br><small style="color:gray">Jika Ada</small></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="kerja_wali" maxlength="20" value="<?php echo $kerja_wali ?: $datasiswa->kerja_wali; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Penghasilan Wali<br><small style="color:gray">Jika Ada</small></label>
        <div class="col-sm-8">
         <input type='text' class="form-control"  name="hasil_wali" maxlength="20" value="<?php echo $hasil_wali ?: $datasiswa->hasil_wali; ?>">
        </div>
       </div>
     </div>
  </div>
  <?php echo form_submit('perbarui','Perbarui Data','class="btn btn-info form-control"'); ?>
  <?php echo form_close(); ?>
 </div>