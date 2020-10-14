<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		<?php
		$attributes = array('class' => 'form-horizonatal', 'id' => 'defaultForm','name' => 'defaultForm');
		echo form_open('console/mguser',$attributes);
		?>

		<div class="card">
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
				<div class="col-3">
					<label>검색어</label>
					<div class="input-group input-group">
						<input type="text" name="keyword" class="form-control" placeholder="이름 또는 email " value="<?php echo set_value('keyword') ?>">
						<span class="input-group-append">
						<button type="submit" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
					  </span>
					</div>
				</div>

				<div class="col-4">
					<label>관리버튼</label>
					<div class="col-form-label">
						<button type="button" class="btn btn-danger deleteUser">사용자 삭제</button>
						<!--					<button type="button" class="btn btn-default joinApply">가입 승인</button>-->
						<button type="button" class="btn btn-default userAccessApply">사용자 권한</button>
						<button type="button" class="btn btn-default adminAccessApply">관리자 권한</button>
					</div>

				</div>

			</div>

			<div class="card-body table-responsive">

				<table class="table table-hover table-striped">
					<thead>
					<tr>
						<th class="text-center w-5">
							<div class="icheck-primary d-inline">
								<input type="checkbox" id="checkAll_fmode" name='checkAll' value="list_chk">
								<label for="checkAll_fmode">
								</label>
							</div>
						</th>
						<th>이메일</th>
						<th>이름</th>
<!--						<th>권한</th>-->
<!--						<th>구독상태</th>-->
<!--						<th>결재상태</th>-->
<!--						<th>부서</th>-->
						<th>등록일</th>
						<th>수정일</th>
					</tr>
					</thead>
					<tbody>
					<?php if(@$list) {
						foreach ($list as $key=>$row) {
							?>
							<tr>
								<td class="text-center">
									<div class="icheck-primary d-inline">
										<input type="checkbox" id="chk_<?php echo $key; ?>" name="chk[]" value="<?php echo $row->id; ?>" class="list_chk">
										<label for="chk_<?php echo $key; ?>">
										</label>
									</div>
								</td>
								<td><?php echo $row->email; ?></td>
								<td><?php echo $row->name; ?></td>
<!--								<td>--><?php //echo $row->role_name; ?><!--</td>-->
<!--								<td>구독상태</td>-->
<!--								<td>결재상태</td>-->
<!--								<td>--><?php //echo $row->department; ?><!--</td>-->
								<td><?php echo $row->created_at; ?></td>
								<td><?php echo $row->updated_at; ?></td>
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
