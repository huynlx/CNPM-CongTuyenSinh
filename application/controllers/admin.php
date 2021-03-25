<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */


    public function index()
    {
        $this->load->model('Muser');
        $data['count_User'] = $this->Muser->countAll();
        $this->load->model('Mts');
        $data['count_Ts'] = $this->Mts->countAll();
        $this->load->model('Mhsxt');
        $data['count_Hsxt'] = $this->Mhsxt->countAll();
        $this->load->model('Mcsdt');
        $data['count_Csdt'] = $this->Mcsdt->countAll();
        $this->load->model('Mndt');
        $data['count_Ndt'] = $this->Mndt->countAll();



        $this->load->view('admin/index', $data);
    }

    //User
    public function get_list_user()
    {
        $this->load->model('Muser');
        $config['total_rows'] = $this->Muser->countAll();
        $config['base_url'] = base_url() . "admin/get_list_user";
        $config['per_page'] = 7;


        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';

        $config['first_link'] = 'First Page';
        // $config['first_tag_open'] = '<a class="firstlink" tabindex="1">';
        // $config['first_tag_close'] = '</a>';

        $config['last_link'] = 'Last Page';
        // $config['last_tag_open'] = '<a class="lastlink">...';
        // $config['last_tag_close'] = '</a>';

        $config['next_link'] = 'Next Page';
        // $config['next_tag_open'] = '<a class="nextlink">';
        // $config['next_tag_close'] = '</a>';

        $config['prev_link'] = 'Prev Page';
        // $config['prev_tag_open'] = '<a class="prevlink">';
        // $config['prev_tag_close'] = '</a>';

        $config['cur_tag_open'] = '<a class="curlink">';
        $config['cur_tag_close'] = '</a>';

        // $config['num_tag_open'] = '<a class="numlink">';
        // $config['num_tag_close'] = '</a>';

        // $this->pagination->initialize($config); 




        $start = $this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listUser'] = $this->Muser->getList($start, $config['per_page']);
        $this->load->view("admin/get_list_user_admin_view", $data);
    }

    public function add_user()
    {
        $this->load->view('admin/s_add_user_admin_view');
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
                $err = $this->db->error();
                if ($err['code'] !== 0) {
                    echo "<script>alert('Tài Khoản Đã Tồn Tại !!!')</script>";
                    $this->add_user();
                } else {
                    echo "<script>alert('Thêm Thành Công !!!')</script>";
                    $this->get_list_user();
                }
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
        $this->load->view('admin/s_edit_user_admin_view', $data);
    }

    public function pro_edit_user($id)
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
            $this->edit_user($id);
        } else {
            try {
                $mk = isset($_POST['mk']) ? $_POST['mk'] : "";
                $ht = isset($_POST['ht']) ? $_POST['ht'] : "";
                $gt = isset($_POST['gt']) ? $_POST['gt'] : "Nam";
                $email = isset($_POST['email']) ? $_POST['email'] : "";
                $ns = isset($_POST['ns']) ? $_POST['ns'] : "";
                $dc = isset($_POST['dc']) ? $_POST['dc'] : "";
                $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : "";
                $this->load->model("Muser");
                $this->Muser->edit($id, $mk, $ht, $gt, $email, $ns, $dc, $sdt);
                $err = $this->db->error();
                if ($err['code'] !== 0) {
                    echo "<script>alert('Update không thành công !!!')</script>";
                    $this->edit_user($id);
                } else {
                    // echo "<script>alert('Update Thành Công !!!')</script>";
                    // redirect(base_url()."admin/get_list_user");
                    // $this->get_list_user();
                    echo "<script>
                        window.location.href='" . base_url() . "admin/get_list_user';
                        window.alert('Update thành công!!!');
                        </script>";
                }
            } catch (Exception $e) {
                echo "<script>alert('Tài Khoản Đã Tồn Tại !!!')</script>";
                $this->add_user();
            }
        }
    }

    public function delete_user($id)
    {
        # code...
        $this->load->model("Muser");
        $this->Muser->deleteById($id);
        echo "<script>
            window.location.href='" . base_url() . "admin/get_list_user';
            window.alert('Xoá thành công!!!');
            </script>";
    }

    public function get_list_user_s()
    {
        // if (isset($_POST['search'])){
        $s = $_POST['search'];
        //     $this->session->set_userdata('search', $s);
        // }else{
        //     $s=$this->session->userdata('search');
        // }
        $s = trim(htmlspecialchars(addslashes($s)));
        $this->load->model("Muser");
        $config['total_rows'] = $this->Muser->countAllS($s);
        $config['base_url'] = base_url() . "index.php/admin/get_list_user_s";
        $config['per_page'] = 7;

        $start = $this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listUser'] = $this->Muser->getListS($start, $config['per_page'], $s);
        $this->load->view("admin/get_list_user_admin_view", $data);
    }

    //Co so dao tao
    public function get_list_csdt()
    {
        $this->load->model('Mcsdt');
        $config['total_rows'] = $this->Mcsdt->countAll();
        $config['base_url'] = base_url() . "index.php/admin/get_list_csdt";
        $config['per_page'] = 7;

        $start = $this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listCsdt'] = $this->Mcsdt->getList($start, $config['per_page']);
        $this->load->view('admin/get_list_csdt_admin_view', $data);
    }

    public function add_csdt()
    {
        # code...
        $this->load->view('admin/s_add_csdt_admin_view');
    }

    public function pro_add_csdt()
    {
        # code...
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tencsdt', 'Tên cơ sở đào tạo', 'required');
        $this->form_validation->set_rules('tinhthanhphocsdt', 'Tỉnh/TP', 'required');
        $this->form_validation->set_rules('quanhuyencsdt', 'Quận/huyện', 'required');
        $this->form_validation->set_rules('phuongthixa', 'Xã/phường', 'required');
        $this->form_validation->set_rules('thonbanduongphocsdt', 'Thôn/bản/đường phố', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->add_csdt();
        } else {
            try {
                $tencsdt = isset($_POST['tencsdt']) ? $_POST['tencsdt'] : "";
                $tinhthanhphocsdt = isset($_POST['tinhthanhphocsdt']) ? $_POST['tinhthanhphocsdt'] : "";
                $quanhuyencsdt = isset($_POST['quanhuyencsdt']) ? $_POST['quanhuyencsdt'] : "Nam";
                $phuongthixa = isset($_POST['phuongthixa']) ? $_POST['phuongthixa'] : "";
                $thonbanduongphocsdt = isset($_POST['thonbanduongphocsdt']) ? $_POST['thonbanduongphocsdt'] : "";
                $this->load->model("Mcsdt");
                $this->Mcsdt->add($tencsdt, $tinhthanhphocsdt, $quanhuyencsdt, $phuongthixa, $thonbanduongphocsdt);
                $err = $this->db->error();
                if ($err['code'] !== 0) {
                    echo "<script>alert('Thêm không thành công !!!')</script>";
                    $this->add_user();
                } else {
                    // echo "<script>alert('Update Thành Công !!!')</script>";
                    // redirect(base_url()."admin/get_list_user");
                    // $this->get_list_user();
                    echo "<script>
                         window.location.href='" . base_url() . "admin/get_list_csdt';
                         window.alert('Thêm thành công!!!');
                         </script>";
                }
            } catch (Exception $e) {
                echo "<script>alert('Cơ sở đào tạo đã Tồn Tại !!!')</script>";
                $this->add_user();
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
        //form validation
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
            $err = $this->db->error();
            if ($err['code'] !== 0) {
                echo "<script>alert('Sửa không thành công !!!')</script>";
                $this->edit_csdt($id);
            } else {
                echo "<script>
                         window.location.href='" . base_url() . "admin/get_list_csdt';
                         window.alert('Sửa thành công!!!');
                         </script>";
            }
        }
    }

    public function delete_csdt($id)
    {
        $this->load->model("Mcsdt");
        $this->Mcsdt->deleteById($id);
        echo "<script>
            window.location.href='" . base_url() . "admin/get_list_csdt';
            window.alert('Xoá thành công!!!');
            </script>";
    }

    //Nganh dao tao
    public function get_list_ndt()
    {
        $this->load->model("Mndt");
        $config['total_rows'] = $this->Mndt->countAll();
        $config['base_url'] = base_url() . "index.php/admin/get_list_ndt";
        $config['per_page'] = 7;
        $start = $this->uri->segment(3);
        // $start = 0;
        $this->load->library('pagination', $config);
        $data['listNdt'] = $this->Mndt->getList($start, $config['per_page']);
        $this->load->view("admin/get_list_ndt_admin_view", $data);
    }

    public function get_list_ndt_s()
    {
        // if (isset($_POST['search'])) {
        $s = $_POST['search'];
        //     $this->session->set_userdata('search', $s);
        // } else {
        //     $s = $this->session->userdata('search');
        // }
        $s = trim(htmlspecialchars(addslashes($s)));
        $this->load->model("Mndt");
        $config['total_rows'] = $this->Mndt->countAllS($s);
        $config['base_url'] = base_url() . "index.php/admin/get_list_ndt_s";
        $config['per_page'] = 7;

        $start = $this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listNdt'] = $this->Mndt->getListS($start, $config['per_page'], $s);
        $this->load->view("admin/get_list_ndt_admin_view", $data);
    }

    public function add_ndt()
    {
        $this->load->model("Mcsdt");
        $data['listCoSoDaoTao'] = $this->Mcsdt->getListAll();
        $this->load->view("admin/s_add_ndt_admin_view", $data);
    }

    public function pro_add_ndt()
    {
        # code...
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('manganh', 'Mã ngành', 'required');
        $this->form_validation->set_rules('tennganh', 'Tên ngành', 'required');
        $this->form_validation->set_rules('chuongtrinhdaotao', 'Chương trình đào tạo', 'required');
        // $this->form_validation->set_rules('ghichu', 'Ghi chú', 'required');
        // $this->form_validation->set_rules('gioithieu', 'Giới thiệu', 'required');
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
                $coso = $_POST['coso'];
                $this->load->model("Mndt");
                $this->Mndt->add($manganh, $tennganh, $chuongtrinhdaotao, $ghichu, $gioithieu, $coso);
                $err = $this->db->error();
                if ($err['code'] !== 0) {
                    echo "<script>alert('Thêm không thành công !!!')</script>";
                    // echo "<script>alert('" . $manganh . "')</script>";
                    $this->add_ndt();
                } else {
                    // echo "<script>alert('Update Thành Công !!!')</script>";
                    // redirect(base_url()."admin/get_list_user");
                    // $this->get_list_user();
                    echo "<script>
                         window.location.href='" . base_url() . "admin/get_list_ndt';
                         window.alert('Thêm thành công!!!');
                         </script>";
                }
            } catch (Exception $e) {
                echo "<script>alert('Ngành đào tạo đã Tồn Tại !!!')</script>";
                $this->add_ndt();
            }
        }
    }


    public function edit_ndt($id)
    {
        $this->load->model("Mndt");
        $data['ndt'] = $this->Mndt->getById($id);
        $this->load->model("Mcsdt");
        $data['listCoSoDaoTao'] = $this->Mcsdt->getListAll();
        $this->load->view("admin/s_edit_ndt_admin_view", $data);
    }

    public function pro_edit_ndt($id)
    {
        //form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('manganh', 'Mã ngành', 'required');
        $this->form_validation->set_rules('tennganh', 'Tên ngành', 'required');
        $this->form_validation->set_rules('chuongtrinhdaotao', 'Chương trình đào tạo', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!')</script>";
            $this->edit_ndt($id);
        } else {
            $manganh = isset($_POST['manganh']) ? $_POST['manganh'] : "";
            $tennganh = isset($_POST['tennganh']) ? $_POST['tennganh'] : "";
            $chuongtrinhdaotao = isset($_POST['chuongtrinhdaotao']) ? $_POST['chuongtrinhdaotao'] : "";
            $ghichu = isset($_POST['ghichu']) ? $_POST['ghichu'] : "";
            $gioithieu = isset($_POST['gioithieu']) ? $_POST['gioithieu'] : "";
            $coso = $_POST['coso'];
            $this->load->model("Mndt");
            $this->Mndt->edit($id, $manganh, $tennganh, $chuongtrinhdaotao, $ghichu, $gioithieu, $coso);
            $err = $this->db->error();
            if ($err['code'] !== 0) {
                echo "<script>alert('Sửa không thành công !!!')</script>";
                $this->edit_ndt($id);
            } else {
                echo "<script>
                         window.location.href='" . base_url() . "admin/get_list_ndt';
                         window.alert('Sửa thành công!!!');
                         </script>";
            }
        }
    }

    public function delete_ndt($id)
    {
        $this->load->model("Mndt");
        $this->Mndt->deleteById($id);
        echo "<script>
            window.location.href='" . base_url() . "admin/get_list_ndt';
            window.alert('Xoá thành công!!!');
            </script>";
    }


    //Ho so xet tuyen
    public function get_list_hsxt()
    {
        $this->load->model("Mhsxt");
        $config['total_rows'] = $this->Mhsxt->countAll();
        $config['base_url'] = base_url() . "index.php/admin/get_list_hsxt";
        $config['per_page'] = 7;

        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';

        $config['first_link'] = 'First Page';
        $config['first_tag_open'] = '<a class="firstlink">';
        $config['first_tag_close'] = '</a>';

        $config['last_link'] = 'Last Page';
        $config['last_tag_open'] = '<a class="lastlink">';
        $config['last_tag_close'] = '</a>';

        $config['next_link'] = 'Next Page';
        // $config['next_tag_open'] = '<a class="nextlink">';
        // $config['next_tag_close'] = '</a>';

        $config['prev_link'] = 'Prev Page';
        // $config['prev_tag_open'] = '<a class="prevlink">';
        // $config['prev_tag_close'] = '</a>';

        $config['cur_tag_open'] = '<a class="curlink">';
        $config['cur_tag_close'] = '</a>';

        $start = $this->uri->segment(3);
        // $start = 0;
        $this->load->library('pagination', $config);
        $data['listHsxt'] = $this->Mhsxt->getList($start, $config['per_page']);
        $this->load->view("admin/get_list_hsxt_admin_view", $data);
    }

    public function get_list_hsxt_s($s)
    {
    }

    public function edit_hsxt($id)
    {
        $this->load->model("Mhsxt");
        $ma_ts = $this->Mhsxt->getByMaHsxt($id);
        // $data['ma_hsxt']=$id;
        $data['ma_hsxt']=$id;
        $this->load->model("Mts");
        $data['ts'] = $this->Mts->getByMaTS($ma_ts);
        $this->load->model('Mnv');
        $data['nv'] = $this->Mnv->getByMahsxt($id);
        $this->load->model('Mcsdt');
        $data['csdt'] = $this->Mcsdt->getListAll();
        $this->load->model('Mndt');
        $data['ndt'] = $this->Mndt->getListAll();
        $this->load->model('Mthm');
        $data['thm'] = $this->Mthm->getListAll();
        $this->load->model('Mfmc');
        $data['fmc'] = $this->Mfmc->getByMahsxt($id);
        $this->load->view("admin/s_edit_hsxt_admin_view", $data);
    }

    public function pro_edit_hsxt($id)
    {
        try {
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
            $this->load->model('Mhsxt');
            // $ma_ts=$this->Mhsxt->getByMaHSXT($id);
            $this->load->model("Mts");
            $this->Mts->edit($id, $ht, $gt, $ngaythangnamsinh, $noisinh, $dantoc, $socmnd, $ngaycap, $noicap, $ho_khau_tinh_thanh_pho, $ho_khau_quan_huyen, $ho_khau_xa_phuong, $ho_khau_thon_ban_duong_pho, $tinh_tp_lop_10, $quan_huyen_lop_10, $truong_lop_10, $tinh_tp_lop_11, $quan_huyen_lop_11, $truong_lop_11, $quan_huyen_lop_12, $tinh_tp_lop_12, $truong_lop_12, $sdt_ts, $email_ts, $nam_tot_nghiep_ts, $khu_vuc_uu_tien, $doi_tuong_uu_tien);
            $err = $this->db->error();
            if ($err['code'] !== 0) {
                var_dump($err['code']);
                // do something about the error or handle the excepcion
                echo "<script>alert('Thí sinh đã Tồn Tại !!!')</script>";
                echo "<script>window.history.back();</script>";
            } else {
                // query ran OK, keep the method going
                echo "<script>
                         window.location.href='" . base_url() . "admin/get_list_hsxt';
                         window.alert('Sửa thành công!!!');
                         </script>";
              
                // $this->edit_thong_tin_hsxt($id);
                // $this->add_hsxt();

                // echo "<script>alert('Thí sinh đã Tồn Tại !!!')</script>";
            }
        } catch (Exception $e) {
            echo "<script>alert('Update không thành công !!!')</script>";
            echo "<script>window.history.back();</script>";
        }
    }

    public function delete_hsxt($id)
    {
        $this->load->model("Mhsxt");
        $ma_ts = $this->Mhsxt->getByMaHsxt($id);
        $this->Mhsxt->deleteById($id, $ma_ts);
        echo "<script>
        window.location.href='" . base_url() . "admin/get_list_hsxt';
        window.alert('Xoá thành công!!!');
        </script>";
    }

    public function xoa_file()
    {
        // $ma_fmc = $this->Mfmc->getMaxMaTS()[0]["ma_ts"];
        $ma_hsxt = $this->input->post('ma_hsxt');
        // $name=$this->input->post('name');
        // $ma_hsxt = $_POST['ma_hsxt'];
        // var_dump($ma_hsxt);
        $this->load->model("Mfmc");

        // $ma_fmc=$this->Mfmc->getMfmc($ma_hsxt);
        $mfmc = $this->Mfmc->getMfmc($ma_hsxt);
        $this->Mfmc->delete($mfmc);


        //lay danh sach sau khi xoa de hien ra bang lai
        $result = $this->Mfmc->getByMaHsxt($ma_hsxt);
        echo json_encode($result);
    }

    public function pro_luu_file_minh_chung()
    {
        $ma_hsxt = $_POST["ma_hsxt"];
        $config['upload_path']          = './assets/img_file/';
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
}
