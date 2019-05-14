<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    // PAGE URL -------------------------------------------------------->>

    public function index() {     
        
        $data = array();
        $data['all_published_product'] = $this->welcome_model->select_all_published_product();
        $data['maincontent'] = $this->load->view('home_content', $data, TRUE);
        $this->session->set_userdata($data);
              
        $this->load->view('master', $data);
    }

    public function creat_account() {
        $data = array();
        $data['maincontent'] = $this->load->view('creat_account', $data, TRUE);
        $this->load->view('master', $data);
    }
    
       public function customer_login() {
        $data = array();
        $data['maincontent'] = $this->load->view('customer_login', $data, TRUE);
        $this->load->view('master', $data);
    }
    
        public function check_out() {
        $data = array();
        $data['maincontent'] = $this->load->view('checkout', $data, TRUE);
        $this->load->view('master', $data);
    }
    
      // PRODUCT code strat from here ---------------------------------------------------->>

    public function product_details($product_id) {
        $data = array();
        $data['product_info'] = $this->welcome_model->select_product_info_by_id($product_id);
        /*echo '<pre>';
        print_r($data['product_info']);
        exit();*/
        $data['product_image'] = $this->welcome_model->select_product_image_by_id($product_id);
        $data['maincontent'] = $this->load->view('product_details', $data, TRUE);
        $this->load->view('master', $data);
    }

 



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */