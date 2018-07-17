<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genero extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('GeneroModel');
	}

	public function accion()
	{
		$data['action'] = $this->GeneroModel->getAccion();
		$this->load->view('layout/header');
		$this->load->view('genres/accion', $data);
		$this->load->view('layout/footer');
	}

	public function animacion()
	{
		$data['animacion'] = $this->GeneroModel->getAnimacion();
		$this->load->view('layout/header');
		$this->load->view('genres/animacion', $data);
		$this->load->view('layout/footer');
	}

	public function aventura()
	{
		$data['aventura'] = $this->GeneroModel->getAventura();
		$this->load->view('layout/header');
		$this->load->view('genres/aventura', $data);
		$this->load->view('layout/footer');
	}

	public function belico()
	{
		$data['belico'] = $this->GeneroModel->getBelico();
		$this->load->view('layout/header');
		$this->load->view('genres/belico', $data);
		$this->load->view('layout/footer');
	}

	public function ciencia_ficcion()
	{
		$data['ciencia_ficcion'] = $this->GeneroModel->getCienciaFiccion();
		$this->load->view('layout/header');
		$this->load->view('genres/ciencia_ficcion', $data);
		$this->load->view('layout/footer');
	}

	public function comedia()
	{
		$data['comedia'] = $this->GeneroModel->getComedia();
		$this->load->view('layout/header');
		$this->load->view('genres/comedia', $data);
		$this->load->view('layout/footer');
	}

	public function documental()
	{
		$data['documental'] = $this->GeneroModel->getDocumental();
		$this->load->view('layout/header');
		$this->load->view('genres/documental', $data);
		$this->load->view('layout/footer');
	}

	public function drama()
	{
		$data['drama'] = $this->GeneroModel->getDrama();
		$this->load->view('layout/header');
		$this->load->view('genres/drama', $data);
		$this->load->view('layout/footer');
	}

	public function fantastico()
	{
		$data['fantastico'] = $this->GeneroModel->getFantastico();
		$this->load->view('layout/header');
		$this->load->view('genres/fantastico', $data);
		$this->load->view('layout/footer');
	}

	public function infantil()
	{
		$data['infantil'] = $this->GeneroModel->getInfantil();
		$this->load->view('layout/header');
		$this->load->view('genres/infantil', $data);
		$this->load->view('layout/footer');
	}

	public function musical()
	{
		$data['musical'] = $this->GeneroModel->getMusical();
		$this->load->view('layout/header');
		$this->load->view('genres/musical', $data);
		$this->load->view('layout/footer');
	}

	public function romance()
	{
		$data['romance'] = $this->GeneroModel->getRomance();
		$this->load->view('layout/header');
		$this->load->view('genres/romance', $data);
		$this->load->view('layout/footer');
	}

	public function terror()
	{
		$data['terror'] = $this->GeneroModel->getTerror();
		$this->load->view('layout/header');
		$this->load->view('genres/terror', $data);
		$this->load->view('layout/footer');
	} 
}