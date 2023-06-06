<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		$this->load->view('nav');
		$this->load->view('conteudo');
		$this->load->view('rodape');
	}
	public function sobre()
	{
		$dados['titulo']="sobre";
		$dados['conteudo']="Aqui você vai aprender muito sobre CI!";
		$this->load->view('pagina_principal',$dados);
	}
}
