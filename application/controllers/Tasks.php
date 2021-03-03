<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		//load database in autoload libraries 
		  parent::__construct(); 
		  $this->load->model('TasksModel');         
	   }

	public function index()
	{
		$tasks=new TasksModel;
		$data['data']=$tasks->get_tasks();
		print_r($data);
		$this->load->view('includes/header');       
		$this->load->view('tasks/list',$data);
		$this->load->view('includes/footer');
	}

	public function create()
	{
	   $this->load->view('includes/header');
	   $this->load->view('tasks/create');
	   $this->load->view('includes/footer');      
	}
	public function store()
   {
       $tasks=new TasksModel;
       $tasks->insert_task();
       redirect(base_url('tasks'));
    }

	public function edit($id)
	{
	
		$task = $this->db->get_where('task', array('task_id' => $id))->row();
	
		$this->load->view('includes/header');
		$this->load->view('tasks/edit',array('task'=>$task));
		$this->load->view('includes/footer');   
	}

	public function update($id)
	{
		$tasks=new TasksModel;
		$tasks->update_task($id);
		redirect(base_url('tasks'));
	}
}
