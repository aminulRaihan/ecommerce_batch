<?php

class Admin_Login_Model extends CI_Model {

    public function check_login_info($admin_email, $admin_password) {

        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email', $admin_email);
        $this->db->where('admin_password', md5($admin_password));
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}

?>
