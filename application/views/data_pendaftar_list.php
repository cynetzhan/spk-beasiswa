<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Data_pendaftar List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('pendaftar/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Tgl Daftar</th>
		    <th>No Daftar</th>
		    <th>Nama</th>
		    <th>Jenis Kel</th>
		    <th>Tempat Lahir</th>
		    <th>Tgl Lahir</th>
		    <th>Agama</th>
		    <th>Alamat</th>
		    <th>No Telp</th>
		    <th>No Hp</th>
		    <th>Anak Ke</th>
		    <th>Nama Ortu</th>
		    <th>Alamat Ortu</th>
		    <th>Agama Ortu</th>
		    <th>Kerja Ortu</th>
		    <th>Hasil Ortu</th>
		    <th>Nama Wali</th>
		    <th>Alamat Wali</th>
		    <th>Kerja Wali</th>
		    <th>Hub Wali</th>
		    <th>No Hp Wali</th>
		    <th>Status</th>
		    <th>Id Thn Ajar</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($pendaftar_data as $pendaftar)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $pendaftar->tgl_daftar ?></td>
		    <td><?php echo $pendaftar->no_daftar ?></td>
		    <td><?php echo $pendaftar->nama ?></td>
		    <td><?php echo $pendaftar->jenis_kel ?></td>
		    <td><?php echo $pendaftar->tempat_lahir ?></td>
		    <td><?php echo $pendaftar->tgl_lahir ?></td>
		    <td><?php echo $pendaftar->agama ?></td>
		    <td><?php echo $pendaftar->alamat ?></td>
		    <td><?php echo $pendaftar->no_telp ?></td>
		    <td><?php echo $pendaftar->no_hp ?></td>
		    <td><?php echo $pendaftar->anak_ke ?></td>
		    <td><?php echo $pendaftar->nama_ortu ?></td>
		    <td><?php echo $pendaftar->alamat_ortu ?></td>
		    <td><?php echo $pendaftar->agama_ortu ?></td>
		    <td><?php echo $pendaftar->kerja_ortu ?></td>
		    <td><?php echo $pendaftar->hasil_ortu ?></td>
		    <td><?php echo $pendaftar->nama_wali ?></td>
		    <td><?php echo $pendaftar->alamat_wali ?></td>
		    <td><?php echo $pendaftar->kerja_wali ?></td>
		    <td><?php echo $pendaftar->hub_wali ?></td>
		    <td><?php echo $pendaftar->no_hp_wali ?></td>
		    <td><?php echo $pendaftar->status ?></td>
		    <td><?php echo $pendaftar->id_thn_ajar ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('pendaftar/read/'.$pendaftar->id),'Read'); 
			echo ' | '; 
			echo anchor(site_url('pendaftar/update/'.$pendaftar->id),'Update'); 
			echo ' | '; 
			echo anchor(site_url('pendaftar/delete/'.$pendaftar->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
    </body>
</html>