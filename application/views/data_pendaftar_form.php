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
        <h2 style="margin-top:0px">Data_pendaftar <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="timestamp">Tgl Daftar <?php echo form_error('tgl_daftar') ?></label>
            <input type="text" class="form-control" name="tgl_daftar" id="tgl_daftar" placeholder="Tgl Daftar" value="<?php echo $tgl_daftar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Daftar <?php echo form_error('no_daftar') ?></label>
            <input type="text" class="form-control" name="no_daftar" id="no_daftar" placeholder="No Daftar" value="<?php echo $no_daftar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Jenis Kel <?php echo form_error('jenis_kel') ?></label>
            <input type="text" class="form-control" name="jenis_kel" id="jenis_kel" placeholder="Jenis Kel" value="<?php echo $jenis_kel; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat Lahir <?php echo form_error('tempat_lahir') ?></label>
            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir <?php echo form_error('tgl_lahir') ?></label>
            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Agama <?php echo form_error('agama') ?></label>
            <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" value="<?php echo $agama; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">No Telp <?php echo form_error('no_telp') ?></label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Hp <?php echo form_error('no_hp') ?></label>
            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Anak Ke <?php echo form_error('anak_ke') ?></label>
            <input type="text" class="form-control" name="anak_ke" id="anak_ke" placeholder="Anak Ke" value="<?php echo $anak_ke; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Ortu <?php echo form_error('nama_ortu') ?></label>
            <input type="text" class="form-control" name="nama_ortu" id="nama_ortu" placeholder="Nama Ortu" value="<?php echo $nama_ortu; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat_ortu">Alamat Ortu <?php echo form_error('alamat_ortu') ?></label>
            <textarea class="form-control" rows="3" name="alamat_ortu" id="alamat_ortu" placeholder="Alamat Ortu"><?php echo $alamat_ortu; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="tinyint">Agama Ortu <?php echo form_error('agama_ortu') ?></label>
            <input type="text" class="form-control" name="agama_ortu" id="agama_ortu" placeholder="Agama Ortu" value="<?php echo $agama_ortu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kerja Ortu <?php echo form_error('kerja_ortu') ?></label>
            <input type="text" class="form-control" name="kerja_ortu" id="kerja_ortu" placeholder="Kerja Ortu" value="<?php echo $kerja_ortu; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Hasil Ortu <?php echo form_error('hasil_ortu') ?></label>
            <input type="text" class="form-control" name="hasil_ortu" id="hasil_ortu" placeholder="Hasil Ortu" value="<?php echo $hasil_ortu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Wali <?php echo form_error('nama_wali') ?></label>
            <input type="text" class="form-control" name="nama_wali" id="nama_wali" placeholder="Nama Wali" value="<?php echo $nama_wali; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat_wali">Alamat Wali <?php echo form_error('alamat_wali') ?></label>
            <textarea class="form-control" rows="3" name="alamat_wali" id="alamat_wali" placeholder="Alamat Wali"><?php echo $alamat_wali; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Kerja Wali <?php echo form_error('kerja_wali') ?></label>
            <input type="text" class="form-control" name="kerja_wali" id="kerja_wali" placeholder="Kerja Wali" value="<?php echo $kerja_wali; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Hub Wali <?php echo form_error('hub_wali') ?></label>
            <input type="text" class="form-control" name="hub_wali" id="hub_wali" placeholder="Hub Wali" value="<?php echo $hub_wali; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Hp Wali <?php echo form_error('no_hp_wali') ?></label>
            <input type="text" class="form-control" name="no_hp_wali" id="no_hp_wali" placeholder="No Hp Wali" value="<?php echo $no_hp_wali; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Thn Ajar <?php echo form_error('id_thn_ajar') ?></label>
            <input type="text" class="form-control" name="id_thn_ajar" id="id_thn_ajar" placeholder="Id Thn Ajar" value="<?php echo $id_thn_ajar; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pendaftar') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>