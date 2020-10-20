<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="in-box sign-box">
	<div class="content-box">
		<p class="blue-txt mb50">비밀번호 찾기</p>
		<?php
		$attributes = array('class' => 'form-horizonta sign-form','id' => 'default_form','name' => 'default_form');
		echo form_open('/member/join_proc', $attributes);
		?>
			<p>가입정보 입력</p>
			<input type="text" class=" input-1 w100" placeholder="아이디">

			<button type="button" class="blue-b-btn mt80">비밀번호 찾기</button>
		<?php
		echo form_close();
		?>
	</div>
</div>
<script>
	//로그인 회원가입시 클래스 변경
	$(document).ready(function () {
		$('.wrap').addClass('fo-wrap')
		//로그인 회원가입 아이디패스워드찾기등 클래스 변경 fo-wrap 와 페이지 해더 영향으로인한 숨김처리
		$('.src-form').addClass('hidden');
	})
</script>
