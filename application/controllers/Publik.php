<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publik extends CI_Controller {

 function __construct()
 {
  parent::__construct();
  $this->load->model('Pendaftar_model');
  $this->load->library('form_validation');
 }
 
	public function index()
	{
  $data=$this->_setting();
		$this->template->load('template/publik','welcome_message',$data);
  //$this->load->view('indexnew');
		//$this->load->view('welcome_message');
	}
 
	public function formdaftar(){
  if(!$this->_setting()['boleh']){  
   $this->flashMsg("Pendaftaran peserta didik baru belum dibuka. Apabila anda telah mendaftar, silahkan cari pada kolom dibawah.","Gagal","danger");
   redirect(base_url('publik/cari'));
  }
  $data = array(
    'nama' => set_value('nama'),
    'jenis_kel' => set_value('jenis_kel'),
    'tempat_lahir' => set_value('tempat_lahir'),
    'tgl_lahir' => set_value('tgl_lahir'),
    'agama' => set_value('agama'),
    'nama_panggilan' => set_value('nama_panggilan'),
    //'nikk_siswa' => set_value('nikk_siswa'),
    'prestasi' => set_value('prestasi'),
    'jumlah_saudara' => set_value('jumlah_saudara'),
    //'tinggi' => set_value('tinggi'),
    //'berat' => set_value('berat'),
    'goldar' => set_value('goldar'),
    'alamat' => set_value('alamat'),
    'no_telp' => set_value('no_telp'),
    'anak_ke' => set_value('anak_ke'),
    'nama_ayah' => set_value('nama_ayah'),
    'alamat_ortu' => set_value('alamat_ortu'),
    'agama_ayah' => set_value('agama_ayah'),
    'kerja_ayah' => set_value('kerja_ayah'),
    'hasil_ayah' => set_value('hasil_ayah'),
    //'nikk_ayah' => set_value('nikk_ayah'),
    //'nikk_ibu' => set_value('nikk_ibu'),
    'nama_wali' => set_value('nama_wali'),
    'kerja_wali' => set_value('kerja_wali'),
    'hasil_wali' => set_value('hasil_wali'),
    'tplahir_ayah' => set_value('tplahir_ayah'),
    'tglahir_ayah' => set_value('tglahir_ayah'),
    'nama_ibu' => set_value('nama_ibu'),
    'kerja_ibu' => set_value('kerja_ibu'),
    'hasil_ibu' => set_value('hasil_ibu'),
    'tplahir_ibu' => set_value('tplahir_ibu'),
    'tglahir_ibu' => set_value('tglahir_ibu'),
    'agama_ibu' => set_value('agama_ibu'),
    'penyakit' => set_value('penyakit'),
    'jarak_sekolah' => set_value('jarak_sekolah'),
    'status_tinggal' => set_value('status_tinggal'),
    'status_ortu' => set_value('status_ortu'),
    'nama_wali' => set_value('nama_wali'),
    'kerja_wali' => set_value('kerja_wali'),
    'hasil_wali' => set_value('hasil_wali'),
    'penyakit' => set_value('penyakit')
	 );
  $data['set']=$this->_setting();
		$this->template->load('template/publik','formdaftar',$data);
  if(isset($this->session->pendaftartemp)){
   $this->session->set_flashdata('flpendaftartemp',$this->session->pendaftartemp);
   $this->session->unset_userdata('pendaftartemp');
  }
	}
 
 public function daftar(){
  $data = array(
    'tgl_daftar' => date('Y-m-d H:i:s'),
    'no_daftar' => '',
    'nama' => specialRemove($this->input->post('nama',TRUE)),
    'jenis_kel' => specialRemove($this->input->post('jenis_kel',TRUE)),
    'tempat_lahir' => specialRemove($this->input->post('tempat_lahir',TRUE)),
    'tgl_lahir' => $this->input->post('tgl_lahir'),
    'agama' => specialRemove($this->input->post('agama',TRUE)),
    'nama_panggilan' => specialRemove($this->input->post('nama_panggilan',TRUE)),
    //'nikk_siswa' => specialRemove($this->input->post('nikk_siswa',TRUE)),
    'duduk_kelas' => '',
    'prestasi' => specialRemove($this->input->post('prestasi',TRUE)),
    'jumlah_saudara' => specialRemove($this->input->post('jumlah_saudara',TRUE)),
    //'tinggi' => specialRemove($this->input->post('tinggi',TRUE)),
    //'berat' => specialRemove($this->input->post('berat',TRUE)),
    'goldar' => specialRemove($this->input->post('goldar',TRUE)),
    'alamat' => specialRemove($this->input->post('alamat',TRUE)),
    'no_telp' => specialRemove($this->input->post('no_telp',TRUE)),
    'anak_ke' => specialRemove($this->input->post('anak_ke',TRUE)),
    'nama_ayah' => specialRemove($this->input->post('nama_ayah',TRUE)),
     'alamat_ortu' => specialRemove($this->input->post('alamat_ortu',TRUE)),
     'agama_ayah' => specialRemove($this->input->post('agama_ayah',TRUE)),
     'kerja_ayah' => specialRemove($this->input->post('kerja_ayah',TRUE)),
     'hasil_ayah' => uang(specialRemove($this->input->post('hasil_ayah',TRUE))),
     //'nikk_ayah' => specialRemove($this->input->post('nikk_ayah',TRUE)),
     //'nikk_ibu' => specialRemove($this->input->post('nikk_ibu',TRUE)),
     'nama_wali' => specialRemove($this->input->post('nama_wali',TRUE)),
     'kerja_wali' => specialRemove($this->input->post('kerja_wali',TRUE)),
     'hasil_wali' => uang(specialRemove($this->input->post('hasil_wali',TRUE))),
     'tplahir_ayah' => specialRemove($this->input->post('tplahir_ayah',TRUE)),
     'tglahir_ayah' => $this->input->post('tglahir_ayah',TRUE),
     'nama_ibu' => specialRemove($this->input->post('nama_ibu',TRUE)),
     'kerja_ibu' => specialRemove($this->input->post('kerja_ibu',TRUE)),
     'hasil_ibu' => uang(specialRemove($this->input->post('hasil_ibu',TRUE))),
     'tplahir_ibu' => specialRemove($this->input->post('tplahir_ibu',TRUE)),
     'tglahir_ibu' => $this->input->post('tglahir_ibu',TRUE),
     'agama_ibu' => specialRemove($this->input->post('agama_ibu',TRUE)),
     'penyakit' => specialRemove($this->input->post('penyakit',TRUE)),
     'jarak_sekolah' => specialRemove($this->input->post('jarak_sekolah',TRUE)),
     'status_tinggal' => specialRemove($this->input->post('status_tinggal',TRUE)),
     'status_ortu' => specialRemove($this->input->post('status_ortu',TRUE)),
    'status' => '1',
    'id_thn_ajar' => date('y')
	    );
  $this->_rules();
  if($this->form_validation->run() == FALSE) {
   $this->template->load('template/publik','formdaftar',$data);
   //redirect(base_url('publik/formdaftar'));
  } else {
   $rep=$this->Pendaftar_model->insert($data);
   if(isset($rep['exist'])){
    $this->flashMsg("Kami menemukan bahwa Anda telah mendaftar dengan nomor pendaftaran <strong>".$rep['checkdata'][0]->no_daftar."</strong>. <a href='".base_url('publik/buktidaftar/'.$rep['checkdata'][0]->id)."' target='_blank'>Klik disini</a> untuk melihat data pendaftar tersebut. <br> Apabila Anda tidak pernah mendaftar dengan nomor pendaftaran tersebut, silahkan <a href='https://minsapekanbaru.sch.id/contact-us/'>hubungi kami dan jelaskan masalah Anda.</a>","Gagal","danger");
    $this->session->set_userdata(array("pendaftartemp"=>$data));
    //echo var_dump($this->session->pendaftartemp);
    redirect(base_url('publik/formdaftar'));
   } else { 
   redirect(base_url('publik/buktidaftar/'.$rep['id']));
   }
  }
 }
 
 public function tempdaftar(){
  $data=$this->session->flpendaftartemp;
  if($data!=null){
   $rep=$this->Pendaftar_model->insert($data);
   $this->session->unset_userdata('flpendaftartemp');
   redirect(base_url('publik/buktidaftar/'.$rep['id']));
  } else {
   show_error("Maaf, Anda tidak diperbolehkan mengakses menu ini. Silahkan kembali ke <a href='../publik'>Halaman Depan</a>",403,"Akses Tidak Diperbolehkan!");
  }
 }
 public function buktidaftar($id){
  $datasiswa=$this->Pendaftar_model->get_by_id($id);
  if($datasiswa==null){
   show_error("Nomor pendaftaran yang anda masukkan tidak tersedia.",404,"Data siswa tidak ditemukan!");
  }
  $retdata=array('datasiswa'=>$datasiswa);
  $this->template->load('template/publik','pagestat',$retdata);
 }
 
 public function cari(){
  $this->template->load('template/publik','cari');
 }
 
 public function caridata(){
  $kolom="no_daftar";
  if(!is_numeric($this->input->post('query'))) $kolom="nama";
  $data=array("hasil" => $this->Pendaftar_model->cari_nama_daftar($this->input->post('query'),$kolom));
  $this->load->view("caridata",$data);
 }
 
 public function _setting(){
  $data['boleh']=false;
  $this->load->model('Master_model');
  $tgl=$this->Master_model->get_tgl_daftar(date('y'));
  $set=$this->Master_model->get_setting();
  $data['setting']=$tgl;
  $buka=date('U',strtotime($tgl->tgl_daftar_buka))-date('U');
  $tutup=date('U',strtotime($tgl->tgl_daftar_tutup.' 16:00:00'))-date('U');
  if($set->tutup_daftar==0 && ($buka<0) && ($tutup>0))
   $data['boleh']=true;
  return $data;
  //return $tgl;
 }
 
 public function _rules(){
 $error=array("required"=>"Kolom ini harus diisi");
	$this->form_validation->set_rules('nama', 'Nama', 'trim|required',$error);
 $this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'trim|required',$error);
 //$this->form_validation->set_rules('nikk_siswa', 'NIKK Siswa', 'trim|required',$error);
	$this->form_validation->set_rules('jenis_kel', 'Jenis Kelamin', 'trim|required',$error);
	$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required',$error);
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required',$error);
	$this->form_validation->set_rules('agama', 'agama', 'trim|required',$error);
 $this->form_validation->set_rules('jumlah_saudara', 'jumlah saudara', 'trim|required',$error);
	//$this->form_validation->set_rules('tinggi', 'tinggi', 'trim|required',$error);
	//$this->form_validation->set_rules('berat', 'berat', 'trim|required',$error);
	$this->form_validation->set_rules('goldar', 'goldar', 'trim|required',$error);
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required',$error);
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required',$error);
	$this->form_validation->set_rules('anak_ke', 'anak ke', 'trim|required',$error);
$this->form_validation->set_rules('nama_ayah', 'nama ayah', 'trim|required',$error);
	$this->form_validation->set_rules('alamat_ortu', 'alamat ortu', 'trim|required',$error);
	$this->form_validation->set_rules('agama_ayah', 'agama ayah', 'trim|required',$error);
	$this->form_validation->set_rules('kerja_ayah', 'kerja ayah', 'trim|required',$error);
	$this->form_validation->set_rules('hasil_ayah', 'hasil ayah', 'trim|required',$error);
 	$this->form_validation->set_rules('tplahir_ayah', 'tplahir ayah', 'trim|required',$error);
	$this->form_validation->set_rules('tglahir_ayah', 'tglahir ayah', 'trim|required',$error);
	$this->form_validation->set_rules('nama_ibu', 'nama ibu', 'trim|required',$error);
	$this->form_validation->set_rules('kerja_ibu', 'kerja ibu', 'trim|required',$error);
	$this->form_validation->set_rules('hasil_ibu', 'hasil ibu', 'trim|required',$error);
	$this->form_validation->set_rules('tplahir_ibu', 'tplahir ibu', 'trim|required',$error);
	$this->form_validation->set_rules('tglahir_ibu', 'tglahir ibu', 'trim|required',$error);
	$this->form_validation->set_rules('agama_ibu', 'agama ibu', 'trim|required',$error);
	$this->form_validation->set_rules('jarak_sekolah', 'jarak sekolah', 'trim|required',$error);
	$this->form_validation->set_rules('status_tinggal', 'status tinggal', 'trim|required',$error);
	$this->form_validation->set_rules('status_ortu', 'status ortu', 'trim|required',$error);

	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
 }
 
 private function flashMsg($msg,$alt,$cls){
 $this->session->set_flashdata(array('class'=>$cls,'alert'=>$alt,'message'=>$msg));
}
}
