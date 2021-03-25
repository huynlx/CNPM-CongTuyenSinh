<?php
class Mnv extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from nguyen_vong");
        return $query->num_rows();
    }

    public function where($ma_hsxt,$ten_nguyen_vong)
    {
        $query=$this->db->query("select * from nguyen_vong where ma_hsxt='$ma_hsxt' and ten_nguyen_vong='$ten_nguyen_vong';");
        return $query->result_array();
    }
    
    public function add($ma_hsxt,  $tennguyenvong, $csdt_edit_ts, $nhomnganhxettuyen, $tohopxettuyen){
        $this->db->query("insert into nguyen_vong(ma_hsxt, ten_nguyen_vong, ma_csdt, ma_ndt, ma_thm,trang_thai)  values('$ma_hsxt','$tennguyenvong','$csdt_edit_ts', '$nhomnganhxettuyen', '$tohopxettuyen','Đã nhận');");
        //$this->db->query("insert into ho_so_xet_tuyen(ma_ts) values($ma_ts);");
    }

    public function getByMaHsxt($ma_hsxt)
    {
        $query=$this->db->query("select * from nguyen_vong where ma_hsxt='$ma_hsxt';");
        return $query->result_array();
    }
    
}
?>