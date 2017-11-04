
<div class="panel panel-default">
    <div class="panel-heading">Penerima Beasiswa</div>
    <div class="panel-body">
        <div class="col-sm-12" id="containerHasil">
            <h3>Prioritas Penerima Beasiswa<br><small>Diurutkan berdasarkan skor pembobotan tertinggi</small></h3>
            <form name="unduhlaporan" method="post" class="form-horizontal" action="<?= base_url('master/unduhRekap'); ?>" style="width:300px">
            <strong>Unduh Laporan</strong>
             <select name="limit" class="form-control">
              <option value="0">Seluruhnya</option>
              <?php for($i=0;$i<=200;$i+=10){ ?>
               <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php } ?>
             </select>
             <button type="submit" name="format" value="PDF" class="btn btn-sm btn-info">Format PDF</button>
             <button type="submit" name="format" value="EXCEL" class="btn btn-sm btn-info">Format Excel</button>
            </form>
            <!--a href="<?= base_url('master/rekapexcel') ?>" class="btn btn-sm btn-info" ><span class="glyphicon glyphicon-download"></span> Unduh Penerima Beasiswa (.xlsx)</a-->
            <br>
            <table class="table table-responsive table-bordered" id="hasilbobot">
                <thead>
                    <tr>
                        <th>Rank #</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Skor Hasil</th>
                    </tr>
                </thead>
                <tbody id="isihasilbobot">
                    <?php
                    $i = 1;
                    foreach($siswa as $sw){
                       echo "<tr>";
                       echo "<td>".$i++."</td>";
                       echo "<td>".$sw->nis_siswa."</td>";
                       echo "<td>".$sw->nama_siswa."</td>";
                       echo "<td>".number_format($sw->value_weighted,3)."</td>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="<?= base_url('bootstrap/js/jquery.js'); ?>"></script>
<script src="<?= base_url('bootstrap/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('bootstrap/js/dataTables.bootstrap.min.js'); ?>"></script>
<script>
    $(document).ready(function() {
      var table = $("#hasilbobot").DataTable({
          "lengthChange":false
      });
        table.column('3:visible').order('desc').draw(); 
    });
</script>