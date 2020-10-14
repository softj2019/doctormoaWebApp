<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Main content -->
<div class="content">
	<div class="container-fluid">


		<div class="card">
			<?php
			$attributes = array('class' => 'form-horizonatal', 'id' => 'defaultForm','name' => 'defaultForm');
			echo form_open('console/boardChangeOrder',$attributes);
			?>
			<div class="card-body">
				<div class="card-header">
					<button class="btn btn-default float-right" type="button" id="btnBoardChangeOrder"><i class="fas fa-sort"></i>정렬 순서 변경</button>
				</div>
				<div class="card-body">
<!--					<h5>업로드 필요한 자료가 있는 경우 관리자에게 요청해주십시오.</h5>-->
					<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link <?=$this->input->get("board_type")=="A"?"active":""?> " id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true" onclick="location.href='/console/boardlist?board_type=A'">지난레터보기</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?=$this->input->get("board_type")=="B"?"active":""?>" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false" onclick="location.href='/console/boardlist?board_type=B'">자주하는질문</a>
						</li>
					</ul>

					<div class="tab-content" id="custom-content-below-tabContent">
						<div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">

							<table class="table table-hover table-striped">
								<thead>
								<tr>
<!--									<th style="width: 5%">no</th>-->
									<th style="width: 60%">제목</th>
									<th style="width: 10%">작성자</th>
									<th style="width: 10%">노출순서</th>
									<th style="width: 15%">등록일</th>
								</tr>
								</thead>
								<tbody>
								<?php if(@$list) {
									foreach ($list as $row) {
										?>
										<tr>
<!--											<td>--><?php //echo $row->num; ?><!--</td>-->
											<td><a href="/console/boardread/<?php echo $row->id; ?>"><?php echo $row->title; ?></a></td>

											<td><?php echo $row->name; ?></td>
											<td><input type="number" name="order[]" class="form-control order" value="<?php echo $row->order; ?>" data-id="<?php echo $row->id; ?>" ></td>
											<td><?php echo $row->created_at; ?></td>
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
									<th style="width: 85%">작성자</th>
									<th style="width: 10%">등록일</th>
								</tr>
								</thead>
								<tbody>
								<?php if(@$list) {
									foreach ($list as $row) {
										?>
										<tr>
<!--											<td>--><?php //echo $row->num; ?><!--</td>-->
											<td><a href="/console/boardread/<?php echo $row->id; ?>"><?php echo $row->title; ?></a></td>
											<td><?php echo $row->name; ?></td>
											<td><?php echo $row->created_at; ?></td>
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

				<div class="row"><a class="btn btn-primary" href="/console/boardform?board_type=<?=$this->input->get("board_type")?>">글쓰기</a></div>
			</div>
			<?php echo form_close();?>
			<div class="card-footer">
				<?php echo $pagination?>
			</div>
		</div>

	</div>
</div>

