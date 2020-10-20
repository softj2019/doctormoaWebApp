<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<title>닥터모아</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link href="/assets/css/reset.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/common.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/system.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:300,400&display=swap&subset=korean" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.3.0/fonts/remixicon.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" type="text/css">
	<link href="/assets/plugins/slick-theme.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.js"></script>
	<script>
		var base_url ='<?=base_url()?>';
	</script>
</head>
<body>
	<div class="wrap">
		<header class="m-header">
			<div class="in-hd sub-hd">
				<div class="logo-box">
					<button type="button" class="left-btn">이전</button>
					<h1 class="logo"><a href="/">닥터모아</a></h1>
				</div>
				<div class="src-out">
					<div class="src-form">
						<form action="" class="flexwrap">
							<input type="text" class="src-inp">
							<button type="button" class="src-btn"></button>
						</form>
					</div>
					<button type="button" class="ham-btn"></button>
				</div>
			</div>
		</header>

		<div class="tab-bg"></div>
		<div class="right-tab">
			<div class="tab-hd flexwrap">
				<button type="button" class="closebox"></button>
				<ul class="main-tab-ul flexcenter">
					<?php if(@$this->session->userdata('logged_in')) {?>
						<li><a href="/member/logout">로그아웃</a>
						<?php
					}else{
						?>
						<li><a href="/member/login">로그인</a>ㅣ</li>
						<li><a href="/member/join">회원가입</a></li>
						<?php
					}
					?>
				</ul>
			</div>
			<ul class="tab-lo">
				<?php if(@$this->session->userdata('logged_in')) {?>
					<li><a href="">마이페이지</a></li>
				<?php }?>
				<li><a href="">진료선택</a></li>
				<li><a href="">방문후기</a></li>
				<li><a href="">자유게시판</a></li>
				<li><a href="">질문과 답변</a></li>
				<li><a href="">제품판매</a></li>
				<li><a href="">구인구직</a></li>
				<li><a href="">공지사항</a></li>
				<li><a href="">의사/병원 등록하기</a></li>
			</ul>

		</div>
