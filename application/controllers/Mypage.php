<?php


class Mypage extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('alert');
		//CSRF 방지
		$this->load->helper('form');
		$this->load->helper('security');
		$this->load->helper('utility');
		$this->load->library('pagination');
		$this->load->library('email');
		//기본 Data modal
		$this->load->model('common');
	}
	public function _remap($method)
	{
		$data=Array();
		if(!@$this->session->userdata('logged_in')) {
			modal_alert('로그인 후 이용가능합니다.','member/login',$this);
			redirect('member/login');
		}else{
			if (method_exists($this, $method)) {
				$this->{"{$method}"}();
			}
		}
	}
//구독관리
	public function mystibee()
	{
		$data=Array();
		$data['page_title']="구독 현황";
		$data['menu_code']="014";
		$data['footerScript']='';
		$email = @$this->session->userdata('email');
		$where=array("A.user_id"=>@$this->session->userdata('user_id'));
		//페이징
		$config['base_url'] =base_url('member/mystibee');
		$config['total_rows'] = $this->common->select_count('stibee_subscribers A','',$where,'');
		$config['per_page'] = 10;

		$this->pagination->initialize($config);
		$page = $this->uri->segment(3,0);
		$data['pagination']= $this->pagination->create_links();
		$limit[1]=$page;
		$limit[0]=$config['per_page'];
		$order_by=array('key'=>'A.createdTime','value'=>'desc');
		$sql="*," .
			"(select Z.email from kguse Z where Z.user_id=A.user_id) as user_email," .
			"(select Z.typename from kgref Z where Z.typecolumn='status' and Z.typecode=A.status)as status_name," .
			"(select Z.amount from payment Z where Z.userEmail=A.email order by Z.reg_date DESC limit 1)as amount," .
			"(select Z.reg_date from payment Z where Z.userEmail=A.email order by Z.reg_date DESC limit 1)as payment_reg_date" .
			"";
		$data["list"]=$this->common->select_list_table_result($table='stibee_subscribers A',$sql,$where,$coding=false,$order_by,$group_by='',$where_in='',$like='',$joina='',$joinb='',$limit);
		$this->load->view('layout/topnavstyle/header',$data);
		$this->load->view('mypage/mystibee',$data);
		$this->load->view('layout/topnavstyle/footer',$data);
	}
}
