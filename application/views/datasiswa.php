<div class="panel panel-default">
 <div class="panel-heading">Data Siswa</div>
 <div class="panel-body">
  
    <a href="<?= base_url('master/tambahsiswa') ?>" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Tambah Siswa</a>
  
  <table class="table table-responsive table-bordered" id="datasiswa">
   <thead>
    <tr>
     <th>No</th>
     <th>Nama</th>
     <th>Kelas</th>
     <th>Nama Ayah</th>
     <th>Pendidikan Terakhir Ayah</th>
     <th>Pekerjaan Ayah</th>
     <th>Penghasilan Ayah</th>
     <th>Status Orang Tua</th>
     <th>Aksi</th>
    </tr>
   </thead>
   <tbody>
   <?php foreach($datasiswa as $dt) { ?>
    <tr>
     <td><?php echo $dt->nis_siswa; ?></td>
     <td><?php echo $dt->nama_siswa; ?></td>
     <td><?php echo $dt->kls_siswa; ?></td>
     <td><?php echo $dt->nama_ayah_siswa; ?></td>
     <td><?php echo tr_pnd($dt->pnd_ayah_siswa,true) ?></td>
     <td><?php echo tr_kerja($dt->krj_ayah_siswa,true) ?></td>
     <td><?php echo tr_hasil($dt->hasil_ayah_siswa) ?></td>
     <td><?php echo tr_status($dt->status_siswa); ?></td>
     <td><a href="<?php echo base_url('master/editsiswa/'.$dt->nis_siswa); ?>">Ubah</a></td>
    </tr>
   <?php } ?>
   </tbody>
  </table>
 </div>
</div>
<script src="<?php echo base_url('bootstrap/datatables/jquery.dataTables.js');?>"></script>
<script src="<?php echo base_url('bootstrap/datatables/dataTables.bootstrap.js');?>"></script>
<script>
    $(document).ready(function () {
      $("#datasiswa").DataTable();
    });
    
</script>