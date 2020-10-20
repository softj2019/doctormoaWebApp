<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="modal fade" id="modal-user">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">비밀번호변경</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				$attributes = array('class' => 'form-horizonatal', 'id' => 'passwordChange','name' => 'passwordChange');
				echo form_open('',$attributes);
				?>
				<input type="hidden" name="user_id" value="<?php echo @$this->session->userdata('user_id') ?>">
				<div class="form-group">
					<div>
						<input type="password" name="password" placeholder="기존 비밀번호" class="form-control">
					</div>
					<p class="text-danger password">
						&nbsp;
					</p>
				</div>
				<div class="form-group">
					<div>
						<input type="password" name="new_password" placeholder="신규 비밀번호" class="form-control">
					</div>
					<p class="text-danger new_password">
						&nbsp;
					</p>

				</div>
				<div class="form-group">
					<div>
						<input type="password" name="new_password_proc" placeholder="신규 비밀번호 확인" class="form-control">
					</div>
					<p class="text-danger new_password_proc">
						&nbsp;
					</p>
				</div>
				<?php echo form_close();?>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">취소</button>
				<button type="button" class="btn btn-primary passwordChange">변경 요청</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>


<footer class="footer">
	<ul class="foot-ul flexcenter">
		<li><a href="">입점문의</a>ㅣ</li>
		<li><a href="">이용약관</a>ㅣ</li>
		<li><a href="" class="bold">개인정보방침</a>ㅣ</li>
		<li><a href="">이용안내</a></li>
	</ul>
	<ul class="foot-ul foot-sns flexcenter">
		<li><a href="" class="facebook-i"></a></li>
		<li><a href="" class="insta-i"></a></li>
		<li><a href="" class="kakao-i"></a></li>
		<li><a href="" class="twitter-i"></a></li>
		<li><a href="" class="youtube-i"></a></li>
	</ul>
	<ul class="foot-inf">
		<li>상호명 : 닥터모아 ㅣ 사업자등록번호 : 000-00-00000</li>
		<li>대표 : 대표님 ㅣ 대표번호 : 000-0000-0000</li>
		<li>서울특별시 어시구 어디로 000 서울빌딩 0층</li>
	</ul>
</footer>
</div>
<nav class="f-nav">
	<ul class="flexwrap">
		<li><a href=""><i class="ham-i"></i></a></li>
		<li><a href=""><i class="location-i"></i></a></li>
		<li><a href=""><i class="search-i"></i></a></li>
		<li><a href=""><i class="home-i"></i></a></li>
		<li><a class="userIcon" data-id="<?=@$this->session->userdata('logged_in')?'logged_in':''?>"><i class="mypage-i"></i></a></li>
	</ul>
</nav>
<script type="text/javascript" src="/assets/plugins/moment/moment.min.js"></script>
<script type="text/javascript" src="/assets/plugins/moment/locale/ko.js"></script>
<script type="text/javascript" src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/assets/dist/js/jquery.inputmask.min.js"></script><!--inputmask 사용 시 포함-->
<script src="/assets/js/common.js"></script>
<script src="/assets/js/system.js"></script>
<?php
if(@$footerScript){
	?>
	<script src="<?=$footerScript?>"></script>
	<?php
}
?>
</body>
</html>
