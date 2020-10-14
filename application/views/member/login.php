<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="in-box">
	<h1 class="logo-box"><a href="/">닥터모아</a></h1>
	<div class="login-box">
		<?php
		$attributes = array('class' => 'form-horizontal','id' => 'default_form','name' => 'default_form');
		echo form_open('/member/login_proc', $attributes);
		?>
			<input type="text" name="email" class="input-1 w100 mb10" placeholder="아이디(email)" value="<?php echo set_value('email'); ?>">
			<span class="err-red"><?php echo form_error('email'); ?></span>
			<input type="password" name="password" class="input-1 w100" placeholder="비밀번호">
			<span class="err-red"><?php echo form_error('password'); ?></span>
			<input type="checkbox" id="ch-1">
			<label for="ch-1" class="check-b">자동로그인</label>

			<button type="submit" class="login-btn">로그인</button>
			<ul class="for-ul">
				<li><a href="">아이디찾기</a></li>
				<li><a href="">비밀번호찾기</a></li>
				<li><a href="/member/join">회원가입</a></li>
			</ul>
			<div class="hr"></div>
			<button type="button" class="kakao-lo-btn sns-lo" id="kko-login-btn">카카오톡 로그인</button>
			<button type="button" class="naver-lo-btn sns-lo">네이버 로그인</button>
			<button type="button" class="google-lo-btn sns-lo">구글 로그인</button>
		<?php
		echo form_close();
		?>
	</div>
</div>
<script>

	$(document).ready(function () {
		$('.wrap').addClass('fo-wrap')
		//로그인 회원가입 아이디패스워드찾기등 클래스 변경 fo-wrap 와 페이지 해더 영향으로인한 숨김처리
		$('.src-form').addClass('hidden');
	})
</script>

