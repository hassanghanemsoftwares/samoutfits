</div>
<script src="assets/js/jquery213.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/magnific/js/magnific.v1.1.0.min.js"></script>
<script src="assets/js/common.js"></script>
<script src="assets/js/html2canvas.js" type="text/javascript"></script> 
<script src="assets/js/jqueryhtml2canvas.js" type="text/javascript"></script> 
<script src="assets/js/jsbarcode.js" type="text/javascript"></script>
<?php
if (isset($_moreJs)):
	foreach ($_moreJs as $jsFile) {
		echo PHP_EOL, '<script src="assets/js/', $jsFile, '.js"></script>';
	}
endif
?>
</body>
</html>