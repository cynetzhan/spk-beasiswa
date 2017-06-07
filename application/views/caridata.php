<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($hasil!=null){
foreach($hasil as $data){
 //echo var_dump($hasil);
 ?>
 <tr>
  <td><?php echo $data->no_daftar; ?></td>
  <td><?php echo $data->nama; ?></td>
  <td><?php echo jkel($data->jenis_kel); ?></td>
  <td><?php echo stdaftar($data->status); ?></td>
  <td><a href="<?php echo base_url('publik/buktidaftar/'.$data->id); ?>">Lihat Data</a></td>
 </tr>
 <?php
 }
} else { ?>
  <tr>
   <td colspan="5" style="text-align:center">Tidak ada hasil.</td>
  </tr>
<?php } ?>