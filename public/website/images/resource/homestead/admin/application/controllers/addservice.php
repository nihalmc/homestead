<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addservice extends CI_Controller {

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
		$this->load->view('addservice');
		$this->load->view('2');
       
		
	}
    function add()
    { 
       
        if($_POST["txttitle"] =="")
        {
                $this->session->set_flashdata('msg',"Unable to add service without title");
                redirect('/addservice');
        }
        
           if($_FILES['filelogo']['name']<>"")
           {
                //image upload	            
                $config['upload_path'] = './uploads/logo/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']	= '5000';
               // $this->session->set_flashdata('msg',  "1");
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('filelogo'))
                {                
                    $this->session->set_flashdata('msg', $this->upload->display_errors());                
                }
                else
                {
                     $img = true;
                     $upload_data = $this->upload->data(); 
                     //$this->session->set_flashdata('msg',  $upload_data['file_name']);
                }
               // $this->session->set_flashdata('msg', "2");
            }
            if($_FILES['filelogo']['name']=="")
            {
                $img=false;
                $upload_data['file_name'] = "";
            }
            $filelogo = $upload_data["file_name"];
           
            $fileimage = '';

            $this->load->model('dbadd');
            
            $checkhomepage = false;
            if($_POST["hiddenshowhomepage"] == true)
            {
                $checkhomepage = true;
            }            
            $ls = $this->dbadd->addservice('',$filelogo,$checkhomepage);
            if($ls>0)
            {
                $this->session->set_flashdata('msg',"New service added successfully");
                redirect('/addservice');
            }
            else
            {                
                $this->session->set_flashdata('msg',"Adding service failed");
                redirect('/addservice');
            }       
          redirect('/addservice');      
    }
    function edit()
    {
        $id= $this->input->get('id', TRUE);
        $this->load->model('dbget');
        $data["service"] = $this->dbget->getsingleservice($id);
    
        $this->load->view('1');
		$this->load->view('editservice',$data);
		$this->load->view('2');

    }
    function delete()
    {

         $id= $this->input->get('id', TRUE);
         // echo $id;
         $this->load->model('dbadd');
         $a = $this->dbadd->deleteservice($id);
         if($a==true)
         {
              $this->session->set_flashdata('msg',"Deleted successfully");
              //echo $id;
              redirect('/listservice');    
         }
         else
         {
              $this->session->set_flashdata('msg',"Deleting service failed");
              //echo $id;
              redirect('/addservice/edit'.'?id='.$id.'');
         }

    } 
    function update()
    {

        if($_FILES['filelogo']['name']<>"")
           {
                //image upload	            
                 $config['upload_path'] = './uploads/logo/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']	= '5000';
             
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('filelogo'))
                {                
                    $this->session->set_flashdata('msg', $this->upload->display_errors());                
                }
                else
                {
                     $img = true;
                     $upload_data = $this->upload->data(); 
                     //$this->session->set_flashdata('msg',  $upload_data['file_name']);
                }
               // $this->session->set_flashdata('msg', "2");
            }
            if($_FILES['filelogo']['name']=="")
            {
                $img=false;
                $upload_data['file_name'] = "";
            }
            $fileimage = $upload_data["file_name"];

           
            $id = $_POST["hiddenid"];
            if( $_POST["txttitle"] == "")
	        {
			    $this->session->set_flashdata('msg',"Unable to update gallery without title");               
		     	redirect("/addservice/edit?id=".$id);
	        }
            else
            {      
                    $this->load->model("dbadd");
	                $a= $this->dbadd->updateService($fileimage,$_POST["hiddenshowhomepage"]);
                    echo $_POST["hiddenshowhomepage"];
                    if($a == true)
                    {
                            $this->session->set_flashdata('msg',"Updated successfully");
                               
                           redirect('/listservice');   
                    }
                    else
                    {
                            $this->session->set_flashdata('msg',"Update gallery failed");
                            redirect('/addservice/edit'.'?id='.$id);
                    }
            }
    }   
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */