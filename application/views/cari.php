<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
 <div class="row">
  <div class="col-sm-12">
   <h2>Pencarian Data Calon Siswa</h2>
   <p>Silahkan cari menggunakan nama atau nomor pendaftaran calon siswa</p>
   <form name="carisiswa" id="carisiswa">
    <input type="text" id="querysiswa" name="querysiswa" class="form-control" placeholder="Masukkan Nama atau Nomor Pendaftaran Calon Siswa" style="max-width:500px"/>
    <input type="submit" id="btncari" name="submit" value="Cari" class="btn btn-info"></input>
   </form>
   <table class="table table-bordered">
    <thead>
     <tr>
      <th>No Daftar</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Status</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody id="tablecontent">
     <tr>
      <td colspan="4">Silahkan Cari Menggunakan Kolom Isian Diatas</td>
     </tr>
    </tbody>
   </table>
  </div>
 </div>
</div>
<script>
$("#carisiswa").submit(function(event) {
 event.preventDefault();
 $.post("<?php echo base_url("publik/caridata/");?>",{query:$("input#querysiswa").val()},function(result) {
  $("tbody#tablecontent").html(result);
 });
});
</script>