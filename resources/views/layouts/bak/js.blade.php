<script src="/PERKESO_UI/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="/PERKESO_UI/assets/node_modules/popper/popper.min.js"></script>
<script src="/PERKESO_UI/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="/PERKESO_UI/horizontal-nav-fullwidth/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/PERKESO_UI/horizontal-nav-fullwidth/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="/PERKESO_UI/horizontal-nav-fullwidth/dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- Flot Charts JavaScript -->
<script src="/PERKESO_UI/assets/node_modules/flot/jquery.flot.js"></script>
<script src="/PERKESO_UI/assets/node_modules/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<!--sparkline JavaScript -->
<script src="/PERKESO_UI/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<!-- EASY PIE CHART JS -->
<script src="/PERKESO_UI/assets/node_modules/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="/PERKESO_UI/assets/node_modules/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>
<!-- Vector map JavaScript -->
<script src="/PERKESO_UI/assets/node_modules/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/PERKESO_UI/assets/node_modules/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Chart JS -->
<script src="/PERKESO_UI/horizontal-nav-fullwidth/dist/js/dashboard2.js"></script>

<script src="/PERKESO_UI/assets/node_modules/dropify/dist/js/dropify.min.js"></script>



<script src="/PERKESO_UI/assets/node_modules/moment/moment.js"></script>
<script
    src="/PERKESO_UI/assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
</script>
<!-- Clock Plugin JavaScript -->
<script src="/PERKESO_UI/assets/node_modules/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="/PERKESO_UI/assets/node_modules/jquery-asColor/dist/jquery-asColor.js"></script>
<script src="/PERKESO_UI/assets/node_modules/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="/PERKESO_UI/assets/node_modules/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="/PERKESO_UI/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="/PERKESO_UI/assets/node_modules/timepicker/bootstrap-timepicker.min.js"></script>
<script src="/PERKESO_UI/assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="{{ asset('/js/medicalopinion.js') }}"></script>

<script src="/PERKESO_UI/assets/node_modules/wizard/jquery.steps.min.js"></script>
<script src="/PERKESO_UI/assets/node_modules/wizard/jquery.validate.min.js"></script>
<script src="/PERKESO_UI/assets/node_modules/sweetalert/sweetalert.min.js"></script>

<script src="/PERKESO_UI/assets/node_modules/switchery/dist/switchery.min.js"></script>
<script src="/PERKESO_UI/assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="/PERKESO_UI/assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/PERKESO_UI/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="/PERKESO_UI/assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="/PERKESO_UI/assets/node_modules/dff/dff.js" type="text/javascript"></script>
<script type="text/javascript" src="/PERKESO_UI/assets/node_modules/multiselect/js/jquery.multi-select.js"></script>

<script src="{{ asset('/js/validation/noticedeath.js') }}"></script>
<script src="{{ asset('/js/validation/noticetype.js') }}"></script>
<script src="{{ asset('/js/validation/noticeaccident.js') }}"></script>
<script src="{{ asset('/js/perkeso_ui/perkeso.js') }}"></script>

<script src="/PERKESO_UI/assets/node_modules/wizard/jquery.steps.min.js"></script>
<script src="/PERKESO_UI/assets/node_modules/wizard/jquery.validate.min.js"></script>
<script src="/PERKESO_UI/assets/node_modules/sweetalert/sweetalert.min.js"></script>

 <!-- This is data table -->
 <script src="/PERKESO_UI/assets/node_modules/datatables/datatables.min.js"></script>
 <!-- start - This is for export functionality only -->
 <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
 <!-- end - This is for export functionality only -->


<script>
    // MAterial Date picker    
    $('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
    $('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
    $('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });

    $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });
    // Clock pickers
    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('.clockpicker').clockpicker({
        donetext: 'Done',
    }).find('input').change(function() {
        console.log(this.value);
    });
    $('#check-minutes').click(function(e) {
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    // Colorpicker
    $(".colorpicker").asColorPicker();
    $(".complex-colorpicker").asColorPicker({
        mode: 'complex'
    });
    $(".gradient-colorpicker").asColorPicker({
        mode: 'gradient'
    });
    // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    // Daterange picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-danger',
        cancelClass: 'btn-inverse',
        dateLimit: {
            days: 6
        }
    });

    
    $(function() {
        $('#myTable').DataTable();
        $(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    </script>
