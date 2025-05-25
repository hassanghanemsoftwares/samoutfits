<div class="container py-5 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg rounded-4 border-0 p-4" style="max-width: 600px; width: 100%;">
        <div class="text-center">
            <div class="mb-4">
                <i class="bi bi-x-circle-fill text-danger display-1"></i>
            </div>
            <h2 class="fw-bold text-danger">Payment Failed</h2>
            <p class="text-muted lead mb-4">
                Your payment couldn’t be processed. Kindly contact administration for support.
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button class="btn" style="background-color: green; color:white;"
                    onclick='window.location.href="https://wa.me/+96170615210";'>
                    <i class="fab fa-whatsapp me-2"></i>
                    <?php echo $this->lang->line('Continue_Us_On_WhatsApp') ?>
                </button>
            </div>
        </div>
    </div>
</div>