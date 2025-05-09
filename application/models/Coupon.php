<?php
class Coupon extends MY_Model {
    public function __construct()
    {
        parent::__construct();
    }
    public function get_coupon_data($coupon_id){
        if($coupon_id!=''){
            $query=$this->db->select('coupons.*')
                        ->from('coupons')
                        ->where('coupons.id',$coupon_id)
                        ->get();
            if($query->num_rows()==0){
                return false;
            } else {
                return $query->row_array();
            }
        } else {
            return false;
        }
        
        
    }
}
?>