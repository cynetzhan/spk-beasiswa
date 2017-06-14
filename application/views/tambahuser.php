   <div class="panel panel-default">
    <div class="panel-heading">Kelola Pengguna</div>
    <div class="panel-body">
     <?php if(!$granted) { ?>
     <h4>Anda tidak memiliki hak untuk mengakses menu ini</h4>
     <?php } else { 
     echo form_open('master/aksitambahuser','class="form-horizontal"');
     ?>
     <div class="form-group">
      <label class="control-label col-sm-4">Nama Pengguna</label>
      <div class="col-sm-8">
       <input type="text" name="username" maxlength="10" class="form-control">
      </div>
     </div>     
     <div class="form-group">
      <label class="control-label col-sm-4">Password</label>
      <div class="col-sm-8">       
       <input type="password" name="password" class="form-control">
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-sm-4">Level Pengguna</label>
      <div class="col-sm-8">
       <select name="level" class="form-control">
        <option value="1">Administrator</option>
        <option value="2">Guru</option>
        <option value="3">Pakar</option>
       </select>
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-sm-8 col-sm-offset-4"><input type="submit" name="useract" class="btn btn-sm btn-info" value="Submit"/></label>
     </div>
     <?php echo form_close();
     } ?>
    </div>
   </div>