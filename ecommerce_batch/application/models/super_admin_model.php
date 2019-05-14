<?php

class Super_Admin_Model extends CI_Model {

    // CATEGORY code start from here ------------------------------>>
    public function save_category_info($data) {
        $this->db->insert('tbl_category', $data);
    }

    public function select_all_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_category_by_id($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function published_category_by_id($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function select_category_info_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_by_id($data, $category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

    public function delete_category_by_id($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }

    // MANUFACTURER code start from here ------------------------------>>
    public function save_manufacturer_info($data) {
        $this->db->insert('product_manufacturer', $data);
    }

    public function select_all_manufacture() {
        $this->db->select('*');
        $this->db->from('product_manufacturer');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_manufacturer() {
        $this->db->select('*');
        $this->db->from('product_manufacturer');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    // PRODUCT code start from here ----------------------------------->>


    public function select_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function save_product_info($data) {
        $this->db->insert('tbl_product', $data);
        $product_id = $this->db->insert_id();
        return $product_id;
    }

    public function save_product_special_price($data) {
        $this->db->insert('tbl_product_special_rate', $data);
    }

    public function save_product_image_info($data) {
        $this->db->insert('tbl_product_image', $data);
    }

    public function all_product_details() {
        $this->db->select('tbl_product.*', FALSE);
        $this->db->select('tbl_product_special_rate.product_special_price', FALSE);
        $this->db->select('tbl_product_image.product_image', FALSE);
        $this->db->from('tbl_product');
        $this->db->join('tbl_product_special_rate', 'tbl_product.product_id = tbl_product_special_rate.product_id', 'left');
        $this->db->join('tbl_product_image', 'tbl_product.product_id = tbl_product_image.product_id', 'left');
        $this->db->where('tbl_product_image.default_image', 1);
        $query_result = $this->db->get();

        $result = $query_result->result();
        return $result;
//        echo '<pre>';
//        print_r($result);
//        exit();
    }

    public function unpublished_blog_by_id($blog_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog');
    }

    public function published_blog_by_id($blog_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog');
    }

    public function select_blog_by_id($blog_id) {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id', $blog_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_blog_by_id($data, $blog_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog', $data);
    }

    public function delete_blog_by_id($blog_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->delete('tbl_blog');
    }

    public function select_all_user() {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function save_user_info($data) {
        $this->db->insert('tbl_admin', $data);
    }

    public function select_user_by_id($admin_id) {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_id', $admin_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_user_by_id($data, $admin_id) {
        $this->db->where('admin_id', $admin_id);
        $this->db->update('tbl_admin', $data);
    }

    public function delete_user_by_id($admin_id) {
        $this->db->where('admin_id', $admin_id);
        $this->db->delete('tbl_admin');
    }
    public function all_orders($per_page,$offset)
    {
        if($offset==NULL)
        {
            $offset=0;
            //$upper_lmit=$per_page;
        }
        $sql="SELECT o.order_id,o.invoice_no,o.order_total,o.order_status,c.first_name
            ,c.last_name FROM tbl_order as o, tbl_customer as c WHERE o.customer_id=c.customer_id LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    public function select_order_by_id($order_id)
    {
        $sql="SELECT * FROM tbl_order WHERE order_id='$order_id' ";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    public function select_customer_by_id($customer_id)
    {
        $sql="SELECT * FROM tbl_customer WHERE customer_id='$customer_id' ";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    public function select_shipping_by_id($shipping_id)
    {
        $sql="SELECT * FROM tbl_shipping WHERE shipping_id='$shipping_id' ";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    public function order_details_info($order_id)
    {
        $sql="SELECT * FROM tbl_order_details WHERE order_id='$order_id' ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    public function order_search_info($per_page, $offset,$search_text)
    {
        if($offset==NULL)
        {
            $offset=0;
            //$upper_lmit=$per_page;
        }
        $sql="SELECT o.order_id,o.invoice_no,o.order_total,o.order_status,c.first_name
            ,c.last_name FROM tbl_order as o, tbl_customer as c WHERE o.customer_id=c.customer_id AND ( order_id='$search_text' OR invoice_no LIKE '%$search_text%') LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

}

?>
