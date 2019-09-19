// For select 2
$(".select2").select2();
$('.selectpicker').selectpicker();

$(document).ready(function () {
    $("#navbar_preview").hide();
    $("#others").hide();
    $('#bank_reason').hide();
    $('#bank_eft').hide();
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

//bank info
$('select[name=paymode]').change(function () {
    if (this.value == '02') {
        $('#bank_reason').hide();
        $('#bank_eft').show();
    }
    else if (this.value == '01'){
        $('#bank_reason').show();
        $('#bank_eft').hide();
        $('#oversea_bank').hide();
        $('#local_bank').hide();
    }
    else{
        $('#bank_reason').hide();
        $('#bank_eft').hide();
        $('#oversea_bank').hide();
        $('#local_bank').hide();
    }
});
$('select[name=bankloc]').change(function () {
    if (this.value == 'L') {
        $('#local_bank').show();
        $('#oversea_bank').hide();
    }
    else{
        $('#local_bank').hide();
        $('#oversea_bank').show();

    }
});

//for mc form
// $("#btn_add_attended_work").click(function () {
//     get_div=document.getElementById('div_attend_work').outerHTML;
//     $('.attendtable > tbody:last-child').append(get_div);

// });
// $("#btn_add_MC").click(function () {
//     get_div1=document.getElementById('div_mcdetail').innerHTML;
//     $('.attendtable1').append(get_div1);
// });

//preview blade
// $(".btn_preview").click(function (){
//     $('#form12').removeClass('active');
//     $('#form10').addClass('active');
//     $("#navbar_confirmation").removeClass('active');
//     $('#div_preview').on('focus');
// });
});

