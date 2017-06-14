<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kriteria_model extends CI_Model
{

    public $table = 'kriteria';
    public $pairwise = 'pair_kriteria';
    public $id = 'id_kriteria';
    public $pakarLv = array(
     1=>"eigen_krit_kom", // komite sekolah usrlv 1
     "eigen_krit_kes",    // kepala sekolah usrlv 2
     "eigen_krit_dpk"     // dinas pendidikan usrlv 3
    );
    var $kriteriaLabel = array();

    function __construct()
    {
        parent::__construct();
    }
    
    function getKriteria($activeOnly = true){
     $this->db->select(array("id_kriteria","nama_kriteria","ket_kriteria","pakai_kriteria"));
     if($activeOnly) $this->db->where('pakai_kriteria',1);
     $hasil = $this->db->get($this->table)->result();
     foreach($hasil as $kr){
      $this->kriteriaLabel[] = $kr->id_kriteria;
     }
     return $hasil;
    }
    
    function countKriteria($activeOnly = true){
     if($activeOnly) $this->db->where('pakai_kriteria',1);
     return $this->db->count_all_results($this->table);
    }
    
    function getKriteriaByPakar($id_pakar){
     //$this->db->select(array("id_kriteria","nama_kriteria",$this->pakarLv[$id_pakar])); //v.1->masih pakai kolom berbeda utk tiap pakar
     $this->db->select("eigen_kriteria.id_kriteria, kriteria.nama_kriteria,eigen.kriteria.value_eigen");
     $this->db->where("eigen_kriteria.id_kriteria=kriteria.id_kriteria");
     $this->db->where("eigen_kriteria.id_user=".$id_pakar);
     
     return $this->db->get($table)->row();
    }
    
    function update($data){
     //$kolomEigen = $this->pakarLv[$data['user_lv']]; //v.1-> pakai user level. kolom eigen dibedakan per level user 
     $this->deleteKritByUser($data['user_id']); //reset seluruh nilai kriteria berpasangan untuk pakar tertentu
     $this->getKriteria();
     /*foreach($this->getKriteria() as $kr){
      $this->kriteriaLabel[] = $kr->id_kriteria;
     }*/
     
      for($i=0;$i<count($data['kritEigen']);$i++){
      // update nilai eigen di table eigen_kriteria
      $this->db->set(array(
          'value_eigen' => $data['kritEigen'][$i],
          $this->id     => $this->kriteriaLabel[$i],
          'id_user'     => $data['user_id']
          )
      );
      $this->db->insert("eigen_kriteria");
      
      // memasukkan nilai kriteria berpasangan ke pair_kriteria
      for($j=0;$j<count($data['kritMatriks']);$j++){
       $this->db->set(array(
        'id_kriteria' => $this->kriteriaLabel[$i],
        'id_kriteria_pair' => $this->kriteriaLabel[$j],
        'id_user'       => $data['user_id'],  // pakai id_user
        'value'         => $data['kritMatriks'][$i][$j]
       ));
       $this->db->replace($this->pairwise);
      }
     } 
    }
    
    function updateKriteriaAktif($data){
        // data kriteria harus berbentuk batch
        $count = 0;
        foreach($data['kriteria'] as $krit){
            $this->db->set('pakai_kriteria',$krit['pakai_kriteria']);
            $this->db->where('id_kriteria',$krit['id_kriteria']);
            $this->db->update("kriteria");
            $count++;
        }
        return $count;
    }
    
    function deleteKritByUser($id_user){
     $this->db->where('id_user',$id_user);
     //v.1->pakai user level
     return $this->db->delete('eigen_kriteria');
    }

    function resetAllPair(){
    $this->db->truncate('eigen_kriteria');
     return $this->db->truncate('pair_kriteria');
    }
    
    function getEigen($id_user=null,$formatted=false){
     /*if($pakar!=null)
      $this->db->select(array("id_kriteria","nama_kriteria","ket_kriteria",$pakar,"(eigen_krit_kom+eigen_krit_kes+eigen_krit_dpk)/3 as eirata"));
      
     $this->db->select(array("id_kriteria","nama_kriteria","ket_kriteria","eigen_krit_kom","eigen_krit_kes","eigen_krit_dpk","(eigen_krit_kom+eigen_krit_kes+eigen_krit_dpk)/3 as eirata"));
     $this->db->order_by("eirata","DESC");*/
     $this->db->select("eg.id_kriteria,kriteria.nama_kriteria,kriteria.ket_kriteria,eg.id_user,akun.username,akun.level,eg.value_eigen");
     $this->db->where("eg.id_kriteria = kriteria.id_kriteria");
     $this->db->where("eg.id_user = akun.id_user");
     if($id_user!=null)
      $this->db->where("eg.id_user = ".$id_user);
     $this->db->order_by("eg.id_user,eg.id_eigen");
     $bobot = $this->db->get('eigen_kriteria as eg,kriteria,akun')->result();
     if($formatted){
        $eigenuser = array();
        foreach($bobot as $eg){
            $eigenuser[$eg->nama_kriteria] = $eg->value_eigen;
        }
        return $eigenuser;
     } else {
        return $bobot;
     }
    }
    
    /*function avgEigen(){
     $this->db->select("nama_kriteria");
     $this->db->select("(eigen_krit_kom+eigen_krit_kes+eigen_krit_dpk)/3 as eirata");
     $hasil = $this->db->get($this->table)->result();
     $arr = array();
     foreach($hasil as $hs){
         $arr[$hs->nama_kriteria] = $hs->eirata;
     }
     return $arr;
    }*/

    function avgEigen(){
        $eigenkrit = $this->getEigen();
        $kriterialist=array();
        $eigenuser = array(); //init to re-arrange the eigen value table. grouping into each user
        $hasilAvg = array(); //init placeholder for eigen average value of all user
        foreach($eigenkrit as $eg){
            $eigenuser[$eg->id_user][$eg->id_kriteria]['value_eigen'] = $eg->value_eigen;
            $kriterialist[$eg->id_kriteria] = $eg->nama_kriteria;
        }

        foreach(array_keys($kriterialist) as $kr){
            $jml = 0;
            foreach($eigenuser as $eg){
                $jml += $eg[$kr]['value_eigen'];
            }
            $hasilAvg[$kriterialist[$kr]] = $jml/count($eigenuser);
        }
        //a better query version: SELECT id_eigen,id_kriteria,id_user,avg(value_eigen) FROM `eigen_kriteria` group by id_kriteria,id_user
        //to do (kalo mau pake query sql): sesuaikan struktur array avg utk dipakai pembobotan
        return $hasilAvg;
    }
    
    function getPairKriteria($id_user=null){
     if($id_user!=null)
      $this->db->where('id_user',$id_user);
     //v.1-> pakai user level. 
     $hasil = $this->db->get($this->pairwise)->result();
     $arr=array();
     $baris=0;
     foreach($hasil as $pk){
         $arr[$pk->id_kriteria][$pk->id_kriteria_pair] = $pk->value;
     }
     return $arr;
    }

    function countPairKriteria($id_user=null){
     if($id_user!=null)
      $this->db->where('id_user',$id_user);
     $hasil = $this->db->get($this->pairwise)->result();
     return count($hasil);
    }
	
}