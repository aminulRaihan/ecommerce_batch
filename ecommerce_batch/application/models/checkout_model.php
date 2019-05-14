<?php
class Checkout_Model extends CI_Model{
public function check_verified_email($email_address)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email_address',$email_address);
        
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
 public function select_customer_by_id($customer_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_id',$customer_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function save_order_info()
    {
        $order_data=array();
        $order_data['customer_id']=$this->session->userdata('customer_id');
        $order_data['shipping_id']=$this->session->userdata('shipping_id');
        $order_data['payment_id']=$this->session->userdata('payment_id');
        $order_data['order_status']=0;
        $order_data['order_total']=$this->cart->total();
        $order_data['due_date']=$date=date('Y-d-m',  strtotime('+3 days'));
        $this->db->insert('tbl_order',$order_data);
        $order_id=$this->db->insert_id();
        
        $invoice_no='inv-'.date('Y-').$order_id;
        $this->db->set('invoice_no',$invoice_no);
        $this->db->where('order_id',$order_id);
        $this->db->update('tbl_order');
        
        $order_details_data=array();
        $order_details_data['order_id']=$order_id;
        $contents=$this->cart->contents();
        foreach($contents as $product_info)
        {
            $order_details_data['product_id']=$product_info['id'];
            $order_details_data['product_name']=$product_info['name'];
            $order_details_data['product_price']=$product_info['price'];
            $order_details_data['product_sales_quantity']=$product_info['qty'];
            $this->db->insert('tbl_order_details',$order_details_data);
            
        }
        $sql = "update tbl_product, tbl_order_details
                set tbl_product.product_quantity = tbl_product.product_quantity - tbl_order_details.product_sales_quantity 
                where tbl_product.product_id = tbl_order_details.product_id
                and tbl_order_details.order_id = '$order_id' ";
        $this->db->query($sql);
        
    }
    
}
?>
