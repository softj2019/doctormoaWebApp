<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		<?php
		$attributes = array('class' => 'form-horizonatal', 'id' => 'defaultForm','name' => 'defaultForm');
		echo form_open('console/stibee',$attributes);
		?>

		<div class="card">
			<div class="card-header row">
<!--				<button type="button" class="btn btn-danger deleteUser">사용자 삭제</button>-->
				<div class="col-5">
					<blockquote class="quote-indigo">
						<h5>주소록 동기화</h5>
						<h6 class="text-gray-dark text-sm">
							스티비 로그인 > 주소록 목록에서 주소록 이름을 클릭 >
							“주소록 대시보드"로 이동
							<br>브라우저에 표시되는 URL에서 "lists" 뒤의 숫자를 확인 (기본 :72186 유료사용자)
						</h6>
					</blockquote>
				</div>
				<div class="col-3 col-form-label">
					<label class="col-form-label">주소록 리스트 ID</label>
					<div class="col-form-label">
						<div class="input-group col-form-label">
							<input type="text" name="listId" class="form-control" value="72186">
							<span class="input-group-append">
							<button type="button" class="btn btn-default getStibee"><i class="fas fa-sync-alt"></i> 스티비 주소록 동기화</button>
						</span>
						</div>
					</div>
				</div>
			</div>
			<div class="card-header row">
				<div class="col-2">
					<label>검색시작일</label>
					<div class="input-group">
						<div class="input-group-prepend">
						  <span class="input-group-text">
							<i class="far fa-calendar-alt"></i>
						  </span>
						</div>
						<input type="text" name="startDate" class="form-control float-right startDate startDateCustom bg-white" value="<?php echo set_value('startDate') ?>">
					</div>
				</div>
				<div class="col-2">
					<label>검색종료일</label>
					<div class="input-group">
						<div class="input-group-prepend">
								  <span class="input-group-text">
									<i class="far fa-calendar-alt"></i>
								  </span>
						</div>
						<input type="text" name="endDate" class="form-control float-right endDate bg-white" value="<?php echo set_value('endDate') ?>">
					</div>

				</div>
				<div class="col-4">
					<label>검색어</label>
					<div class="input-group">
						<input type="text" name="keyword" class="form-control" placeholder="이름 또는 email " value="<?php echo set_value('keyword') ?>">
						<span class="input-group-append">
						<button type="submit" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
					  </span>
					</div>
				</div>
				<div class="col-4">
					<label class="ml-4">관리버튼</label>
					<div class="col-form-label">
						<button type="button" class="btn btn-info ml-4" data-toggle="modal" data-target="#modal-fom-subscribers"><i class="fas fa-user-plus"></i> </button>
						<button type="button" class="btn btn-danger ml-1" id="unSubscribe" ><i class="fas fa-stop-circle"></i> </button>
						<button type="button" class="btn btn-default ml-1" id="deleteSubscribers"><i class="fas fa-trash"></i> </button>
					</div>
				</div>
			</div>
			<div class="card-body table-responsive">

				<table class="table table-hover table-striped table-sm">
					<thead>
					<tr>
						<th class="text-center w-5">
							<div class="icheck-primary d-inline">
								<input type="checkbox" id="checkAll_fmode" name='checkAll' value="list_chk">
								<label for="checkAll_fmode">
								</label>
							</div>
						</th>
						<th>사용자ID</th>
						<th>구독메일</th>
						<th>이름</th>
						<th>구독상태</th>
						<th>구독일</th>
						<th>마지막 업데이트 </th>
						<th>주문번호</th>
						<th>결재금액</th>
						<th>결재일</th>
					</tr>
					</thead>
					<tbody>
					<?php if(@$list) {
						foreach ($list as $key=>$row) {
							?>
							<tr>
								<td class="text-center">
									<div class="icheck-primary d-inline">
										<input type="checkbox" id="chk_<?php echo $key; ?>" name="chk[]" value="<?php echo $row->email; ?>" class="list_chk">
										<label for="chk_<?php echo $key; ?>">
										</label>
									</div>
								</td>
								<td><?php echo $row->user_email; ?></td>
								<td><?php echo $row->email; ?></td>
								<td><?php echo $row->name; ?></td>
								<td><?php echo $row->status_name; ?></td>
								<td><?php echo date('Y-m-d H:i',strtotime($row->createdTime)); ?></td>
								<td><?php echo date('Y-m-d H:i',strtotime($row->modifiedTime)); ?></td>
								<td><?php echo $row->orderNumber; ?></td>
								<td>
									<?php echo number_format($row->amount); ?>
								</td>
								<td>
									<?php echo $row->payment_reg_date; ?>
								</td>
							</tr>
							<?php
						}
					}
					?>
					</tbody>
				</table>

			</div>
			<div class="card-footer">
				<?php echo $pagination?>
			</div>
		</div>
		<?php echo form_close();?>
	</div>
</div>
