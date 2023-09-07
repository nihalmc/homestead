

<?php
    class Dbget extends CI_Model
    {
		function DoLogin($user,$pass)
		{
			$this->db->where("username",$user);
			$this->db->where("password",$pass);
			$this->db->select('username,password');
			$this->db->from('users');
			$sql = $this->db->get();
			$result = $sql->row_array();
			if($sql->num_rows()>0 )			
			{
					$password = $result['password'];					
					if($password == $pass)
					{
					
						return array("success"=>"1", "message"=>"", "username"=>$result["username"]);
					}
					else
					{
							return array("success"=>"0", "message"=>"Invalid try", "username"=>"");												
					}				
			}
			else
			{
				return array("success"=>"0", "message"=>"Invalid Username/Password", "username"=>"");
			}
								
		
		}
		function getServices()
		{

			$result = $this->db->get("services");		
			return $result->result();		

		}
		function getGallery()
		{
			$result = $this->db->get("gallery");
			return $result->result();

		}
		function getGalleryimages()
		{
				$this->db->where("gallery_id",$_POST['gallery_id']);
			$result = $this->db->get("gallery_images");
			return $result->result();
		}
		function getsingleservice($id)
		{

		
			$this->db->where("id",$id);
			$this->db->select('*');
			$this->db->from('services');
			$sql = $this->db->get();
			$result = $sql->row_array();
			return $result;
		}
		function getsinglegalleryimage($id)
		{
				$this->db->where("id",$id);
			$this->db->select('*');
			$this->db->from('gallery_images');
			$sql = $this->db->get();
			$result = $sql->row_array();
			return $result;
		}
		function getsinglegalley($id)
		{
			$this->db->where("id",$id);
			$this->db->select("*");
			$this->db->from('gallery');
			$sql = $this->db->get();
			$result = $sql->row_array();
			return $result;

		}
	}
?>