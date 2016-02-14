<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	function __construct()
    {
        parent::__construct();
 
        $this->load->database();
				$this->load->helper('url');
				$this->load->library('grocery_CRUD');
 
    }
 
    public function index()
    {
        echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
        die();
    }
	public function employees()
	{
		$this->grocery_crud->set_table('EMPLOYEES');
		$output = $this->grocery_crud->render();
		$this->_example_output($output);        
    }
	
	public function jobs()
	{
		$this->grocery_crud->set_table('JOBS');
		$output = $this->grocery_crud->render();
		$this->_example_output($output);        
    }
	
	public function job_history()
	{
		$this->grocery_crud->set_table('JOB_HISTORY');
		$output = $this->grocery_crud->render();
		$this->_example_output($output);        
    }
	public function locations()
	{
		$this->grocery_crud->set_table('LOCATIONS');
		$output = $this->grocery_crud->render();
		$this->_example_output($output);        
    }
	
	public function regions()
	{
		$this->grocery_crud->set_table('REGIONS');
		$output = $this->grocery_crud->render();
		$this->_example_output($output);        
    }
	
	public function users()
	{
		$this->grocery_crud->set_table('USERS');
		$output = $this->grocery_crud->render();
		$this->_example_output($output);        
    }
	public function departments()
	{
		$this->grocery_crud->set_table('DEPARTMENTS');
		$output = $this->grocery_crud->render();
		$this->_example_output($output);        
    }
	
	public function countries()
	{
		$this->grocery_crud->set_table('COUNTRIES');
		$output = $this->grocery_crud->render();
		$this->_example_output($output);        
    }
 
    function _example_output($output = null)
 
    {
        $this->load->view('our_template.php',$output);    
    }

	
}
