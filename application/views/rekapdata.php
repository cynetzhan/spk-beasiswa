   <div class="panel panel-default">
    <div class="panel-heading">Rekap Data</div>
    <div class="panel-body">
     <?php echo form_open('master/rekapExcel','class="form-horizontal"'); ?>
      <div class="form-group">
       <label class="control-label col-sm-4">Tahun Pendaftaran</label>
       <div class="col-sm-8">
       <select name="id_thn_ajar" class="form-control">
        <?php foreach($thnajar as $dt){
        echo '<option value="'.$dt->id_thn_ajar.'">'.$dt->tahun_ajar.'</option>'; } ?>
       </select>
       </div>
      </div>
      <div class="form-group">
       <label class="control-label col-sm-4">Status Pendaftar</label>
       <div class="col-sm-8">
       <select name="status" class="form-control">
        <option value="0">Semua</option>
        <option value="1">Menunggu</option>
        <option value="2">Lulus Administrasi</option>
        <option value="5">Tidak Lulus Administrasi</option>
        <option value="3">Diterima</option>
        <option value="4">Ditolak</option>
       </select>
       </div>
      </div>
      <div class="form-group">
       <label class="control-label col-sm-8 col-sm-offset-4">
       <input type="submit" class="btn btn-sm btn-info" value="Unduh Rekap Data">
       </label>
      </div>
     <?php echo form_close(); ?>
    </div>
   </div>
