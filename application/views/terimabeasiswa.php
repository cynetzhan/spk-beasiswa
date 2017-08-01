
<div class="panel panel-default">
    <div class="panel-heading">Pembobotan</div>
    <div class="panel-body">
        <div class="col-sm-12" id="containerHasil">
            <h3>Prioritas Penerima Beasiswa<br><small>Diurutkan berdasarkan skor pembobotan tertinggi</small></h3>
            <form name="unduhlaporan" method="post" class="form-horizontal" action="<?= base_url('master/unduhRekap'); ?>" style="width:300px">
            <strong>Unduh Laporan</strong>
             <select name="limit" class="form-control">
              <option value="0">Seluruhnya</option>
              <option value="10">10</option>
              <option value="20">20</option>
              <option value="50">50</option>
              <option value="100">100</option>
             </select>
             <button type="submit" name="format" value="PDF" class="btn btn-sm btn-info">Format PDF</button>
             <button type="submit" name="format" value="EXCEL" class="btn btn-sm btn-info">Format Excel</button>
            </form>
            <!--a href="<?= base_url('master/rekapexcel') ?>" class="btn btn-sm btn-info" ><span class="glyphicon glyphicon-download"></span> Unduh Penerima Beasiswa (.xlsx)</a-->
            <br>
            <table class="table table-responsive table-bordered" id="hasilbobot">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Skor Hasil</th>
                    </tr>
                </thead>
                <tbody id="isihasilbobot">
                    <?php
                    foreach($siswa as $sw){
                       echo "<tr>";
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
        table.column('2:visible').order('desc').draw(); 
    });
</script>