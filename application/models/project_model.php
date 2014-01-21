<?php

    class Project_model extends CI_Model{
        
        public function make_project($data){
            
            $this->db->insert('projects', $data);
            return $this->db->insert_id();
        
        }
        
        
        public function get_projects() {

            $this->db->order_by('project_id', 'DESC');
            $q = $this->db->get('projects', 4);
            if($q->num_rows > 0){
            
                foreach($q->result() as $row){
                
                    $data[]=$row;
                
                }
            return $data;
            }
        
        }
        
        public function get_all_projects() {
            
            $this->db->order_by('project_title', 'ASC');
            $r = $this->db->get('projects');
            if($r->num_rows > 0){
            
                foreach($r->result() as $row){
                
                    $data[]=$row;
                
                }
            return $data;
            }
            
        }
        
        public function get_project_details($id){
            $this->db->select('*');
            $this->db->from('projects');
            $this->db->where('project_id', $id);
            return $this->db->get()->row_array();
    
        }
		
		public function get_team_members($id){
			
			$this->db->select('team_members.user_id, users.first_name, users.last_name, users.location');
			$this->db->from('team_members');
			$this->db->where('team_members.project_id', $id);
			$this->db->join('users', 'users.id = team_members.user_id');
			
			return $this->db->get()->result_array();
			
		}
		
		
		public function join_project($id, $email){
			
			// Get UserID
			$this->db->select('id');
			$this->db->from('users');
			$this->db->where('email', $email);
			$user = $this->db->get()->row_array();
			
			// Set Insert Data
			$data = array(
			
				'project_id' => $id,
				'user_id' => $user['id']
				
			);
			
			// Insert into Team DB
			$this->db->insert('team_members', $data);
			
		}		
		
        
        
    }
?>