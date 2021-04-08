<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model("Mdm");
        $this->load->model("Mbv");
        $data['dmC'] = $this->Mdm->getByMaDMCha(1);

        $data['bvC'] = $this->Mbv->getListAll();

        $data['TVTS'] = $this->Mdm->getByMaDM(4);
        $data['TVTSC'] = $this->Mdm->getByMaDMCha(4);

        $data['TSCLY'] = $this->Mdm->getByMaDM(2.2);
        $data['TSCLYC'] = $this->Mdm->getByMaDMCha(2.2);

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);

        //var_dump($data);

        $this->load->view('site/home/index', $data);
    }

    public function lienhe()
    {
        $this->load->model("Mdm");
        $this->load->model("Mbv");
        $data['dmC'] = $this->Mdm->getByMaDMCha(1);

        $data['bvC'] = $this->Mbv->getListAll();

        $data['TVTS'] = $this->Mdm->getByMaDM(4);
        $data['TVTSC'] = $this->Mdm->getByMaDMCha(4);

        $data['TSCLY'] = $this->Mdm->getByMaDM(2.2);
        $data['TSCLYC'] = $this->Mdm->getByMaDMCha(2.2);

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);
        $this->load->view("site/lienhe/index", $data);
    }

    public function tbxt()
    {
        $this->load->model("Mdm");
        $this->load->model("Mbv");
        $data['dmC'] = $this->Mdm->getByMaDMCha(1);

        $data['bvC'] = $this->Mbv->getListAll();

        $data['TVTS'] = $this->Mdm->getByMaDM(4);
        $data['TVTSC'] = $this->Mdm->getByMaDMCha(4);

        $data['TSCLY'] = $this->Mdm->getByMaDM(2.2);
        $data['TSCLYC'] = $this->Mdm->getByMaDMCha(2.2);

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);

        $this->load->view('site/thongbaoxettuyen/index', $data);
    }

    public function ttnxt()
    {
        $this->load->model("Mdm");
        $this->load->model("Mbv");
        $data['bvC'] = $this->Mbv->getListAll();

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);
        $this->load->view('site/thongtinnganhxettuyen/index', $data);
    }

    public function ttxt()
    {
        $this->load->model("Mdm");
        $this->load->model("Mbv");

        $data['bvC'] = $this->Mbv->getListAll();

        $data['TVTS'] = $this->Mdm->getByMaDM(4);
        $data['TVTSC'] = $this->Mdm->getByMaDMCha(4);

        $data['TSCLY'] = $this->Mdm->getByMaDM(2.2);
        $data['TSCLYC'] = $this->Mdm->getByMaDMCha(2.2);

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);

        $this->load->view('site/thongtinxettuyen/index', $data);
    }

    public function tvts()
    {
        $this->load->model("Mdm");
        $this->load->model("Mbv");
        $data['dmC'] = $this->Mdm->getByMaDMCha(1);

        $data['bvC'] = $this->Mbv->getListAll();

        $data['TVTS'] = $this->Mdm->getByMaDM(4);
        $data['TVTSC'] = $this->Mdm->getByMaDMCha(4);

        $data['TSCLY'] = $this->Mdm->getByMaDM(2.2);
        $data['TSCLYC'] = $this->Mdm->getByMaDMCha(2.2);

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);

        $data['DSCH'] = $this->Mdm->getByMaDM(4.2);

        $this->load->view('site/tuvantuyensinh/index', $data);
    }

    public function xhb()
    {
        $this->load->view('site/xethocbaonline/index');
    }
    public function xhb2()
    {
        $this->load->view('site/xethocbaonline/themnguyenvong');
    }
    public function xhb3()
    {
        $this->load->view('site/xethocbaonline/noptailieu');
    }
    public function login_mb()
    {
        $this->load->view('site2/Login_moblie/index');
    }

    public function checkLogin()
    {
        $tk = isset($_POST['tk']) ? $_POST['tk'] : "";
        $mk = isset($_POST['mk']) ? $_POST['mk'] : "";
        $this->load->model("Muser");
        if ($this->Muser->checkLogin($tk, $mk) && $tk != "" && $mk != "") {
            //Đăng Nhập Thành Công
            $this->session->set_userdata("CheckLogin", true);
            $data['infLogin'] = $this->Muser->infLogin($tk, $mk);
            $this->session->set_userdata($data['infLogin']);
            redirect(base_url() . "index.php/admin");
        } else {
            //Đăng Nhập Thất Bại
            echo "<script>alert('Tài Khoản Hoặc Mật Khẩu Không Đúng !!!');</script>";
            $this->index();
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function ttcn($id)
    {
        $this->load->model("Muser");
        $data['user'] = $this->Muser->getById($id);
        $this->load->view('admin/s_ttcn_admin_view', $data);
    }

    public function pro_ttcn($id)
    {
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mk', 'Mật Khẩu', 'required');
        $this->form_validation->set_rules('gt', 'Giới Tính', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('sdt', 'Số Điện Thoại', 'numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->ttcn($id);
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
            $data['infLogin'] = $this->Muser->getById($id);
            $this->session->set_userdata($data['infLogin']);
            $this->ttcn($id);
        }
    }

    public function register()
    {
        $this->load->view('site/s_register_site_view');
    }

    public function pro_register()
    {
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tk', 'Tên Đăng Nhập', 'required');
        $this->form_validation->set_rules('mk', 'Mật Khẩu', 'required');
        $this->form_validation->set_rules('gt', 'Giới Tính', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('sdt', 'Số Điện Thoại', 'numeric');
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Lỗi Nhập !!!');</script>";
            $this->register();
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
                echo "<script>alert('Đăng Ký Thành Công !!!');</script>";
                $this->index();
            } catch (Exception $e) {
                echo "<script>alert('Lỗi Tài Khoản Đã Tồn Tại !!!');</script>";
                $this->register();
            }
        }
    }

    public function get_list_search()
    {
        $s = isset($_POST['s_search']) ? $_POST['s_search'] : "";
        $data = trim(htmlspecialchars(addslashes($s)));
        $this->load->view("site/s_search_site_view", $data);
    }

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
        $this->load->view("site/xethocbaonline/index", $data);
    }
    public function edit_hsxt($ma_ts)
    {
        $this->load->model("Mts");
        $data['ts'] = $this->Mts->getByMaTS($ma_ts);
        $this->load->model("Mhsxt");
        $data['ma_hsxt'] = $this->Mhsxt->getByMaTS($ma_ts);
        //var_dump($data);
        $this->load->model("Mcsdt");
        $data['listCoSoDaoTao'] = $this->Mcsdt->getListAll();
        $this->load->model("Mndt");
        $data['listNhomNganh'] = $this->Mndt->getListAll();
        $this->load->model("Mthm");
        $data['listToHopMon'] = $this->Mthm->getListAll();
        $this->load->view("home/edit_hsxt_home_view", $data);
    }

    public function testapi()
    {
        $this->load->model("Mts");
        $this->Mts->countAll();
    }

    public function pro_add_hsxt()
    {
        //var_dump($_POST);
        //echo "adfasdfasdfasdfasdf";
        $this->load->library('form_validation');
        // $this->form_validation->set_rules('ht', 'Họ tên', 'required');
        // $this->form_validation->set_rules('gt', 'Giới Tính', 'required');
        // $this->form_validation->set_rules('ngaythangnamsinh', 'Ngày Sinh', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        // $this->form_validation->set_rules('sdt', 'Số Điện Thoại', 'numeric');
        // if ($this->form_validation->run() == FALSE){
        //     echo "<script>alert('Lỗi Nhập !!!')</script>";
        //     $this->add_hsxt();
        // }
        // else
        {
            try {
                //var_dump($_POST);
                //echo 'adfasd';
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

    
    public function pro_add_nguyen_vong()
    {

        // $maTs = $this->Mts->getMaxMaTS()[0]["ma_ts"];
        //     //$maTs= $this->Mts->getMaxMaTS();
        //     //echo ''+$maTs;
        // $this->edit_hsxt($maTs);
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

        $this->email->from("huynhlx4@gmail.com", "Ban tuyển sinh Đại học Thủy Lợi");
        // $this->email->bcc("ngonphikp@gmail.com");
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
        $path = '\assets\img_qrcode\\' . base64_encode($mes) . '.png';

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

    // public function hosoxettuyen($ma_ts)
    // {
    //     $this->load->model("Mhsxt");
    //     $data['ma_hsxt'] = $this->Mhsxt->getByMaTS($ma_ts);
    //     // $ma_tss=$data['ma_hsxt']['ma_ts'];
    //     $this->load->model("Mts");
    //     $data['ts'] = $this->Mts->getByMaTS($ma_ts);
     
    //     // $this->load->model("Mcsdt");
    //     // $data['listCoSoDaoTao']= $this->Mcsdt->getListAll();
    //     // $this->load->model("Mndt");
    //     // $data['listNhomNganh']= $this->Mndt->getListAll();
    //     // $this->load->model("Mthm");
    //     // $data['listToHopMon']= $this->Mthm->getListAll();
    //     $this->load->model("Mnv");
    //     $data['listNv'] = $this->Mnv->getByMaHsxt($ma_ts);
    //     $this->load->model("Mfmc");
    //     $data['listFmc'] = $this->Mfmc->getByMaHsxt($ma_ts);
    //     $this->load->view("home/hosoxettuyen", $data);
    // }

    public function hosoxettuyen($ma_hsxt)
    {
        $data['ma_hsxt'] = $ma_hsxt;
        // var_dump($ma_hsxt);
        $this->load->model("Mhsxt");
        $ma_ts=$this->Mhsxt->GetByMaHsxt($ma_hsxt);
        // var_dump($ma_ts);
        // $ma_tss=$data['ma_hsxt']['ma_ts'];
        $this->load->model("Mts");
        $data['ts'] = $this->Mts->getByMaTS($ma_ts);
     
        // $this->load->model("Mcsdt");
        // $data['listCoSoDaoTao']= $this->Mcsdt->getListAll();
        // $this->load->model("Mndt");
        // $data['listNhomNganh']= $this->Mndt->getListAll();
        // $this->load->model("Mthm");
        // $data['listToHopMon']= $this->Mthm->getListAll();
        $this->load->model("Mnv");
        $data['listNv'] = $this->Mnv->getByMaHsxt($ma_ts);
        $this->load->model("Mfmc");
        $data['listFmc'] = $this->Mfmc->getByMaHsxt($ma_ts);
        $this->load->view("home/hosoxettuyen", $data);
    }


    //tim kiem hsxt
    public function get_hsxt_s()
    {
        if (isset($_POST['search'])) {
            $s = $_POST['search'];
            $this->session->set_userdata('search', $s);
        } else {
            $s = $this->session->userdata('search');
        }
        $s = trim(htmlspecialchars(addslashes($s)));

        $decode = base64_decode($s);
        $key = "DHTL";

        $rs = trim($decode, $key);


        //$data['ma_hsxt']=$s;
        //echo '$s'
        $this->hosoxettuyen($rs);
        // $this->load->model("Mbv");
        // $config['total_rows'] = $this->Mbv->countAllS($s);
        // $config['base_url'] = base_url()."index.php/admin/get_list_bv_s";
        // $config['per_page'] = 5;

        // $start=$this->uri->segment(3);
        // $this->load->library('pagination', $config);
        // $data['listBV']= $this->Mbv->getListS($start, $config['per_page'], $s);
        // $this->load->view("admin/get_list_bv_admin_view", $data);
    }


    
}
