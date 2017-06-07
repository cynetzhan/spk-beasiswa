<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class AHP {
  var $kriteria = array();
  var $kuadMatriks = array();
  var $sumMatriks = array();
  var $kriteriaLabel = array();
  
  public function normalizeFormat($val){
   $normal = $val;
   if(preg_match('/([\d\.\s]+)([\+\-\*\/])([\d\.\s]+)/',$val,$nval)===1){ // memeriksa isi matriks dengan format operator matematika (e.g 1/5, 2+1) menggunakan RegEx
   // terbatas untuk 1 operator dan 2 angka
    switch($nval[2]){
     case "/":
      $normal = $nval[1] / $nval[3];
      break;
     case "-":
      $normal = $nval[1] - $nval[3];
      break;
     case "*":
      $normal = $nval[1] * $nval[3];
      break;
     case "+":
      $normal = $nval[1] + $nval[3];
      break;
    }
   }
   return $normal;
  }
  public function setCriteria($critMatrix){
   // transformasi matriks kriteria
   // nilai kriteria dari form
   // Panjang Lebar harus sama
   $matTransform = array();
   $jumlahKriteria = count($critMatrix)+1;
   for($i=0;$i<$jumlahKriteria;$i++){
    for($j=0;$j<$jumlahKriteria;$j++){
     if(($i==$j) || ($i>$j)){
       $matTransform[$i][$j] = 1;
     } else {
      $matTransform[$i][$j] = $this->normalizeFormat($critMatrix[$i][$j]);
     }
     
    }
   }
   $this->kriteria = $matTransform;
   //echo "Kriteria telah di set <br>";
  }
  
  public function altCriteria(){
   // mengisi nilai kriteria di matrix bagian kiri bawah
   $mat=$this->kriteria;
   $jmKriteria=count($mat);
   for($i=0;$i<$jmKriteria;$i++){
    for($j=0;$j<$jmKriteria;$j++){
     if($i>$j)
      $mat[$i][$j] = 1/$mat[$j][$i];
    }
   }
   $this->kriteria=$mat;
   return $mat;
  }
  
  public function kuadratMatriks(){
   $mat = $this->kriteria;
   $hasil = array();
   for($i=0;$i<count($mat);$i++){
    $hasil[$i] = array();
    for($j=0;$j<count($mat);$j++){
     $hasil[$i][$j] = 0;
     for($k=0;$k<count($mat);$k++){
      $hasil[$i][$j] += $mat[$k][$j] * $mat[$i][$k];
     }
    }
   }
   $this->kuadMatriks = $hasil;
   return $hasil;
  }
  
  public function eigenCriteria(){
   $mat = $this->kuadMatriks;
   $sum = array();
   $allSum = 0;
   for($i=0;$i<count($mat);$i++){
    $sum[$i] = 0;
    for($j=0;$j<count($mat);$j++){
     $sum[$i] += $mat[$i][$j];
    }
    $allSum += $sum[$i];
   }
   
   $this->sumMatriks = $sum;
   $eigen = array();
   for($i=0;$i<count($sum);$i++){
    $eigen[$i] = $sum[$i]/$allSum;
   }
   return $eigen;
  }
 }
 