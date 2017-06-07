<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Data_pendaftar Read</h2>
        <table class="table">
	    <tr><td>Tgl Daftar</td><td><?php echo $tgl_daftar; ?></td></tr>
	    <tr><td>No Daftar</td><td><?php echo $no_daftar; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Jenis Kel</td><td><?php echo $jenis_kel; ?></td></tr>
	    <tr><td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td></tr>
	    <tr><td>Tgl Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
	    <tr><td>Agama</td><td><?php echo $agama; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>No Telp</td><td><?php echo $no_telp; ?></td></tr>
	    <tr><td>No Hp</td><td><?php echo $no_hp; ?></td></tr>
	    <tr><td>Anak Ke</td><td><?php echo $anak_ke; ?></td></tr>
	    <tr><td>Nama Ortu</td><td><?php echo $nama_ortu; ?></td></tr>
	    <tr><td>Alamat Ortu</td><td><?php echo $alamat_ortu; ?></td></tr>
	    <tr><td>Agama Ortu</td><td><?php echo $agama_ortu; ?></td></tr>
	    <tr><td>Kerja Ortu</td><td><?php echo $kerja_ortu; ?></td></tr>
	    <tr><td>Hasil Ortu</td><td><?php echo $hasil_ortu; ?></td></tr>
	    <tr><td>Nama Wali</td><td><?php echo $nama_wali; ?></td></tr>
	    <tr><td>Alamat Wali</td><td><?php echo $alamat_wali; ?></td></tr>
	    <tr><td>Kerja Wali</td><td><?php echo $kerja_wali; ?></td></tr>
	    <tr><td>Hub Wali</td><td><?php echo $hub_wali; ?></td></tr>
	    <tr><td>No Hp Wali</td><td><?php echo $no_hp_wali; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Id Thn Ajar</td><td><?php echo $id_thn_ajar; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pendaftar') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>