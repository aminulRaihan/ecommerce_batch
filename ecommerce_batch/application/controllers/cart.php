<?php
class Cart extends CI_Controller {
    //put your code here
    
    public function add_to_cart()
    {
        //echo $product_id;
        $product_id=$this->input->post('product_id',true);
        //echo '---'.$product_id;
        //exit();
        $product_info= $this->welcome_model->select_product_info_by_id($product_id);
        /*echo '<pre>';
        print_r($product_info);
        exit();*/
        
        
        
        $qty=$this->input->post('qty',true);
        if($product_info->product_special_price)
        {
            $product_price=$product_info->product_special_price;
        }
        else{
            $product_price=$product_info->product_price;
        }
        
        
        $data = array(
               'id'      => $product_info->product_id,
               'qty'     => $qty,
               'price'   => $product_price,
               'name'    => $product_info->product_name,
               'image' => $product_info->product_image
            );

        $this->cart->insert($data); 
        
        
        redirect('cart/show_cart');
    }
    public function update_cart($drowid=NULL)
    {
        $data=array();
        $qty=$this->input->post('qty',true);
        $rowid=$this->input->post('rowid',true);
        //echo '------'.$drowid;
        //exit();
        if($drowid)
        {
            $data = array(
               'rowid' => $drowid,
               'qty'   => 0
            );

        $this->cart->update($data);
        }
        else{
        $data = array(
               'rowid' => $rowid,
               'qty'   => $qty
            );

        $this->cart->update($data);
        }
        redirect('cart/show_cart');
    }

    public function show_cart()
    {
        $data=array();
        $data['maincontent'] = $this->load->view('cart_view','', TRUE);
        $this->load->view('master', $data);
    }
}

?>
