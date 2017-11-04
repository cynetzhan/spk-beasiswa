<?php
function jkel($jk){
 if(!$jk) return "Perempuan";
  else return "Laki-laki";
}

function agama($ag){
 switch($ag){
 case 1:
  return "Islam"; break;
 case 2:
  return "Katolik"; break;
 case 3:
  return "Protestan"; break;
 case 4:
  return "Hindu"; break;
 case 5:
  return "Buddha"; break;
 case 6:
  return "Konghucu"; break;
 default:
  return "Tidak Ada"; break;
 }
}

function form_month($name,$mth=0){
 $form="<select name='".$name."_bulan' class='form-control tglahir_".$name."' style='width:100px;display:inline' id='".$name."_bln'>";
 $bulan=array(
  "1" => "Januari",
   "Februari",
   "Maret",
   "April",
   "Mei",
   "Juni",
   "Juli",
   "Agustus",
   "September",
   "Oktober",
  "November",
  "Desember"
 );
 $count=1;
 foreach($bulan as $bln){
  $form.="<option value='".$count."'";
  if($mth==$count)
   $form.="selected";
  $form.= ">".$bln."</option>";
  $count+=1;
 }
 $form.="</select>";
 return $form;
}

function tanggal($dt){
 //format harus yyyy-mm-dd
 $bulan=array(
  "01" => "Januari",
  "02" => "Februari",
  "12" => "Desember",
  "03" => "Maret",
  "04" => "April",
  "05" => "Mei",
  "06" => "Juni",
  "07" => "Juli",
  "08" => "Agustus",
  "09" => "September",
  "10" => "Oktober",
  "11" => "November"
 );
 $date=explode("-",$dt);
 $date[2]=substr($date[2],0,2); //fix date with timestamp format
 $tanggal=$date[2]." ".$bulan[$date[1]]." ".$date[0];
 return $tanggal;
}

function umur($tgl,$thnonly=false){
 $endperiod=mktime(0,0,0,7,1,2017);
 $bnperiod=date('U',strtotime($tgl));
 $thn=($endperiod-$bnperiod)/31556952; //detik perbedaan tanggal dibagi detik setahun. setahun ada 31556952 detik
 
 $bln=floor(($thn-floor($thn))*12); //tahun float dikurang floor tahun lalu dikali 12 bulan, dan di floor-kan
 if($thnonly){
  return floor($thn);
 } else {
  return floor($thn)." th ".$bln." bln";
 }
}
 

function akunlv($lv){
 $level=array(1=>'Administrator','Guru','Pakar');
 return $level[$lv];
}

function specialRemove($string){
	//return preg_replace('/[^A-Za-z0-9*,.@\-\/\\/ \n]/', '', $string);
	return htmlspecialchars($string,ENT_QUOTES,'ISO-8859-1');
}

function tr_pnd($pnd,$flip=false){
  $arr = array(
    "SD" => 1,
    "SMP" => 2,
    "SMA" => 3,
    "D1" => 4,
    "D2" => 5,
    "D3" => 6,
    "S1" => 7,
    "S2" => 8,
    "S3" => 9
  );
  if($flip)
    $arr = array_flip($arr);

  return $arr[$pnd];
}

function tr_kerja($kerja,$flip=false){
  $pekerjaan = array(
    "Polisi" => 1,
    "Tentara" => 2,
    "Pegawai BUMN" => 3,
    "Pengacara" => 4,
    "Pegawai Negeri Sipil" => 5,
    "Konsultan" => 6,
    "Wiraswasta" => 7,
    "Pegawai Swasta" => 8,
    "Supir" => 9,
    "Buruh" => 10,
    "Penjahit" => 11,
    "Petani" => 12,
    "Nelayan" => 13,
    "Supir Angkutan Umum (Ojek/Oplet)" => 14,
    "Pedagang Kecil" => 15
  );
  if($flip)
    $pekerjaan = array_flip($pekerjaan);

  return $pekerjaan[$kerja];
}

function tr_status($str){
  $arr=array('Tidak Yatim','Yatim');
  return $arr[$str];
}

function tr_hasil($str){
  $arr=array(1=>"> 4.000.000","3.000.000 s/d 4.000.000","2.000.000 s/d 2.900.000","1.000.000 s/d 1.900.000","100.000 s/d 900.000");
  return $arr[$str];
}

function tr_nrata($str,$flip=false){
 $arr=array("<= 70",">= 70",">= 80",">= 90");
 if($flip){
  $arr = array_flip($arr);
  if($str >= 90)
   return 3;
  else if($str >= 80)
   return 2;
  else if($str >= 70)
   return 1;
  else return 0;
 } else {
   return $arr[$str];
 }
}

function tr_status_in($str){
 if(strtolower($str) == 'yatim')
  return '1';
 else 
  return '0';
}

function tr_hasil_in($nominal){
 $ret = 0;
 if($nominal > 4000000)
  $ret = 1;
 else if($nominal > 3000000)
  $ret = 2;
 else if($nominal > 2000000)
  $ret = 3;
 else if($nominal > 1000000)
  $ret = 4;
 else if($nominal > 100000)
  $ret = 5;
return $ret;
}