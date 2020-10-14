<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payup_api
{
 	function restRequest($method="",$url="",$data=array()){
		//스티비 요청 URL
		$ch = curl_init();

		$postdata = json_encode($data);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json'
		));
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		if($data){
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		}
		curl_setopt($ch, CURLOPT_POST, true);
		$response = curl_exec($ch);
		curl_close ($ch);
		return $response;
	}
}

