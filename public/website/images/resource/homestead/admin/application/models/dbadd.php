

<?php
    class Dbadd extends CI_Model
    {
	
			function addservice($image,$logo,$checkhomepage)
			{
				if($checkhomepage == true)
			{

				$show = 1;	
			}
			else
			{
				$show = 0;
			}

				if(	$this->db->insert("services",array("image"=>$image,"logo"=>$logo,"show_in_home_page"=>$show, "text"=>$_POST["txtDescription"],"title"=> $_POST['txttitle'] )))
				{
						return $this->db->insert_id();
				}
				else
				{
					return 0;

				}
			}
			function addGallery($image,$checkhomepage)
			{
				if($checkhomepage == true)
				{

				$show = 1;	
			}
			else
			{
				$show = 0;
			}
				if(	$this->db->insert("gallery",array("image"=>$image,"show_in_home_page"=>$show, "title"=> $_POST['txttitle'] )))
				{
						return $this->db->insert_id();
				}
				else
				{
					return 0;

				}

			}
			function addGalleryImage($image)
			{
				if($this->db->insert("gallery_images",array("image"=>$image,"title"=>$_POST["txttitle"],"gallery_id"=>$_POST["SelectGallery"] )))
				{
					return $this->db->insert_id();	

				}
				else
				{
					return 0;
				}

			}
		function deleteservice($id)
        {
             $sql = $this->db->delete('services', array('id' => $id));
            return true;
                            
            

        }
		function deletegalleryimage($id)
        {
             $sql = $this->db->delete('gallery_images', array('id' => $id));
            return true;
                            
            

        }
		function deletegallery($id)
		{
			if($this->db->delete('gallery', array('id' => $id )))
			{
			   if(	$this->db->delete('gallery_images', array('gallery_id' => $id)))
			   {
					return true;

			   }

			}
			return false;
		}

	    function updateGallery($fileimage,$checkhomepage)
		{
			if($checkhomepage == true)
			{

				$show = 1;	
			}
			else
			{
				$show = 0;
			}
			if($fileimage == '')
			{
				
				$data= array("title"=>$_POST["txttitle"],"show_in_home_page"=>$show);
				if($this->db->where("id",$_POST['hiddenid'])->update("gallery",$data))
				{
					return true;
			    }
			}
			else
			{
				$data= array("title"=>$_POST["txttitle"],"show_in_home_page"=>$show,"image"=>$fileimage);
				if($this->db->where("id",$_POST['hiddenid'])->update("gallery",$data))
				{
					return true;
			    }
			}
			return false;
		}
		function updateService($fileimage,$checkhomepage)
		{	
			if($checkhomepage == true)
			{

				$show = "1";	
			}
			else
			{
				$show = "0";
			}
			
			if($fileimage == '')
			{
				
				$data= array("title"=>$_POST["txttitle"],"text"=>$_POST["txtDescription"],"show_in_home_page"=>$show);
				if($this->db->where("id",$_POST['hiddenid'])->update("services",$data))
				{
					return true;
			    }
			}
			else
			{
				
				$data= array("title"=>$_POST["txttitle"],"text"=>htmlentities($_POST["txtDescription"]),"show_in_home_page"=>$show,"logo"=>$fileimage);
				if($this->db->where("id",$_POST['hiddenid'])->update("services",$data))
				{
					return true;
			    }
			}
			return false;

		}
		function updateGalleryImage($filename)
		{

			if($fileimage == '')
			{
							
				$data= array("gallery_id"=>$_POST["SelectGallery"],"title"=>$_POST["txttitle"]);
				if($this->db->where("id",$_POST['hiddenid'])->update("gallery_images",$data))
				{
					return true;
				}
			}
			else
			{
						
				$data= array("gallery_id"=>$_POST["SelectGallery"],"title"=>$_POST["txttitle"],"image"=>$fileimage);
				if($this->db->where("id",$_POST['hiddenid'])->update("gallery_images",$data))
				{
					return true;
				}
			}
			return false;
		}
		function changepassword()
		{
			$this->db->where("username","admin");
			$this->db->select('*');
			$this->db->from('users');
			$sql = $this->db->get();
			$result = $sql->row_array();
			//return $result;
			if($result["password"] != $_POST["txtoldpassword"])
			{
				return "Invalid Password";
			}
			if( $_POST["txtnewpassword"] != $_POST["txtconfirmpassword"] )
			{
				return "New password and confirm password missmatch";

			}
			$data= array("password"=>$_POST["txtnewpassword"]);
				if($this->db->where("username","admin")->update("users",$data))
				{
					return "password changed!!";
				}


		}
	}
?>