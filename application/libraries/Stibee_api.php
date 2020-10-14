<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stibee_api
{
 	function StibeeRestFul($method="",$url="",$data=array()){
		//인증토큰
		$accessToken = 'affdd4c744d9d31cc7dbefd1d0a3b7a7a2fe85829ebb037d2f390050aa5482ed65af7a5af58d286e656830876f619d9a8864a1abae6c6a7d3fedce49081ae871';

		//스티비 요청 URL
		$ch = curl_init();

		$postdata = json_encode($data);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'AccessToken:'.$accessToken,
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

