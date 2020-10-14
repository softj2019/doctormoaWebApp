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
		echo form_open('console/getStibee',$attributes);
		?>

		<div class="card">
			<div class="card-header">
<!--				<button type="button" class="btn btn-danger deleteUser">사용자 삭제</button>-->

				<blockquote class="quote-primary">
					<h5 class="text-gray-dark">
					</h5>
				</blockquote>
<!--				<div class="form-group row">-->
<!--					<label class="col-form-label col-2">주소록 리스트 ID</label>-->
<!--					<div class="col-2">-->
<!--						<input type="text" name="listId" class="form-control" value="72186">-->
<!--					</div>-->
<!--					<div class="col-8">-->
<!--						<button type="button" class="btn btn-default getStibee"><i class="fas fa-sync-alt"></i> 스티비 주소록 동기화</button>-->
<!--						<button type="button" class="btn btn-info ml-4" data-toggle="modal" data-target="#modal-fom-subscribers"><i class="fas fa-user-plus"></i> </button>-->
<!--						<button type="button" class="btn btn-danger ml-1" id="unSubscribe" ><i class="fas fa-stop-circle"></i> </button>-->
<!--						<button type="button" class="btn btn-default ml-1" id="deleteSubscribers"><i class="fas fa-trash"></i> </button>-->
<!--					</div>-->
<!--				</div>-->
				<div class="form-group row">

				</div>

			</div>

			<div class="card-body table-responsive">

				<table class="table table-hover table-striped">
					<thead>
					<tr>
<!--						<th class="text-center w-5">-->
<!--							<div class="icheck-primary d-inline">-->
<!--								<input type="checkbox" id="checkAll_fmode" name='checkAll' value="list_chk">-->
<!--								<label for="checkAll_fmode">-->
<!--								</label>-->
<!--							</div>-->
<!--						</th>-->
						<th>구독메일</th>
						<th>이름</th>
						<th>구독상태</th>
						<th>구독일</th>
						<th>구독종료일</th>
<!--						<th>마지막 업데이트 </th>-->
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
<!--								<td class="text-center">-->
<!--									<div class="icheck-primary d-inline">-->
<!--										<input type="checkbox" id="chk_--><?php //echo $key; ?><!--" name="chk[]" value="--><?php //echo $row->email; ?><!--" class="list_chk">-->
<!--										<label for="chk_--><?php //echo $key; ?><!--">-->
<!--										</label>-->
<!--									</div>-->
<!--								</td>-->
								<td><?php echo $row->email; ?></td>
								<td><?php echo $row->name; ?></td>
								<td><?php echo $row->status_name; ?></td>
								<td><?php echo date('Y-m-d ',strtotime($row->createdTime)); ?></td>
<!--								<td>--><?php //echo date('Y-m-d',strtotime($row->endTime)); ?><!--</td>-->
								<td><?php echo date('Y-m-d',strtotime($row->endTime)); ?></td>
<!--								<td>--><?php //echo date('Y-m-d ',strtotime($row->modifiedTime)); ?><!--</td>-->
								<td><?php echo $row->orderNumber; ?></td>
								<td>
									<?php echo number_format($row->amount); ?>
								</td>
								<td><?php echo date('Y-m-d',strtotime($row->payment_reg_date)); ?></td>
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
