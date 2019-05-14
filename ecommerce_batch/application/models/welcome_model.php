<?php

class Welcome_Model extends CI_Model {

    public function select_all_published_product() {
        $this->db->select('tbl_product.*', FALSE);
        $this->db->select('tbl_product_special_rate.product_special_price', FALSE);
        $this->db->select('tbl_product_special_rate.date_start', FALSE);
        $this->db->select('tbl_product_special_rate.date_end', FALSE);
        $this->db->select('tbl_product_image.product_image', FALSE);
        $this->db->from('tbl_product');
        $this->db->join('tbl_product_special_rate', 'tbl_product.product_id = tbl_product_special_rate.product_id', 'left');
        $this->db->join('tbl_product_image', 'tbl_product.product_id = tbl_product_image.product_id', 'left');
        $this->db->where('publication_status', 1);
        $this->db->where('tbl_product_image.default_image', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

//        echo '<pre>';
//        print_r($result);
//        exit();
    }

    public function select_product_info_by_id($product_id) {

        $this->db->select('tbl_product.*', FALSE);
        $this->db->select('tbl_product_special_rate.product_special_price', FALSE);
        $this->db->select('tbl_product_special_rate.date_start', FALSE);
        $this->db->select('tbl_product_special_rate.date_end', FALSE);
        $this->db->select('tbl_product_image.product_image', FALSE);
        $this->db->select('product_manufacturer.manufacturer_name', FALSE);
        $this->db->from('tbl_product');
        $this->db->join('tbl_product_special_rate', 'tbl_product.product_id = tbl_product_special_rate.product_id', 'left');
        $this->db->join('tbl_product_image', 'tbl_product.product_id = tbl_product_image.product_id', 'left');
        $this->db->join('product_manufacturer', 'tbl_product.manufacturer_id = product_manufacturer.manufacturer_id', 'left');
        $this->db->where('tbl_product.product_id', $product_id);
        $this->db->where('tbl_product_image.default_image', 1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
//        echo '<pre>';
//        print_r($result);
//        exit();
    }

    public function select_product_image_by_id($product_id) {
       /* $this->db->select('*');
        $this->db->from('tbl_product_image');
        $this->db->where('product_id', $product_id);*/
        //$query_result = $this->db->get();
        $sql="SELECT * FROM tbl_product_image WHERE product_id='$product_id' ";
        
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
//        echo '<pre>';
//        print_r($result);
//        exit();
    }

}

?>
