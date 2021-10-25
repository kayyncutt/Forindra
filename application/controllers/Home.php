<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_pengunjung');
		$this->load->model('m_login');
		// $this->load->model('m_cari');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
			$x['berita']=$this->m_tulisan->get_berita_home();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
			$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
			$x['tot_files']=$this->db->get('tbl_files')->num_rows();
			$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();

			// kaya gini
			$this->load->view('depan/v_home',$x);
	}

	function cari(){
		// cari sini tinggal buat query builder buat akses ke database
		// cari misal: dosen atas nama 'eka' 
		$cari =  $this->input->get('cari');
		
		// nanti tinggal lanjut ke view
		// parameter array buat lampiran ke view, biar bisa muat banyak
		$data = array(
			'hasil' => $cari
		);
		$this->load->view('depan/v_cari',$data);
	}

}
