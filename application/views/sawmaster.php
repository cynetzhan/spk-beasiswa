   <div class="panel panel-default">
    <div class="panel-heading">Pembobotan SAW</div>
    <div class="panel-body">
      <h3>Nilai Eigen Prioritas<br><small>Diurutkan berdasarkan nilai rata-rata eigen tertinggi</small></h3>
      <table class="table table-striped" style="text-align:center">
          <thead>
          <tr>
              <th>Kriteria</th>
              <th>Pakar 1 (Komite)</th>
              <th>Pakar 2 (Kepala Sekolah)</th>
              <th>Pakar 3 (Dinas Pendidikan)</th>
              <th>Rata-Rata</th>
          </tr>
          </thead>
          <?php 
           foreach($eigenkrit as $ei){
               echo "<tr>";
               echo "<th>".$ei->ket_kriteria."</th>";
               echo "<td>".number_format($ei->eigen_krit_kom,4)."</td>";
               echo "<td>".number_format($ei->eigen_krit_kes,4)."</td>";
               echo "<td>".number_format($ei->eigen_krit_dpk,4)."</td>";
               echo "<td>".number_format($ei->eirata,4)."</td>";
               echo "</tr>";
           }
          ?>
      </table>
      <h3>Pengaturan Pembobotan</h3>
      <?php 
      echo form_open("master/sawUpdate","name='sawset' class='form-horizontal'");
      ?>
      <div class="form-group">
          <label class="control-label col-sm-4">Eigen Untuk Pembobotan</label>
          <div class="col-sm-8">
          <select name="eigenval" class="form-control">
              <option value="eigen_krit_kom" <?php echo ($eigenkolom!="eigen_krit_kom")?:"selected"; ?>>Komite</option>
              <option value="eigen_krit_kes" <?php echo ($eigenkolom!="eigen_krit_kes")?:"selected"; ?>>Kepala Sekolah</option>
              <option value="eigen_krit_dpk" <?php echo ($eigenkolom!="eigen_krit_dpk")?:"selected"; ?>>Dinas Pendidikan</option>
              <option value="eirata" <?php echo ($eigenkolom!="eirata")?:"selected"; ?>>Rata-Rata Eigen Seluruh Pakar</option>
          </select>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-sm-4"></label>
          <div class="col-sm-8">
           <input type="submit" class="btn btn-primary" name="submit" value="Terapkan"/>
          </div>
      </div>
      </form>
    </div>
   </div>
        