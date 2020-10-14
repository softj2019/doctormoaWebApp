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
		<?php
		$attributes = array('class' => 'form-horizonatal', 'id' => 'defaultForm','name' => 'defaultForm');
		echo form_open('email/send',$attributes);
		?>
		<?php echo form_close();?>
		<div class="card">
<!--			<div class="card-header">-->
<!--				<blockquote class="quote-primary">-->
<!--										<h4 class="text-gray-dark">업로드 필요한 자료가 있는 경우 관리자에게 요청해주십시오.</h4>-->
<!--					<small>업로드 필요한 자료가 있는 경우 관리자에게 요청해주십시오.</small>-->
<!--				</blockquote>-->
<!--			</div>-->
			<div class="card-body">
				<div class="card-body">
					<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link <?=$this->input->get("board_type")=="A"?"active":""?> " id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true" onclick="location.href='/board/boardlist?board_type=A'">지난레터보기</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?=$this->input->get("board_type")=="B"?"active":""?>" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false" onclick="location.href='/board/boardlist?board_type=B'">자주하는질문</a>
						</li>
					</ul>
					<div class="tab-content" id="custom-content-below-tabContent">
						<div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
							<table class="table table-hover table-striped">
								<thead>
								<tr>
<!--									<th style="width: 5%">no</th>-->
									<th style="width: 85%">제목</th>
<!--									<th style="width: 85%">작성자</th>-->
<!--									<th style="width: 10%">등록일</th>-->
								</tr>
								</thead>
								<tbody>
								<?php if(@$list) {
									foreach ($list as $row) {
										?>
										<tr>
<!--											<td class="text">--><?php //echo $row->num; ?><!--</td>-->
											<td><a href="/board/boardread/<?php echo $row->id; ?>"><?php echo $row->title; ?></a></td>
<!--											<td class="text-truncate">--><?php //echo $row->name; ?><!--</td>-->
<!--											<td class="text-truncate">--><?php //echo $row->created_at; ?><!--</td>-->
										</tr>
										<?php
									}
								}
								?>
								</tbody>
							</table>
						</div>
						<div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
							<table class="table table-hover table-striped">
								<thead>
								<tr>
<!--									<th style="width: 5%">no</th>-->
									<th style="width: 85%">제목</th>
<!--									<th style="width: 85%">작성자</th>-->
<!--									<th style="width: 10%">등록일</th>-->
								</tr>
								</thead>
								<tbody>
								<?php if(@$list) {
									foreach ($list as $row) {
										?>
										<tr>
<!--											<td class="text">--><?php //echo $row->num; ?><!--</td>-->
											<td><a href="/board/boardread/<?php echo $row->id; ?>"><?php echo $row->title; ?></a></td>
<!--											<td class="text-truncate">--><?php //echo $row->name; ?><!--</td>-->
<!--											<td class="text-truncate">--><?php //echo $row->created_at; ?><!--</td>-->
										</tr>
										<?php
									}
								}
								?>
								</tbody>
							</table>
						</div>

					</div>

				</div>

				<?php echo $pagination?>
			</div>
<!--			<div class="card-footer">-->
<!--				-->
<!--			</div>-->
		</div>
	</div>
</div>

