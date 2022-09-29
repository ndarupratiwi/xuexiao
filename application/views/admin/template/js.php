<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/sbadmin/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/sbadmin/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/sbadmin/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/sbadmin/vendor/chart.js/Chart.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/sbadmin/js/demo/datatables-demo.js') ?>"></script>
<script src="<?php echo base_url('assets/sbadmin/js/demo/chart-area-demo.js') ?>"></script>
<script src="<?php echo base_url('assets/sbadmin/js/demo/chart-pie-demo.js') ?>"></script>
<script src="<?php echo base_url('assets/sbadmin/js/demo/chart-bar-demo.js') ?>"></script>

<!-- Sweetalert -->
<script src="<?php echo base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/myscript.js') ?>"></script>
<script src="<?php echo base_url('assets/js/loginScript.js') ?>"></script>

<!-- Datepicker -->
<script src="<?php echo base_url('assets/library/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/library/moment/moment.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.id.min.js" charset="UTF-8"></script>
<script type="text/javascript">
    $(document).ready(function() {
        setDatePicker("#datepicker")
        setDateRangePicker("#startdate", "#enddate")
        setMonthPicker("#monthpicker")
        setYearPicker("#yearpicker")
        setYearRangePicker("#startyear", "#endyear")
    })
</script>