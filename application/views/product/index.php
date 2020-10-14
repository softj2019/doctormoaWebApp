<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark"><?php echo $page_title; ?></h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active"><?php echo $page_title; ?></li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- Main content -->
<div class="content">
	<div class="container">

		<section class="content">

			<!-- Default box -->
			<div class="card card-solid">
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-sm-6">
							<h3 class="d-inline-block d-sm-none">어썸인 친절한 성 대표의 투자레터</h3>
							<div class="col-12">
								<img src="/assets/dist/img/product/product3.png" class="product-image w-75 text-center" alt="Product Image">
							</div>
							<div class="col-12 product-image-thumbs">
<!--								<div class="product-image-thumb active "><img src="/assets/dist/img/product/product3.png" alt="Product Image"></div>-->
<!--								<div class="product-image-thumb"><img src="/assets/dist/img/prod-2.jpg" alt="Product Image"></div>-->
<!--								<div class="product-image-thumb"><img src="/assets/dist/img/prod-3.jpg" alt="Product Image"></div>-->
<!--								<div class="product-image-thumb"><img src="/assets/dist/img/prod-4.jpg" alt="Product Image"></div>-->
<!--								<div class="product-image-thumb"><img src="/assets/dist/img/prod-5.jpg" alt="Product Image"></div>-->
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<?php
							$attributes = array('class' => 'form-horizontal','id' => 'default_form');
							echo form_open('/payment/request', $attributes);
							?>
							<h3 class="my-3">어썸인 친절한 성 대표의 투자레터 </h3>
							<p>무료배송</p>
							<hr>
<!--							<h4 class="mt-3">구독 옵션 <small>option</small></h4>-->
							<div class="btn-group btn-group-toggle " data-toggle="buttons">
								<label class="btn btn-pink text-center">
									<input type="radio" name="amount_radio"   value="80000">
									<span class="text-xl">1년</span>
									<br>
									정기구독
								</label>
								<label class="btn btn-default text-center">
									<input type="radio" name="amount_radio" value="8800">
									<span class="text-xl">1월</span>
									<br>
									구독
								</label>
<!--								<label class="btn btn-default text-center">-->
<!--									<input type="radio" name="color_option" id="color_option1" autocomplete="off">-->
<!--									<span class="text-xl">L</span>-->
<!--									<br>-->
<!--									Large-->
<!--								</label>-->
<!--								<label class="btn btn-default text-center">-->
<!--									<input type="radio" name="color_option" id="color_option1" autocomplete="off">-->
<!--									<span class="text-xl">XL</span>-->
<!--									<br>-->
<!--									Xtra-Large-->
<!--								</label>-->
							</div>

							<div class="bg-gray-light py-2 px-3 mt-4">
								<h2 class="mb-0 text-right view_amount">
									80,000 원
								</h2>
<!--								<h4 class="mt-0">-->
<!--									<small>Ex Tax: $80.00 </small>-->
<!--								</h4>-->
							</div>


							<hr>
							<h4 class="mt-3">주문자정보 <small></small></h4>

							<input type="hidden" name="itemName" value="친절한 성 대표의 투자레터">
							<input type="hidden" name="amount" value="80000">
							<input type="hidden" name="listId" value="72186">
<!--							<input type="hidden" name="itemName" value="">-->
<!--							<input type="hidden" name="itemName" value="">-->

								<div class="card-body">
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-3 col-form-label">이름 <span class="text-danger">*</span> </label>
										<div class="col-sm-9">
											<input type="text" name="userName" class="form-control" id="inputEmail3" placeholder="이름" value="<?php echo set_value('userName'); ?>">
										</div>
										<div class="col-sm-9 offset-sm-3">
										<?php echo form_error('userName'); ?>
										</div>
									</div>
									<div class="form-group row mt-1">
										<label for="inputPassword3" class="col-sm-3 col-form-label">구독메일 <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="email" name="userEmail"  class="form-control" id="inputPassword3" placeholder="이메일" value="<?php echo set_value('userEmail'); ?>">
										</div>
										<div class="col-sm-9 offset-sm-3">
										<?php echo form_error('userEmail'); ?>
										</div>
									</div>
<!--									<div class="form-group row mt-1">-->
<!--										<label for="" class="col-sm-3 col-form-label">비밀번호 <span class="text-danger">*</span></label>-->
<!--										<div class="col-sm-9">-->
<!--											<input type="password" name="password"  class="form-control" id="" placeholder="비밀번호">-->
<!--										</div>-->
<!--										<div class="col-sm-9 offset-sm-3">-->
<!--											<p>구독확인용비밀번호</p>-->
<!--											--><?php //echo form_error('password'); ?>
<!--										</div>-->
<!--									</div>-->
									<div class="form-group row mt-1">
										<label for="" class="col-sm-3 col-form-label">전화번호 <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="mobileNumber"  class="form-control" id="" placeholder="전화번호" value="<?php echo set_value('mobileNumber'); ?>">
										</div>
										<div class="col-sm-9 offset-sm-3">
											<?php echo form_error('mobileNumber'); ?>
										</div>
									</div>
									<div class="form-group row mt-1">
										<label for="" class="col-sm-3 col-form-label">생년월일 <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="number" name="birthday"  class="form-control" id="" placeholder="1990.01.10 = 900110" value="<?php echo set_value('birthday'); ?>">
										</div>
										<div class="col-sm-9 offset-sm-3">
											<p>법인카드의 경우 사업자등록번호 10자리</p>
											<?php echo form_error('birthday'); ?>
										</div>
									</div>
									<hr>
									<h4 class="mt-3">결제정보 <small></small></h4>
									<div class="form-group row">
										<label for="" class="col-sm-3 col-form-label">카드번호 <span class="text-danger">*</span></label>
										<div class="col-sm-9">
											<input type="number" name="cardNo"  class="form-control" id="" placeholder="카드번호" value="<?php echo set_value('cardNo'); ?>">
										</div>
										<div class="col-sm-9 offset-sm-3">
											<?php echo form_error('cardNo'); ?>
										</div>
									</div>
									<div class="form-group row mt-1">
										<label for="" class="col-sm-3 col-form-label">유효기간 <span class="text-danger">*</span></label>
										<div class="col-sm-4">
