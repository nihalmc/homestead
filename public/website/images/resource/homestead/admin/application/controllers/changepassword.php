<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Changepassword extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('idlogged'))
        { 
        
            redirect('/login');
        
        }
    }
	
	
	public function index()
	{
		
		
	
			
		
		$this->load->view('1');
		$this->load->view('changepassword');
		$this->load->view('2');
       
		
	}
    public function changepassword()
    {
        $this->load->model(dbadd);
        $a =  $this->dbadd->changepassword();
        $this->session->set_flashdata('msg',  $a);	
        redirect("/changepassword");
        

    }
}