<div class="container">
 <div class="row">
  <div class="col-sm-4 col-sm-offset-4">
   <div class="panel panel-default">
    <div class="panel-heading">Login Administrator</div>
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