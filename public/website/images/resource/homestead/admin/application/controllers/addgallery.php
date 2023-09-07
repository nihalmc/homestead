<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addgallery extends CI_Controller {

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
		$this->load->view('addgallery');
		$this->load->view('2');		
	}
     function add()
    {
		$checkhomepage = false;
            if( $_POST["hiddenshowhomepage"] == true)
            {
                $checkhomepage = true;
            }
            



 if($_FILES['fimeimage']['name']<>"")
           {
                //image upload	            
                 $config['upload_path'] = './uploads/gallery/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']	= '5000';
             
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('fimeimage'))
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
            if($_FILES['fimeimage']['name']=="")
            {
                $img=false;
                $upload_data['file_name'] = "";
            }
            $fileimage = $upload_data["file_name"];
           
          




       if( $_POST["txttitle"] == "")
	   {

			$this->session->set_flashdata('msg',"Unable to add gallery without title");
               
			redirect("/addgallery");
	   }
	   $this->load->model("dbadd");
	   $a= $this->dbadd->addGallery($fileimage,$checkhomepage);
	   if($a>0)
	   {
 				 $this->session->set_flashdata('msg',"New gallery added successfully");
                redirect('/addgallery');
	   }
	   else
	   {	 $this->session->set_flashdata('msg',"gallery adding failed");
                redirect('/addgallery');

	   }
    }
    public function edit()
    {
        $id= $this->input->get('id', TRUE);
        $this->load->model('dbget');
        $data["gallery"] = $this->dbget->getsinglegalley($id);
	    $this->load->view('1');
		$this->load->view('editgallery',$data);
		$this->load->view('2');
    }
    public  function delete()
    {
         $id= $this->input->get('id', TRUE);
         // echo $id;
         $this->load->model('dbadd');
         $a = $this->dbadd->deletegallery($id);
         if($a==true)
         {
              $this->session->set_flashdata('msg',"Deleted successfully");
              //echo $id;
              redirect('/listgallery');    
         }
         else
         {
              $this->session->set_flashdata('msg',"Deleting gallery failed");
              //echo $id;
              redirect('/addgallery/edit'.'?id='.$id.'');
         }
    }
    public function update()
    {

           if($_FILES['fimeimage']['name']<>"")
           {
                //image upload	            
                 $config['upload_path'] = './uploads/gallery/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']	= '5000';
             
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('fimeimage'))
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
            if($_FILES['fimeimage']['name']=="")
            {
                $img=false;
                $upload_data['file_name'] = "";
            }
            $fileimage = $upload_data["file_name"];

           
            $id = $_POST["hiddenid"];
            if( $_POST["txttitle"] == "")
	        {
			    $this->session->set_flashdata('msg',"Unable to update gallery without title");               
		     	redirect("/addgallery/edit?id=".$id);
	        }
            else
            {      
                    $this->load->model("dbadd");
	                $a= $this->dbadd->updateGallery($fileimage,$_POST["hiddenshowhomepage"]);
                  //echo $_POST["hiddenshowhomepage"];
                    if($a == true)
                    {
                            $this->session->set_flashdata('msg',"Updated successfully");
                               
                           redirect('/listgallery');   
                    }
                    else
                    {
                            $this->session->set_flashdata('msg',"Update gallery failed");
                            redirect('/addgallery/edit'.'?id='.$id);
                    }
            }


    }    
}