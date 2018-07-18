<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MovieSerieModel extends CI_Model {

	public function lastRowMovieSeries()
	{
		$query = $this->db->query('SELECT * FROM movieseries ORDER BY id DESC LIMIT 1');
		return $query->row();
	}

	public function getMovieSeries()
	{
		$query = $this->db->get('movieseries');
		return $query->result();
	}

	public function getMovieSerieById($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('movieseries');
		return $query->row();
	}



	public function create($title, $author, $actors, $description, $country, $premiere, $poster, $rating, $trailer, $genres, $category)
	{
		$data = array(
			'title'			=> $title,
			'author'		=> $author,
			'actors'		=> $actors,
			'description'	=> $description,
			'country'		=> $country,
			'premiere'		=> $premiere,
			'poster'		=> $poster,
			'rating'		=> $rating,
			'trailer'		=> $trailer,
			'category'		=> $category
		);

		$this->db->insert('movieseries', $data);

		$last_id = $this->lastRowMovieSeries();

		foreach ($genres[0] as $key => $value) {
			$genres_id = array(
				'genres_id'			=> $value,
				'movieseries_id' 	=> $last_id->id
			);
			$this->db->insert('genres_movieseries', $genres_id);
		}
	}	

	public function update($id, $title, $author, $actors, $description, $country, $premiere, $poster, $rating, $trailer, $genres, $category)
	{
		$data = array(
			'title'			=> $title,
			'author'		=> $author,
			'actors'		=> $actors,
			'description'	=> $description,
			'country'		=> $country,
			'premiere'		=> $premiere,
			'poster'		=> $poster,
			'rating'		=> $rating,
			'trailer'		=> $trailer,
			'category'		=> $category
		);
		$this->db->where('id', $id);
		$this->db->update('movieseries', $data);

	}

	public function delete($id)
	{
		$this->db->delete('genres_movieseries', array('movieseries_id' => $id));
		$this->db->delete('movieseries', array('id' => $id));
	}

}

