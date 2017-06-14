
<div class="panel panel-default">
    <div class="panel-heading">Pembobotan</div>
    <div class="panel-body">
        <div class="col-sm-12" id="containerHasil">
            <h3>Prioritas Penerima Beasiswa<br><small>Diurutkan berdasarkan skor pembobotan tertinggi</small></h3>
            <a href="<?= base_url('master/rekapexcel') ?>" class="btn btn-sm btn-info" ><span class="glyphicon glyphicon-download"></span> Unduh Penerima Beasiswa (.xlsx)</a>
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