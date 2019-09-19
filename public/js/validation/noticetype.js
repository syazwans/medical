$(document).ready(function () {
        $(document).ready(function () {
            $('select[name=notice_type]').change(function () {
                if (this.value == 'Accident Notice') {
                    $('#form_claim_notice_info').attr('action', '/noticeaccident');

                } else if (this.value == 'Occupational Decease Notice') {
                    $('#form_claim_notice_info').attr('action', '/noticeod');

                } else if (this.value == 'Invalidity Notice') {
                    $('#form_claim_notice_info').attr('action', '/noticeinvalidity');
                    
                } else {
                    $('#form_claim_notice_info').attr('action', '/noticedeath');
                }
            });
        });
        

 });