<?php
class Muser extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from tai_khoan tk inner join thong_tin_tai_khoan tttk on tk.id_tk = tttk.id_tk;");
        return $query->num_rows();
    }

    public function getList($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from tai_khoan tk inner join thong_tin_tai_khoan tttk on tk.id_tk = tttk.id_tk limit $start , $size");
        return $query->result_array();
    }

    public function deleteById($id){
        $this->db->query("delete from thong_tin_tai_khoan where id_tk = $id;");
        $this->db->query("delete from tai_khoan where id_tk = $id;");
    }

    public function add($tk, $mk, $ht, $gt, $email_tk, $ns, $dc, $sdt_tk){
        $this->db->query("insert into tai_khoan(ten_dang_nhap, mat_khau,cap_do) values('$tk', '$mk','2');");
        $data=$this->db->query("select id_tk from tai_khoan where id_tk >= all (select id_tk from tai_khoan);")->row_array();
        $id=$data['id_tk'];
        $this->db->query("insert into thong_tin_tai_khoan(id_tk,ho_ten_tk,email_tk,ngay_sinh_tk,gioi_tinh_tk,dia_chi_tk,sdt_tk) values($id,'$ht','$email_tk','$ns','$gt','$dc',$sdt_tk);");
        $this->db->query("update thong_tin_tai_khoan set sdt_tk=LPAD(sdt_tk, 10, 0);");
    }

    // public function edit($id, $mk, $ht, $gt, $email_tk, $ns, $dc, $sdt_tk){
    //     $this->db->query("update tai_khoan set mat_khau = '$mk' where id_tk = '$id';");
    //     $this->db->query("update thong_tin_tai_khoan set ho_ten_tk = '$ht', email_tk = '$email_tk', ngay_sinh_tk = '$ns', gioi_tinh_tk = '$gt', dia_chi_tk = '$dc', sdt_tk = '$sdt_tk' where id_tk = $id;");
    // }

    public function edit($id, $mk, $ht, $gt, $email_tk, $ns, $dc, $sdt_tk){
        $this->db->query("update tai_khoan set mat_khau = '$mk' where id_tk = '$id';");
        $this->db->query("update thong_tin_tai_khoan set ho_ten_tk = '$ht', email_tk = '$email_tk', ngay_sinh_tk = '$ns', gioi_tinh_tk = '$gt', dia_chi_tk = '$dc', sdt_tk = '$sdt_tk' where id_tk = $id;");
        $this->db->query("update thong_tin_tai_khoan set sdt_tk=LPAD(sdt_tk, 10, 0);");
    }

   

    public function getById($id){
        $query=$this->db->query("select * from tai_khoan tk inner join thong_tin_tai_khoan tttk on tk.id_tk = tttk.id_tk where tk.id_tk = $id");
        return $query->row_array();
    }

    public function checkExists($tk, $mk){
        $query = $this->db->query("select * from tai_khoan where ten_dang_nhap = '$tk' and mat_khau = '$mk';");
        if ($query->num_rows() > 0)return TRUE;
        return FALSE;
    }

    //truy van search
    public function countAllS($s){
        $query=$this->db->query("select * from tai_khoan tk inner join thong_tin_tai_khoan tttk on tk.id_tk = tttk.id_tk where tk.ten_dang_nhap like '%$s%' OR tttk.ho_ten_tk like '%$s%' OR tttk.email_tk like '%$s%' OR tttk.dia_chi_tk like '%$s%';");
        return $query->num_rows();
    }

    public function getListS($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from tai_khoan tk inner join thong_tin_tai_khoan tttk on tk.id_tk = tttk.id_tk where tk.ten_dang_nhap like '%$s%' OR tttk.ho_ten_tk like '%$s%' OR tttk.email_tk like '%$s%' OR tttk.dia_chi_tk like '%$s%' limit $start , $size");
        return $query->result_array();
    }

    public function checkLogin($tk, $mk){
        $query=$this->db->query("select * from tai_khoan where ten_dang_nhap = '$tk' and mat_khau = '$mk';");
        $ck = $query->num_rows();
        if ($ck > 0){return true;
        }else{return false;}
    }

    public function infLogin($tk, $mk){
        $query=$this->db->query("select * from tai_khoan tk inner join thong_tin_tai_khoan tttk on tk.id_tk = tttk.id_tk where tk.ten_dang_nhap = '$tk' and tk.mat_khau = '$mk';");
        return $query->row_array();
    }

    public function getRow(){
        $data=$this->db->query("select id_tk from tai_khoan tk where id_tk >= all (select id_tk from tai_khoan);")->row_array();
        return $data['id_tk'];
    }

    public function active($id){
        $this->db->query("update tai_khoan set cap_do = '1' where id_tk = '$id';");
    }

    public function level($tk,$mk){
        $query=$this->db->query("select cap_do from tai_khoan where ten_dang_nhap = '$tk' and mat_khau = '$mk';")->row_array();
        return $query['cap_do'];
    }

}
