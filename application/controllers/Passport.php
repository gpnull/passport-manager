<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passport extends Base_Authenticate_Controller {

    public function __construct() {
        parent::__construct();
    }
	public function index()
	{
        $config = $this->getPaginationConfig();
        $config['base_url']= site_url('passport/index');
        $offset = isset($_GET['page']) ? $_GET['page'] : 0;
        switch ($this->session->userdata(LOGGED_USER)[DB_COL_USER_ROLE]) {
            case VALUE_LEVEL_XT :
                $filter = array(COLUMN_FLAG_XT=>FLAG_VALUE_NONE);
                $config['total_rows']= $this->mPassport->countAllPassport($filter);
                $config["num_links"]            = floor($config["total_rows"] / $config["per_page"]);
                $this->pagination->initialize($config);

                $passports = $this->mPassport->getAllPassport($config['per_page'],$offset,$filter);
                $this->viewVar['items'] = $passports;
                $this->viewVar['page_title'] = "Danh Sách Đơn Đăng Ký";
                $this->viewVar['links'] = $this->pagination->create_links();
                layout_view('xacthuc', $this->viewVar);
                break;
            case VALUE_LEVEL_XD:
                $filter = array(COLUMN_FLAG_XT.COLUMN_OPERATOR_GT=>FLAG_VALUE_NONE,COLUMN_FLAG_XD=>FLAG_VALUE_NONE);
                $config['total_rows']= $this->mPassport->countAllPassport($filter);
                $config["num_links"]            = floor($config["total_rows"] / $config["per_page"]);
                $this->pagination->initialize($config);

                $passports = $this->mPassport->getAllPassport($config['per_page'],$offset,$filter);
                $this->viewVar['items'] = $passports;
                $this->viewVar['page_title'] = "Danh Sách Đơn Chờ Duyệt";
                $this->viewVar['links'] = $this->pagination->create_links();
                layout_view('xetduyet', $this->viewVar);
                break;
            case VALUE_LEVEL_LT:
                $filter = array(COLUMN_FLAG_XT.COLUMN_OPERATOR_GT=>FLAG_VALUE_NONE,COLUMN_FLAG_XD.COLUMN_OPERATOR_GT=>FLAG_VALUE_NONE,COLUMN_FLAG_LT=>FLAG_VALUE_NONE);
                $config['total_rows']= $this->mPassport->countAllPassport($filter);
                $config["num_links"]            = floor($config["total_rows"] / $config["per_page"]);
                $this->pagination->initialize($config);

                $passports = $this->mPassport->getAllPassport($config['per_page'],$offset,$filter);
                $this->viewVar['items'] = $passports;
                $this->viewVar['page_title'] = "Danh Sách Đơn Chờ Lữ Trữ";
                $this->viewVar['links'] = $this->pagination->create_links();
                layout_view('luutru', $this->viewVar);
                break;
            case VALUE_LEVEL_GS:
                $filter = array();
                $config['total_rows']= $this->mPassport->countAllPassport($filter);
                $config["num_links"]            = floor($config["total_rows"] / $config["per_page"]);
                $this->pagination->initialize($config);

                $passports = $this->mPassport->getAllPassport($config['per_page'],$offset,$filter);
                $this->viewVar['items'] = $passports;
                $this->viewVar['page_title'] = "Danh Sách Đơn Chờ Lữ Trữ";
                $this->viewVar['links'] = $this->pagination->create_links();
                layout_view('giamsat', $this->viewVar);
                break;
            
            default:
                break;
        }
	}


public function updatext()
    {
        if(isset($_GET['id']))
            $passportId = $_GET['id'];
        else $passportId = '';
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $input = $this->input->post('passport');
            $this->form_validation->set_rules('passport['.DB_COL_PASSPORT_ID.']', 'Mã passport', 'required');
            $this->form_validation->set_rules('passport['.DB_COL_PASSPORT_XT_FLAG.']', 'Thông tin xác thực', 'required');
            if($this->form_validation->run()) {
                $passportId = $input[DB_COL_PASSPORT_ID];
                $passport = $this->mPassport->getPassportById($passportId );
                $passport[DB_COL_PASSPORT_XT_FLAG] =  $input[DB_COL_PASSPORT_XT_FLAG];
                $passport[DB_COL_PASSPORT_NOTE] =  $input[DB_COL_PASSPORT_NOTE];
                $passport[DB_COL_PASSPORT_XT_USER] =  $this->session->userdata(LOGGED_USER)[DB_COL_USER_ID];
                $now = date('Y-m-d H:i:s');
                $passport[DB_COL_PASSPORT_XT_TIME] =  $now;
                $rs = $this->mPassport->updatePassport($passport);
                if($rs == FLAG_SUCCESSFUL) {
                    $this->session->set_flashdata('message', 'Đã xác thực.');
                    redirect('/passport/index');
                } else {
                    $this->session->set_flashdata('message', 'Có lỗi xảy ra, vui lòng thử lại sau.');
                }
            }

        }
        
            $passport = $this->mPassport->getPassportById($passportId );
            $resident = null;
            if($passport){
                $resident = $this->mResident->getResidentById($passport[DB_COL_PASSPORT_IDENTITY_NUMBER] );
            } 
            $this->viewVar['resident'] = $resident;
            $this->viewVar['passport'] = $passport;
            $this->viewVar['page_title'] = "Xác Thực Đơn Đăng Ký";
            layout_view('capnhatxacthuc', $this->viewVar); 
    }

    public function updatexd()
    {
        if(isset($_GET['id']))
            $passportId = $_GET['id'];
        else $passportId = '';
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $input = $this->input->post('passport');
            $this->form_validation->set_rules('passport['.DB_COL_PASSPORT_ID.']', 'Mã passport', 'required');
            $this->form_validation->set_rules('passport['.DB_COL_PASSPORT_XD_FLAG.']', 'Thông tin xác thực', 'required');
            if($this->form_validation->run()) {
                $passportId = $input[DB_COL_PASSPORT_ID];
                $passport = $this->mPassport->getPassportById($passportId );
                $passport[DB_COL_PASSPORT_XD_FLAG] =  $input[DB_COL_PASSPORT_XD_FLAG];
                $passport[DB_COL_PASSPORT_NOTE] =  $input[DB_COL_PASSPORT_NOTE];
                $passport[DB_COL_PASSPORT_XD_USER] =  $this->session->userdata(LOGGED_USER)[DB_COL_USER_ID];
                $now = date('Y-m-d H:i:s');
                $passport[DB_COL_PASSPORT_XD_TIME] =  $now;
                $rs = $this->mPassport->updatePassport($passport);
                if($rs == FLAG_SUCCESSFUL) {
                    $this->session->set_flashdata('message', 'Đã duyệt.');
                    redirect('/passport/index');
                } else {
                    $this->session->set_flashdata('message', 'Có lỗi xảy ra, vui lòng thử lại sau.');
                }
            }

        }
        
            $passport = $this->mPassport->getPassportById($passportId );
            $this->viewVar['passport'] = $passport;
            $this->viewVar['page_title'] = "Xét Duyệt Đơn Đăng Ký";
            layout_view('capnhatxetduyet', $this->viewVar); 
    }
        public function updatelt()
    {
        if(isset($_GET['id']))
            $passportId = $_GET['id'];
        else $passportId = '';
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $input = $this->input->post('passport');
            $this->form_validation->set_rules('passport['.DB_COL_PASSPORT_ID.']', 'Mã passport', 'required');
            if($this->form_validation->run()) {
                $passportId = $input[DB_COL_PASSPORT_ID];
                $passport = $this->mPassport->getPassportById($passportId );
                $passport[DB_COL_PASSPORT_LT_FLAG] =  1;
                $passport[DB_COL_PASSPORT_NOTE] =  $input[DB_COL_PASSPORT_NOTE];
                $passport[DB_COL_PASSPORT_LT_USER] =  $this->session->userdata(LOGGED_USER)[DB_COL_USER_ID];
                $now = date('Y-m-d H:i:s');
                $passport[DB_COL_PASSPORT_LT_TIME] =  $now;
                $rs = $this->mPassport->updatePassport($passport);
                if($rs == FLAG_SUCCESSFUL) {
                    $this->session->set_flashdata('message', 'Đã lưu trữ.');
                    redirect('/passport/index');
                } else {
                    $this->session->set_flashdata('message', 'Có lỗi xảy ra, vui lòng thử lại sau.');
                }
            }

        }
        
            $passport = $this->mPassport->getPassportById($passportId );
            $this->viewVar['passport'] = $passport;
            $this->viewVar['page_title'] = "Lưu Trữ Đơn Đăng Ký";
            layout_view('capnhatluutru', $this->viewVar); 
    }

    public function thongtings()
    {
        if(isset($_GET['id']))
            $passportId = $_GET['id'];
        else $passportId = '';
        $passport = $this->mPassport->getPassportById($passportId );
        $this->viewVar['passport'] = $passport;
        $this->viewVar['page_title'] = "Giám Sát Đơn Đăng Ký";
        layout_view('thongtingiamsat', $this->viewVar); 
    }
}

