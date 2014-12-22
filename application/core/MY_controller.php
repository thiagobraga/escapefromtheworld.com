<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class MY_Controller extends CI_Controller
{

	var $data;

	function __construct()
	{
		parent::__construct();

		$this->data = new stdClass();

		$this->data->title = 'Escape From the World';
		$this->data->description = 'As relações intrínsecas entre corpo e espírito e a fatídica letargia do ser humano formam a principal temática. Marcel Sanches e Thiago Braga misturam riffs pesados com elementos eletrônicos em busca de uma sonoridade própria e marcante.';
		$this->data->keywords = 'escapefromtheworld, escape from the world, darkwave, gothic, 80\'s, progressive';
	}
}

/* End of file MY_controller.php */
/* Location: ./application/core/MY_controller.php */