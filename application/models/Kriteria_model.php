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
     $this->db->select(array("id_kriteria","nama_kriteria",$this->pakarLv[$id_pakar]));
     return $this->db->get($table)->row();
    }
    
    function update($data){
     $kolomEigen = $this->pakarLv[$data['user_lv']];
     $this->deletePairByLvl($data['user_lv']); //reset seluruh nilai kriteria berpasangan untuk pakar tertentu
     foreach($this->getKriteria() as $kr){
      $this->kriteriaLabel[] = $kr->id_kriteria;
     }
     //print_r($this->kriteriaLabel[0]);
     for($i=0;$i<count($data['kritEigen']);$i++){
      // update nilai eigen di table kriteria
      $this->db->set($kolomEigen,$data['kritEigen'][$i]);
      $this->db->where($this->id,$this->kriteriaLabel[$i]);
      $this->db->update($this->table);
      
      // memasukkan nilai kriteria berpasangan ke pair_kriteria
      for($j=0;$j<count($data['kritMatriks']);$j++){
       $this->db->set(array(
        'id_kriteria_1' => $this->kriteriaLabel[$i],
        'id_kriteria_2' => $this->kriteriaLabel[$j],
        'user_lv'       => $data['user_lv'],  // berdasarkan userlv saja?
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
    
    function deletePairByLvl($lvl){
     $this->db->where('user_lv',$lvl);
     return $this->db->delete('pair_kriteria');
    }

    function resetAllPair(){
     return $this->db->truncate('pair_kriteria');
    }
    
    function getEigen($pakar=null){
     if($pakar!=null)
      $this->db->select(array("id_kriteria","nama_kriteria","ket_kriteria",$pakar,"(eigen_krit_kom+eigen_krit_kes+eigen_krit_dpk)/3 as eirata"));
      
     $this->db->select(array("id_kriteria","nama_kriteria","ket_kriteria","eigen_krit_kom","eigen_krit_kes","eigen_krit_dpk","(eigen_krit_kom+eigen_krit_kes+eigen_krit_dpk)/3 as eirata"));
     $this->db->order_by("eirata","DESC");
     return $this->db->get('kriteria')->result();
    }
    
    function avgEigen(){
     $this->db->select("nama_kriteria");
     $this->db->select("(eigen_krit_kom+eigen_krit_kes+eigen_krit_dpk)/3 as eirata");
     $hasil = $this->db->get($this->table)->result();
     $arr = array();
     foreach($hasil as $hs){
         $arr[$hs->nama_kriteria] = $hs->eirata;
     }
     return $arr;
    }
    
    function getPairKriteria($lvl){
     $this->db->where('user_lv',$lvl);
     $hasil = $this->db->get($this->pairwise)->result();
     $arr=array();
     $baris=0;
     foreach($hasil as $pk){
         $arr[$pk->id_kriteria_1][$pk->id_kriteria_2] = $pk->value;
     }
     return $arr;
    }
	
}