<?php
/**
 * Created by PhpStorm.
 * User: road
 * Date: 2019-11-12
 * Time: 오후 5:58
 */

class Main  extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //모델로드
//        $this->load->model('admin_plan');
//        $this->load->model('admin_member');
//        $this->load->model('kgart_model');
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

		if (method_exists($this, $method)) {
			$this->{"{$method}"}();
		}

    }
    public function index()
    {
        $data=Array();
		//사용자 정보


		$data['page_title']="구독신청";
		$data['menu_code']="001";

		$limit[0]=5;
		$order_by=array('key'=>'order','value'=>'desc');
		//최근 공지사항
		$data["listA"]= $this->common->select_list_table_result('board a,(select (@rownum:=0) = 0) tmp',$sql='(@rownum:=@rownum+1) as num,a.*,(select kguse.name from kguse where kguse.id = a.user_id) as name',array("type"=>"A"),$coding=false,$order_by,$group_by='',$where_in='',$like='',$joina='',$joinb='',$limit);
		//최근 자유게시판
		$data["listB"]= $this->common->select_list_table_result('board a,(select (@rownum:=0) = 0) tmp',$sql='(@rownum:=@rownum+1) as num,a.*,(select kguse.name from kguse where kguse.id = a.user_id) as name',array("type"=>"B"),$coding=false,$order_by,$group_by='',$where_in='',$like='',$joina='',$joinb='',$limit);
		//최근 구인구직
		$data["listC"]= $this->common->select_list_table_result('board a,(select (@rownum:=0) = 0) tmp',$sql='(@rownum:=@rownum+1) as num,a.*,(select kguse.name from kguse where kguse.id = a.user_id) as name',array("type"=>"C"),$coding=false,$order_by,$group_by='',$where_in='',$like='',$joina='',$joinb='',$limit);
		//최근 제품판매
		$data["listD"]= $this->common->select_list_table_result('board a,(select (@rownum:=0) = 0) tmp',$sql='(@rownum:=@rownum+1) as num,a.*,(select kguse.name from kguse where kguse.id = a.user_id) as name',array("type"=>"D"),$coding=false,$order_by,$group_by='',$where_in='',$like='',$joina='',$joinb='',$limit);

		$this->load->view('layout/topnavstyle/header',$data);
		$this->load->view('layout/topnavstyle/headerSub',$data);
        $this->load->view('main/index',$data);
		$this->load->view('layout/topnavstyle/footer',$data);
    }

	public function menu(){
		$data["list"] = $this->common->select_list_table_result($table='menu',$sql='',$where='',$coding=false,$order_by='',$group_by='',$where_in='',$like='',$joina='',$joinb='',$limit='');

		$this->load->view('layout/menu',$data);
	}
	public function about()
	{
		$data=Array();
		//사용자 정보


		$data['page_title']="ABOUT";
		$data['menu_code']="016";


		//페이징 base_url '컨트롤러명/컨트롤러안의 함수명
		$config['base_url'] =base_url('main/about');
//		$config['total_rows'] = $this->common->select_count('kgart','','');
//		$config['per_page'] = 10;

//		$this->pagination->initialize($config);
//		$page = $this->uri->segment(3,0);
//		$data['pagination']= $this->pagination->create_links();
//		$limit[1]=$page;
//		$limit[0]=$config['per_page'];

		//기본목록

		$this->load->view('layout/topnavstyle/header',$data);
		$this->load->view('main/about',$data);
		$this->load->view('layout/topnavstyle/footer',$data);
	}


}
