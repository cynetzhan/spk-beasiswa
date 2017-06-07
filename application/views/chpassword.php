   <div class="panel panel-default">
    <div class="panel-heading">Ganti Password</div>
    <div class="panel-body">
     <?php if(!$granted) { ?>
     <h4>Anda tidak memiliki hak untuk mengakses menu ini</h4>
     <?php } else { 
     echo form_open('master/chpassaction','class="form-horizontal"');
     ?>
     <div class="form-group">
      <label class="control-label col-sm-4">Password Anda</label>
      <div class="col-sm-8">
       <input type="password" name="pass_user_logged_in" class="form-control">
       <input type="hidden" name="user_logged_in" value="<?php echo $user_logged_in; ?>"/>
      </div>
     </div>
     <hr>
     <div class="form-group">
      <label class="control-label col-sm-4">Password Baru<br><small style="color:gray">untuk <?php echo $usr_chpass; ?></small></label>
      <div class="col-sm-8">
       <input type="hidden" name="id_chpass" value="<?php echo $id_chpass; ?>"/>
       <input type="password" name="newpass" class="form-control">
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-sm-4">Konfirmasi Password Baru</label>
      <div class="col-sm-8">
       <input type="password" name="confnewpass" class="form-control">
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-sm-8 col-sm-offset-4"><input type="submit" name="chpass" class="btn btn-sm btn-info" value="Ganti Password"/></label>
     </div>
     <?php echo form_close();
     } ?>
    </div>
   </div>