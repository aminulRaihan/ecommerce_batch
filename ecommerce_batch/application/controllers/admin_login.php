<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id != NULL)
        {
            redirect('super_admin','refresh');
        }
    }
    
    public function index(){
        $this->load->view('admin/login');
    }
    public function check_login(){
     $admin_email = $this->input->post('admin_email', TRUE);
     $admin_password = $this->input->post('admin_password', TRUE);
     $result = $this->admin_login_model->check_login_info($admin_email, $admin_password);
       // echo '<pre>';
       // print_r($result);
        //exit();
        $sdata = array();
        if($result){
        
       $sdata['admin_name'] = $result->admin_name;
       $sdata['admin_id'] = $result->admin_id;
        $this->session->set_userdata($sdata);
            
        redirect('super_admin');
        }  else {
        
        $sdata['exception'] = 'User Id or Password Invalid !';  
        $this->session->set_userdata($sdata);
        redirect('admin_login');    
        }

    }
    
    
}

?>
