   <div class="panel panel-default">
    <div class="panel-heading">Pengaturan Kriteria AHP</div>
    <div class="panel-body" style="padding:20px">
    <?php if($this->session->flashdata('isConsistence')===FALSE){ ?>
    <div class="alert alert-danger">
     <strong>Kesalahan!</strong> Nilai Kriteria tidak konsisten. Perubahan nilai terakhir tidak disimpan.
    </div>
    <?php } else if($this->session->flashdata('isConsistence')===TRUE){ ?>
    <div class="alert alert-success">
     <strong>Berhasil!</strong> Nilai Kriteria berhasil disimpan. 
    </div>
    <?php } ?>
    <div class="row">
    <?php 
    $lv=$this->session->user_akses;
    if($lv<3) { ?>
     <div class="col-sm-4">
     <h3>Pengaturan Parameter</h3>
     <?= form_open('master/kriteriaSel','name="critsel"') ?>
     <table class="table table-striped" >
      <tr><th>ID Kriteria</th><th>Keterangan</th><th>Aktif</th></tr>
     <?php
      foreach($kriteria as $kr){
       echo "<tr><td style='vertical-align:middle;text-align:center'>";
       echo $kr->id_kriteria."</td><td style='vertical-align:middle'>".$kr->ket_kriteria."</td>";
       echo "<td style='text-align:center'>";
       echo "<label><input type='checkbox' name='pakai_kriteria[]' value='".$kr->id_kriteria."'";
       echo $kr->pakai_kriteria?" checked ":" ";
       echo "/></label></td></tr>";
      }
      echo "<tr><td colspan='3'>";
      echo "<button type='submit' class='btn btn-sm btn-info form-control'>Ubah Kriteria</button></td></tr>";
      echo "</table></form>";
      echo "</div>"; //form_close()
    } ?>
      <div class="col-sm-8">
          <h3>Panduan Mengisi</h3>
          <div class="well">    
              <ul>
              <?php if($lv>1) {?>
               <li>Isi kolom pada bagian "Nilai Kriteria Berpasangan" dengan nilai prioritas masing-masing pasangan kriteria. Nilai prioritas dapat menggunakan desimal atau nilai pra-normalisasi (e.g. 1/4, 1/9)</li>
               <li>Pengguna hanya perlu mengisi nilai kriteria bagian kanan-atas. Sistem akan mengisi bagian kanan-bawah dan tengah secara otomatis.</li>
               <li>Seluruh nilai kriteria berpasangan akan dinormalkan menjadi angka desimal setelah disubmit</li>
              <?php } 
              if($lv <3){
              ?>
               <li>Pengguna dapat memilih kriteria yang akan dijadikan parameter pembobotan pada bagian "Pengaturan Parameter". Kriteria yang aktif ditandai kotak checklist</li>
               <li>Pengguna harus mengaktifkan kriteria lebih dari dua. Jika kriteria aktif kurang dari tiga, maka pengaturan tidak akan disimpan.</li>
               <li><strong>Apabila kriteria yang aktif diubah, maka seluruh nilai perbandingan kriteria akan dihapus untuk seluruh pengguna. Guru dan Pakar harus mengisi kembali nilai kriteria berpasangan</strong></li>
              <?php } ?>
              <button type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#panduan' ><span class="glyphicon glyphicon-question-sign"></span> Tabel Panduan Penilaian Kriteria</button>
          </div>
          <div id="panduan" class="modal fade" role="dialog">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title"><span class="glyphicon glyphicon-question-sign"></span> Tabel Panduan Penilaian Kriteria</h4>
               </div>
               <div class="modal-body">
                 <p>Masing-masing kolom diisi dengan angka antara 1 s/d 9, dimana angka tersebut adalah nilai dari perbandingan berpasangan antar kriteria.</p>
                 <style>
                  table#panduan_tabel>tbody>tr>td:first-child{text-align:center}
                  .rd{color:rgb(237,28,36);}
                  .bl{color:rgb(0,162,232);}
                 </style>
                 <table class="table table-responsive table-striped" id="panduan_tabel">
                  <thead>
                   <tr>
                    <th>Nilai</th>
                    <th>Keterangan</th>
                   </tr>
                  </thead>
                  <tbody>
                   <tr>
                    <td>1</td>
                    <td>Kedua kriteria <strong>sama pentingnya</strong></td>
                   </tr>
                   <tr>
                    <td>3</td>
                    <td>Salah satu kriteria <strong>sedikit lebih penting</strong></td>
                   </tr>
                   <tr>
                    <td>5</td>
                    <td>Salah satu kriteria <strong>jelas lebih penting</strong></td>
                   </tr>
                   <tr>
                    <td>7</td>
                    <td>Salah satu kriteria <strong>sangat jelas lebih penting</strong></td>
                   </tr>
                   <tr>
                    <td>9</td>
                    <td>Salah satu kriteria <strong>paling lebih penting</strong></td>
                   </tr>
                   <tr>
                    <td>2,4,6,8</td>
                    <td>Digunakan apabila ragu-ragu diantara dua nilai yang berdekatan</strong></td>
                   </tr>
                   <tr>
                    <td>Kebalikan (1/Nilai)</td>
                    <td>Apabila satu kriteria mendapat sebuah nilai, maka kriteria pasangannya mendapat kebalikannya (1/nilai)</td>
                   </tr>
                  </tbody>
                 </table>
                 <h4>Contoh</h4>
                 <div style="text-align:center"><img src="<?= base_url('bootstrap/images/nilai-kr.jpg') ?>" alt="contoh"/></div>
                 <p>Anda mengisi nilai perbandingan kriteria antara <span class='rd'><strong>Jumlah Saudara (JB)</strong></span> dan <span class='bl'><strong>Nilai Rata-Rata (NR)</strong></span>. Apabila <span class='rd'><strong>JB</strong></span> <strong>sedikit lebih penting</strong> dari <span class='bl'><strong>NR</strong></span>, maka kolom diisi nilai <strong>3</strong>. Sebaliknya, apabila <span class='bl'><strong>NR</strong></span> <strong>sedikit lebih penting</strong> dari <span class='rd'><strong>JB</strong></span>, maka diisi dengan <strong>1/3</strong></p>
                 <p><span class="glyphicon glyphicon-info-sign"></span> Perhatikan untuk mengisi nilai kriteria perbandingan berpasangan dengan urutan pasangan <span class='rd'><strong>Baris</strong></span> lalu <span class='bl'><strong>Kolom</strong></span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
               </div>
             </div>
           </div>
         </div>
      </div>
      <?php
      if($lv==3) echo "<div class='col-sm-4'></div>";
      echo "</div>";
      if($lv>1){
      echo "<h3>Pengaturan Nilai Kriteria Berpasangan</h3>";
      if($this->session->flashdata('isConsistence') !== null){
       echo "Konsistensi Nilai Kriteria Baru : ";
       echo "Lambda <strong>".number_format($this->session->flashdata('lambda'),2,'.','.')."</strong>";
       echo " | CI <strong>".number_format($this->session->flashdata('consIndex'),2,'.','.')."</strong>";
       if($this->session->flashdata('isConsistence')===FALSE){
        echo " | CR <strong style='color:red'>".number_format($this->session->flashdata('consRatio') * 100,2,'.','.')."% </strong> <span style='color:red'>(CR diatas 10% tidak dapat diterima)</span>";
       } else if($this->session->flashdata('isConsistence')===TRUE){
         echo " | CR <strong style='color:green'>".number_format($this->session->flashdata('consRatio') * 100,2,'.','.')."% </strong> <span style='color:green'>(CR dibawah 10% dapat diterima)</span>";
       }
      }
      echo form_open("master/ahpUpdate","name='ahpcrit' class='form-horizontal'");
      echo "<table class='table table-bordered'>";
      echo "<thead><tr><th><span class='glyphicon glyphicon-remove'></span></th>";
      foreach($kriteriaMatrix as $kr){
       echo "<th>".$kr->ket_kriteria."</th>";
      }
      echo "</tr></thead>";
      $baris=0;
      foreach($kriteriaMatrix as $kr){
       $key = array_keys($pK);
       echo "<tr><td>".$kr->ket_kriteria."</td>";
       for($j=0;$j<$jumlahKriteria;$j++){
        echo "<td><input type='text' name='krit[$baris][$j]' class='form-control' ";
        echo(($baris>$j)?"value='".number_format($pK[$kr->id_kriteria][$key[$j]],2,'.',',') ."' disabled":""); // disabled karena pair kiri-bawah
        echo(($baris==$j)?"value='".number_format($pK[$kr->id_kriteria][$key[$j]],2,'.',',') ."' disabled":""); // disabled karena pair sesamanya
        echo(($baris<$j)?"value='".number_format($pK[$kr->id_kriteria][$key[$j]],2,'.',',') ."'":"");
        echo "/></td>";
       }
       echo "</tr>";
       $baris++;
      }
      echo "<tr><td colspan='".($jumlahKriteria+1)."'><input type='submit' name='submitahp' class='btn btn-sm btn-info' value='Terapkan' /></td></tr>";
      echo "</table></form>";
      }
     ?>
    </div>
   </div>