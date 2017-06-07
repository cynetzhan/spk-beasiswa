<div class="panel panel-default">
    <div class="panel-heading">Pembobotan</div>
    <div class="panel-body">
        <div class="col-sm-6">
        <h3>Ringkasan Pengaturan</h3>
        <table class="table table-striped">
            <tr>
                <th>Jumlah Kriteria</th>
                <td><?= $jumlahkr ?></td>
            </tr>
            <tr>
                <th>Jumlah Siswa</th>
                <td><?= $jumlahsw ?></td>
            </tr>
            <tr>
                <th>Pakar Yang Dipakai</th>
                <td><?= pakar($pakar) ?></td>
            </tr>
            <tr>
                <th>Terakhir Dijalankan</th>
                <td><?= $lastrun?:"Belum Pernah Dijalankan" ?></td>
            </tr>
        </table>
        </div>
        <div class="col-sm-6">
            <h3>Proses Pembobotan</h3>
            <div class="well" style="text-align:center">
                <button type="button" class="btn btn-primary" id="weightproses">Jalankan Proses Pembobotan</button><h4>&nbsp;</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:100%" id="prosespersen" >Siap Dijalankan</div>
                </div>
                <div id="statusbobot">Siap Dijalankan</div>
            </div>
        </div>
        <div class="col-sm-12" id="containerHasil" style="display:none">
            <h3>Hasil Pembobotan <a href="#" class="btn btn-primary" style="float:right">Lihat Seluruh Hasil</a></h3>
            <table class="table table-responsive table-bordered" id="hasilbobot">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Skor Hasil</th>
                    </tr>
                </thead>
                <tbody id="isihasilbobot">
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="<?= base_url('bootstrap/js/jquery.js'); ?>"></script>
<script src="<?= base_url('bootstrap/js/jquery.dataTables.min.js'); ?>"></script>
<script>
    var jumlahMurid = <?= $jumlahsw ?>;
    var limit = 50;
    var proses = 0;
    $(document).ready(function() {
        $("button#weightproses").click(function() {
            var persen = 0;
            $("button#weightproses").attr('disabled','disabled');
            $("#statusbobot").html("Memulai Pembobotan...");
            $("#prosespersen").css('width',persen+'%');
            for(i=0;i<jumlahMurid;i+=limit){
             $.post("<?php echo base_url('master/prosesBobot');?>",{'limit':limit,'start':i},function(res) {
                 proses+=parseInt(res);
                $("#statusbobot").html(proses+" dari "+jumlahMurid+" siswa");
                persen = Math.round((proses/jumlahMurid) *100);
                $("#prosespersen").css('width',persen+'%');
                $("#prosespersen").html(persen+'%');
             });             
            }
            $.post("<?php echo base_url('master/hasilbobot');?>",{},function(res) {
                $("#containerHasil").css("display","block");
                $("#isihasilbobot").html(res);
            });
        });
            
    });
    
</script>