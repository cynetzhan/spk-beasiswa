<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Master_model extends CI_Model
{
  //private $pengaturan="
  function autentikasi($auth){
   $this->db->select('password');
   $this->db->where('username',$auth['username']);
   $row=$this->db->get('akun')->row();
   return password_verify($auth['userpass'],$row->password);
  }
  
  function get_user($username){
   $this->db->select("id,level");
   $this->db->where("username",$username);
   $res=$this->db->get('akun');
   return $res->row();
  }
  
  function get_user_byid($id){
   $this->db->select("id,username,level");
   $this->db->where("id",$id);
   $res=$this->db->get('akun');
   return $res->row();
  }
  
  function get_setting(){
   $this->db->where('aktif',1);
   return $this->db->get('thn_ajar')->row();
  }
  
  function get_tgl_daftar($dt){
   $this->db->select('tgl_daftar_buka,tgl_daftar_tutup');
   $this->db->where('id_thn_ajar',$dt);
   return $this->db->get('thn_ajar')->row();
  }
  
  function update_setting($dt){
   if($dt['param']['ganti_thn_ajaran']){
    $dt['atur']['id_thn_ajar']=$dt['param']['id_thn_ajar_new'];
    //$olddt=$dt['atur'];
    $sql="update thn_ajar set aktif=0 where id_thn_ajar <> ".$dt['atur']['id_thn_ajar'];
    $this->db->query($sql);
    //update kolom 'aktif' thn ajar yang lain menjadi 0
   }
   return $this->db->replace('thn_ajar',$dt['atur']);
  }
  
  function get_thn_ajar(){
   $this->db->select('id_thn_ajar,tahun_ajar');
   return $this->db->get('thn_ajar')->result();
  }
  
  function get_all_user(){
   $this->db->select('id,username,level');
   return $this->db->get('akun')->result();
  }
  
  function get_rekap_pendaftar($dt){
   
   $this->db->select('no_daftar,nama,alamat,nama_ayah,tgl_lahir,status,no_telp,no_hp');
   $this->db->where('id_thn_ajar',$dt['id_thn_ajar']);
   if($dt['status']!=0)
    $this->db->where('status',$dt['status']);
   return $this->db->get('data_pendaftar')->result();
  }
  
  function get_sum_pendaftar($dt,$krit="semua"){
   
   $where="id_thn_ajar='".$dt."'";
   
   if(($krit=='pr' || $krit=='lk') && $krit!="semua") {
    $kriteria=array("pr"=>"0","lk"=>"1");
    $where=$where." AND jenis_kel=".$kriteria[$krit];
   }
   
   if(is_numeric($krit)){
    $where=$where."AND status=".$krit;
   }
   
   $this->db->select("count(*) as total");
   $this->db->where($where);
   $this->db->query("select count(*) as total from data_pendaftar where ".$where);
   return $this->db->get('data_pendaftar')->row();
  }
  
  function get_sum_umur($dt,$krit){
   $this->db->select("tgl_lahir");
   $this->db->where("id_thn_ajar",$dt);
   $this->db->order_by("tgl_lahir",$krit);
   return $this->db->get("data_pendaftar")->row();
  }
  
  function update_status($data,$status){
   $batchdata=0;
   foreach($data as $id){
    //$batchdata[]=array('id'=>$id,'status'=>$status);
    $this->db->set("status",$status);
    $this->db->where("id",$id);
    $update=$this->db->update("data_pendaftar");
    if($update) $batchdata+=1;
   }
   //return $this->db->update_batch('data_pendaftar',$batchdata,'id');
   return $batchdata;
  }
  
  function update_password($userdata){
   $this->db->set('password',password_hash($userdata['passnew'],PASSWORD_DEFAULT));
   $this->db->where('id',$userdata['id']);
   return $this->db->update('akun');
  }
  
}