<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Nếu chưa đăng nhập
        if (!$this->session->userdata("CheckLogin")) {
            // redirect(base_url());
        }
    }

    public function index()
    {
        $this->load->model("Muser");
        $data['countUser'] = $this->Muser->countAll();

        $this->load->model("Mbv");
        $data['countBV'] = $this->Mbv->countAll();

        $this->load->model("Mhsxt");
        $data['countHSXT'] = $this->Mhsxt->countAll();

        $this->load->model("Mndt");
        $data['countNDT'] = $this->Mndt->countAll();

        $this->load->view('admin/home_admin_view', $data);
    }

    //USER
    public function get_list_user()
    {
        $this->load->model("Muser");
        $config['total_rows'] = $this->Muser->countAll();
        $config['base_url'] = base_url() . "index.php/admin/get_list_user";
        $config['per_page'] = 5;

        $start = $this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listUser'] = $this->Muser->getList($start, $config['per_page']);
        $this->load->view("admin/get_list_user_admin_view", $data);
    }

    public function add_user()
    {
        $this->load->view("admin/s_add_user_admin_view");
    }

    public function pro_add_user()
    {
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tk', 'Tên Đăng Nhập', 'required');
        $this->form_validation->set_rules('mk', 'Mật Khẩu', 'required');
        $this->form_validation->set_rules('gt', 'Giới Tính', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('sdt', 'Số Điện Thoại', 'numeric');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->add_user();
        } else {
            try {
                $tk = isset($_POST['tk']) ? $_POST['tk'] : "";
                $mk = isset($_POST['mk']) ? $_POST['mk'] : "";
                $ht = isset($_POST['ht']) ? $_POST['ht'] : "";
                $gt = isset($_POST['gt']) ? $_POST['gt'] : "Nam";
                $email = isset($_POST['email']) ? $_POST['email'] : "";
                $ns = isset($_POST['ns']) ? $_POST['ns'] : "";
                $dc = isset($_POST['dc']) ? $_POST['dc'] : "";
                $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : "";
                $this->load->model("Muser");
                $this->Muser->add($tk, $mk, $ht, $gt, $email, $ns, $dc, $sdt);
                echo "<script>alert('Thêm Thành Công !!!')</script>";
                $this->get_list_user();
            } catch (Exception $e) {
                echo "<script>alert('Tài Khoản Đã Tồn Tại !!!')</script>";
                $this->add_user();
            }
        }
    }

    public function edit_user($id)
    {
        $this->load->model("Muser");
        $data['user'] = $this->Muser->getById($id);
        $this->load->view("admin/s_edit_user_admin_view", $data);
    }


    public function pro_edit_user($id)
    {
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mk', 'Mật Khẩu', 'required');
        $this->form_validation->set_rules('gt', 'Giới Tính', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('sdt', 'Số Điện Thoại', 'numeric');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->edit_user($id);
        } else {
            $mk = isset($_POST['mk']) ? $_POST['mk'] : "";
            $ht = isset($_POST['ht']) ? $_POST['ht'] : "";
            $gt = isset($_POST['gt']) ? $_POST['gt'] : "Nam";
            $email = isset($_POST['email']) ? $_POST['email'] : "";
            $ns = isset($_POST['ns']) ? $_POST['ns'] : "";
            $dc = isset($_POST['dc']) ? $_POST['dc'] : "";
            $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : "";
            $this->load->model("Muser");
            $this->Muser->edit($id, $mk, $ht, $gt, $email, $ns, $dc, $sdt);
            echo "<script>alert('Sửa Thành Công !!!')</script>";
            $this->edit_user($id);
        }
    }

    public function delete_user($id)
    {
        $this->load->model("Muser");
        $this->Muser->deleteById($id);
        echo "<script>alert('Xóa Thành Công !!!')</script>";
        $this->get_list_user();
    }

    public function get_list_user_s()
    {
        if (isset($_POST['search'])) {
            $s = $_POST['search'];
            $this->session->set_userdata('search', $s);
        } else {
            $s = $this->session->userdata('search');
        }
        $s = trim(htmlspecialchars(addslashes($s)));
        $this->load->model("Muser");
        $config['total_rows'] = $this->Muser->countAllS($s);
        $config['base_url'] = base_url() . "index.php/admin/get_list_user_s";
        $config['per_page'] = 5;

        $start = $this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listUser'] = $this->Muser->getListS($start, $config['per_page'], $s);
        $this->load->view("admin/get_list_user_admin_view", $data);
    }

    // Danh Mục
    public function get_list_dm()
    {
        $this->load->model("Mdm");
        $data['listDm'] = $this->Mdm->getListAll();
        //var_dump($data);
        $this->load->view("admin/get_list_dm_admin_view", $data);
    }

    public function pro_add_dm()
    {
        //var_dump($_POST);
        //Kiểm tra bằng form validation        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ma', 'Mã', 'required');
        $this->form_validation->set_rules('ten', 'Tên', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->get_list_dm();
        } else {
            $this->load->model("Mdm");
            $ma = isset($_POST['ma']) ? $_POST['ma'] : "";
            $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
            $this->Mdm->add($ma, $ten, null);
            echo "<script>alert('Thêm Thành Công !!!')</script>";
            $this->get_list_dm();
        }
    }

    public function edit_dm($ma_dm)
    {
        $this->load->model("Mdm");
        $data['dm'] = $this->Mdm->getByMaDM($ma_dm);

        $data['listDanhMuc'] = $this->Mdm->getListWithout($ma_dm);

        $data['dmC'] = $this->Mdm->getByMaDMCha($data["dm"]["ma_dm"]);
        //var_dump($data);

        $this->load->view("admin/s_edit_dm_admin_view", $data);
    }

    public function pro_edit_dm($ma_dm)
    {
        //Kiểm tra bằng form validation

        //var_dump($_POST);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('ten', 'Tên', 'required');
        $this->form_validation->set_rules('ma_cha', 'Mã Cha', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->edit_dm($ma_dm);
        } else {
            $this->load->model("Mdm");
            $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
            $ma_cha = isset($_POST['ma_cha']) ? $_POST['ma_cha'] : "";
            $this->Mdm->edit($ma_dm, $ten, $ma_cha);

            // Thêm dmc
            // Số dmc
            $count = intval($_POST["count"]);
            //echo "<br>";
            //var_dump($count);   

            for ($i = 1; $i < $count + 1; $i++) {
                $ma = isset($_POST[('maC' . $i)]) ? $_POST[('maC' . $i)] : "";
                $ten = isset($_POST[('tenC' . $i)]) ? $_POST[('tenC' . $i)] : "";

                if ($ma != "" && $ten != "") {
                    $this->Mdm->add($ma, $ten, $ma_dm);
                }
            }

            echo "<script>alert('Sửa Thành Công !!!')</script>";
            $this->edit_dm($ma_dm);
        }
    }

    public function delete_dm($ma_dm)
    {
        $this->load->model("Mctbv");
        $this->load->model("Mbv");
        $this->load->model("Mdm");
        $this->pro_delete_dm($ma_dm);
        //Lấy các bài viết thuộc danh mục
        $arrBv = $this->Mbv->getListByMaDM($ma_dm);
        foreach ($arrBv as $bv) {
            $ma_bv = $bv["ma_bv"];
            //var_dump("ma_bv: " . $ma_bv);
            //echo "<br>";
            //Xóa bài viết và chi tiết bài viết
            $this->Mctbv->deleteByMaBV($ma_bv);
            $this->Mbv->deleteByMaBV($ma_bv);
        }
        //echo "Xóa: " . $ma_dm  ."<br>";
        $this->Mdm->deleteByMaDM($ma_dm);
        echo "<script>alert('Xóa Thành Công !!!')</script>";
        $this->get_list_dm();
    }

    private function pro_delete_dm($ma_dm)
    {
        // Lấy các danh mục con
        $arrDMC = $this->Mdm->getByMaDMCha($ma_dm);
        foreach ($arrDMC as $DMC) {
            $ma_dmc = $DMC["ma_dm"];
            //var_dump("ma_dm_c: " . $ma_dmc);
            //echo "<br>";
            //Lấy các bài viết thuộc từng danh mục con
            $arrBv = $this->Mbv->getListByMaDM($ma_dmc);
            foreach ($arrBv as $bv) {
                $ma_bv = $bv["ma_bv"];
                //var_dump("ma_bv: " . $ma_bv);
                //echo "<br>";
                //Xóa bài viết và chi tiết bài viết
                $this->Mctbv->deleteByMaBV($ma_bv);
                $this->Mbv->deleteByMaBV($ma_bv);
            }
            $this->pro_delete_dm($ma_dmc);
            // Xóa danh mục con$
            //echo "Xóa: " . $ma_dmc  ."<br>";
            $this->Mdm->deleteByMaDM($ma_dmc);
        }
    }

    // Bài Viết
    public function get_list_bv()
    {
        $this->load->model("Mbv");
        $config['total_rows'] = $this->Mbv->countAll();
        $config['base_url'] = base_url() . "index.php/admin/get_list_bv";
        $config['per_page'] = 5;

        $start = $this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listBV'] = $this->Mbv->getList($start, $config['per_page']);
        $this->load->view("admin/get_list_bv_admin_view", $data);
    }

    public function delete_bv($ma_bv)
    {
        $this->load->model("Mctbv");
        $this->Mctbv->deleteByMaBV($ma_bv);

        $this->load->model("Mbv");
        $this->Mbv->deleteByMaBV($ma_bv);
        echo "<script>alert('Xóa Thành Công !!!')</script>";

        $this->get_list_bv();
    }

    public function add_bv()
    {
        $this->load->model("Mdm");
        $data['listDanhMuc'] = $this->Mdm->getListAll();
        $this->load->view("admin/s_add_bv_admin_view", $data);
    }

    public function pro_add_bv()
    {
        //Kiểm tra bằng form validation
        //var_dump($_POST);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('td', 'Tiêu Đề', 'required');
        $this->form_validation->set_rules('ndtt', 'Nội Dung Tóm Tắt', 'required');
        $this->form_validation->set_rules('dm', 'Danh Mục', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->add_bv();
        } else {
            // Thêm bv
            $config['upload_path']          = './assets/img/bv/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('link')) {
                echo "<script>alert('Lỗi Upload File !!!')</script>";
                $this->add_bv();
            } else {
                //var_dump($_POST);
                $this->load->model("Mbv");
                $dm = isset($_POST['dm']) ? $_POST['dm'] : "";
                $td = isset($_POST['td']) ? $_POST['td'] : "";
                $ndtt = isset($_POST['ndtt']) ? $_POST['ndtt'] : "";
                $link = $this->upload->data('file_name');
                $this->Mbv->add($dm, $td, $ndtt, $link);

                // Thêm ctbv
                // Số ctbv
                $count = intval($_POST["count"]);
                $ma_bv = $this->Mbv->getMaxMaBV()[0]["ma_bv"];
                //var_dump($ma_bv);      
                for ($i = 1; $i <= $count; $i++) {
                    $this->load->model("Mctbv");
                    $ndct = isset($_POST[('ndct' . $i)]) ? $_POST[('ndct' . $i)] : "";
                    $linkct = ($this->upload->do_upload(('linkct' . $i))) ? $this->upload->data('file_name') : "";
                    $this->Mctbv->add(($ma_bv), $ndct, $linkct);
                }
                echo "<script>alert('Thêm Bài viết thành Công !!!')</script>";
                $this->get_list_bv();
            }
        }
    }

    public function edit_bv($ma_bv)
    {
        $this->load->model("Mbv");
        $data['bv'] = $this->Mbv->getByMaBV($ma_bv);

        $this->load->model("Mdm");
        $data['listDanhMuc'] = $this->Mdm->getListAll();

        $this->load->model("Mctbv");
        $data['listCtbv'] = $this->Mctbv->getListByMaBV($data["bv"]["ma_bv"]);

        //var_dump($data);
        $this->load->view("admin/s_edit_bv_admin_view", $data);
    }

    public function pro_edit_bv($ma_bv)
    {
        //Kiểm tra bằng form validation

        //var_dump($_POST);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('td', 'Tiêu Đề', 'required');
        $this->form_validation->set_rules('ndtt', 'Nội Dung Tóm Tắt', 'required');
        $this->form_validation->set_rules('dm', 'Danh Mục', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->edit_bv($ma_bv);
        } else {
            // Sửa bài viết
            $config['upload_path']          = './assets/img/bv/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('link')) {
                echo "<script>alert('Lỗi Upload File !!!')</script>";
                $this->edit_bv($ma_bv);
            } else {
                $this->load->model("Mbv");
                $td = isset($_POST['td']) ? $_POST['td'] : "";
                $ndtt = isset($_POST['ndtt']) ? $_POST['ndtt'] : "";
                $dm = isset($_POST['dm']) ? $_POST['dm'] : "";
                $link = $this->upload->data('file_name');
                $this->Mbv->edit($ma_bv, $td, $ndtt, $link, $dm);

                // Xóa chi tiết cũ
                $this->load->model("Mctbv");
                $this->Mctbv->deleteByMaBV($ma_bv);

                // Thêm chi tiết mới
                $count = intval($_POST["count"]);
                //var_dump($ma_bv);      
                for ($i = 1; $i <= $count; $i++) {
                    $ndct = isset($_POST[('ndct' . $i)]) ? $_POST[('ndct' . $i)] : "";
                    $linkct = ($this->upload->do_upload(('linkct' . $i))) ? $this->upload->data('file_name') : "";
                    $this->Mctbv->add(($ma_bv), $ndct, $linkct);
                }

                echo "<script>alert('Sửa Thành Công !!!')</script>";
                $this->edit_bv($ma_bv);
            }
        }
    }

    public function get_list_bv_s()
    {
        if (isset($_POST['search'])) {
            $s = $_POST['search'];
            $this->session->set_userdata('search', $s);
        } else {
            $s = $this->session->userdata('search');
        }
        $s = trim(htmlspecialchars(addslashes($s)));
        $this->load->model("Mbv");
        $config['total_rows'] = $this->Mbv->countAllS($s);
        $config['base_url'] = base_url() . "index.php/admin/get_list_bv_s";
        $config['per_page'] = 5;

        $start = $this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listBV'] = $this->Mbv->getListS($start, $config['per_page'], $s);
        $this->load->view("admin/get_list_bv_admin_view", $data);
    }

    // Ngành đào tạo - DHTL
    public function get_list_ndt()
    {
        $this->load->model("Mndt");
        $config['total_rows'] = $this->Mndt->countAll();
        $config['base_url'] = base_url() . "index.php/admin/get_list_ndt";
        $config['per_page'] = 5;
        //$start=$this->uri->segment(3);
        $start = 0;
        $this->load->library('pagination', $config);
        $data['listNdt'] = $this->Mndt->getList($start, $config['per_page']);
        $this->load->view("admin/get_list_ndt_admin_view", $data);
    }

    public function add_ndt()
    {
        //$this->load->view("admin/s_add_dd_admin_view");
        $this->load->model("Mcsdt");
        $data['listCoSoDaoTao'] = $this->Mcsdt->getListAll();
        $this->load->view("admin/s_add_ndt_admin_view", $data);
    }



    public function pro_add_ndt()
    {
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('manganh', 'Tên ngành', 'required');
        $this->form_validation->set_rules('tennganh', 'Tên ngành', 'required');
        $this->form_validation->set_rules('chuongtrinhdaotao', 'Chương trình đào tạo', 'required');
        // $this->form_validation->set_rules('ghichu', 'Ghi chú', 'required');
        // $this->form_validation->set_rules('gioithieu', 'Giới thiệu', 'required');
        $this->form_validation->set_rules('coso', 'Lựa chọn cơ sở', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->add_ndt();
        } else {
            try {
                $manganh = isset($_POST['manganh']) ? $_POST['manganh'] : "";
                $tennganh = isset($_POST['tennganh']) ? $_POST['tennganh'] : "";
                $chuongtrinhdaotao = isset($_POST['chuongtrinhdaotao']) ? $_POST['chuongtrinhdaotao'] : "";
                $ghichu = isset($_POST['ghichu']) ? $_POST['ghichu'] : "";
                $gioithieu = isset($_POST['gioithieu']) ? $_POST['gioithieu'] : "";
                //$link = $this->upload->data('file_name');
                $coso = isset($_POST['coso']) ? $_POST['coso'] : "";
                $this->load->model("Mndt");
                $this->Mndt->add($manganh, $tennganh, $chuongtrinhdaotao, $ghichu, $gioithieu, $coso);
                echo "<script>alert('Thêm Thành Công !!!')</script>";
                $this->get_list_ndt();
            } catch (Exception $e) {
                echo "<script>alert('Tài Khoản Đã Tồn Tại !!!')</script>";
                $this->add_ndt();
            }
        }
    }

    public function get_list_ndt_s()
    {
        if (isset($_POST['search'])) {
            $s = $_POST['search'];
            $this->session->set_userdata('search', $s);
        } else {
            $s = $this->session->userdata('search');
        }
        $s = trim(htmlspecialchars(addslashes($s)));
        $this->load->model("Mndt");
        $config['total_rows'] = $this->Mndt->countAllS($s);
        $config['base_url'] = base_url() . "index.php/admin/get_list_ndt_s";
        $config['per_page'] = 5;

        $start = $this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listNdt'] = $this->Mndt->getListS($start, $config['per_page'], $s);
        $this->load->view("admin/get_list_ndt_admin_view", $data);
    }

    public function edit_ndt($id)
    {
        $this->load->model("Mndt");
        $data['ndt'] = $this->Mndt->getById($id);

        $this->load->model("Mcsdt");

        $data['listCoSoDaoTao'] = $this->Mcsdt->getListAll();
        $this->load->view("admin/s_edit_ndt_admin_view", $data);
    }



    public function delete_ndt($id)
    {
        $this->load->model("Mndt");
        $this->Mndt->deleteById($id);
        echo "<script>alert('Xóa Thành Công !!!')</script>";
        $this->get_list_ndt();
    }


    public function pro_edit_ndt($id)
    {
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('manganh', 'Tên ngành', 'required');
        $this->form_validation->set_rules('tennganh', 'Tên ngành', 'required');
        $this->form_validation->set_rules('chuongtrinhdaotao', 'Chương trình đào tạo', 'required');
        // $this->form_validation->set_rules('ghichu', 'Ghi chú', 'required');
        // $this->form_validation->set_rules('gioithieu', 'Giới thiệu', 'required');
        $this->form_validation->set_rules('coso', 'Lựa chọn cơ sở', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->edit_ndt($id);
        } else {
            $manganh = isset($_POST['manganh']) ? $_POST['manganh'] : "";
            $tennganh = isset($_POST['tennganh']) ? $_POST['tennganh'] : "";
            $chuongtrinhdaotao = isset($_POST['chuongtrinhdaotao']) ? $_POST['chuongtrinhdaotao'] : "";
            $ghichu = isset($_POST['ghichu']) ? $_POST['ghichu'] : "";
            $gioithieu = isset($_POST['gioithieu']) ? $_POST['gioithieu'] : "";
            //$link = $this->upload->data('file_name');
            $coso = isset($_POST['coso']) ? $_POST['coso'] : "";
            $this->load->model("Mndt");
            $this->Mndt->edit($id, $manganh, $tennganh, $chuongtrinhdaotao, $ghichu, $gioithieu, $coso);
            echo "<script>alert('Sửa Thành Công !!!')</script>";
            $this->edit_ndt($id);
        }
    }


    // Ho so xet tuyen
    public function add_hsxt()
    {
        $this->load->model("Mcsdt");
        $data['listCoSoDaoTao'] = $this->Mcsdt->getListAll();
        $this->load->model("Mndt");
        $data['listNhomNganh'] = $this->Mndt->getListAll();
        $this->load->model("Mthm");
        $data['listToHopMon'] = $this->Mthm->getListAll();
        // $this->load->model("Mthmxt");
        // $data['listToHopMonXetTuyen']= $this->Mthmxt->getListAll();
        //$this->load->view("admin/s_add_ndt_admin_view", $data);
        $this->load->view("admin/s_add_hsxt_admin_view", $data);
    }

    public function pro_add_hsxt()
    {
        //var_dump($_POST);
        $this->load->library('form_validation');
        // $this->form_validation->set_rules('ht', 'Họ tên', 'required');
        //$this->form_validation->set_rules('tk', 'Tên Đăng Nhập', 'required');
        // $this->form_validation->set_rules('gt', 'Giới Tính', 'required');
        // $this->form_validation->set_rules('ngaythangnamsinh', 'Ngày Sinh', 'required');
        // $this->form_validation->set_rules('tinhthanhpho', 'Tỉnh thành pho', 'required');
        // $this->form_validation->set_rules('quanhuyen', 'Quận Huyện', 'required');
        // $this->form_validation->set_rules('phuongthixa', 'Phường Thị Xã', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        // $this->form_validation->set_rules('sdt', 'Số Điện Thoại', 'numeric');
        // if($this->form_validation->run() == FALSE){
        //     echo "<script>alert('Lỗi Nhập !!!')</script>";
        //     $this->add_hsxt();
        // }
        // else

        {
            try {
                //var_dump($_POST);
                $ht = isset($_POST['ht']) ? $_POST['ht'] : "";
                $gt = isset($_POST['gt']) ? $_POST['gt'] : "Nam";
                $ngaythangnamsinh = isset($_POST['ngaythangnamsinh']) ? $_POST['ngaythangnamsinh'] : "";
                $noisinh = isset($_POST['noisinh']) ? $_POST['noisinh'] : "";
                $dantoc = isset($_POST['dantoc']) ? $_POST['dantoc'] : "";
                $socmnd = isset($_POST['socmnd']) ? $_POST['socmnd'] : "";
                $ngaycap = isset($_POST['ngaycap']) ? $_POST['ngaycap'] : "";
                $noicap = isset($_POST['noicap']) ? $_POST['noicap'] : "";
                $ho_khau_tinh_thanh_pho = isset($_POST['tinhthanhpho']) ? $_POST['tinhthanhpho'] : "";
                $ho_khau_quan_huyen = isset($_POST['quanhuyen']) ? $_POST['quanhuyen'] : "";
                $ho_khau_xa_phuong = isset($_POST['phuongthixa']) ? $_POST['phuongthixa'] : "";
                $ho_khau_thon_ban_duong_pho = isset($_POST['thonbanduongpho']) ? $_POST['thonbanduongpho'] : "";
                $tinh_tp_lop_10 = isset($_POST['tinhthanhpholop10']) ? $_POST['tinhthanhpholop10'] : "";
                $quan_huyen_lop_10 = isset($_POST['quanhuyenlop10']) ? $_POST['quanhuyenlop10'] : "";
                $truong_lop_10 = isset($_POST['truongthptlop10']) ? $_POST['truongthptlop10'] : "";
                $tinh_tp_lop_11 = isset($_POST['tinhthanhpholop11']) ? $_POST['tinhthanhpholop11'] : "";
                $quan_huyen_lop_11 = isset($_POST['quanhuyenlop11']) ? $_POST['quanhuyenlop11'] : "";
                $truong_lop_11 = isset($_POST['truongthptlop11']) ? $_POST['truongthptlop11'] : "";
                $tinh_tp_lop_12 = isset($_POST['tinhthanhpholop12']) ? $_POST['tinhthanhpholop12'] : "";
                $quan_huyen_lop_12 = isset($_POST['quanhuyenlop12']) ? $_POST['quanhuyenlop12'] : "";
                $truong_lop_12 = isset($_POST['truongthptlop12']) ? $_POST['truongthptlop12'] : "";
                $sdt_ts = isset($_POST['sdt']) ? $_POST['sdt'] : "";
                $email_ts = isset($_POST['email']) ? $_POST['email'] : "";
                $nam_tot_nghiep_ts = isset($_POST['namtotnghiep']) ? $_POST['namtotnghiep'] : "";
                $khu_vuc_uu_tien = isset($_POST['khuvucuutien']) ? $_POST['khuvucuutien'] : "";
                $doi_tuong_uu_tien = isset($_POST['doituonguutien']) ? $_POST['doituonguutien'] : "";
                $this->load->model("Mts");
                $this->Mts->add($ht, $gt, $ngaythangnamsinh, $noisinh, $dantoc, $socmnd, $ngaycap, $noicap, $ho_khau_tinh_thanh_pho, $ho_khau_quan_huyen, $ho_khau_xa_phuong, $ho_khau_thon_ban_duong_pho, $tinh_tp_lop_10, $quan_huyen_lop_10, $truong_lop_10, $tinh_tp_lop_11, $quan_huyen_lop_11, $truong_lop_11, $quan_huyen_lop_12, $tinh_tp_lop_12, $truong_lop_12, $sdt_ts, $email_ts, $nam_tot_nghiep_ts, $khu_vuc_uu_tien, $doi_tuong_uu_tien);
                echo "<script>alert('Thêm Thành Công !!!')</script>";
                // LAY MA
                //$maTs = intval($_POST["count"]);      
                $maTs = $this->Mts->getMaxMaTS()[0]["ma_ts"];
                //$maTs= $this->Mts->getMaxMaTS();
                //echo ''+$maTs;
                $this->load->model("Mhsxt");
                $this->Mhsxt->add($maTs);
                $this->edit_hsxt($maTs);

                // $this->edit_thong_tin_hsxt($id);
                // $this->add_hsxt();
            } catch (Exception $e) {
                echo "<script>alert('Thí sinh đã Tồn Tại !!!')</script>";
                $this->add_hsxt();
            }
        }
    }

    public function edit_hsxt($ma_ts)
    {
        $this->load->model("Mts");
        $data['ts'] = $this->Mts->getByMaTS($ma_ts);
        $this->load->model("Mhsxt");
        $data['ma_hsxt'] = $this->Mhsxt->getByMaTS($ma_ts);
        // var_dump($data);
        $this->load->model("Mcsdt");
        $data['listCoSoDaoTao'] = $this->Mcsdt->getListAll();
        $this->load->model("Mndt");
        $data['listNhomNganh'] = $this->Mndt->getListAll();
        $this->load->model("Mthm");
        $data['listToHopMon'] = $this->Mthm->getListAll();
        $this->load->view("admin/s_edit_hsxt_admin_view", $data);
    }



    public function edit_thong_tin_hsxt($id)
    {
        $this->load->model("Mhsxt");
        $data['thmxt'] = $this->Mthmxt->getById($id);
        $this->load->view("admin/s_edit_thong_tin_hsxt_admin_view", $data);
    }


    public function delete_hsxt($id)
    {
        $this->load->model("Mhsxt");
        $this->Mhsxt->deleteById($id);
        echo "<script>alert('Xóa Thành Công !!!')</script>";
        $this->get_list_hsxt();
    }

    public function get_list_hsxt()
    {
        $this->load->model("Mhsxt");
        $config['total_rows'] = $this->Mhsxt->countAll();
        $config['base_url'] = base_url() . "index.php/admin/get_list_hsxt";
        $config['per_page'] = 5;
        //$start=$this->uri->segment(3);
        $start = 0;
        $this->load->library('pagination', $config);
        $data['listHsxt'] = $this->Mhsxt->getList($start, $config['per_page']);
        //$data['listTs']= $this->Mts->getList($start, $config['per_page']);
        $this->load->view("admin/get_list_hsxt_admin_view", $data);
    }


    //co so dao tao

    public function get_list_csdt()
    {
        $this->load->model("Mcsdt");
        $config['total_rows'] = $this->Mcsdt->countAll();
        $config['base_url'] = base_url() . "index.php/admin/get_list_csdt";
        $config['per_page'] = 5;

        // $start=$this->uri->segment(3);
        $start = 0;
        $this->load->library('pagination', $config);
        $data['listCsdt'] = $this->Mcsdt->getList($start, $config['per_page']);
        $this->load->view("admin/get_list_csdt_admin_view", $data);
    }

    public function add_csdt()
    {
        $this->load->view("admin/s_add_csdt_admin_view");
    }

    public function pro_add_csdt()
    {
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tencsdt', 'Tên cơ sở đào tạo', 'required');
        $this->form_validation->set_rules('tinhthanhphocsdt', 'Tỉnh/thành phố', 'required');
        $this->form_validation->set_rules('quanhuyencsdt', 'Quận/huyện', 'required');
        $this->form_validation->set_rules('phuongthixacsdt', 'Xã/phường', 'required');
        $this->form_validation->set_rules('thonbanduongphocsdt', 'Thôn/bản/đường phố', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->add_csdt();
        } else {
            try {
                $tencsdt = isset($_POST['tencsdt']) ? $_POST['tencsdt'] : "";
                $tinhthanhphocsdt = isset($_POST['tinhthanhphocsdt']) ? $_POST['tinhthanhphocsdt'] : "";
                $quanhuyencsdt = isset($_POST['quanhuyencsdt']) ? $_POST['quanhuyencsdt'] : "";
                $phuongthixacsdt = isset($_POST['phuongthixacsdt']) ? $_POST['phuongthixacsdt'] : "";
                $thonbanduongphocsdt = isset($_POST['thonbanduongphocsdt']) ? $_POST['thonbanduongphocsdt'] : "";
                $this->load->model("Mcsdt");
                $this->Mcsdt->add($tencsdt,  $tinhthanhphocsdt, $quanhuyencsdt, $phuongthixacsdt, $thonbanduongphocsdt);
                echo "<script>alert('Thêm Thành Công !!!')</script>";
                $this->get_list_csdt();
            } catch (Exception $e) {
                echo "<script>alert('Cơ sỏ đã tồn tại !!!')</script>";
                $this->add_csdt();
            }
        }
    }

    public function edit_csdt($id)
    {
        $this->load->model("Mcsdt");
        $data['csdt'] = $this->Mcsdt->getById($id);
        $this->load->view("admin/s_edit_csdt_admin_view", $data);
    }

    public function pro_edit_csdt($id)
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('tencsdt', 'Tên cơ sở đào tạo', 'required');
        $this->form_validation->set_rules('tinhthanhphocsdt', 'Tỉnh/thành phố', 'required');
        $this->form_validation->set_rules('quanhuyencsdt', 'Quận/huyện', 'required');
        $this->form_validation->set_rules('phuongthixacsdt', 'Xã/phường', 'required');
        $this->form_validation->set_rules('thonbanduongphocsdt', 'Thôn/bản/đường phố', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->edit_csdt($id);
        } else {
            $tencsdt = isset($_POST['tencsdt']) ? $_POST['tencsdt'] : "";
            $tinhthanhphocsdt = isset($_POST['tinhthanhphocsdt']) ? $_POST['tinhthanhphocsdt'] : "";
            $quanhuyencsdt = isset($_POST['quanhuyencsdt']) ? $_POST['quanhuyencsdt'] : "";
            $phuongthixacsdt = isset($_POST['phuongthixacsdt']) ? $_POST['phuongthixacsdt'] : "";
            $thonbanduongphocsdt = isset($_POST['thonbanduongphocsdt']) ? $_POST['thonbanduongphocsdt'] : "";
            $this->load->model("Mcsdt");
            $this->Mcsdt->edit($id, $tencsdt, $tinhthanhphocsdt, $quanhuyencsdt, $phuongthixacsdt, $thonbanduongphocsdt);
            echo "<script>alert('Sửa Thành Công !!!')</script>";
            //$this->edit_csdt($id);
            $this->get_list_csdt();
        }
    }

    public function delete_csdt($id)
    {
        $this->load->model("Mcsdt");
        $this->Mcsdt->deleteById($id);
        echo "<script>alert('Xóa Thành Công !!!')</script>";
        $this->get_list_csdt();
    }







    //to hop mon xet tuyen
    public function edit_thmxt($id)
    {
        $this->load->model("Mthmxt");
        $data['thmxt'] = $this->Mthmxt->getById($id);
        $data['listNdt'] = $this->Mthmxt->getListAll();
        $this->load->model("Mthm");
        $data['listThm'] = $this->Mthm->getListAll();
        $this->load->view("admin/s_edit_thmxt_admin_view", $data);
    }

    public function add_thmxt()
    {
        $this->load->model("Mndt");
        $data['listNdt'] = $this->Mndt->getListAll();
        $this->load->model("Mthm");
        $data['listThm'] = $this->Mthm->getListAll();
        $this->load->view("admin/s_add_thm_admin_view", $data);
    }

    public function pro_add_thmxt()
    {

        try {
            $mandt = isset($_POST['mandt']) ? $_POST['mandt'] : "";
            $mathm = isset($_POST['mathm']) ? $_POST['mathm'] : "";
            $this->load->model("Mthmxt");
            $this->Mthmxt->add($mathm,  $mandt);
            echo "<script>alert('Thêm Thành Công !!!')</script>";
            $this->get_list_thmxt();
        } catch (Exception $e) {
            echo "<script>alert('Tổ hợp xét tuyển đã tồn tại !!!')</script>";
            $this->add_thmxt();
        }
    }

    public function pro_luu_file_minh_chung()
    {
        $ma_hsxt = $_POST["ma_hsxt"];
        $config['upload_path']          = './assets/img/file/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload("file")) {
            $status = 'error';
            $msg = $this->upload->display_errors('', '');
        } else {
            $data = $this->upload->data();
            //var_dump($data);
            //$data['file_name']
            $status = "success";
            $msg = "File successfully uploaded";

            $name = $data['file_name'];
            $size = $data['file_size'];

            // var_dump($name);
            // var_dump($size);

            $this->load->model("Mfmc");
            $this->Mfmc->add($ma_hsxt, "...", $name, $size);
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
    }

    public function pro_add_nguyen_vong()
    {
        // $maTs = $this->Mts->getMaxMaTS()[0]["ma_ts"];
        //     //$maTs= $this->Mts->getMaxMaTS();
        //     //echo ''+$maTs;
        // $this->edit_hsxt($maTs);
        //echo "Nhay vao day";
        //var_dump($_POST);
        //Insert database
        $ma_hsxt = $this->input->post('ma_hsxt');
        $tennguyenvong = $this->input->post('tennguyenvong');
        $csdt_edit_ts = $this->input->post('csdt_edit_ts');
        $nhomnganhxettuyen = $this->input->post('nhomnganhxettuyen');
        $tohopxettuyen = $this->input->post('tohopxettuyen');
        $this->load->model("Mnv");
        $this->Mnv->add($ma_hsxt,  $tennguyenvong, $csdt_edit_ts, $nhomnganhxettuyen, $tohopxettuyen);
        $result = $this->Mnv->where($ma_hsxt, $tennguyenvong);
        echo json_encode($result);
        //echo  $tennguyenvong;//lấy category_id từ view
        //$this->db->where('category_id', $category_id);    //đưa vào điều kiện tìm kiếm
        // $query = $this->db->get('sub_categories');       // lấy ra các subcategory có  category_id như đưa vào
        // $result = $query->result();
        // gửi dữ liệu về ajax
    }

    function get_category()
    {
        $category_id = $this->input->post('category_id');  //lấy category_id từ view
        $this->db->where('category_id', $category_id);    //đưa vào điều kiện tìm kiếm
        $query = $this->db->get('sub_categories');       // lấy ra các subcategory có  category_id như đưa vào
        $result = $query->result();
        echo json_encode($result);      //trả về response dưới dạng json
    }

    public function get_list_thmxt()
    {
        $this->load->model("Mthmxt");
        $config['total_rows'] = $this->Mthmxt->countAll();
        $config['base_url'] = base_url() . "index.php/admin/get_list_csdt";
        $config['per_page'] = 5;

        $start = $this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listThmxt'] = $this->Mthmxt->getList($start, $config['per_page']);
        $this->load->view("admin/get_list_thmxt_admin_view", $data);
    }



    //public function hoan_thanh_ho_so($ma_hsxt, $mail)
    public function hoan_thanh_ho_so($ma_hsxt, $mail)
    {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'huynhlx4@gmail.com',
            'smtp_pass' => 'huynhzip3',
            'mailtype' => 'html'
        );

        //$mail = base64_decode($mail);
        $mail = str_replace("-", "@", $mail);
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->to("$mail");

        $this->email->from("chinhtp62@wru.vn", "Ban tuyển sinh Đại học Thủy Lợi");
        $this->email->bcc("ngonphikp@gmail.com");
        $this->email->subject("Hồ sơ xét tuyển học bạ của bạn");

        $mes = base_url() . "home/hosoxettuyen/$ma_hsxt";

        $message = 'Bạn đã hoàn thành hồ sơ <br/>';
        $message .= 'Mã tra cứu của bạn là :';

        $key = "DHTL";

        $message .= base64_encode($key . $ma_hsxt . "");

        $this->email->message($message);

        // Tạo QR Code
        $this->load->library('ciqrcode');

        $params['data'] = $mes;
        $params['level'] = 'H';
        $params['size'] = 20;
        $path = '\assets\img\qrcode\\' . base64_encode($mes) . '.png';

        //var_dump($path);
        $params['savename'] = FCPATH . $path;

        $this->ciqrcode->generate($params);

        $linkfile = base_url() . $path;

        //echo '<img src="' . $linkfile . '" />';

        // End - QRCode

        $this->email->attach($linkfile);

        $result = $this->email->send();
        echo $this->email->print_debugger();

        redirect(base_url() . "home/hosoxettuyen/$ma_hsxt");
    }

    public function QRCode()
    {
        $this->load->view('test/testQRCode');
    }

    public function pro_QRCode()
    {
        var_dump($_POST);

        $url = $_POST["url"];

        $this->load->library('ciqrcode');

        $params['data'] = $url;
        $params['level'] = 'H';
        $params['size'] = 20;
        $path = '\assets\img\qrcode\\' . base64_encode($url) . '.png';

        var_dump($path);
        $params['savename'] = FCPATH . $path;

        $this->ciqrcode->generate($params);
        $linkfile = base_url() . $path;

        echo '<img src="' . $linkfile . '" />';
    }
}
