<?php


class product extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//모델로드
		$this->load->model('common');
		//CSRF 방지
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->helper('alert');
		$this->load->library('pagination');
	}
	public function _remap($method)
	{

		if(!@$this->session->userdata('logged_in')) {
			modal_alert('로그인 후 이용가능합니다.','member/login',$this);
			redirect('member/login');
		}else{
			if (method_exists($this, $method)) {
				$this->{"{$method}"}();
			}
		}

	}
	public function index()
	{
		$data=Array();
		//사용자 정보


		$data['page_title']="구독신청";
		$data['menu_code']="015";


		//페이징 base_url '컨트롤러명/컨트롤러안의 함수명
		$config['base_url'] =base_url('main/index');
//		$config['total_rows'] = $this->common->select_count('kgart','','');
//		$config['per_page'] = 10;

//		$this->pagination->initialize($config);
//		$page = $this->uri->segment(3,0);
//		$data['pagination']= $this->pagination->create_links();
//		$limit[1]=$page;
//		$limit[0]=$config['per_page'];

		//기본목록

		$this->load->view('layout/topnavstyle/header',$data);
		$this->load->view('product/index',$data);
		$this->load->view('layout/topnavstyle/footer',$data);
	}
}
