 <style>
  th{text-align:center}
  table>thead>tr>th{vertical-align:middle}
 </style>
   <div class="panel panel-default">
    <div class="panel-heading">Pembobotan SAW</div>
    <div class="panel-body">
      <h3>Nilai Eigen Prioritas<br><small>Diurutkan berdasarkan nilai rata-rata eigen tertinggi</small></h3>
      <table class="table table-bordered" style="text-align:center">
          <thead>
          <tr>
              <th rowspan="2">Pakar</th>
              <th colspan="<?= count($kriterialist); ?>">Kriteria</th>
          </tr>
          <tr>
              <?php foreach($kriterialist as $kr){
                  echo "<th>".$kr->ket_kriteria."</th>";
              } ?>
          </tr>
          </thead>
          <?php 
           $jumlah_eigen=array();
           foreach($eigenkrit as $ei){
               echo "<tr>";
               echo "<td>".$ei['username']."</td>";
               foreach($kriterialist as $kr){
                echo "<td>".number_format($ei[$kr->id_kriteria]['value_eigen'],4)."</td>";
                $jumlah_eigen[$kr->id_kriteria][]=$ei[$kr->id_kriteria]['value_eigen'];
               }
               echo "</tr>";
           }
          ?>
          <tfoot>
            <tr>
                <th>Rata-rata</th>
                <?php foreach($kriterialist as $kr){
                    if(isset($jumlah_eigen[$kr->id_kriteria])){
                     echo "<td>".number_format(array_sum($jumlah_eigen[$kr->id_kriteria])/count($eigenkrit),4)."</td>";
                    } else {
                     echo "<td>0</td>";
                    }
                } ?>
            </tr>
          </tfoot>
      </table>
      <!--h3>Pengaturan Pembobotan</h3>
      <?php 
      //echo form_open("master/sawUpdate","name='sawset' class='form-horizontal'");
      ?>
      <div class="form-group">
          <label class="control-label col-sm-4">Eigen Untuk Pembobotan</label>
          <div class="col-sm-8">
          <select name="eigenval" class="form-control">
              <?php //foreach($eigenkrit as $eg){
                  //echo "<option value='".$eg['id_user']."'";
                  //echo ($eigenkolom!=$eg['id_user'])?:" selected ";
                  //echo ">".$eg['username']."</option>";
              //} ?>
              <option value="eirata" <?php //echo ($eigenkolom!="eirata")?:"selected"; ?>>Rata-Rata Eigen Seluruh Pakar</option>
          </select>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-sm-4"></label>
          <div class="col-sm-8">
           <input type="submit" class="btn btn-primary" name="submit" value="Terapkan"/>
          </div>
      </div>
      </form-->
    </div>
   </div>
        