<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('is_logged_in') != TRUE){ redirect('login'); }
	}

	public function index()
	{
			
			$data['title'] = 'Project | HoatziNest';
			$this->load->view('header', $data);
			$this->load->view('about');
			$this->load->view('footer');

	}
	
	public function details(){
			
			$project = $this->uri->segment(3);
			$data['project'] = $this->project_model->get_project_details($project);
			$data['title'] = 'Project Details | HoatziNest';
			$data['team'] = $this->project_model->get_team_members($project);
			
			$this->load->view('header', $data);
			$this->load->view('project', $data);
			$this->load->view('footer');

	}
	
	public function join($project){
	
		// Set Var
		$email = $this->session->userdata('email');
		
		// Join User
		$this->project_model->join_project($project, $email);
		
		//Redirect to Project
		redirect('projects');
		
	}
	
	
	
}

