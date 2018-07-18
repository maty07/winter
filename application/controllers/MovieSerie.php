<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MovieSerie extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MovieSerieModel');

		if (!$this->session->userdata('sess_user')) {
			redirect('home/login');
		}
	}

	public function index()
	{
		$data['movieseries'] = $this->MovieSerieModel->getMovieSeries();
		$this->load->view('layout/header');
		$this->load->view('admin/index', $data);
		$this->load->view('layout/footer');
	}

	public function create()
	{
		$this->load->model('GeneroModel');
		$data['genres'] = $this->GeneroModel->getGenres();

		$this->load->view('layout/header');
		$this->load->view('admin/create', $data);
		$this->load->view('layout/footer');
	}

	public function store()
	{
		$title 			= $this->input->post('title');
		$author 		= $this->input->post('author');
		$actors 		= $this->input->post('actors');
		$description 	= $this->input->post('description');
		$country 		= $this->input->post('country');
		$premiere 		= $this->input->post('premiere');
		$poster 		= $this->input->post('poster');
		$rating 		= $this->input->post('rating');
		$trailer 		= $this->input->post('trailer');
		$genres[] 		= $this->input->post('genres');
		$category 		= $this->input->post('category');

		$movie_serie = $this->MovieSerieModel->create($title, $author, $actors, $description, $country, $premiere, $poster, $rating, $trailer, $genres, $category);

		$this->session->set_flashdata('success','Trailer agregado existosamente!');
		redirect('movieserie/create');	
			
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$this->load->model('GeneroModel');
		$data['genres'] = $this->GeneroModel->getGenres();
		$data['ms'] = $this->MovieSerieModel->getMovieSerieById($id);
		$this->load->view('layout/header');
		$this->load->view('admin/edit', $data);
		$this->load->view('layout/footer');
	}

	public function update()
	{
		$id 			= $this->uri->segment(3);
		$title 			= $this->input->post('edit_title');
		$author 		= $this->input->post('edit_author');
		$actors 		= $this->input->post('edit_actors');
		$description 	= $this->input->post('edit_description');
		$country 		= $this->input->post('edit_country');
		$premiere 		= $this->input->post('edit_premiere');
		$poster 		= $this->input->post('edit_poster');
		$rating 		= $this->input->post('edit_rating');
		$trailer 		= $this->input->post('edit_trailer');
		$genres[] 		= $this->input->post('edit_genres');
		$category 		= $this->input->post('edit_category');

		$movie_serie = $this->MovieSerieModel->update($id, $title, $author, $actors, $description, $country, $premiere, $poster, $rating, $trailer, $genres, $category);

		$this->session->set_flashdata('success','Trailer editado existosamente!');
		redirect('movieserie/index');		
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->MovieSerieModel->delete($id);
		$this->session->set_flashdata('success', 'Trailer eliminado correctamente');
		redirect('movieserie/index');
	}
}