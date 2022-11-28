<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('Search_model');
 }

 function index()
 {
if ($this->session->userdata('logged_in')>2)
{
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      
      $this->load->view('Dashboard', $data);
}
else{
  redirect('login','refresh');
}
}

function logout()
{
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('Dashboard', 'refresh');
}
}
?>