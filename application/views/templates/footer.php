<script type="text/javascript">
	const _lang = <?php echo json_encode($this->lang->language) ?>;
	const _logged_in = <?php echo json_encode($this->violet_auth->is_logged_in()) ?>;
</script>
<?php $this->load->view('templates/footer_div') ?>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/lib//slick-carousel/slick.min.js"></script>
<!-- Contact Javascript File -->
<!-- <script src="assets/mail/jqBootstrapValidation.min.js"></script>
<script src="assets/mail/contact.js"></script> -->
<!-- Template Javascript -->
<script src="assets/js/main.js?version=1.3"></script>
<script src="assets/js/common.js?version=1.3"> </script>
<?php
if (isset($_moreJs)) :
	foreach ($_moreJs as $jsFile) {
		echo PHP_EOL, '<script src="assets/js/', $jsFile, '.js?version=5.9"></script>';
	}
endif
?>
<!--<script>-->
<!--    $(document).ready(function() {-->
<!--    $('.product-item .text-center a.h6').each(function() {
        // Wrap the first letter in a <span> with class "first-letter"
<!--        let firstLetter = $(this).text().charAt(0);-->
<!--        let remainingText = $(this).text().slice(1);-->
<!--        $(this).html(`<span class="first-letter">${firstLetter}</span>${remainingText}`);-->
<!--    });-->
<!--    $('.product-item .text-center h6 a.h6').each(function() {
        // Wrap the first letter in a <span> with class "first-letter"
<!--        let firstLetter = $(this).text().charAt(0);-->
<!--        let remainingText = $(this).text().slice(1);-->
<!--        $(this).html(`<span style="color:black !important;">${firstLetter}${remainingText}</span>`);-->
<!--    });-->
<!--});-->
<!--</script>-->
</body>

</html>