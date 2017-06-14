<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

 function __construct()
 {
  parent::__construct();
  $this->load->model(array('Master_model','Kriteria_model','Saw_model','Siswa_model'));
  $this->load->library('form_validation');
 }
 
 function cekLogin($enabled=true){
  if($enabled){
   if(!isset($_SESSION['login_status']) || $_SESSION['login_status']==0){
     $this->session->set_flashdata(array('class'=>'danger','alert'=>'Gagal','value'=>'Anda Harus Login Terlebih Dahulu'));
     $this->session->set_userdata('login_status',0);
     redirect(base_url('master/login'));
   } 
  }
 }
	public function index()
	{
		redirect(base_url('master/dashboard'));
		//$this->load->view('welcome_message');
	}
 
 public function login(){
  if(!isset($_SESSION['login_status']) || $_SESSION['login_status']==0){
   $this->template->load('template/master','login');
  } else {
   redirect(base_url('master/dashboard'));
  }
 }
 
 public function logout(){
  $this->session->sess_destroy();
  redirect(base_url('master/login'));
 }
 
 public function autentikasi(){
  //butuh validasi form login
  $this->cekLogin(false);
  $auth['username']=$this->input->post('username');
  $auth['userpass']=$this->input->post('password');
  if($this->Master_model->autentikasi($auth)==1){
   $userinfo=$this->Master_model->get_user($auth['username']);
   $data = array(
     'login_status'=>'1',
     'username'=>$auth['username'],
     'user_id'=>$userinfo->id_user,
     'user_akses'=>$userinfo->level
   );
   $this->session->set_userdata($data);
   redirect(base_url('master/dashboard'));
  } else {
   //$this->session->set_userdata("try","+1");
   $this->session->set_flashdata(array('class'=>'danger','alert'=>'Gagal','message'=>'Username/Password yang Anda masukkan salah!'));
   redirect(base_url('master/login'));
  }
 }
 
 public function dashboard(){
  $this->cekLogin();
  $dt=date('y');
  
  $this->template->load('template/master','dashboard');
 }

 public function datasiswa(){
  $this->cekLogin();
  $data = array(
    'datasiswa' => $this->Siswa_model->get_all()
  );
  $this->template->load('template/master','datasiswa',$data);
 }
 
 public function tambahsiswa(){
   $data=array(
     'aksi' => 'aksitambah',
     'tombol' => 'Tambah Data Siswa',
     'nis_siswa' => set_value('nis_siswa'),
     'nama_siswa' => set_value('nama_siswa'),
     'nama_ayah_siswa' => set_value('nama_ayah_siswa'),
     'kls_siswa' => set_value('kls_siswa'),
     'alamat_siswa' => set_value('alamat_siswa'),
     'pnd_ayah_siswa' => set_value('pnd_ayah_siswa'),
     'krj_ayah_siswa' => set_value('krj_ayah_siswa'),
     'hasil_ayah_siswa' => set_value('hasil_ayah_siswa'),
     'jmsdr_siswa' => set_value('jmsdr_siswa'),
     'nrata_siswa' => set_value('nrata_siswa'),
     'status_siswa' => set_value('status_siswa')
   );
   $this->template->load('template/master','formsiswa',$data);
 }

 public function editsiswa($id) {
   $siswa = $this->Siswa_model->get_by_id($id);
   $data=array(
     'aksi' => 'aksiupdate',
     'tombol' => 'Ubah Data Siswa',
     'nis_siswa' => set_value('nis_siswa',$siswa->nis_siswa),
     'nama_siswa' => set_value('nama_siswa',$siswa->nama_siswa),
     'nama_ayah_siswa' => set_value('nama_ayah_siswa',$siswa->nama_ayah_siswa),
     'kls_siswa' => set_value('kls_siswa',$siswa->kls_siswa),
     'alamat_siswa' => set_value('alamat_siswa',$siswa->alamat_siswa),
     'pnd_ayah_siswa' => set_value('pnd_ayah_siswa',$siswa->pnd_ayah_siswa),
     'krj_ayah_siswa' => set_value('krj_ayah_siswa',$siswa->krj_ayah_siswa),
     'hasil_ayah_siswa' => set_value('hasil_ayah_siswa',$siswa->hasil_ayah_siswa),
     'jmsdr_siswa' => set_value('jmsdr_siswa',$siswa->jmsdr_siswa),
     'nrata_siswa' => set_value('nrata_siswa',$siswa->nrata_siswa),
     'status_siswa' => set_value('status_siswa',$siswa->status_siswa)
   );
   $this->template->load('template/master','formsiswa',$data);
 }

 public function tambahuser() {
   $data=array(
     'granted' => ($this->session->user_akses==1)
   );
   $this->template->load('template/master','tambahuser',$data);
 }

 public function aksitambahuser(){
   $data=array(
     'username'=>$this->input->post('username'),
     'password'=>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
     'level'=>$this->input->post('level')
   );
   if($this->Master_model->add_user($data)){
     $this->flashMsg("Pengguna berhasil ditambahkan","Berhasil!","success");
     redirect(base_url('master/pengaturan'));
   }
 }

 public function aksihapususer($id){
     if($this->session->user_akses==1){
       if($this->Master_model->delete_user($id)){
         $this->flashMsg("Pengguna berhasil dihapus!",  "Berhasil","success");
         redirect(base_url('master/pengaturan'));
     }
   } else {
     $this->flashMsg("Terdapat Kesalahan! Pengguna gagal dihapus!","Galat!","danger");
     redirect(base_url('master/pengaturan'));
   }
 }

 public function readExcel(){
   $this->load->helper('phpexcel');
   $hasil = bacaData();
   //to do: file upload
   //$insert = $this->Siswa_model->insertBatchSiswa($hasil);
   //print_r($insert);
 }

 public function aksitambah() {
   $data=array(
     'nis_siswa' => $this->input->post('nis_siswa'),
     'nama_siswa' => $this->input->post('nama_siswa'),
     'nama_ayah_siswa' => $this->input->post('nama_ayah_siswa'),
     'kls_siswa' => $this->input->post('kls_siswa'),
     'alamat_siswa' => $this->input->post('alamat_siswa'),
     'pnd_ayah_siswa' => $this->input->post('pnd_ayah_siswa'), 
     'krj_ayah_siswa' => $this->input->post('krj_ayah_siswa'),
     'hasil_ayah_siswa' => $this->input->post('hasil_ayah_siswa'), 
     'jmsdr_siswa' => $this->input->post('jmsdr_siswa'),
     'nrata_siswa' => $this->input->post('nrata_siswa'), 
     'status_siswa' => $this->input->post('status_siswa')
   );
   $hasil = $this->Siswa_model->insert($data);
   if($hasil){
     $this->flashMsg("Berhasil menambah siswa!","Sukses","success");
   } else {
     $this->flashMsg("Terdapat kesalahan saat menambahkan siswa.","Gagal","danger");     
   }
   redirect(base_url('master/datasiswa'));
   //print_r($hasil);
   //print_r($data);
 }

 public function aksiupdate(){
   $data=array(
     'nis_siswa' => $this->input->post('nis_siswa'),
     'nama_siswa' => $this->input->post('nama_siswa'),
     'nama_ayah_siswa' => $this->input->post('nama_ayah_siswa'),
     'kls_siswa' => $this->input->post('kls_siswa'),
     'alamat_siswa' => $this->input->post('alamat_siswa'),
     'pnd_ayah_siswa' => $this->input->post('pnd_ayah_siswa'), 
     'krj_ayah_siswa' => $this->input->post('krj_ayah_siswa'),
     'hasil_ayah_siswa' => $this->input->post('hasil_ayah_siswa'), 
     'jmsdr_siswa' => $this->input->post('jmsdr_siswa'),
     'nrata_siswa' => $this->input->post('nrata_siswa'), 
     'status_siswa' => $this->input->post('status_siswa')
   );
   $hasil = $this->Siswa_model->update($this->input->post('nis_siswa_old'),$data);
   if($hasil){
     $this->flashMsg("Berhasil menambah siswa!","Sukses","success");
     redirect(base_url('master/datasiswa'));
   } else {
     $this->flashMsg("Terdapat kesalahan saat menambahkan siswa.","Gagal","danger");
     redirect(base_url('master/editsiswa'.$this->input->post('nis_siswa_old')));
   }
   
 }

 public function ahpSet(){
   //nilai pair-kriteria yang ditampilkan berdasarkan id_user yang mengakses
  $this->cekLogin();
  $data['kriteria']=$this->Kriteria_model->getKriteria(false);
  $data['kriteriaMatrix']=$this->Kriteria_model->getKriteria();
  $data['jumlahKriteria']=$this->Kriteria_model->countKriteria();
  $data['pK']=$this->Kriteria_model->getPairKriteria($this->session->user_id); // need fallback if pair_kriteria is empty (first time use/active criteria changed). nvm
  if(empty($data['pK'])) {
    foreach($data['kriteriaMatrix'] as $kol1){
      foreach($data['kriteriaMatrix'] as $kol2){
        $data['pK'][$kol1->id_kriteria][$kol2->id_kriteria] = 0;
      }
    }
  }
  //print_r($data);
  $this->template->load('template/master','ahpmaster',$data);
 }
 
 public function ahpUpdate(){
   //update kriteria berdasarkan level user yang mengakses
  $this->cekLogin();
  $this->load->library('AHP');
  $ahp = new AHP();
  $ahp->setCriteria($this->input->post("krit"));
  $data['kritMatriks'] = $ahp->altCriteria(); //normalisasi matrix
  $ahp->kuadratMatriks(); 
  $data['kritEigen'] = $ahp->eigenCriteria();
  $data['user_id']=$this->session->user_id;
  $data['user_lv']=$this->session->user_akses;
  $this->Kriteria_model->update($data);
  redirect(base_url('Master/ahpSet'));
  //print_r($data['kritEigen']);
 }
 
 public function kriteriaSel(){
   $this->cekLogin();
   $data['user_id']=$this->session->user_id;
   $data['user_lv']=$this->session->user_akses;
   $data['kriteria']=array();
   // periksa kriteria yang aktif dan non-aktif
   $kritCurrent=$this->Kriteria_model->getKriteria(false);
   $kritNew=array_flip($this->input->post('pakai_kriteria')); //flip the value to keys
   foreach($kritCurrent as $krc){
     $data['kriteria'][] = array(
       'id_kriteria' => $krc->id_kriteria,
       'pakai_kriteria' => (isset($kritNew[$krc->id_kriteria]))?"1":"0"
     );
   }
   $hasil = $this->Kriteria_model->updateKriteriaAktif($data);
   $this->Kriteria_model->resetAllPair(); // delete every pair criteria
   if($hasil==6)  { //kriteria ada 6
     $this->flashMsg("Berhasil mengubah pengaturan!","Sukses","success");
     redirect(base_url('master/ahpset'));
   } 
 }
 
 public function sawSet()
 {
   $this->cekLogin();
   $eigenkrit = $this->Kriteria_model->getEigen();
   $this->Kriteria_model->getKriteria(true);
   $eigenuser = array(); //init to re-arrange the eigen value table. grouping into each user
   foreach($eigenkrit as $eg){
     $eigenuser[$eg->id_user]['id_user']=$eg->id_user;
     $eigenuser[$eg->id_user]['username']=$eg->username;
     $eigenuser[$eg->id_user][$eg->id_kriteria]['ket_kriteria'] = $eg->ket_kriteria;
     $eigenuser[$eg->id_user][$eg->id_kriteria]['value_eigen'] = $eg->value_eigen;
   }
   $data=array(
     'eigenkolom' => $this->Saw_model->getAturan("PAKAR"),
     'kriterialist' => $this->Kriteria_model->kriteriaLabel,
     'eigenkrit' => $eigenuser
   );
   $this->template->load('template/master','sawmaster',$data);
   //print_r($data);
 }
 
 public function sawUpdate()
 {
   $this->cekLogin();
   //$data=array(); //belum dipakai
   $update = $this->Saw_model->updateAturan("PAKAR",$this->input->post('eigenval',TRUE));
   if($update){
     $this->flashMsg("Berhasil mengubah pengaturan!","Sukses","success");
   } else {
     $this->flashMsg("Terdapat Kesalahan saat mengubah pengaturan","Galat!","danger");
   }
   redirect(base_url('master/sawSet'));
 }

 public function penormalan(){
   //to do: proses penormalan hanya untuk siswa yang baru dimasukkan, agar tidak perlu proses normalisasi seluruh data
   //$starttime=microtime(true);
   $data = array(
     'max' => (array)$this->Siswa_model->get_all_max(),
     'min' => (array)$this->Siswa_model->get_all_min(),
     'raw_siswa' => (array)$this->Siswa_model->get_all()
   );
   $atribut = array_keys($data['max']); //ambil atribut
   $datanormal = array(); //init datanormal untuk hasil penormalan
   foreach($data['raw_siswa'] as $siswa){
     $arr = array(
       'nis_siswa' => $siswa->nis_siswa
     ); // temp array for normalized data
     foreach($atribut as $atr){
       $arr[$atr] = ($siswa->$atr - $data['min'][$atr])/($data['max'][$atr] - $data['min'][$atr]); //min-max normalization per atribut
     }
     $datanormal[] = $arr; //push normalized data to datanormal
   }
   $this->Siswa_model->insertNormalSiswa($datanormal);
   //echo "Script running time: ";
   //echo microtime(true)-$starttime;
 }
 
 public function pembobotan(){
   $this->cekLogin();
   $data=array(
     'pakar' => $this->Saw_model->getAturan("PAKAR"),
     'jumlahsw' => $this->Siswa_model->total_rows(),
     'jumlahkr' => $this->Kriteria_model->countKriteria(),
     'lastrun' => $this->Saw_model->getAturan("PEMBOBOTAN_TERAKHIR_BERJALAN"),
     'enableProcess' => true
   );
   if($data['pakar']!='eirata'){
     $user = $this->Master_model->get_user_byid($data['pakar']);
     $data['pakar'] = $user->username;
   } else {
     $data['pakar'] = "Bobot Rata-Rata Pakar";
   }
   $countPair = $this->Kriteria_model->countPairKriteria();
   $userCount = $countPair/$data['jumlahkr'];
   if(($userCount>0 && !is_int($userCount)) or ($userCount<1)){
     $data['enableProcess'] = false;
     $this->flashMsg("Proses Pembobotan belum siap! Periksa pengaturan Kriteria dan Pembobotan","Galat!","danger");
   }
   $this->template->load('template/master','bobot_proses',$data);
  //  echo var_dump($data);
  //  echo var_dump($countPair);
 }
 
 public function prosesBobot(){
   //limit : 50 siswa
   $start=$this->input->post('start');
   $limit=$this->input->post('limit');
   //$starttime=microtime(true);
   $data=array(
     'pakar' => $this->Saw_model->getAturan("PAKAR"),
     'jumlahsw' => $this->Siswa_model->total_rows(),
     'jumlahkr' => $this->Kriteria_model->countKriteria(),
   );
   
   $bobot = ($data['pakar']=='eirata')?$this->Kriteria_model->avgEigen():$this->Kriteria_model->getEigen($data['pakar'],true);
   $max = $this->Saw_model->getAllMax();
   $siswa = $this->Siswa_model->get_limit_data($limit,$start);
   $weightprocess = $this->Saw_model->hitungBobot($bobot,$max,$siswa);
   //$kolom = array_keys($bobot);
   //print_r($kolom);
   //print_r($max);
   echo $weightprocess;
   //echo "Script running time: ";
   //echo microtime(true)-$starttime;
   //print_r($bobot);
 }

 public function terakhirBobotNotice(){
   $this->Saw_model->updateAturan("PEMBOBOTAN_TERAKHIR_BERJALAN",date('d-m-Y H:i:s'));
 }

 public function resetProcessedData(){
   $this->Siswa_model->resetNormalData();
   $this->Saw_model->resetAllWeighted();
 }
 
 public function hasilBobot(){
   $data['siswa']=$this->Siswa_model->getWeightedSiswa(10);
   $this->load->view("ajaxhasil",$data);
 }
 
 public function beasiswa(){
   $data['siswa']=$this->Siswa_model->getWeightedSiswa();
   $this->template->load("template/master","terimabeasiswa",$data);
 }

 public function rekapExcel(){
  $this->load->helper('PHPexcel');
  $data['hasil']=$this->Siswa_model->getWeightedSiswa(0,0,true); //for debugging reason, i put this on an array
  //echo var_dump($data['hasil']);
  downloadRekap($data['hasil']);
 }
  
 public function detailsiswa($id){
  $this->load->model('Pendaftar_model');
  $datasiswa=$this->Pendaftar_model->get_by_id($id);
  if($datasiswa==null){
   show_error("Nomor pendaftaran yang anda masukkan tidak tersedia.",404,"Data siswa tidak ditemukan!");
  }
  $data['datasiswa']=$datasiswa;
  $this->template->load('template/master','detailsiswa',$data);
 }
 
 public function updatesiswa($id){
  $this->load->model('Pendaftar_model');
  $datasiswa=$this->Pendaftar_model->get_by_id($id);
  if($datasiswa==null){
   show_error("Nomor pendaftaran yang anda masukkan tidak tersedia.",404,"Data siswa tidak ditemukan!");
  }
  $data = array(
    'nama' => set_value('nama'),
    'jenis_kel' => set_value('jenis_kel'),
    'tempat_lahir' => set_value('tempat_lahir'),
    'tgl_lahir' => set_value('tgl_lahir'),
    'agama' => set_value('agama'),
    'nama_panggilan' => set_value('nama_panggilan'),
    'nikk_siswa' => set_value('nikk_siswa'),
    'prestasi' => set_value('prestasi'),
    'jumlah_saudara' => set_value('jumlah_saudara'),
    'tinggi' => set_value('tinggi'),
    'berat' => set_value('berat'),
    'goldar' => set_value('goldar'),
    'alamat' => set_value('alamat'),
    'no_telp' => set_value('no_telp'),
    'anak_ke' => set_value('anak_ke'),
    'nama_ayah' => set_value('nama_ayah'),
    'alamat_ortu' => set_value('alamat_ortu'),
    'agama_ayah' => set_value('agama_ayah'),
    'kerja_ayah' => set_value('kerja_ayah'),
    'hasil_ayah' => set_value('hasil_ayah'),
    'nikk_ayah' => set_value('nikk_ayah'),
    'nikk_ibu' => set_value('nikk_ibu'),
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
  $data['datasiswa']=$datasiswa;
  $this->template->load('template/master','updatesiswa',$data);
 }
 
 public function updatesiswa_action(){
  $this->load->model('Pendaftar_model');
  $data = array(
    'tgl_daftar' => date('Y-m-d H:i:s'),
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
     $id=$this->input->post('id');
  //$this->_rules();
  //if($this->form_validation->run() == FALSE) {
   //$this->template->load('master/updatesiswa','updatesiswa',$data);
   //redirect(base_url('publik/formdaftar'));
  //} else {
   $this->Pendaftar_model->update($id,$data);
   redirect(base_url('master/detailsiswa/'.$id));
  //}
 }
 
 public function deletesiswa($id){
  $this->cekLogin();
  $this->load->model('Pendaftar_model');
  $this->Pendaftar_model->delete($id);
  $this->flashMsg("Data siswa berhasil dihapus!","Berhasil","success");
  redirect(base_url('master/datasiswa'));
 }
 
 public function pengaturan(){
  $this->cekLogin();
  $data['akun']=$this->Master_model->get_all_user();
  $this->template->load('template/master','pengaturan',$data);
 }
 
 public function chpassword($id=null){
  $this->cekLogin();
  $user=$this->Master_model->get_user_byid($id);
  if($user==null)
   show_error("ID User yang anda masukkan tidak ditemukan. Kembali ke <a href='".base_url('master/pengaturan')."'>Pengaturan</a>",404,"User tidak ditemukan!");
  if(($this->session->user_id==$id && $this->session->user_akses==$user->level) || ($this->session->user_id!=$id && $this->session->user_akses==1)){
   $data['granted']=true;
   $data['id_chpass']=$id;
   $data['usr_chpass']=$user->username;
   $data['user_logged_in']=$this->session->username;
  } else {
   $data['granted']=false;
  }
  $this->template->load('template/master','chpassword',$data);
 }
 
 public function chpassaction(){
  $auth['userpass']=$this->input->post('pass_user_logged_in',true);
  $auth['username']=$this->input->post('user_logged_in',true);
  $data['id']=$this->input->post('id_chpass');
  $granted=$this->Master_model->autentikasi($auth);
  if($granted){
   
   $data['passnew']=$this->input->post('newpass');
   $data['passconf']=$this->input->post('confnewpass');
   if($data['passnew']!=$data['passconf'] || $data['passnew']==null){
    $this->flashMsg("Password baru tidak cocok! Ulangi mengisi password","Gagal!","danger");
    redirect(base_url('master/chpassword/'.$data['id']));
   } else {
    $update=$this->Master_model->update_password($data);
    if($update){
     $this->flashMsg("Password berhasil diubah","Berhasil!","success");
    } else {
     $this->flashMsg("Terdapat kesalahan saat mengubah password","Gagal!","danger");
     redirect(base_url('master/chpassword/'.$data['id']));
    }
   }
  } else {
   $this->flashMsg("Password yang anda masukkan salah!","Gagal!","danger");
   redirect(base_url('master/chpassword/'.$data['id']));
  }
  redirect(base_url('master/pengaturan'));
 }
 
 public function actionaturan(){
  $this->cekLogin();
  $aturan['atur']['id_thn_ajar']=$this->input->post('id_thn_ajar');
  $aturan['atur']['tgl_daftar_buka']=$this->input->post('tgl_daftar_buka');
  $aturan['atur']['tgl_daftar_tutup']=$this->input->post('tgl_daftar_tutup');
  $aturan['atur']['tahun_ajar']=date('Y',strtotime($aturan['atur']['tgl_daftar_tutup']));
  $aturan['atur']['tutup_daftar']=$this->input->post('tutup_daftar');
  $aturan['atur']['aktif']=1;
  
  $aturan['param']['id_thn_ajar_new']=date('y',strtotime($aturan['atur']['tgl_daftar_tutup']));
  $aturan['param']['ganti_thn_ajaran']=false;
  
  if($aturan['param']['id_thn_ajar_new']!=$aturan['atur']['id_thn_ajar']) 
   $aturan['param']['ganti_thn_ajaran']=true;
  
  if((date('U',strtotime($aturan['atur']['tgl_daftar_buka']))-date('U',strtotime($aturan['atur']['tgl_daftar_tutup']))) > 0){
   $this->flashMsg("Tanggal akhir pendaftaran tidak boleh lebih dahulu dari tanggal awal!","Gagal","danger");
   redirect(base_url('master/pengaturan'));
  }
  
  $update=$this->Master_model->update_setting($aturan);
  if($update){
   $this->flashMsg("Berhasil mengubah pengaturan!","Sukses","success");
  } else {
   $this->flashMsg("Terdapat kesalahan saat mengubah pengaturan","Gagal","danger");
  }
  redirect(base_url('master/pengaturan'));
 }
 
 public function actionsiswa(){
  $this->cekLogin();
  if($this->input->post("sort")!=null){
   redirect(base_url("master/datasiswa/".$this->input->post('sortir')."/".$this->input->post("order")."/".$this->input->post('carinama')));
  } else {
   
   if($this->input->post("check")===null || $this->input->post("status")===null){
    $update=0;
   } else {
    $update=$this->Master_model->update_status($this->input->post("check"),$this->input->post("status"));
   }
   
   if($update==0) {
    //echo "Terdapat pendaftar tidak terupdate.";
    $this->flashMsg("Tidak ada aksi yang dibuat","Gagal","warning");
   } else {
    $this->flashMsg("Berhasil mengubah status pendaftar!","Sukses!","success");
   }
  }
  redirect(base_url('master/datasiswa'));
/*   $batch=array();
  foreach($this->input->post("check") as $id){
   $batch[]=array("id"=>$id,"status"=>$this->input->post("status"));
  }
  $data = array(
   array(
      'title' => 'My title' ,
      'name' => 'My Name 2' ,
      'date' => 'My date 2'
   ),
   array(
      'title' => 'Another title' ,
      'name' => 'Another Name 2' ,
      'date' => 'Another date 2'
   )
);
  print_r($batch);
  print_r($data); */
  
 }
 
 private function flashMsg($msg,$alt,$cls){
 $this->session->set_flashdata(array('class'=>$cls,'alert'=>$alt,'message'=>$msg));
}

}

