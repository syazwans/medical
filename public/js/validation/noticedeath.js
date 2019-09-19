$(document).ready(function () {
    $("#mode_transport_other").hide();
    $("#race_other").hide();
    $("relationship_other").hide();
//Insured Person Details
$('select[name=race]').change(function () {
    if (this.value == 'Others') {
        $("#race_other").prop('readonly', false);
        $("#race_other").show();


    } else {
        $("#race_other").prop('readonly', true);  
        $("#race_other").val('');
        $("#race_other").hide();
    }
});

$('select[name=mode_transport]').change(function () {
    if (this.value == 'others') {
        $("#mode_transport_other").prop('readonly', false);
        $("#mode_transport_other").show();


    } else {
        $("#mode_transport_other").prop('readonly', true);  
        $("#mode_transport_other").val('');
        $("#mode_transport_other").hide();
    }
});

$('select[name=mode_transport]').change(function () {
    if (this.value == 'Others') {
        $("#mode_transport_other").prop('readonly', false);
        $("#mode_transport_other").show();


    } else {
        $("#mode_transport_other").prop('readonly', true);  
        $("#mode_transport_other").val('');
        $("#mode_transport_other").hide();
    }
});

$('select[name=relationship]').change(function () {
    if (this.value == 'Others') {
        $("#relationship_other").prop('readonly', false);
        $("#relationship_other").show();


    } else {
        $("#relationship_other").prop('readonly', true);  
        $("#relationship_other").val('');
        $("#relationship_other").hide();
    }
});
});