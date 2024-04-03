<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Base_Controller extends CI_Controller {

    const VALUE_PAGINATION_LIMIT = 1;//number of record diplay in one page
    const VALUE_PAGINATION_LINKS = 7; //number of link in pagination
    const VALUE_PAGINATION_URISEGMENT = 4;//number of segment
    
    public $configVar = array();

    public $privilageMethod = array();

    protected $error_flg = FALSE;
    protected function debug($data) {
        var_dump($data);
        exit();
    }
    protected function getPaginationConfig() {
        $config['per_page']             = self::VALUE_PAGINATION_LIMIT;
        $config["uri_segment"]          = self::VALUE_PAGINATION_URISEGMENT;
        $config['page_query_string']    = true;
        $config['query_string_segment'] = 'page';
        $config['reuse_query_string']   = true;
        $config['full_tag_open']        = '<ul class="pagination">';
        $config['full_tag_close']       = '</ul>';
        $config['first_link']           = false;
        $config['last_link']            = false;
        $config['first_tag_open']       = '<li>';
        $config['first_tag_close']      = '</li>';
        $config['prev_link']            = '«';
        $config['prev_tag_open']        = '<li class="prev">';
        $config['prev_tag_close']       = '</li>';
        $config['next_link']            = '»';
        $config['next_tag_open']        = '<li>';
        $config['next_tag_close']       = '</li>';
        $config['last_tag_open']        = '<li>';
        $config['last_tag_close']       = '</li>';
        $config['cur_tag_open']         = '<li class="active"><a href="#">';
        $config['cur_tag_close']        = '</a></li>';
        $config['num_tag_open']         = '<li>';
        $config['num_tag_close']        = '</li>';
        return $config;
    }
    public function __construct() {
        parent::__construct();
        $this->load->helper('layout');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
		$this->load->library('pagination');
		$this->lang->load('messages', 'english');
		$this->form_validation->set_message('required', $this->lang->line('validation_required'));
		$this->form_validation->set_message('max_length', $this->lang->line('validation_max_length'));
		$this->form_validation->set_message('is_unique', $this->lang->line('validation_unique'));
		
        
        $this->load->model('mpassport', 'mPassport');
        $this->load->model('mresident', 'mResident');
        $this->load->model('madmin', 'mAdmin');
        $this->_startup();

        //store current request
        $this->session->set_flashdata('preURL', $_SERVER['REQUEST_URI']);
    }

    protected function _startup() {
        $this->config->load('config', TRUE);
        $_config = $this->config->item('config');
        $this->config->load('my_config', TRUE);
        $_config2 = $this->config->item('my_config');
        $this->configVar = $this->viewVar['config'] = array_merge($_config, $_config2);
        $this->viewVar['privilage'] = $this->privilageMethod;
        
    }


}
class Base_Authenticate_Controller extends Base_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata(LOGGED_USER)) {
            redirect('login');
        }
    }
}