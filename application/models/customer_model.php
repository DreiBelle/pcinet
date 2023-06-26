<?php
    class customer_model extends CI_model {
        private $customer_id;
        private $name;
        private $contact_details;
        private $address;
        public function get_customer() {
            $this->db->select('*');
            $this->db->from('customer');
            $query=$this->db->get();
            $query->num_rows();
            return $query->row();
        }
    }
?>