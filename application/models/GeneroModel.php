<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneroModel extends CI_Model {


	public function getAccion()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 1');
		return $query->result();
	}

	public function getAnimacion()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 2');
		return $query->result();
	}

	public function getAventura()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 3');
		return $query->result();
	}

	public function getBelico()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 4');
		return $query->result();
	}

	public function getCienciaFiccion()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 5');
		return $query->result();
	}

	public function getComedia()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 7');
		return $query->result();
	}

	public function getDocumental()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 8');
		return $query->result();
	}

	public function getDrama()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 9');
		return $query->result();
	}

	public function getFantastico()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 10');
		return $query->result();
	}	

	public function getInfantil()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 11');
		return $query->result();
	}

	public function getMusical()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 13');
		return $query->result();
	}

	public function getRomance()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 14');
		return $query->result();
	}

	public function getTerror()
	{
		$query = $this->db->query('SELECT ms.id id, ms.poster poster FROM genres_movieseries AS gm INNER JOIN movieseries AS ms ON gm.movieseries_id  = ms.id WHERE gm.genres_id = 15');
		return $query->result();
	}

	public function getGenres()
	{
		$this->db->select('*');
		$query = $this->db->get('genres');
		return $query->result();
	}

}