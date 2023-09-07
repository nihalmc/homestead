<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addgalleryimage extends CI_Controller {

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
		
		
	
			
		 $this->load->model('dbget');
        $gallery = $this->dbget->getGallery();
		$data["gallery"] = $gallery;
		$this->load->view('1');
		$this->load->view('addgalleryimage',$data);
		$this->load->view('2');
       
		
	}
	public function add()
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
             if( $_POST["txttitle"] == "")
            {

                    $this->session->set_flashdata('msg',"Unable to add gallery without title");
                    
                    redirect("/addgalleryimage");
            }
            $this->load->model('dbadd');
             $a  = $this->dbadd->addGalleryImage($fileimage);
            if($a>0)
            {
                $this->session->set_flashdata('msg',"New gallery added successfully");
                redirect("/addgalleryimage");
            }
            else
            {	 
                $this->session->set_flashdata('msg',"gallery adding failed");
                redirect("/addgalleryimage");
                    

            }



	}
    function edit()
    {
        $id= $this->input->get('id', TRUE);
        $this->load->model('dbget');
        $data["galleryimage"] = $this->dbget->getsinglegalleryimage($id);
        $gallery = $this->dbget->getGallery();
		$data["gallery"] = $gallery;
    
        $this->load->view('1');
		$this->load->view('editgalleryimage',$data);
		$this->load->view('2');

    }
    function delete()
    {
        $id= $this->input->get('id', TRUE);
                // echo $id;
                $this->load->model('dbadd');
                $a = $this->dbadd->deletegalleryimage($id);
                if($a==true)
                {
                    $this->session->set_flashdata('msg',"Deleted successfully");
                    //echo $id;
                    redirect('/listgalleryimage');    
                }
                else
                {
                    $this->session->set_flashdata('msg',"Deleting gallery image failed");
                    echo $id;
                    redirect('/addgalleryimage/edit'.'?id='.$id.'');
                }

    }
    function update()
    {
            $id =  $_POST["hiddenid"];
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
                    
                    redirect("/addgalleryimage/edit?id=".$id);
            }
            $this->load->model('dbadd');
             $a  = $this->dbadd->updateGalleryImage($fileimage);
            if($a == true)
            {
                $this->session->set_flashdata('msg',"New gallery added successfully");
                redirect("/listgalleryimage");                
            }
            else
            {	
                 $this->session->set_flashdata('msg',"gallery adding failed");
                 redirect("/addgalleryimage/edit?id=".$id);
            }
    }

}