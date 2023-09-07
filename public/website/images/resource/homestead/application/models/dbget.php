<?php
    class Dbget extends CI_Model
    {
       
      function newsbyid($id)
      {
          $this->db->select("*");
          $this->db->where("id",$id);
          $this->db->from("news_events");
          $sql=$this->db->get();
          return $sql->row_array();
      }
	   function news_events()
        {
            $this->db->select("*");
            $this->db->from("news_events");
            $sql=$this->db->get();
            return $sql->result();
          
        }
         function getgallery()
        {
          
            $this->db->select("*");

            $result = $this->db->get("gallery");		
			return $result->result();	
        }
	 function getongoing()
			{
			  
				$this->db->select("*");
$this->db->where("categoryid",1);
				$result = $this->db->get("projects");		
				return $result->result();	
			}

 function getupcoming()
			{
			  
				$this->db->select("*");
                $this->db->where("categoryid",4);
				$result = $this->db->get("projects");		
				return $result->result();	
			}
             function getcompleted()
			{
			  
				$this->db->select("*");
                $this->db->where("categoryid",3);
				$result = $this->db->get("projects");		
				return $result->result();	
			}
            function getproject_specification($id)
            {
                
                $this->db->where("projects.id",$id);
                $this->db->select("projects.name as projectname,specifications.name as specificationname,specifications.id as specificationid, project_specifications.value");
                $this->db->from('project_specifications');
                $this->db->join('projects','projects.id= project_specifications.projectid','inner');
                 $this->db->join('specifications','specifications.id=project_specifications.specificationid','inner');
             
$this->db->order_by("specifications.id  ", "asc");
			$sql = $this->db->get();
			return $sql->result();	
			
            }
    }
    