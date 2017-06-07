<?php
require_once 'phpexcel/Classes/PHPExcel.php';
require_once 'phpexcel/Classes/PHPExcel/IOFactory.php';
//include 'kustom_helper.php';

function bacaData($file=null){
  if($file!=null){
  $excel = PHPExcel_IOFactory::load("$file");
  $worksheet = $excel->getSheet(0);
  $barisAkhir = $worksheet->getHighestRow();
  $datasiswa = array(); //init data array
  for($baris=3;$baris<=$barisAkhir;$baris++){ // data mulai dari baris 3
    $datasiswa[] = array(
      'nis_siswa' => $worksheet->getCell("A".$baris)->getValue(),
      'nama_siswa' => $worksheet->getCell("B".$baris)->getValue(),
      'kls_siswa' => $worksheet->getCell("C".$baris)->getValue(),
      'alamat_siswa' => $worksheet->getCell("D".$baris)->getValue(),
      'nama_ayah_siswa' => $worksheet->getCell("E".$baris)->getValue(),
      'nrata_siswa' => $worksheet->getCell("K".$baris)->getValue(),
      'jmsdr_siswa' => $worksheet->getCell("J".$baris)->getValue(),
      'pnd_ayah_siswa' => tr_pnd($worksheet->getCell("G".$baris)->getValue()),
      'krj_ayah_siswa' => tr_kerja($worksheet->getCell("H".$baris)->getValue()),
      'hasil_ayah_siswa' => tr_hasil($worksheet->getCell("I".$baris)->getValue()),
      'status_siswa' => tr_status($worksheet->getCell("L".$baris)->getValue()),
    );
  }
  //$datasiswa =  $worksheet->rangeToArray('A3:L'.$barisAkhir,null,true,false);
  //$gini = $worksheet->getCell("B3");
  //print_r($datasiswa);
  return $datasiswa;
  } else {
    return "Tidak Ada File";
  }
}

function downloadRekap($data){
 $reader = PHPExcel_IOFactory::createReader('Excel2007');
 $excel = $reader->load("bootstrap/"."template/"."template-rekap.xlsx");
 $count=0;
 foreach($data as $dt){
  $telp=$dt->no_hp;
  if($dt->no_hp=='') 
   $telp=$dt->no_telp;
  $thinBorder = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => 'FF000000'),
		 ),
	 ),
 );
  $row=6+$count;
  $excel->setActiveSheetIndex(0)
           ->setCellValue('A'.$row,$dt->no_daftar)
           ->setCellValue('B'.$row,$dt->nama)
           ->setCellValue('C'.$row,$dt->alamat)
           ->setCellValue('D'.$row,$dt->nama_ayah)
           ->setCellValue('E'.$row,umur($dt->tgl_lahir))
           ->setCellValue('F'.$row,stdaftar($dt->status))
           ->setCellValue('G'.$row,$telp);
           
  $excel->getActiveSheet()->getStyle('A'.$row)->applyFromArray($thinBorder);
  $excel->getActiveSheet()->getStyle('B'.$row)->applyFromArray($thinBorder);
  $excel->getActiveSheet()->getStyle('C'.$row)->applyFromArray($thinBorder);
  $excel->getActiveSheet()->getStyle('D'.$row)->applyFromArray($thinBorder);
  $excel->getActiveSheet()->getStyle('E'.$row)->applyFromArray($thinBorder);
  $excel->getActiveSheet()->getStyle('F'.$row)->applyFromArray($thinBorder);
  $excel->getActiveSheet()->getStyle('G'.$row)->applyFromArray($thinBorder);
  
  $excel->getActiveSheet()->getStyle('C'.$row)->getAlignment()->setWrapText(true);
  $count+=1;
 }
 $count+=6; //total row + 6 from template
 
 $excel->getActiveSheet()->getStyle('A6:G'.$count)->getFont()->setName('Times New Roman');
 $excel->getActiveSheet()->getStyle('A6:G'.$count)->getFont()->setSize(12);
 $excel->getActiveSheet()->setTitle('Rekap Data');
 $excel->setActiveSheetIndex(0);

 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 header('Content-Disposition: attachment;filename="01simple.xlsx"');
 header('Cache-Control: max-age=0');
 header('Cache-Control: max-age=1');
 header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
 header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
 header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
 header ('Pragma: public'); // HTTP/1.0

 $objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
 $objWriter->save('php://output');
 exit;
}
?>