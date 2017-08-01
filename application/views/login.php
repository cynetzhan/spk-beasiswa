<style>
  body{
   background: url('../bootstrap/images/sek-bg2.jpg');
   background-size: cover;
   }
  .panel{
   background-color: rgba(255, 255, 255, 0.2);
  }
  .panel-footer{
   background-color: rgba(255, 255, 255, 0.2);
  }
</style>
<div class="container">
 <div class="row">
  <div class="col-sm-8" style="font-weight:700">
  <h2>Sistem Pendukung Keputusan Rekomendasi Beasiswa</h2>
  <h3><strong>Sekolah Menengah Pertama Negeri 7 Padang</strong><br><small style="color:#303030">Jl. S. Parman, Padang 25136<br>Telp. (0751) 705 5139</small></h3>
  <img src="<?= base_url('bootstrap/images/padang-fr.png') ?>" style="width:73px;height:86px;margin:20px" alt="logokop"/>
  <img src="<?= base_url('bootstrap/images/kemdikbud-fr.png') ?>" style="width:92px;height:86px;margin:20px" alt="logokop"/>
  <img src="<?= base_url('bootstrap/images/smpniko.png') ?>" style="width:70px;height:86px;margin:20px" alt="logokop"/>
  </div>
  <div class="col-sm-4">
   <div class="panel panel-default">
    <div class="panel-heading">Login Pengguna</div>
    <div class="panel-body">
    <?php echo form_open('Master/autentikasi','name="loginmaster"'); ?>
     <div class="form-group">
      <label class="control-label">Nama Pengguna</label>
      <input type="text" name="username" maxlength="25" class="form-control"/>
     </div>
     <div class="form-group">
      <label class="control-label">Password</label>
      <input type="password" name="password" class="form-control"/>
     </div>
    </div>
    <div class="panel-footer">
     <input type="submit" name="login" class="btn btn-info" value="Login"/>
    </div>
    <?php echo form_close(); ?>
   </div>
  </div>
 </div>
</div>