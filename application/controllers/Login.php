<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
 	if($this->session->userdata('logged_in'))
   	{
  	 redirect('Dashboard', 'refresh');
    }
   else
   {
   	$query1 = $this->db->get('year');    
    $data['PName1']=$query1->result_array();
   	$this->load->helper(array('form'));
  	$this->load->view('login_view',$data);
    
   }
 }

}

?>