<!--											<input type="number" name="expireMonth"  class="form-control" id="" placeholder="월">-->
											<select name="expireMonth" class="form-control">
												<option value="01">1</option>
												<option value="02">2</option>
												<option value="03">3</option>
												<option value="04">4</option>
												<option value="05">5</option>
												<option value="06">6</option>
												<option value="07">7</option>
												<option value="08">8</option>
												<option value="09">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
										</div>
										<div class="col-sm-5">
											<select name="expireYear" class="form-control">
												<option value="20">2020</option>
												<option value="21">2021</option>
												<option value="22">2022</option>
												<option value="23">2023</option>
												<option value="24">2024</option>
												<option value="25">2025</option>
												<option value="26">2026</option>
												<option value="27">2027</option>
												<option value="28">2028</option>

											</select>
<!--											<input type="number" name="expireYear"  class="form-control" id="" placeholder="년 (ex: 2020 = 20)">-->
										</div>
										<div class="col-sm-4 offset-sm-3">
											<?php echo form_error('expireMonth'); ?>
										</div>
										<div class="col-sm-5">
											<?php echo form_error('expireYear'); ?>
										</div>
									</div>
									<div class="form-group row mt-1">
										<label for="" class="col-sm-3 col-form-label">비밀번호 <span class="text-danger">*</span></label>
										<div class="col-sm-4">
											<input type="password" name="cardPw"  class="form-control" id="" placeholder="앞 두자리">
										</div>
										<label for="" class="col-sm-2 col-form-label">할부 <span class="text-danger">*</span></label>
										<div class="col-sm-3">
											<select name="quota" class="form-control">
												<option value="1">일시불</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>

											</select>
<!--											<input type="number" name="quota"  class="form-control" id="" placeholder="">-->
										</div>
										<div class="col-sm-4 offset-sm-3">
											<?php echo form_error('cardPw'); ?>
										</div>
										<div class="col-sm-5 ">
											<?php echo form_error('quota'); ?>
										</div>
									</div>
									<div class="form-group">
										<input type="hidden" name="responseCode" value="0000">
										<div class="col-sm-12 ">
											<?php// echo form_error('responseCode'); ?>
										</div>
									</div>
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<button type="submit" class="btn btn-outline-pink float-right btn-block"><i class="fas fa-credit-card fa-lg mr-2"></i>결제하기</button>
<!--									<button type="submit" class="btn btn-default float-right"><i class="fas fa-cart-plus fa-lg mr-2"></i>장바구니담기</button>-->
								</div>
								<!-- /.card-footer -->
							<?php
							echo form_close();
							?>

<!--							<div class="mt-4 product-share">-->
<!--								<a href="#" class="text-gray">-->
<!--									<i class="fab fa-facebook-square fa-2x"></i>-->
<!--								</a>-->
<!--								<a href="#" class="text-gray">-->
<!--									<i class="fab fa-twitter-square fa-2x"></i>-->
<!--								</a>-->
<!--								<a href="#" class="text-gray">-->
<!--									<i class="fas fa-envelope-square fa-2x"></i>-->
<!--								</a>-->
<!--								<a href="#" class="text-gray">-->
<!--									<i class="fas fa-rss-square fa-2x"></i>-->
<!--								</a>-->
<!--							</div>-->

						</div>
					</div>
					<div class="row mt-4">
						<nav class="w-100">
							<div class="nav nav-tabs" id="product-tab" role="tablist">
								<a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">상품 상세정보</a>
<!--								<a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>-->
<!--								<a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>-->
							</div>
						</nav>
						<div class="tab-content p-3" id="nav-tabContent">
							<div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
								<p>월 구독료= 8,800원</p>
								<p>연 구독 시 3개월 할인 혜택 = 8만원</p>
								<p><span class="text-bold text-info">연 구독</span>이면 3개월을 무료로 볼 수 있습니다!</p>
							</div>
<!--							<div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>-->
<!--							<div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>-->
						</div>
					</div>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</section>
	</div>
</div>
<script>
	var responseCode = '<?php echo form_error('responseCode','<p>',"</p>"); ?>';

	window.onload = function () {
		if(responseCode){
			callToastMidCenter(responseCode,"error");
		}
	}
</script>
