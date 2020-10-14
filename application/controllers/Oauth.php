<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oauth extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('alert');
        //CSRF 방지
        $this->load->helper('form');
        $this->load->helper('security');
        $this->load->helper('utility');

        $this->load->library('email');
        //기본 Data modal
        $this->load->model('common');
		$this->load->library('stibee_api');
    }


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
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function _remap($method)
    {
        if (method_exists($this, $method)) {
            $this->{"{$method}"}();
        }
    }

	public function index()
	{
		$this->load->library("kakao_login");
		$result = $this->kakao_login->get_profile();
		$kakao_profile =$result["kakao_account"]["profile"];
		if($result["id"]){
			//세션 생성
			$email =$result["kakao_account"]["email"];
			$newdata = array(
//				'username' => $result->username,
				'name' => $kakao_profile["nickname"],
				'user_id'=> $result["id"],
				'logged_in' => TRUE,
				'email' =>$email,
//				'is_admin'=>FALSE,
//				'is_root'=>FALSE,
//					'lang_cd'=>$this->input->post('lang_cd'),
			);
			$where= array(
				'email' => $email,
			);
			$resultRow = $this->common->select_row('kguse',$sql='',$where );
			if($resultRow->role =="admin" || $resultRow->role =="root"){
				$newdata['is_admin']=TRUE;
				if($result->role =="root"){
					$newdata['is_root']=TRUE;
				}
			}

			$this->session->set_userdata($newdata);
			//있으면 업데이트 없으면 insert

			$userDataResult = $this->common->select_row('kguse','',array('email'=>$email));
			if($userDataResult)$historyValue='로그인';
			if(!$userDataResult)$historyValue='회원가입';
			$param = array(
				//dup key 를 제일 마지막으로둔다
				'name'=>$kakao_profile["nickname"],
				'email' => $email,
				'id'=>$result["id"],
				'user_id'=>$result["id"],
			);
			$this->common->insert_on_dup('kguse',$param,$dup_key='user_id');


			$kguse_history_param=array(
				'user_id'=>$result["id"],
				'log_data'=>$historyValue,
			);
			$this->common->insert('kguse_history',$kguse_history_param);

		}
		$this->load->view('popup/kakao_login');
//		print_r($result);
	}
	public function stibeewebhook()
	{
		header('Content-type: application/json; charset=utf-8');
		/*
		 	"SUBSCRIBED": 구독
			"UPDATED": 구독자 정보 변경
			“UNSUBSCRIBED”: 수신거부
			“RESUBSCRIBED”: 수신거부 취소
			“DELETED”: 자동삭제
			“PURGED”: 완전삭제
		 * */
		$json_params = json_decode(file_get_contents("php://input"));
		log_message('debug',$json_params->id);
		log_message('debug',$json_params->action);
		log_message('debug',$json_params->eventOccuredBy);
		foreach ($json_params->subscribers[0] as $key=>$value){
			log_message('debug',$key.'->'.$value);
		}

		//스티비 요청 URL
		$url ="https://api.stibee.com/v1/lists/".$json_params->id."/subscribers";
		$response = $this->stibee_api->StibeeRestFul("GET",$url);
		$list = json_decode($response);
		if($json_params->action == 'PURGED' || $json_params->action == 'DELETED' ){

			foreach ($json_params->subscribers[0] as $key=>$value){
				$this->common->delete_row('stibee_subscribers',array("email"=>$value,'listId'=>$json_params->id));
			}
		}


		if($list->Ok){
			foreach ($list->Value as $item) {
				$param=array(
					"listId"=>$json_params->id,
					"name"=>$item->name,
					"status"=>$item->status,
					"createdTime"=>$item->createdTime,
					"modifiedTime"=>$item->modifiedTime,
					"user_id"=>$item->kakaoid,
					"orderNumber"=>$item->orderNumber,
					"endTime"=>$item->endTime,
					"email"=>$item->email,

				);
				$this->common->insert_on_dup('stibee_subscribers',$param,$dup_key='email');
			}
		}
	}
}
