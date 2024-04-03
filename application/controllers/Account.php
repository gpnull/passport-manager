<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends Base_Controller {

    public function __construct() {
        parent::__construct();
    }
	public function index()
	{
		redirect('/dangky');
	}
    public function login()
	{
		        $this->viewVar[LOGGED_USER] = $this->session->userdata(LOGGED_USER);
        //if user has already logged in. Redirect to homepage
        if ($this->viewVar[LOGGED_USER]) {
            redirect('/passport');
            exit();
        } elseif ($this->input->server('REQUEST_METHOD') == 'POST') {
            $user = $this->input->post('user');
            $this->form_validation->set_rules('user['.DB_COL_USER_ID.']', 'Tài Khoản', 'required');
            $this->form_validation->set_rules('user['.DB_COL_USER_PASS.']', 'Mật khẩu', 'required|max_length[32]');
            if ($this->form_validation->run()) {
                // CHECK USER
                $userInfo = $this->mAdmin->get_user_by_id($user[DB_COL_USER_ID]);
                if (!empty($userInfo)) {
                    $hashPass = hash('sha256', $user[DB_COL_USER_PASS]);
                    if ($userInfo[DB_COL_USER_PASS] == $hashPass) //login success
                        {
                        $userInfo[DB_COL_USER_PASS] = '';
                        $this->session->set_userdata(LOGGED_USER, $userInfo);
                        $this->accountVar = $userInfo;
                        redirect('/passport');
                        exit();
                    }
                }else {
                    $this->viewVar['error_mess'] = "Tài khoản hoặc mật khẩu không đúng";
				}
                // END    
            }
        }
		$this->load->view('loginadmin', $this->viewVar);
	}
	
	public function logout(){
		$this->session->sess_destroy();
        redirect('login');
	}
	/**
    *function register
    *Đăng ký passport
	*POST
    */
    public function dangky(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $pasport = $this->input->post('pasport');
            $this->form_validation->set_rules('pasport['.DB_COL_PASSPORT_NAME.']', 'Email', 'required');
            $this->form_validation->set_rules('pasport['.DB_COL_PASSPORT_ADDRESS.']', 'Địa Chỉ', 'required');
            $this->form_validation->set_rules('pasport['.DB_COL_PASSPORT_SEX.']', 'Giới Tính', 'required');
            $this->form_validation->set_rules('pasport['.DB_COL_PASSPORT_IDENTITY_NUMBER.']', 'Số CMND', 'required');
            $this->form_validation->set_rules('pasport['.DB_COL_PASSPORT_PHONE_NUMBER.']', 'Số điện thoại', 'required');
            $this->form_validation->set_rules('pasport['.DB_COL_PASSPORT_EMAIL.']', 'Email', 'required|valid_email');
            if($this->form_validation->run()){

                $obj = array();
                $obj[DB_COL_PASSPORT_NAME] = $pasport[DB_COL_PASSPORT_NAME];
                $obj[DB_COL_PASSPORT_ADDRESS] = $pasport[DB_COL_PASSPORT_ADDRESS];
                $obj[DB_COL_PASSPORT_SEX] = $pasport[DB_COL_PASSPORT_SEX];
                $obj[DB_COL_PASSPORT_IDENTITY_NUMBER] = $pasport[DB_COL_PASSPORT_IDENTITY_NUMBER];
                $obj[DB_COL_PASSPORT_PHONE_NUMBER] = $pasport[DB_COL_PASSPORT_PHONE_NUMBER];
                $obj[DB_COL_PASSPORT_EMAIL] = $pasport[DB_COL_PASSPORT_EMAIL];
				$result = $this->mPassport->addPassport($obj);
                if($result == FLAG_SUCCESSFUL){ 
					$this->session->set_flashdata('message', 'Đăng ký thành công.');
                }
				else if($result == FLAG_FAIL){
					$this->viewVar['error_mess'] = "Đăng ký không thành công. Hãy thử lại";
				}
            }
        }

        $this->load->view('dangky', $this->viewVar);
    }
}
