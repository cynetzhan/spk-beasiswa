   <div class="panel panel-default">
    <div class="panel-heading">Pengaturan Kriteria AHP</div>
    <div class="panel-body">
     <div class="col-sm-4">
     <?= form_open('master/kriteriaSel','name="critsel"') ?>
     <table class="table table-striped" >
      <tr><th>ID Kriteria</th><th>Keterangan</th><th>Aktif</th></tr>
     <?php
      foreach($kriteria as $kr){
       echo "<tr><td>";
       echo $kr->id_kriteria."</td><td>".$kr->ket_kriteria."</td>";
       echo "<td style='text-align:center'><div class='checkbox'>";
       echo "<label><input type='checkbox' name='pakai_kriteria[]' value='".$kr->id_kriteria."'";
       echo $kr->pakai_kriteria?" checked ":" ";
       echo "/></label></td></tr>";
      }
      echo "<tr><td colspan='3'>";
      echo "<button type='submit' class='btn btn-sm btn-info form-control'>Ubah Kriteria</button></td></tr>";
      echo "</table></div>";
      echo "</form>"; //form_close()
      ?>
      <div class="col-sm-8">
          <div class="well">
              <h3>Panduan Mengisi</h3>
              <ul>
               <li>Isi kolom dengan nilai kriteria berpasangan. Nilai kriteria berpasangan dapat menggunakan desimal atau nilai pra-normalisasi (e.g. 1/4, 1/9)</li>
               <li>Pengguna hanya perlu mengisi nilai kriteria bagian kanan-atas. Sistem akan mengisi bagian kanan-bawah dan tengah secara otomatis.</li>
               <li>Seluruh nilai kriteria berpasangan akan dinormalkan menjadi angka desimal setelah disubmit</li>
               <li><strong>Apabila kriteria yang aktif diubah, maka seluruh nilai perbandingan kriteria akan dihapus untuk seluruh pengguna.</strong></li>
          </div>
      </div>
      <?php
      echo form_open("master/ahpUpdate","name='ahpcrit' class='form-horizontal'");
      echo "<table class='table table-bordered'>";
      echo "<thead><tr><th><span class='glyphicon glyphicon-remove'></span></th>";
      foreach($kriteriaMatrix as $kr){
       echo "<th>".$kr->id_kriteria."</th>";
      }
      echo "</tr></thead>";
      $baris=0;
      foreach($kriteriaMatrix as $kr){
       $key = array_keys($pK);
       echo "<tr><td>".$kr->id_kriteria."</td>";
       for($j=0;$j<$jumlahKriteria;$j++){
        echo "<td><input type='text' name='krit[$baris][$j]' class='form-control' ";
        echo(($baris>$j)?"value='".$pK[$kr->id_kriteria][$key[$j]]."' disabled":""); // disabled karena pair kiri-bawah
        echo(($baris==$j)?"value='".$pK[$kr->id_kriteria][$key[$j]]."' disabled":""); // disabled karena pair sesamanya
        echo(($baris<$j)?"value='".$pK[$kr->id_kriteria][$key[$j]]."'":"");
        echo "/></td>";
       }
       echo "</tr>";
       $baris++;
      }
      echo "<tr><td colspan='".($jumlahKriteria+1)."'><input type='submit' name='submitahp' class='btn btn-sm btn-info' value='Terapkan' /></td></tr>";
      echo "</table>";
     ?>
     </form>
    </div>
   </div>