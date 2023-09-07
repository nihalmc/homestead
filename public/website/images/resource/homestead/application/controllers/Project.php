<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

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
	$this->load->view('header');
		$this->load->view('ongoing_details');
		$this->load->view('footer');
	}
	public function ongoing()
	{
        	$this->load->model('dbget');
        $data["ongoing"] = $this->dbget->getongoing();
		/*$this->load->model('dbget');
		$data["srvs"] = $this->dbget->gethomepageservices();
		$data["galls"] = $this->dbget->gethomepagegallery();*/
		$this->load->view('header');
		$this->load->view('ongoing',$data);
		$this->load->view('footer');
		//echo json_encode ( $data["ongoing"]);
	}
public function detail($id)
	{
		$this->load->model('dbget');
		$data["detail"]=$this->dbget->getproject_specification($id);
		/*$this->load->model('dbget');
		$data["srvs"] = $this->dbget->gethomepageservices();
		$data["galls"] = $this->dbget->gethomepagegallery();*/
		$this->load->view('header');
		$this->load->view('detail',$data);
		$this->load->view('footer');
	}
	public function getongoingid($id)
	{
	//	echo  $id;
		$this->load->model('dbget');
		$data["ongoing"]=$this->dbget->ongoingbyid($id);
//		echo json_encode(	$data["news"]);
		$this->load->view('header');
		$this->load->view('ongoing',$data);
		$this->load->view('footer');
	}



	public function upcoming()
	{
        	$this->load->model('dbget');
        $data["upcoming"] = $this->dbget->getupcoming();
		/*$this->load->model('dbget');
		$data["srvs"] = $this->dbget->gethomepageservices();
		$data["galls"] = $this->dbget->gethomepagegallery();*/
		$this->load->view('header');
		$this->load->view('upcoming',$data);
		$this->load->view('footer');
	}
		public function completed()
	{
        	$this->load->model('dbget');
        $data["completed"] = $this->dbget->getcompleted();
		/*$this->load->model('dbget');
		$data["srvs"] = $this->dbget->gethomepageservices();
		$data["galls"] = $this->dbget->gethomepagegallery();*/
		$this->load->view('header');
		$this->load->view('completed',$data);
		$this->load->view('footer');
	}
}
