<div class="panel panel-default">
    <div class="panel-heading">Form Siswa</div>
    <div class="panel-body">
     <?= form_open('master/'.$aksi,'name="formsiswa" class="form-horizontal"') ?>
      <div class="form-group">
        <label class="control-label col-sm-4" >NIS<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nis_siswa') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="nis_siswa" maxlength="8" value="<?php echo $nis_siswa; ?>"/>
         <input type="hidden" name="nis_siswa_old" value="<?= $nis_siswa ?>"/>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Nama Lengkap<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nama_siswa') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="nama_siswa" maxlength="30" value="<?php echo $nama_siswa; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Kelas<br><small style="color:red"><em>(*)</em></small><?php echo form_error('kls_siswa') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="kls_siswa" maxlength="4" value="<?php echo $kls_siswa; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Alamat<br><small style="color:red"><em>(*)</em></small><?php echo form_error('alamat_siswa') ?></label>
        <div class="col-sm-8">
         <textarea required class="form-control" name="alamat_siswa"><?php echo $alamat_siswa; ?></textarea>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Nama Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nama_ayah_siswa') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="nama_ayah_siswa" maxlength="35" value="<?php echo $nama_ayah_siswa; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Pendidikan Terakhir Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('pnd_ayah_siswa') ?></label>
        <div class="col-sm-8">
         <select name="pnd_ayah_siswa" class="form-control" required>
             <option value="1" <?= ($pnd_ayah_siswa!=1)?:"selected" ?> >SD</option>
             <option value="2" <?= ($pnd_ayah_siswa!=2)?:"selected" ?> >SMP</option>
             <option value="3" <?= ($pnd_ayah_siswa!=3)?:"selected" ?> >SMA</option>
             <option value="4" <?= ($pnd_ayah_siswa!=4)?:"selected" ?> >D1</option>
             <option value="5" <?= ($pnd_ayah_siswa!=5)?:"selected" ?> >D2</option>
             <option value="6" <?= ($pnd_ayah_siswa!=6)?:"selected" ?> >D3</option>
             <option value="7" <?= ($pnd_ayah_siswa!=7)?:"selected" ?> >S1</option>
             <option value="8" <?= ($pnd_ayah_siswa!=8)?:"selected" ?> >S2</option>
             <option value="9" <?= ($pnd_ayah_siswa!=9)?:"selected" ?> >S3</option>
         </select>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Pekerjaan Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('krj_ayah_siswa') ?></label>
        <div class="col-sm-8">
         <select name="krj_ayah_siswa" class="form-control">
             <option value="1" <?= ($krj_ayah_siswa!=1)?:"selected" ?> >Polisi</option>
             <option value="2" <?= ($krj_ayah_siswa!=2)?:"selected" ?> >Tentara</option>
             <option value="3" <?= ($krj_ayah_siswa!=3)?:"selected" ?> >Pegawai BUMN</option>
             <option value="4" <?= ($krj_ayah_siswa!=4)?:"selected" ?> >Pengacara</option>
             <option value="5" <?= ($krj_ayah_siswa!=5)?:"selected" ?> >Pegawai Negeri Sipil</option>
             <option value="6" <?= ($krj_ayah_siswa!=6)?:"selected" ?> >Konsultan</option>
             <option value="7" <?= ($krj_ayah_siswa!=7)?:"selected" ?> >Wiraswasta</option>
             <option value="8" <?= ($krj_ayah_siswa!=8)?:"selected" ?> >Pegawai Swasta</option>
             <option value="9" <?= ($krj_ayah_siswa!=9)?:"selected" ?> >Supir</option>
             <option value="10" <?= ($krj_ayah_siswa!=10)?:"selected" ?> >Buruh</option>
             <option value="11" <?= ($krj_ayah_siswa!=11)?:"selected" ?> >Penjahit</option>
             <option value="12" <?= ($krj_ayah_siswa!=12)?:"selected" ?> >Petani</option>
             <option value="13" <?= ($krj_ayah_siswa!=13)?:"selected" ?> >Nelayan</option>
             <option value="14" <?= ($krj_ayah_siswa!=14)?:"selected" ?> >Supir Angkutan Umum (Ojek/Oplet)</option>
             <option value="15" <?= ($krj_ayah_siswa!=15)?:"selected" ?> >Pedagang Kecil</option>
         </select>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Penghasilan Ayah<br><small style="color:red"><em>(*)</em></small><?php echo form_error('hasil_ayah_siswa') ?></label>
        <div class="col-sm-8">
         <select name="hasil_ayah_siswa" class="form-control">
             <option value="1" <?= ($hasil_ayah_siswa!=1)?:"selected" ?> >100.000 s/d 900.000</option>
             <option value="2" <?= ($hasil_ayah_siswa!=2)?:"selected" ?> >1.000.000 s/d 1.900.000</option>
             <option value="3" <?= ($hasil_ayah_siswa!=3)?:"selected" ?> >2.000.000 s/d 2.900.000</option>
             <option value="4" <?= ($hasil_ayah_siswa!=4)?:"selected" ?> >3.000.000 s/d 4.000.000</option>
             <option value="5" <?= ($hasil_ayah_siswa!=5)?:"selected" ?> > 4.000.000</option>
         </select>
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Jumlah Saudara<br><small style="color:red"><em>(*)</em></small><?php echo form_error('jmsdr_siswa') ?></label>
        <div class="col-sm-8">
         <input type='text' required class="form-control" name="jmsdr_siswa" maxlength="2" value="<?php echo $jmsdr_siswa; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Nilai Rata-Rata<br><small style="color:red"><em>(*)</em></small><?php echo form_error('nrata_siswa') ?></label>
        <div class="col-sm-8">
         <input type='number' required class="form-control" name="nrata_siswa" maxlength="5" value="<?php echo $nrata_siswa; ?>">
        </div>
       </div>
       <div class="form-group">
        <label class="control-label col-sm-4" >Status Orang Tua<br><small style="color:red"><em>(*)</em></small><?php echo form_error('status_siswa') ?></label>
        <div class="col-sm-8">
         <select name="status_siswa"  class="form-control">
             <option value="0" <?= ($status_siswa!=0)?:"selected" ?> >Masih Hidup</option>
             <option value="1" <?= ($status_siswa!=1)?:"selected" ?> >Sudah Meninggal</option>
         </select>
        </div>
       </div>
       <div class="form-group">
           <div class="col-sm-4"></div>
           <div class="col-sm-8">
               <button type="submit" name="submitform" class="btn btn-sm btn-info"><?= $tombol ?></button>
           </div>
       </div>
     </form>
    </div>
</div>