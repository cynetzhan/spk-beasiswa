   <div class="panel panel-default">
    <div class="panel-heading">Kelola Pengguna</div>
    <div class="panel-body">
     <h4>Akun Login
     <a class="btn btn-sm btn-info" href="<?= base_url('master/tambahuser') ?>" style="float:right"><span class="glyphicon glyphicon-plus"></span> Tambah Pengguna</a>
     </h4>
     <br>
     <table class="table table-responsive table-bordered">
      <thead>
       <tr>
        <th>Nama Akun</th>
        <th>Level Akun</th>
        <th>Aksi</th>
       </tr>
      </thead>
      <tbody>
       <?php foreach($akun as $ak){ ?>
       <tr>
        <td><?php echo $ak->username; ?></td>
        <td><?php echo akunlv($ak->level); ?></td>
        <td><a href="<?php echo base_url('master/chpassword/'.$ak->id_user); ?>">Ganti Password</a> | <a href="<?= base_url('master/aksihapususer/'.$ak->id_user); ?>" onclick="return confirm('Hapus pengguna <?= $ak->username ?>?')">Hapus</a></td>
       </tr>
       <?php } ?>
      </tbody>
     </table>
    </div>
   </div>