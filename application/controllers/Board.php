<?php
/**
 * Created by PhpStorm.
 * User: road
 * Date: 2019-11-12
 * Time: 오후 5:58
 */

class Board  extends CI_Controller
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
		$this->load->library('user_agent');



    }
	public function _remap($method)
	{

		if (method_exists($this, $method)) {
			$this->{"{$method}"}();
		}

	}

    public function boardlist()
    {
        $data=Array();
		//사용자 정보

		$type = $this->input->get("board_type");
		if(!$type){
			$type = "A";
		}
		$data['page_title']="지난레터&자주하는질문";
//		$data['page_sub_title']="";
//        $data['page_css_style']="fee.css";
		$data['menu_code']="010";
//		$user_data = $this->common->select_row('member','',Array('email'=>@$this->session->userdata('email')));


		//페이징 base_url '컨트롤러명/컨트롤러안의 함수명
		$config['base_url'] =base_url('board/boardlist');
		$config['total_rows'] = $this->common->select_count('board','',array('type'=>$type));
		$config['per_page'] = 10;

		$this->pagination->initialize($config);
		$page = $this->uri->segment(3,0);
		$data['pagination']= $this->pagination->create_links();
		$limit[1]=$page;
		$limit[0]=$config['per_page'];
		$order_by=array('key'=>'order','value'=>'desc');
		$where = array(
			'type'=>$type,
//			"(@rownum:=0) = "=>0,

		);
		//기본목록
		$data["list"]= $this->common->select_list_table_result('board a,(select (@rownum:=0) = 0) tmp',$sql='(@rownum:=@rownum+1) as num,a.*,(select kguse.name from kguse where kguse.id = a.user_id) as name',$where,$coding=false,$order_by,$group_by='',$where_in='',$like='',$joina='',$joinb='',$limit);

		$this->load->view('layout/topnavstyle/header',$data);
        $this->load->view('board/boardlist',$data);
		$this->load->view('layout/topnavstyle/footer',$data);
    }

	public function boardread()
	{
		$data=Array();
		$data['page_title']="지난레터보기";
		$data['menu_code']="010";

		$where=array(
			"id"=> $this->uri->segment(3,0),
		);
		$boardRow =$this->common->select_row($table='board',
			'board.*,(select kguse.name from kguse where kguse.id = board.user_id) as name',
			$where,$coding=false,$order_by='',$group_by='' );

		$data['boardRow']=$boardRow;
		$data['board_type']=$boardRow->type;
		$data['title']=$boardRow->title;
		$data['content']=$boardRow->content;
		$data['br_cd']=$boardRow->br_cd;

		$data['boardFileList']=$this->common->select_list_table_result('boardfile','',array('br_cd'=>$boardRow->br_cd),$coding=false,$order_by,$group_by='',$where_in='',$like='',$joina='',$joinb='',$limit='');
		//에디터 에 내용전달
		$this->load->view('layout/topnavstyle/header',$data);
		$this->load->view('board/boardform',$data);
		$this->load->view('layout/topnavstyle/footer',$data);
	}
}
