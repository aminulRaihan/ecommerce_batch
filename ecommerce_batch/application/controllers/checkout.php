<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Checkout extends CI_Controller {
    //put your code here
    public function index()
    {
        $data = array();
        $data['maincontent'] = $this->load->view('creat_account', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function verified_email($email_address=NULL)
    {
        //echo $email_address;
        $result=$this->checkout_model->check_verified_email($email_address);
        if($result)
        {
            echo  'Alredy Registured';
        }
        else{
            echo 'Avilable';
        }
    }
    public function save_customer()
    {
        $data=array();
        $data['first_name']=$this->input->post('first_name',true);
        $data['last_name']=$this->input->post('last_name',true);
        $data['email_address']=$this->input->post('email_address',true);
        $data['password']=$this->input->post('password',true);
        $data['mobile_no']=$this->input->post('mobile_no',true);
        $data['address']=$this->input->post('address',true);
        $data['zip_code']=$this->input->post('zip_code',true);
        $data['city']=$this->input->post('city',true);
        $data['country']=$this->input->post('country',true);
        $data['state']=$this->input->post('state',true);
        $data['newslatter']=$this->input->post('newslatter',true);
        $data['activation_status']=1;
        $customer_id=$this->general_model->save_info('tbl_customer',$data);
        $sdata['customer_id']=$customer_id;
        $sdata['full_name']=$data['first_name'].' '.$data['last_name'];
        $this->session->set_userdata($sdata);
        redirect('cart/show_cart');
        
    }
    public function shipping_same_as_billing()
    {
        $customer_id=$this->session->userdata('customer_id');
        $customer_info=$this->checkout_model->select_customer_by_id($customer_id);
        $data=array();
        $data['customer_id']=$customer_id;
        $data['full_name']=$customer_info->first_name.' '.$customer_info->last_name;
        $data['email_address']=$customer_info->email_address;
        $data['mobile_no']=$customer_info->mobile_no;
        $data['city']=$customer_info->city;
        $data['country']=$customer_info->country;
        $data['zip_code']=$customer_info->zip_code;
        $data['state']=$customer_info->state;
        $data['address']=$customer_info->address;
        $shipping_id=$this->general_model->save_info('tbl_shipping',$data);
        $sdata['shipping_id']=$shipping_id;
        $this->session->set_userdata($sdata);
        redirect('cart/show_cart');
        
    }
    public function confirm_order()
    {
       $payment_type=$this->input->post('payment_type');
       //echo '--'.$payment_type;
       $sdata=array();
       if($payment_type=='cash_on_delevary')
       {
          // echo '--'.$payment_type;
           //exit();
           $data=array();
           $data['payment_type']=$payment_type;
           $data['payment_status']=0;
           $payment_id=$this->general_model->save_info('tbl_payment',$data);
           $sdata['payment_id']=$payment_id;
           $this->session->set_userdata($sdata);
           $this->checkout_model->save_order_info();
           
           $customer_id=$this->session->userdata('customer_id');
           $customer_Info=$this->checkout_model->select_customer_by_id($customer_id);
           $mobile_no='88'.$customer_Info->mobile_no;
           //echo $mobile_no;
           //exit();
           
           /*$this->load->model('sms_api_model');
            
           $message='Your order Successfully Placed.Please check your email for details. your order total BDT :'.$this->cart->total();
           $this->sms_api_model->Sender("121.241.242.114","8080","talh-tania","sa18ttc2"," ","$message","$mobile_no","2","1");
           $this->sms_api_model->Submit ();*/
            
           
           //$data = array();
           $data['maincontent'] = $this->load->view('order_successfull', $data, TRUE);
           $this->load->view('master', $data);
           
       }
       else{
            $data=array();
           $data['payment_type']=$payment_type;
           $data['payment_status']=0;
           $payment_id=$this->general_model->save_info('tbl_payment',$data);
           $sdata['payment_id']=$payment_id;
           $this->session->set_userdata($sdata);
           $this->checkout_model->save_order_info();
           
           $customer_id=$this->session->userdata('customer_id');
           $customer_Info=$this->checkout_model->select_customer_by_id($customer_id);
           $mobile_no='88'.$customer_Info->mobile_no;
           //echo $mobile_no;
           //exit();
           
           /*$this->load->model('sms_api_model');
            
           $message='Your order Successfully Placed.Please check your email for details. your order total BDT :'.$this->cart->total();
           $this->sms_api_model->Sender("121.241.242.114","8080","talh-tania","sa18ttc2"," ","$message","$mobile_no","2","1");
           $this->sms_api_model->Submit ();*/
            
           
           //$data = array();
           $this->load->view('htmlWebsiteStandardPayment');
           
       }
    }

    public function logout()
    {
        $this->session->unset_userdata('full_name');
        $this->session->unset_userdata('customer_id');
        $this->cart->destroy();
        redirect('welcome','refresh');
        
    }
    
    
}

?>
