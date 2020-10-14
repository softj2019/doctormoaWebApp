<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="in-box sign-box">
	<div class="content-box">
		<?php
		$attributes = array('class' => 'form-horizonta sign-form','id' => 'default_form','name' => 'default_form');
		echo form_open('/member/join_proc', $attributes);
		?>
		<p>기본정보</p>
		<input type="text" name="name" class="sign-name input-1 w100" placeholder="이름">
		<span class="err-red"><?php echo form_error('name'); ?></span>
		<input type="text" name="email" class="sign-id input-1 w100" placeholder="이메일">
<!--			<button type="button" class="blue-btn">중복확인</button>-->
		<span class="err-red"><?php echo form_error('email'); ?></span>
		<input type="password" name="password" class="sign-pw input-1 w100" placeholder="비밀번호">
		<span class="err-red"><?php echo form_error('password'); ?></span>
		<input type="password" name="password_proc" class="sign-pwc input-1 w100" placeholder="비밀번호 확인">
		<span class="err-red"><?php echo form_error('email'); ?></span>
		<button type="submit" class="blue-b-btn mt80">회원가입</button>
		<?php
		echo form_close();
		?>
	</div>
</div>
<script>
	//로그인 회원가입시 클래스 변경
	$(document).ready(function () {
		$('.wrap').addClass('fo-wrap')
	})
</script>
