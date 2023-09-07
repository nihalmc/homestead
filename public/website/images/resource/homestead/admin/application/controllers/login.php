<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		//logout
		$this->session->set_userdata(array(
                            'idlogged' => false
                    ));		
		
		
		
		
		
	if(isset($_POST['Submit']))
	{
		//login
		$this->load->model('dbget');
		echo $_POST["usr"];
		//echo phpinfo();
		$ls = $this->dbget->DoLogin($this->input->post('usr'),$this->input->post('psd'));
	
		
		if(($ls["success"]== "1"))
		{
			$this->session->set_userdata(array(
            'idlogged' => true,
			'fullname' => $ls['username']));	
			echo "loged";	
			redirect('/Welcome');
		}
		else
		{			
			$this->session->set_flashdata('msg', $ls["message"]);		
			redirect('/login');
		}
	}
	
	else
	{
		$this->load->view('login');
		
	}
	
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */