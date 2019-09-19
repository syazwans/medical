$(document).ready(function(){
    alert('test');
    $('select[name=moreinfo]').change (function () {
        if(this.value == 'N') {
           
            $('#accordion1').show();
            $('#Sec').show();
        }
        else if(this.value == 'Y') {
            $('#accordion1').hide();
            $('#Sec').hide();
        }
    });
});

    