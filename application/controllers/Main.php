<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
	    $data['title']="Bienvenue chez Congo Agile. Vous êtes sur le site officiel de la startup de l'informatique vision totale";
		$this->load->view('common/header',$data);
		$this->load->view('main/index',$data);
		$this->load->view('common/footer',$data);
	}
	public function login()
	{
	    $data['title']="Connexion à l'application web";
		$this->load->view('common/header',$data);
		$this->load->view('main/login',$data);
		$this->load->view('common/footer',$data);
	}
}
