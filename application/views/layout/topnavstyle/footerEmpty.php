<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
