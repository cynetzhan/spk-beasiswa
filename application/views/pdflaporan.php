<?php ob_start(); ?>
 <!--style>
	.kop{display:block;width:100%;}
 .head1{color:#F7AD00}
 .head3{font-size:.8em;}
 h1,h2,h3,h4,h5{margin:2px auto;}
 .underline{text-decoration:underline}
 </style-->

<page backtop="150px" backbottom="20px" backleft="20px" backright="20px">
 <bookmark title="Rekap Rekomendasi Penerima Beasiswa" level="0"></bookmark>
 <page_header>
 <table style="width:100%">
  <tr>
   <td style="vertical-align:middle;width:15%;text-align:center"><img src="<?= base_url('bootstrap/images/padang-fr.png') ?>" style="width:73px;height:86px;margin:20px" alt="logokop"/></td>
   <td style="vertical-align:middle;width:15%;text-align:center"><img src="<?= base_url('bootstrap/images/kemdikbud-fr.png') ?>" style="width:92px;height:86px;margin:20px" alt="logokop"/></td>
   <td style="width:50%;text-align:center">
    <h3 style="line-height:0">DINAS PENDIDIKAN</h3>
    <h2>SMP NEGERI 7 PADANG</h2>
    <strong>Alamat : Jl. S. Parman, Padang 25136<br>
    Telp. (0751) 70 55139<br>
    </strong>
   </td>
   <td style="vertical-align:middle;width:20%;text-align:center"><img src="<?= base_url('bootstrap/images/smpniko.png') ?>" style="width:70px;height:86px;margin:20px" alt="logokop"/></td>
  </tr>
  <tr>
   <td colspan="4"><hr style="border:solid 1px #000"/></td>
  </tr>
 </table>
 </page_header>
 <table style="width:50%;margin-top:20px">
  <tr>
   <td>No.</td>
   <td>: </td>
  </tr>
  <tr>
   <td>Lampiran</td>
   <td>: </td>
  </tr>
  <tr>
   <td>Hal</td>
   <td>: Rekomendasi Penerima Beasiswa</td>
  </tr>
 </table>
 <br><br>
 <div style="width:100%;padding-left:20px">
 <table cellspacing="0" style="width:80%;margin:auto" border="1" align="center">
  <tr style="text-align:center">
   <th style="width:5%;padding:5px">NO</th>
   <th style="width:60%;padding:5px">NAMA</th>
   <th style="width:30%;padding:5px">NIS</th>
  </tr>
 <?php $c = 0; foreach($hasil as $dt){ ?>
  <tr>
   <td style="padding:5px"><?= ++$c ?></td>
   <td style="padding:5px"><?= mb_convert_case($dt->nama_siswa, MB_CASE_TITLE) ?></td>
   <td style="text-align:center;vertical-align:middle"><?= $dt->nis_siswa ?></td>
   <!--td style="border:1px solid black"><?php //number_format($dt->value_weighted,3) ?></td-->
  </tr>
 <?php } ?>
 </table>
 </div>
 <table style="float:right;width:100%;margin-top:20px;">
  <tr>
   <td style="width:60%"></td>
   <td style="width:40%">Padang, <?php echo date('d F Y'); ?></td>
  </tr>
  <tr>
   <td style="width:60%"></td>
   <td style="width:40%">Mengetahui</td>
  </tr>
  <tr>
   <td style="width:60%"></td>
   <td style="text-align:center;height:100px;vertical-align:bottom;width:40%"><hr style="border:solid 1px #000"/></td>
  </tr>
  <tr>
   <td style="width:60%"></td>
   <td style="width:40%">NIP: </td>
  </tr>
 </table>
</page>
<?php
require_once 'vendor/autoload.php';
$html = ob_get_clean();
$html2pdf = new \Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en',true,'UTF-8',array(10,10,25,10));
$html2pdf->pdf->SetAuthor('SMPN7PDG');
$html2pdf->pdf->SetTitle('Rekap Rekomendasi Penerima Beasiswa');
$html2pdf->writeHTML($html);
$html2pdf->output('rekap-rekomendasi.pdf','D');
// $pdf = new mPDF();
// $pdf->WriteHTML($html);
// $pdf->Output(); 
?>