<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public

	function __construct()
	  {
	  parent::__construct();
      $this->load->model('web_models');
      
	  }







	
    



    
	public function home()
	{

         $id = $this->input->get_post('id');


        


        
		$login = $this->web_models->get_where('user_data',['id'=>$id]);

		$love['data']=$login;

		$this->load->view('welcome_message',$love);
    }









}



















