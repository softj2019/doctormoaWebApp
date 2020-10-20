<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content1">
	<div class="com-hd">
		<p><?=$page_title?></p>
		<a href="community-note.html" class="blue-btn">글쓰기</a>
	</div>
	<div class="com-main">
		<ul class="com-main-ul">
			<li class="com-tit-li">
				<p class="li-num">번호</p>
				<p class="pl10">내용</p>
				<div class=""></div>
			</li>
	<?php if(@$list) {
		foreach ($list as $row) {
			?>
			<li>
				<p class="li-num"><?php echo $row->num; ?></p>
				<a href="">
					<p><?php echo $row->title; ?></p>
					<div class="">
						<p class="com-id">아이디</p>
						<div class="com-r">
							<p class="com-day"><?php echo nice_date($row->created_at,"y.m.d"); ?></p>
							<p>조회수 <span>200</span></p>
						</div>
					</div>
				</a>
			</li>
			<?php
		}
	}
	?>

		</ul>
		<?php echo $pagination?>
<!--		<ul class="pagination">-->
<!--			<li class="page-item"><a class="page-link" href="#">≪</a></li>-->
<!--			<li class="page-item"><a class="page-link" href="#">＜</a></li>-->
<!--			<li class="page-item"><a class="page-link active" href="#">1</a></li>-->
<!--			<li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--			<li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--			<li class="page-item"><a class="page-link" href="#">4</a></li>-->
<!--			<li class="page-item"><a class="page-link" href="#">5</a></li>-->
<!--			<li class="page-item"><a class="page-link" href="#">＞</a></li>-->
<!--			<li class="page-item"><a class="page-link" href="#">≫</a></li>-->
<!--		</ul>-->
	</div>

</div>

