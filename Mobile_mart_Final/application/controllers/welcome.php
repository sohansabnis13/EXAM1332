<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct() {
		parent::__construct();
		$this -> load -> library('session');
		$this -> load -> library('encrypt');
		$this -> load -> model('exam');
		$this -> load -> database();
		$this -> load -> helper(array('form', 'url'));
		$prefs = array('show_next_prev' => TRUE, 'next_prev_url' => 'http://example.com/index.php/calendar/show/');
		$this -> load -> library('calendar', $prefs);
	}
	 public function login(){
	 
	 
	 $this->load->view('home_page.php');
	 $this->load->view('Login.php');
		$this->load->view('footer.php');
	 }
	 
	  public function Aboutus(){
	 
	 
	 $this->load->view('home_page.php');
	 $this->load->view('Aboutus.php');
		$this->load->view('footer.php');
	 }
	 
	 function login1() {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$row3 = $this -> exam ->check($username, $password);

		if ($row3 -> num_rows() > 0) {

			foreach ($row3->result() as $getid) {

				$newdata = array('firstname' => $getid -> firstname, 'User_id' => $getid -> User_id );
			}

			$this -> session -> set_userdata($newdata);
$this->load->view('header.php');
		$this->load->view('footer.php');			
		} else {
			echo " <h1>Unautorized User</h1>  Direct Access to this location is not allowed";
				login();
		}

	}

	 
	public function index1()
	{
		$this->load->view('header.php');
		$this->load->view('footer.php');
			
	}
	
	public function index()
	{
		$this->load->view('home_page.php');
		$this->load->view('footer.php');
			
	}
	
	
	public function Addbrand()
	{
			$this->load->view('header.php');
		//$this->load->view('AdminhomePage.php');
			$this->load->view('BrandAdd.php');
				$this->load->view('footer.php');
		
		
	}
	public function Admin()
	{
			$this->load->view('header.php');
			$this->load->view('AddAdmin.php');
			$this->load->view('footer.php');

		
	}
	
	
	public function ViewOutlets()
	{
			$this->load->view('home_page.php');
			$this->load->view('View.php');
							$this->load->view('footer.php');

		
	}
	public function ViewMargao()
	{
			$this->load->view('home_page.php');
			$this->load->view('ViewOutlets.php');
							$this->load->view('footer.php');

		
	}
	
	public function ViewLondon()
	{
			$this->load->view('home_page.php');
			$this->load->view('ViewOutlets1.php');
							$this->load->view('footer.php');

		
	}
	
	
	
	 function addAdmin()
	 {
	 $name=$this->input->post("name");
	 $contact=$this->input->post("contact");
	 $address=$this->input->post("address");
	 $email=$this->input->post("email");
	 $photo=$this->input->post("pic");
	 
	 $this->exam->adminadd($name,$contact,$address, $email,$photo);
	 $this->load->view('home_page.php');
		  
			$this->load->view('footer.php');

	   
	 
	 
	 }
	
	
	public function Home()
	{
			$this->load->view('home_page.php');
		    $this->load->view('AdminhomePage.php');
			$this->load->view('footer.php');

		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */