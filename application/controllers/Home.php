<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('HomeModel');
	}

	public function index()
	{
		$data['last_add'] = $this->HomeModel->getLastAdd();
		$data['ms_accion'] = $this->HomeModel->getAccion();
		$data['ms_animacion'] = $this->HomeModel->getAnimacion();
		$data['ms_cienciaFiccion'] = $this->HomeModel->getCienciaFiccion();
		$data['ms_comedia'] = $this->HomeModel->getComedia();
		$data['ms_drama'] = $this->HomeModel->getDrama();
		$data['ms_romance'] = $this->HomeModel->getRomance();
		$data['ms_terror'] = $this->HomeModel->getTerror();
		$this->load->view('layout/header');
		$this->load->view('home', $data);
		$this->load->view('layout/footer');
	}

	public function login()
	{
		$this->load->view('layout/header');
		$this->load->view('login');
		$this->load->view('layout/footer');
	}

	public function validateUser()
	{
		$email = $this->input->post('email');
		$pass = sha1($this->input->post('pass'));

		$exist = $this->HomeModel->validateUser($email, $pass);

		if ($exist) {
			redirect('MovieSerie');
		}else{
			$this->session->set_flashdata('error', 'Usuario o contraseña incorrecta');
			redirect('home/login');
		}
	}

	public function close_session()
	{
		$this->session->sess_destroy();
		redirect('home');
	}

	public function busqueda()
	{
		$busqueda = $this->input->get('buscar');
		if ($busqueda != '') {
			$data['search'] = $this->HomeModel->busqueda($busqueda);
			$data['bus'] = $busqueda;
			$this->load->view('layout/header');
			$this->load->view('busqueda', $data);
			$this->load->view('layout/footer');
		}else{
			redirect('home');	
		}
		
	}

	public function trailer($id)
	{
		$data['ms_id'] = $this->HomeModel->getMSxID($id);
		$data['genres'] = $this->HomeModel->genresMovieSerie($id);
		$this->load->view('layout/header');
		$this->load->view('trailer_movieserie', $data);
		$this->load->view('layout/footer');
	}




}
