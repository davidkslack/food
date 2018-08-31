
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="/vendor/animsition/js/animsition.min.js"></script>
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/select2/select2.min.js"></script>
<script src="/vendor/daterangepicker/moment.min.js"></script>
<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<script src="/vendor/countdowntime/countdowntime.js"></script>
<script src="/js/main.js"></script>

<script>

    /**
     * On clicking the complete button of the orders page
     */
    $('.orders-page .complete-btn').click(function () {
        var url = '/admin/complete/' + $(this).data("id");
        window.location.replace(url);
    });
</script>

</body></html>