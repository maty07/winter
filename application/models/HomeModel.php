<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {


	public function validateUser($email, $pass)
	{
		$this->db->select('*');
		$this->db->where('email', $email);
		$this->db->where('pass', $pass);
		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			$r = $query->row();

			$data = array(
				'sess_id' => $r->id,
				'sess_user' => $r->user	
			);

			$this->session->set_userdata($data);
			return true;
		}

		return false;

	}

	public function getLastAdd()
	{
		$this->db->select('id, poster');
		$this->db->order_by('id', 'DESC');
		$this->db->limit(9);
		$query = $this->db->get('movieseries');
		return $query->result();
	}

	public function getAccion()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 1 LIMIT 9');
		return $query->result();
	}

	public function getAnimacion()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 2 LIMIT 9');
		return $query->result();
	}

	public function getCienciaFiccion()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 5 LIMIT 9');
		return $query->result();
	}

	public function getComedia()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 7 LIMIT 9');
		return $query->result();
	}

	public function getDrama()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 9 LIMIT 9');
		return $query->result();
	}	

	public function getRomance()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 14 LIMIT 9');
		return $query->result();
	}

	public function getTerror()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 15 LIMIT 9');
		return $query->result();
	}

	public function getMSxID($id)
	{
		$query = $this->db->query("SELECT * FROM movieseries WHERE id = $id");
		return $query->row();
	}

	public function genresMovieSerie($id)
	{
		$query = $this->db->query("SELECT g.name FROM movieseries AS ms
									INNER JOIN genres_movieseries AS gm ON ms.id = gm.movieseries_id
								    INNER JOIN genres AS g on g.id = gm.genres_id
								    WHERE ms.id = $id");
		return $query->result();
	}

	public function busqueda($busqueda)
	{

		$query = $this->db->query("SELECT ms.id id, ms.title title, ms.poster poster
									FROM movieseries AS ms
								    WHERE ms.title LIKE '%$busqueda%' ");



		return $query->result();
	}

}

