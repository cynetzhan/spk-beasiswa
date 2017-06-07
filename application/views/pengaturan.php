   <div class="panel panel-default">
    <div class="panel-heading">Pengaturan</div>
    <div class="panel-body">
    <?php if($this->session->user_akses==1){ ?>
    <h4>Sistem</h4>
     <?php echo form_open("master/actionaturan", "class='form-horizontal'"); ?>
     <input type="hidden" name="id_thn_ajar" value="<?php echo $pengaturan->id_thn_ajar; ?>"/>
     <div class="form-group">
      <label class="control-label col-sm-4" >Tanggal Pendaftaran Online<br><small style="color:grey"><em>Mengatur periode tanggal pendaftaran online. Isi dengan format <strong>yyyy-mm-dd</strong> Contoh: 2017-05-25</em></small></label>
      <div class="col-sm-8">
       <input type='date' required class="form-control" name="tgl_daftar_buka" value="<?php echo $pengaturan->tgl_daftar_buka; ?>">sampai dengan
       <input type='date' required class="form-control" name="tgl_daftar_tutup" value="<?php echo $pengaturan->tgl_daftar_tutup; ?>">
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-sm-4" >Tutup Pendaftaran Sementara<br><small style="color:grey"><em>Hidupkan apabila diperlukan untuk menutup sistem pendaftaran sementara </em></small></label>
      <div class="col-sm-8">
       <div class="radio-inline">
        <label><input type="radio" name="tutup_daftar" value="1" <?php if($pengaturan->tutup_daftar) echo "checked"; ?>>Hidup</label>
       </div>
       <div class="radio-inline">
        <label><input type="radio" name="tutup_daftar" value="0" <?php if(!$pengaturan->tutup_daftar) echo "checked"; ?>>Mati</label>
       </div>
      </div>
     </div>
     <div class="form-group">
      <div class="col-sm-12">
       <input type="submit" name="pengaturansb" class="btn btn-sm btn-info" style="float:right" value="Terapkan"/>
      </div>
     </div>
     <?php echo form_close(); ?>
    <?php } ?>
     <h4>Akun Login</h4>
     <table class="table table-responsive table-bordered">
      <thead>
       <tr>
        <th>Nama Akun</th>
        <th>Level Akun</th>
        <th>Aksi</th>
       </tr>
      </thead>
      <tbody>
       <?php foreach($akun as $ak){ ?>
       <tr>
        <td><?php echo $ak->username; ?></td>
        <td><?php echo akunlv($ak->level); ?></td>
        <td><a href="<?php echo base_url('master/chpassword/'.$ak->id); ?>">Ganti Password</a></td>
       </tr>
       <?php } ?>
      </tbody>
     </table>
    </div>
   </div>