<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
	/**
	 * Carrega a página inicial do site
	 */
	public function index()
	{
		$this->data->page = 'Página Inicial';
		$this->data->content = 'home/home';
		$this->data->css = array('mods/home');
		$this->data->js = array('mods/home');

		$this->load->view('base', $this->data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */