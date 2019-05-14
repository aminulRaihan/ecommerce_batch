<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin_login', 'refresh');
        }
        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            'id' => 'ck_editor',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full",
                'width' => "90%",
                'height' => "200px"
            )
        );
    }

    public function index() {

        $data = array();
        $data['admin_content'] = $this->load->view('admin/admin_main_content', '', TRUE);
        $data['title'] = 'Blog Home Page';
        $this->load->view('admin/admin_master', $data);
    }

// CATEGORY CODE START-------------------------------------------------------->>
    public function add_category() {
        $data = array();
        $data['admin_content'] = $this->load->view('admin/add_category', '', TRUE);
        $data['title'] = 'Add Category';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->super_admin_model->save_category_info($data);

        $sdata = array();
        $sdata['message'] = "Save Category Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_category');
    }

    public function manage_category() {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_category();
        $data['admin_content'] = $this->load->view('admin/category_grid', $data, TRUE);
        $data['title'] = 'Manage Category';
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_category($category_id) {
        $this->super_admin_model->unpublished_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    public function published_category($category_id) {
        $this->super_admin_model->published_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    public function delete_category($category_id) {
        $this->super_admin_model->delete_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    public function edit_category($category_id) {
        $data = array();
        $data['category_info'] = $this->super_admin_model->select_category_info_by_id($category_id);
        $data['admin_content'] = $this->load->view('admin/edit_category', $data, TRUE);
        $data['title'] = 'Edit Category';
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category() {
        $data = array();
        $category_id = $this->input->post('category_id', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->super_admin_model->update_category_by_id($data, $category_id);

        $sdata = array();
        $sdata['message'] = "Update Category Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_category');
    }

// MANUFACTURE CODE START-------------------------------------------------------->>
    public function add_manufacture() {
        $data = array();
        $data['admin_content'] = $this->load->view('admin/add_manufacture', '', TRUE);
        $data['title'] = 'Add Manufacturer';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_manufacture() {
        $data = array();
        $data['manufacturer_name'] = $this->input->post('manufacturer_name', TRUE);
        $data['manufacturer_description'] = $this->input->post('manufacturer_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->super_admin_model->save_manufacturer_info($data);

        $sdata = array();
        $sdata['message'] = "Save Manufacture Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_manufacture');
    }

    public function manage_manufacture() {
        $data = array();
        $data['all_manufacture'] = $this->super_admin_model->select_all_manufacture();
        $data['admin_content'] = $this->load->view('admin/manufacture_grid', $data, TRUE);
        $data['title'] = 'Manage Manufacturer';
        $this->load->view('admin/admin_master', $data);
    }

    // PRODUCT CODE START-------------------------------------------------------->>   
    public function add_product() {
        $data = array();
        $data['editor'] = $this->data;
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category();
        $data['admin_content'] = $this->load->view('admin/add_product', $data, TRUE);
        $data['title'] = 'Add New Product';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_product() {

        //echo $this->input->post('category_id', TRUE);
        //exit();
        $data = array();
        $data['product_name'] = $this->input->post('product_name', TRUE);
        $data['product_model'] = $this->input->post('product_model', TRUE);
        $data['product_price'] = $this->input->post('product_price', TRUE);
        $data['manufacturer_id'] = $this->input->post('manufacturer_id', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['product_short_description'] = $this->input->post('product_short_description', TRUE);
        $data['product_long_description'] = $this->input->post('product_long_description', TRUE);
        $data['product_quantity'] = $this->input->post('product_quantity', TRUE);
        $data['product_reorder_level'] = $this->input->post('product_reorder_level', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $product_id = $this->super_admin_model->save_product_info($data);


        /*
         * Start Image Upload------------------
         */

        $data = array();
        $default_image = $this->input->post('default_image', TRUE);
        $config['upload_path'] = 'img/product_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['max_width'] = '2024';
        $config['max_height'] = '1768';
        $error = '';
        $fdata = array();
        /*echo '<pre>';
        print_r($_FILES);
        exit();*/
        
        
        $this->load->library('upload', $config);

        if (!$this->upload->do_multi_upload('product_image')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        } else {
            $return = $this->upload->get_multi_upload_data();
            /*echo '<pre>';
            print_r($return);
            exit();*/
            foreach ($return as $value) {
                $data['product_image'] = $config['upload_path'] . $value['file_name'];
                $data['product_id'] = $product_id;
                $data['default_image'] = $default_image;
                $this->super_admin_model->save_product_image_info($data);
                $default_image = 0;
            }
        }

        /*
         * End Image Upload------------
         */

        if ($this->input->post('product_special_price', TRUE)) {
            $data = array();
            $data['product_id'] = $product_id;
            $data['product_special_price'] = $this->input->post('product_special_price', TRUE);
            $data['date_start'] = $this->input->post('date_start', TRUE);
            $data['date_end'] = $this->input->post('date_end', TRUE);
            $this->super_admin_model->save_product_special_price($data);
        }




        $sdata = array();
        $sdata['message'] = "Save Blog Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_product');
    }

    public function manage_product() {
        $data = array();
        $data['all_product_details'] = $this->super_admin_model->all_product_details();

        $data['admin_content'] = $this->load->view('admin/product_grid', $data, TRUE);
        $data['title'] = 'Manage Category';
        $this->load->view('admin/admin_master', $data);
    }
    public function manage_order() {
        $data = array();
        $this->load->library('pagination');
        $config['base_url'] = base_url() .'super_admin/manage_order/';
        
        $config['total_rows'] = $this->db->count_all('tbl_order');
        $config['per_page'] = '5';
        //$config['full_tag_open'] = "<ul class='pagination'>";
        //$config['full_tag_close'] = '</ul>';
        $this->pagination->initialize($config);
        $data['all_orders'] = $this->super_admin_model->all_orders($config['per_page'], $this->uri->segment(3));
        /*echo '<pre>';
        print_r($data['all_orders']);
        exit();*/
        $data['admin_content'] = $this->load->view('admin/order_grid', $data, TRUE);
        $data['title'] = 'Manage Orders';
        $this->load->view('admin/admin_master', $data);
    }
    public function details($order_id)
    {
        $data = array();
        $data['order_info']=$this->super_admin_model->select_order_by_id($order_id);
        $customer_id=$data['order_info']->customer_id;
        $shipping_id=$data['order_info']->shipping_id;
        $data['billing_info']=$this->super_admin_model->select_customer_by_id($customer_id);
        $data['shipping_info']=$this->super_admin_model->select_shipping_by_id($shipping_id);
        $data['order_details']=$this->super_admin_model->order_details_info($order_id);
        //$data['order_info']=$this->super_admin_model->select_order_by_id($order_id);
        $data['admin_content'] = $this->load->view('admin/invoice', $data, TRUE);
        $data['title'] = 'Order Details';
        $this->load->view('admin/admin_master', $data);
    }
    public function make_pdf($order_id)
    {
        $data = array();
        $data['order_info']=$this->super_admin_model->select_order_by_id($order_id);
        $customer_id=$data['order_info']->customer_id;
        $shipping_id=$data['order_info']->shipping_id;
        $data['billing_info']=$this->super_admin_model->select_customer_by_id($customer_id);
        $data['shipping_info']=$this->super_admin_model->select_shipping_by_id($shipping_id);
        $data['order_details']=$this->super_admin_model->order_details_info($order_id);
        
        
        $this->load->helper('dompdf');
        $view_file=$this->load->view('admin/invoice', $data, true);
        $file_name=pdf_create($view_file, $data['order_info']->invoice_no);
        echo $file_name;
    }
    public function print_invoice($order_id)
    {$data = array();
        $data['order_info']=$this->super_admin_model->select_order_by_id($order_id);
        $customer_id=$data['order_info']->customer_id;
        $shipping_id=$data['order_info']->shipping_id;
        $data['billing_info']=$this->super_admin_model->select_customer_by_id($customer_id);
        $data['shipping_info']=$this->super_admin_model->select_shipping_by_id($shipping_id);
        $data['order_details']=$this->super_admin_model->order_details_info($order_id);
        
        
        
        $this->load->view('admin/invoice', $data);
        
        
    }

    public function order_search()
    {
        $search_text=$this->input->post('search_text');
                
        $data = array();
        $this->load->library('pagination');
        $config['base_url'] = base_url() .'super_admin/manage_order/';
        
        $config['total_rows'] = $this->db->count_all('tbl_order');
        $config['per_page'] = '5';
        //$config['full_tag_open'] = "<ul class='pagination'>";
        //$config['full_tag_close'] = '</ul>';
        $this->pagination->initialize($config);
        $data['all_orders'] = $this->super_admin_model->order_search_info($config['per_page'], $this->uri->segment(3),$search_text);
        /*echo '<pre>';
        print_r($data['all_orders']);
        exit();*/
        $data['admin_content'] = $this->load->view('admin/order_grid', $data, TRUE);
        $data['title'] = 'Manage Orders';
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_blog($blog_id) {
        $this->super_admin_model->unpublished_blog_by_id($blog_id);
        redirect('super_admin/manage_blog');
    }

    public function published_blog($blog_id) {
        $this->super_admin_model->published_blog_by_id($blog_id);
        redirect('super_admin/manage_blog');
    }

    public function edit_blog($blog_id) {
        $data = array();
        $data['editor'] = $this->data;
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_blog'] = $this->super_admin_model->select_blog_by_id($blog_id);
        $data['admin_content'] = $this->load->view('admin/edit_blog', $data, TRUE);
        $data['title'] = 'Edit Blog';
        $this->load->view('admin/admin_master', $data);
    }

    public function update_blog() {
        $data = array();
        $blog_id = $this->input->post('blog_id', TRUE);

        $data['blog_title'] = $this->input->post('blog_title', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['blog_short_description'] = $this->input->post('blog_short_description', TRUE);
        $data['blog_long_description'] = $this->input->post('blog_long_description', TRUE);
        $data['author_name'] = $this->input->post('author_name', TRUE);
        $data['author_email'] = $this->input->post('author_email', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);

        $this->super_admin_model->update_blog_by_id($data, $blog_id);

        $sdata = array();
        $sdata['message'] = "Update Blog Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_blog');
    }

    public function delete_blog($blog_id) {
        $this->super_admin_model->delete_blog_by_id($blog_id);
        $sdata = array();
        $sdata['message'] = "Delete Blog Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_blog');
    }

    public function logout() {
        $sdata = array();
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_id');
        $sdata['message'] = 'You are Successfully Logout !';
        $this->session->set_userdata($sdata);
        redirect('admin_login', 'refresh');
    }

    public function add_user() {
        $data = array();
        $data['admin_content'] = $this->load->view('admin/add_user', '', TRUE);
        $data['title'] = 'Add User';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_user() {
        $data = array();
        $data['admin_name'] = $this->input->post('admin_name', TRUE);
        $data['admin_email'] = $this->input->post('admin_email', TRUE);
        $data['admin_password'] = md5($this->input->post('admin_password', TRUE));
        $this->super_admin_model->save_user_info($data);

        $sdata = array();
        $sdata['message'] = "Save User Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_user');
    }

    public function manage_user() {
        $data = array();
        $data['all_user'] = $this->super_admin_model->select_all_user();

        $data['admin_content'] = $this->load->view('admin/user_grid', $data, TRUE);
        $data['title'] = 'Manage User';
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_user($admin_id) {
        $data = array();
        $data['all_user'] = $this->super_admin_model->select_user_by_id($admin_id);
        $data['admin_content'] = $this->load->view('admin/edit_user', $data, TRUE);
        $data['title'] = 'Edit User';
        $this->load->view('admin/admin_master', $data);
    }

    public function update_user() {

        $data = array();
        $admin_id = $this->input->post('admin_id', TRUE);
        $data['admin_id'] = $this->input->post('admin_id', TRUE);
        $data['admin_name'] = $this->input->post('admin_name', TRUE);
        $data['admin_email'] = $this->input->post('admin_email', TRUE);

        $password = $this->input->post('admin_password', TRUE);
        if ($password == '') {
            
        } else {
            $data['admin_password'] = md5($password);
        }
        $this->super_admin_model->update_user_by_id($data, $admin_id);

        $sdata = array();
        $sdata['message'] = "Update User Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_user');
    }

    public function delete_user($admin_id) {
        $this->super_admin_model->delete_user_by_id($admin_id);
        $sdata = array();
        $sdata['message'] = "Delete User Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_user');
    }
    public function piechart_report()
    {
        $data = array();
        $data['A']=5;
        $data['B']=10;
        $data['C']=8;
        $data['D']=7;
        $data['F']=10;
        $data['admin_content'] = $this->load->view('admin/pie_chart_test',$data, TRUE);
        $data['title'] = 'Report';
        $this->load->view('admin/admin_master', $data); 
    }
    public function barchart_report()
    {
        $data=array();
        $data['admin_content'] = $this->load->view('admin/vertical_bar_chart_test',$data, TRUE);
        $data['title'] = 'Report';
        $this->load->view('admin/admin_master', $data); 
    }

}

?>