<?php
class Mts extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from thi_sinh");
        return $query->num_rows();
    }

    public function getMaxMaTS()
    {
        $query=$this->db->query("select ma_ts from thi_sinh order by ma_ts desc limit 1");
        return $query->result_array();
    }
    
    public function add($ho_ten_ts, $gioi_tinh_ts, $ngay_sinh_ts, $noi_sinh_ts, $dan_toc_ts , $so_cmnd_cccd_ts, $ngay_cap, $noi_cap, 
$ho_khau_tinh_thanh_pho, $ho_khau_quan_huyen, $ho_khau_xa_phuong, $ho_khau_thon_ban_duong_pho, $tinh_tp_lop_10, $quan_huyen_lop_10, $truong_lop_10, $tinh_tp_lop_11, $quan_huyen_lop_11, $truong_lop_11, $quan_huyen_lop_12, $tinh_tp_lop_12, $truong_lop_12, $sdt_ts, $email_ts, $nam_tot_nghiep_ts, $khu_vuc_uu_tien, $doi_tuong_uu_tien){
        
            $this->db->query("insert into thi_sinh (
                ho_ten_ts,
                gioi_tinh_ts,
                ngay_sinh_ts,
                noi_sinh_ts,
                dan_toc_ts,
                so_cmnd_cccd_ts,
                ngay_cap ,
                noi_cap ,
                ho_khau_tinh_thanh_pho ,
                ho_khau_quan_huyen,
                ho_khau_xa_phuong ,
                ho_khau_thon_ban_duong_pho,
                tinh_tp_lop_10 ,
                quan_huyen_lop_10 ,
                truong_lop_10,
                    tinh_tp_lop_11 ,
                    quan_huyen_lop_11 ,
                    truong_lop_11 ,
                    tinh_tp_lop_12 ,
                    quan_huyen_lop_12 ,
                    truong_lop_12 ,
                    sdt_ts ,
                    email_ts ,
                    nam_tot_nghiep_ts ,
                    khu_vuc_uu_tien ,
                    doi_tuong_uu_tien) values (
                    '$ho_ten_ts',
                    '$gioi_tinh_ts',
                    '$ngay_sinh_ts',
                    '$noi_sinh_ts',
                    '$dan_toc_ts',
                    '$so_cmnd_cccd_ts',
                    '$ngay_cap',
                    '$noi_cap',
                    '$ho_khau_tinh_thanh_pho',
                    '$ho_khau_quan_huyen',
                    '$ho_khau_xa_phuong',
                    '$ho_khau_thon_ban_duong_pho',
                    '$tinh_tp_lop_10',
                    '$quan_huyen_lop_10',
                    '$truong_lop_10',
                    '$tinh_tp_lop_11',
                    '$quan_huyen_lop_11',
                    '$truong_lop_11',
                    '$tinh_tp_lop_12',
                    '$quan_huyen_lop_12',
                    '$truong_lop_12',
                    '$sdt_ts',
                    '$email_ts',
                    '$nam_tot_nghiep_ts',
                    '$khu_vuc_uu_tien',
                    '$doi_tuong_uu_tien');");
       
                // if (!$rs) {
                //     echo "<script>alert('Thí sinh đã Tồn Tại !!!')</script>";
                //     echo "<script>window.history.back();</script>";
                // }
        // $data=$this->db->query("select id_dd from dia_diem dd where id_dd >= all (select id_dd from dia_diem);")->row_array();
        // $id=$data['id_dd'];
        // $this->db->query("insert into ctdd(id_dd,tieu_de_dd, noi_dung_dd, loai) values($id,'$td','$nd','$loai');");
    }

    // public function getList($start, $size){
    //     $start = isset($start)? $start : 0;
    //     $query=$this->db->query("select * from thi_sinh  limit $start , $size");
    //     return $query->result_array();
    // }

    // // public function deleteById($id){
    // //     $this->db->query("delete from nganh_dao_tao where ma_ndt = $id;");
    // // }

    
    // public function edit($id,$tennganh, $chuongtrinhdaotao, $ghichu, $gioithieu, $coso){
    //     $this->db->query("update nganh_dao_tao set ten_ndt = '$tennganh', chuong_trinh_dao_tao_ndt = '$chuongtrinhdaotao', ghi_chu_ndt= '$ghichu' , gioi_thieu_ndt='$gioithieu',ma_csdt= '$coso' where ma_ndt = $id;");
        
    // }
    // public function getById($id){
    //     $query=$this->db->query("select * from co_so_dao_tao csdt inner join phuong_thi_xa ptx on csdt.dia_chi_csdt = ptx.ma_ptx inner join quan_huyen qh on ptx.ma_qh = qh.ma_qh inner join tinh_thanh_pho ttp on qh.ma_ttp = ttp.ma_ttp where csdt.ma_csdt = $id;");
    //     return $query->row_array();
    // }

    public function getByMaTS($ma_ts){
        $query=$this->db->query("select * from thi_sinh where ma_ts = $ma_ts;");
        return $query->row_array();
    }  

    public function edit($id,$ho_ten_ts, $gioi_tinh_ts, $ngay_sinh_ts, $noi_sinh_ts, $dan_toc_ts , $so_cmnd_cccd_ts, $ngay_cap, $noi_cap, 
$ho_khau_tinh_thanh_pho, $ho_khau_quan_huyen, $ho_khau_xa_phuong, $ho_khau_thon_ban_duong_pho, $tinh_tp_lop_10, $quan_huyen_lop_10, $truong_lop_10, $tinh_tp_lop_11, $quan_huyen_lop_11, $truong_lop_11, $quan_huyen_lop_12, $tinh_tp_lop_12, $truong_lop_12, $sdt_ts, $email_ts, $nam_tot_nghiep_ts, $khu_vuc_uu_tien, $doi_tuong_uu_tien){
        
            $this->db->query("update thi_sinh set
                ho_ten_ts='$ho_ten_ts',
                gioi_tinh_ts='$gioi_tinh_ts',
                ngay_sinh_ts='$ngay_sinh_ts',
                noi_sinh_ts='$noi_sinh_ts',
                dan_toc_ts='$dan_toc_ts',
                so_cmnd_cccd_ts='$so_cmnd_cccd_ts',
                ngay_cap='$ngay_cap' ,
                noi_cap='$noi_cap' ,
                ho_khau_tinh_thanh_pho='$ho_khau_tinh_thanh_pho' ,
                ho_khau_quan_huyen='$ho_khau_quan_huyen',
                ho_khau_xa_phuong='$ho_khau_xa_phuong' ,
                ho_khau_thon_ban_duong_pho='$ho_khau_thon_ban_duong_pho',
                tinh_tp_lop_10='$tinh_tp_lop_10' ,
                quan_huyen_lop_10='$quan_huyen_lop_10' ,
                truong_lop_10='$truong_lop_10',
                    tinh_tp_lop_11='$tinh_tp_lop_11' ,
                    quan_huyen_lop_11='$quan_huyen_lop_11' ,
                    truong_lop_11='$truong_lop_11' ,
                    tinh_tp_lop_12='$tinh_tp_lop_12' ,
                    quan_huyen_lop_12='$quan_huyen_lop_12' ,
                    truong_lop_12='$truong_lop_12' ,
                    sdt_ts='$sdt_ts' ,
                    email_ts='$email_ts' ,
                    nam_tot_nghiep_ts='$nam_tot_nghiep_ts' ,
                    khu_vuc_uu_tien='$khu_vuc_uu_tien' ,
                    doi_tuong_uu_tien='$doi_tuong_uu_tien' where ma_ts=$id;");
       
                // if (!$rs) {
                //     echo "<script>alert('Thí sinh đã Tồn Tại !!!')</script>";
                //     echo "<script>window.history.back();</script>";
                // }
        // $data=$this->db->query("select id_dd from dia_diem dd where id_dd >= all (select id_dd from dia_diem);")->row_array();
        // $id=$data['id_dd'];
        // $this->db->query("insert into ctdd(id_dd,tieu_de_dd, noi_dung_dd, loai) values($id,'$td','$nd','$loai');");
    }

    
    
}
?>