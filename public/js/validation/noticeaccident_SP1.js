$(document).ready(function () {
    $("#others").hide();
$('select[name=mode_transport_other]').change(function () {
    if (this.value == 'others') {
        $("#others").prop('readonly', false);
        $("#others").show();


    } else {
        $("#others").prop('readonly', true);  
        $("#others").val('');
        $("#others").hide();
    }
});
});