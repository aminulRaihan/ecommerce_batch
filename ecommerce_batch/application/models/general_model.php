<?php
class General_Model extends CI_Model {
    //put your code here
    
    public function save_info($table_name,$data) {
        
        /*echo '---'.$table_name.'---<br/>';
        echo '<pre>';
        print_r($data);
        exit();*/
        
        $this->db->insert($table_name, $data);
        $id=$this->db->insert_id();
        return $id;
    }
    public function select_all() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
}

?>
