<?php
class Exam extends CI_Model {

	var $sid;
	var $sname;

	function __construct() {
		$this -> load -> database();
		parent::__construct();
	}
function check($username, $password) {
		/*$this -> db -> select('*');
		 $this -> db -> from('faculty');
		 $this -> db -> where('faculty_username', $email);
		 $this -> db -> where('faculty_pass', $password);
		 $query = $this -> db -> get();*/

		$query = $this -> db -> query("select * from userdata where username='$username' &&  password='$password' ");
		return $query;
	}
	
	
	
	public function adminadd($name, $contact, $address, $email, $photo)
		{
		   
			$data = array(
						  
						   'name' => $name ,
						   'contact' => $contact ,
						   'address' => $address,
						   'email' => $email,
						   'photo' => $photo ,
						   
								);
			$this->db->insert('admindata',$data);
			
		
		}
	}