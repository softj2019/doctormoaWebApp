<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
