
<script>
function calendar(hospital_id){

$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let calendar = null;

function quota(event) {
    $('#quota-modal input[name="takwim_hospital"]').val(event ? event.hospital_id : '');
    $('#quota-modal input[name="takwim_quota"]').val(event ? event.quota : '');
    $('#quota-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#quota-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');
    $('#quota-modal').modal();
}

function duplicateEvent(event) {
    $('#duplicate-modal input[name="takwim_venue"]').val(event ? event.venue : '');
    $('#duplicate-modal input[name="takwim_hospital"]').val(event ? event.hospital_id : '');
    $('#duplicate-modal input[name="takwim_statecode"]').val(event ? event.statecode : '');
    $('#duplicate-modal select[name="takwim_session"]').val(event ? event.session : '');
    $('#duplicate-modal select[name="takwim_medical_board_category"]').val(event ? event.mb_category : '');
    // $('#duplicate-modal select[name="takwim_benefit_type"]').val(event ? event.benefit_type : '');
    $('#duplicate-modal select[name="takwim_discipline"]').val(event ? event.doc_speciality : '');
    // $('#duplicate-modal select[name="takwim_doctor"]').val(event ? event.doctor : '');
    // $('#duplicate-modal input[name="takwim_quota"]').val(event ? event.quota : '');
    $('#duplicate-modal textarea[name="takwim_remarks"]').val(event ? event.remarks : '');
    $('#duplicate-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#duplicate-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');
    $('#duplicate-modal').modal();
}

function setEvent(event) {
    $('#event-modal input[name="takwim-start-date"]').css('pointer-events', 'none');

    $('#event-modal input[name="takwim-index"]').val(event ? event.id : '');
    $('#event-modal input[name="takwim_year"]').val(event ? event.year : '');
    $('#event-modal input[name="takwim_venue"]').val(event ? event.venue : '');
    $('#event-modal select[name="takwim_session"]').val(event ? event.session : '');
    // $('#event-modal select[name="takwim_medical_board_category"]').val(event ? event.mb_category : '');
    $('#event-modal select[name="takwim_medical_board_category"]').val();
    // $('#event-modal select[name="takwim_benefit_type"]').val(event ? event.benefit_type : '');
    $('#event-modal select[name="takwim_discipline"]').val(event ? event.doc_speciality : '');
    // $('#event-modal select[name="takwim_doctor"]').val(event ? event.doctor : '');
    $('#event-modal input[name="takwim_quota"]').val(event ? event.quota : '');
    $('#event-modal textarea[name="takwim_remarks"]').val(event ? event.remarks : '');
    $('#event-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#event-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');
    $('#event-modal').modal();
}

function editEvent(event) {
    // $('#update-modal input[name="takwim-start-date"]').css('pointer-events', 'none');

    $('#update-modal input[name="takwim-index"]').val(event ? event.id : '');
    // $('#update-modal input[name="takwim_year"]').val(event ? event.year : '');
    $('#update-modal input[name="takwim_venue"]').val(event ? event.venue : '');
    $('#update-modal select[name="takwim_session"]').val(event ? event.session : '');
    $('#update-modal select[name="takwim_medical_board_category"]').val(event ? event.mb_category : '');
    // $('#update-modal select[name="takwim_benefit_type"]').val(event ? event.benefit_type : '');
    $('#update-modal select[name="takwim_discipline"]').val(event ? event.doc_speciality : '');
    // $('#update-modal select[name="takwim_doctor"]').val(event ? event.doctor : '');
    // $('#update-modal input[name="takwim_quota"]').val(event ? event.quota : '');
    $('#update-modal textarea[name="takwim_remarks"]').val(event ? event.remarks : '');
    $('#update-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#update-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');
    $('#update-modal').modal();
}

function deleteEvent(event) {
    $('#delete-modal input[name="takwim-index"]').val(event ? event.id : '');
    $('#delete-modal input[name="takwim_year"]').val(event ? event.year : '');
    $('#delete-modal input[name="takwim_venue"]').val(event ? event.venue : '');
    $('#delete-modal select[name="takwim_session"]').val(event ? event.session : '');
    $('#delete-modal select[name="takwim_medical_board_category"]').val(event ? event.mb_category : '');
    // $('#delete-modal select[name="takwim_benefit_type"]').val(event ? event.benefit_type : '');
    $('#delete-modal select[name="takwim_discipline"]').val(event ? event.doc_speciality : '');
    // $('#delete-modal select[name="takwim_doctor"]').val(event ? event.doctor : '');
    $('#delete-modal input[name="takwim_quota"]').val(event ? event.quota : '');
    $('#delete-modal textarea[name="takwim_remarks"]').val(event ? event.remarks : '');
    $('#delete-modal input[name="takwim-start-date"]').datepicker('update', event ? event.startDate : '');
    $('#delete-modal input[name="takwim-end-date"]').datepicker('update', event ? event.endDate : '');
    $('#delete-modal').modal();
    // var dataSource = calendar.getDataSource();
    
    // calendar.setDataSource(dataSource.filter(item => item.id == event.id));
}

function saveEvent() {

    var event2 = {
        id: $('#update-modal input[name="takwim-index"]').val()
    }

    event2.id = null;

    var medical_board_category = $('#event-modal select[name="takwim_medical_board_category"]').val();
    var medical_board_category2 = $('#update-modal select[name="takwim_medical_board_category"]').val();
    // var update_id = '';

    @foreach ($medical_board_category1 as $value)
    if(medical_board_category == '1' || medical_board_category2 == '1'){
        var mb_color = 'blue';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // alert(mb_category1);
        // var mb_category1 = 'JD';
    }else if(medical_board_category == '2' || medical_board_category2 == '2'){
        var mb_color = 'green';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // var mb_category1 = 'JDK';
    }else if(medical_board_category == '3' || medical_board_category2 == '3'){
        var mb_color = 'yellow';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // var mb_category1 = 'JDR';
    }else if(medical_board_category == '4' || medical_board_category2 == '4'){
        var mb_color = 'purple';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // var mb_category1 = 'JDRK';
    }
    @endforeach

    var event = {
        id: $('#event-modal input[name="takwim-index"]').val(),
        year: $('#event-modal input[name="takwim_year"]').val(),
        venue: $('#event-modal input[name="takwim_venue"]').val(),
        session: $('#event-modal select[name="takwim_session"]').val(),
        name: mb_category1,
        mb_category: $('#event-modal select[name="takwim_medical_board_category"]').val(),
        doc_speciality: $('#event-modal select[name="takwim_discipline"]').val(),
        quota: $('#event-modal input[name="takwim_quota"]').val(),
        remarks: $('#event-modal textarea[name="takwim_remarks"]').val(),
        hospital_id: $('#takwim_hospital').val(),
        statecode: $('#takwim_statecode').val(),
        date_takwim: $('#event-modal input[name="takwim-start-date"]').val(),
        startDate: $('#event-modal input[name="takwim-start-date"]').datepicker('getDate'),
        endDate: $('#event-modal input[name="takwim-end-date"]').datepicker('getDate'),
        color: mb_color
    }

    var event2 = {
        id: $('#update-modal input[name="takwim-index"]').val(),
        venue: $('#update-modal input[name="takwim_venue"]').val(),
        session: $('#update-modal select[name="takwim_session"]').val(),
        name: mb_category1,
        mb_category: $('#update-modal select[name="takwim_medical_board_category"]').val(),
        doc_speciality: $('#update-modal select[name="takwim_discipline"]').val(),
        remarks: $('#update-modal textarea[name="takwim_remarks"]').val(),
        date_takwim: $('#update-modal input[name="takwim-start-date"]').val(),
        startDate: $('#update-modal input[name="takwim-start-date"]').datepicker('getDate'),
        endDate: $('#update-modal input[name="takwim-end-date"]').datepicker('getDate'),
        color: mb_color
    }

    var dataSource = calendar.getDataSource(ds());
    alert(event2.id);
    // update_id = event2.id;
    // alert(event2.venue);
    // alert(event2.startDate);
    // alert(event2.endDate);
    // alert(event2.mb_category);
    // alert(event2.name);
    // alert(event2.doc_speciality);

    if (event2.id) {
        for (var i in dataSource) {
            if (dataSource[i].id == event2.id) {
                dataSource[i].venue = event2.venue;
                dataSource[i].session = event2.session;
                dataSource[i].name = event2.name;
                dataSource[i].mb_category = event2.mb_category;
                dataSource[i].doc_speciality = event2.doc_speciality;
                dataSource[i].remarks = event2.remarks;
                dataSource[i].startDate = event2.startDate;
                dataSource[i].endDate = event2.endDate;
                dataSource[i].color = event2.color;
            }
        }

        $.ajax({
            type: "POST",
            url: "/takwim/update",
            dataType: "json",
            data: {id: event2.id, venue: event2.venue, session: event2.session, mb_category: event2.mb_category, doc_speciality: event2.doc_speciality, remarks: event2.remarks, date_takwim: event2.date_takwim},
            success:function(data){
                // $('#message').append('<div class="alert alert-success alert-rounded">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>');
                alert(data.success);
           }
         });
        event2.id = '';
    }
    else
    {
        // var newId = 0;
        // for(var i in dataSource) {
        //     if(dataSource[i].id > newId) {
        //         newId = dataSource[i].id;
        //     }
        // }
        
        // newId++;
        // event.id = newId;

        $.ajax({
            type: "POST",
            url: "/takwim",
            dataType: "json",
            data: {year: event.year, venue: event.venue, session: event.session, name: event.name, mb_category: event.mb_category, doc_speciality: event.doc_speciality, quota: event.quota, remarks: event.remarks, date_takwim: event.date_takwim, hospital_id: event.hospital_id, statecode: event.statecode},
            success:function(data){
                // $('#message').append('<div class="alert alert-success alert-rounded">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>');
                alert(data.success);
           }
         });

        dataSource.push(event);
    }
    calendar.setDataSource(dataSource);
    calendar.setDataSource(ds());
    $('#event-modal').modal('hide');
    $('#update-modal').modal('hide');
}

function saveDuplicateEvent() {

    var medical_board_category = $('#duplicate-modal select[name="takwim_medical_board_category"]').val();

    @foreach ($medical_board_category1 as $value)
    if(medical_board_category == '1'){
        var mb_color = 'blue';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // alert(mb_category1);
        // var mb_category1 = 'JD';
    }else if(medical_board_category == '2'){
        var mb_color = 'green';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // var mb_category1 = 'JDK';
    }else if(medical_board_category == '3'){
        var mb_color = 'yellow';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // var mb_category1 = 'JDR';
    }else if(medical_board_category == '4'){
        var mb_color = 'purple';
        if(medical_board_category == '{{$value->refcode}}'){
            var mb_category1 = '{{$value->descen}}';
        }
        // var mb_category1 = 'JDRK';
    }
    @endforeach

    // if(medical_board_category == '1'){
    //     var mb_color = 'blue';
    //     var mb_category1 = 'JD';
    // }else if(medical_board_category == '2'){
    //     var mb_color = 'green';
    //     var mb_category1 = 'JDK';
    // }else if(medical_board_category == '3'){
    //     var mb_color = 'yellow';
    //     var mb_category1 = 'JDR';
    // }else if(medical_board_category == '4'){
    //     var mb_color = 'purple';
    //     var mb_category1 = 'JDRK';
    // }

    var event = {
        id: $('#duplicate-modal input[name="takwim-index"]').val(),
        venue: $('#duplicate-modal input[name="takwim_venue"]').val(),
        session: $('#duplicate-modal select[name="takwim_session"]').val(),
        name: mb_category1,
        mb_category: $('#duplicate-modal select[name="takwim_medical_board_category"]').val(),
        doc_speciality: $('#duplicate-modal select[name="takwim_discipline"]').val(),
        hospital_id: $('#duplicate-modal input[name="takwim_hospital"]').val(),
        statecode: $('#duplicate-modal input[name="takwim_statecode').val(),
        remarks: $('#duplicate-modal textarea[name="takwim_remarks"]').val(),
        newstartdate: $('#duplicate-modal input[name="takwim-start-date"]').val(),
        newenddate: $('#duplicate-modal input[name="takwim-end-date"]').val(),
        startDate: $('#duplicate-modal input[name="takwim-start-date"]').datepicker('getDate'),
        endDate: $('#duplicate-modal input[name="takwim-end-date"]').datepicker('getDate'),
        color: mb_color
    }

    // alert(event.venue);
    // alert(event.newstartdate);
    // alert(event.newenddate);
    // alert('YYYYY');

    var dataSource = calendar.getDataSource(ds());

    $.ajax({
            type: "POST",
            url: "/takwim/duplicate",
            dataType: "json",
            data:{newstartdate: event.newstartdate, newenddate: event.newenddate, hospital_id: event.hospital_id, session: event.session, mb_category: event.mb_category, venue: event.venue, statecode: event.statecode, remarks: event.remarks, doc_speciality: event.doc_speciality},
            success:function(data){
                // $('#message').append('<div class="alert alert-success alert-rounded">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>');
                alert(data.success);
            }
        });


    // if (event.id) {
    //     for (var i in dataSource) {
    //         if (dataSource[i].id == event.id) {
    //             dataSource[i].venue = event.venue;
    //             dataSource[i].session = event.session;
    //             dataSource[i].name = event.name;
    //             dataSource[i].mb_category = event.mb_category;
    //             dataSource[i].doc_speciality = event.doc_speciality;
    //             dataSource[i].remarks = event.remarks;
    //             dataSource[i].startDate = event.startDate;
    //             dataSource[i].endDate = event.endDate;
    //             dataSource[i].color = event.color;
    //         }
    //     }

    // }
    // else
    // {
    //     var getDateArray = function(start, end) {
    //         var arr = new Array();
    //         var dt = new Date(start);
    //         while (dt <= end) {
    //             arr.push(new Date(dt));
    //             dt.setDate(dt.getDate() + 1);
    //         }
    //         return arr;
    //     }

    //     var dateArr = getDateArray(event.startDate, event.endDate);

    //     for(var e = 0; e < dateArr.length; e++) {
    //         // alert(dateArr[e]);

    //         var newId = 0;
    //         for(var i in dataSource) {
    //             if(dataSource[i].id > newId) {
    //                 newId = dataSource[i].id;
    //             }
    //         }

    //         var event2 = {
    //             id: $('#duplicate-modal input[name="takwim-index"]').val(),
    //             venue: $('#duplicate-modal input[name="takwim_venue"]').val(),
    //             session: $('#duplicate-modal select[name="takwim_session"]').val(),
    //             name: mb_category1,
    //             mb_category: $('#duplicate-modal select[name="takwim_medical_board_category"]').val(),
    //             doc_speciality: $('#duplicate-modal select[name="takwim_discipline"]').val(),
    //             hospital_id: $('#duplicate-modal input[name="takwim_hospital"]').val(),
    //             statecode: $('#duplicate-modal input[name="takwim_statecode').val(),
    //             remarks: $('#duplicate-modal textarea[name="takwim_remarks"]').val(),
    //             startDate: $('#duplicate-modal input[name="takwim-start-date"]').datepicker('getDate'),
    //             endDate: $('#duplicate-modal input[name="takwim-end-date"]').datepicker('getDate'),
    //             color: mb_color
    //         }
            
    //         newId++;
    //         event.id = newId;
    //         event.startDate = dateArr[e];
    //         event.endDate = dateArr[e];
    //         // alert(event.id); 
    //         // alert(event.startDate); 
    //         // alert(event.endDate);

    //         dataSource.push(event2);            
    //     }
    // } 

    calendar.setDataSource(ds());
    $('#duplicate-modal').modal('hide');
}

function saveQuota() {
    var event = {
        quota: $('#quota-modal input[name="takwim_quota"]').val(),
        hospital_id: $('#takwim_hospital').val(),
        date_quota: $('#quota-modal input[name="takwim-start-date"]').val(),
        startDate: $('#quota-modal input[name="takwim-start-date"]').datepicker('getDate'),
        endDate: $('#quota-modal input[name="takwim-end-date"]').datepicker('getDate'),
    }

    // alert(event.hospital_id);
    // alert(event.quota);
    // alert(event.date_quota);

    $.ajax({
        type: "POST",
        url: "/takwim/setQuota",
        dataType: "json",
        data: {startDate: event.startDate, endDate: event.endDate, hospital_id: event.hospital_id, quota: event.quota, date_quota: event.date_quota},
        success:function(data){
            // $('#message').append('<div class="alert alert-success alert-rounded">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>');
            alert(data.success);
        }
    });
    calendar.setDataSource(ds());
    $('#quota-modal').modal('hide');
}

function deletedEvent(){

    var takwim_id = $('#delete-modal input[name="takwim-index"]').val();
    // alert(takwim_id);

    $.ajax({
        type: "POST",
        url: "/takwim/destroy",
        dataType: "json",
        data: {takwim_id: takwim_id},
        success:function(data){
            // $('#message').append('<div class="alert alert-success alert-rounded">'+data.success+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>');
            alert(data.success);
        }
    });
    calendar.setDataSource(ds());
    $('#delete-modal').modal('hide');
}

function ds() {
    var currentYear = new Date().getFullYear();
    var result= [];
    $.ajax({
        url: '/takwim/annualAgendaCalendar/' + hospital_id,
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        success: function (doc) {
            // alert('ds');
            $(doc).each(function() {
                var date = $(this).attr('startDate');
                // alert(date);
                var year = date.substring(0, 4);
                        var month1 = date.substring(4, 5);
                        if(month1 == 0){
                            var month = date.substring(5, 6) - 1;
                        }else{
                            var month = date.substring(4, 6) - 1;
                        }
                        var day1 = date.substring(6, 7);
                        if(day1 == 0){
                            var day = date.substring(7, 8);
                        }else{
                            var day = date.substring(6, 8);
                        }
                        var medical_board_category = $(this).attr('name');

                        @foreach ($medical_board_category1 as $value)
                        if(medical_board_category == '1'){
                            var mb_color = 'blue';
                            if(medical_board_category == '{{$value->refcode}}'){
                                var mb_category1 = '{{$value->descen}}';
                                // alert(mb_category1);
                            }
                            // alert(mb_category1);
                            // var mb_category1 = 'JD';
                        }else if(medical_board_category == '2'){
                            var mb_color = 'green';
                            if(medical_board_category == '{{$value->refcode}}'){
                                var mb_category1 = '{{$value->descen}}';
                            }
                            // var mb_category1 = 'JDK';
                        }else if(medical_board_category == '3'){
                            var mb_color = 'yellow';
                            if(medical_board_category == '{{$value->refcode}}'){
                                var mb_category1 = '{{$value->descen}}';
                            }
                            // var mb_category1 = 'JDR';
                        }else if(medical_board_category == '4'){
                            var mb_color = 'purple';
                            if(medical_board_category == '{{$value->refcode}}'){
                                var mb_category1 = '{{$value->descen}}';
                            }
                            // var mb_category1 = 'JDRK';
                        }
                        @endforeach

                        // if(medical_board_category == '1'){
                        //     var mb_color = 'blue';
                        //     var mb_category1 = 'JD';
                        // }else if(medical_board_category == '2'){
                        //     var mb_color = 'green';
                        //     var mb_category1 = 'JDK';
                        // }else if(medical_board_category == '3'){
                        //     var mb_color = 'yellow';
                        //     var mb_category1 = 'JDR';
                        // }else if(medical_board_category == '4'){
                        //     var mb_color = 'purple';
                        //     var mb_category1 = 'JDRK';
                        // }

                result.push({
                    id: $(this).attr('id'),
                    name: mb_category1,
                    mb_category: $(this).attr('name'),
                    venue: $(this).attr('location'),
                    startDate: new Date(year, month, day),
                    endDate: new Date(year, month, day),
                    quota: $(this).attr('quota'),
                    session: $(this).attr('session'),
                    remarks: $(this).attr('remarks'),
                    doc_speciality: $(this).attr('doc_speciality'),
                    year: $(this).attr('year'),
                    color: mb_color
                });
            });
            calendar.setDataSource(result);
        }
    });
    // return result;  
};

    function dd(){
        var i = 0;
        var len = 2;
        var text = "";

        for (; i < len; ) {
            var today = new Date();
            var todays = new Date();
            todays.setDate(today.getDate() + i);

            text += "new Date(" + todays.getFullYear() + "," + todays.getMonth() + "," + todays.getDate()+ "),";
            i++;
        }
        // var array = text.split("/",2);
        // // console.log(array);
        // return array;
        return text;
    };

$(function() {
    var currentYear = new Date().getFullYear();

    var today = new Date();
    var today1 = new Date();
    today1.setDate(today.getDate() + 31);

    var currentDay = today1.getDate();
    var currentMonth = today1.getMonth();

    var min = currentYear - 3;
    var max = currentYear + 2;

    var d = dd();
    // alert(d);

    calendar = new Calendar('#calendar', {
        minDate: new Date (min, 12, 1),
        maxDate: new Date (max, 11, 31),
        enableContextMenu: true,
        enableRangeSelection: true,
        preventRendering: true,
        contextMenuItems:[
            {
                text: 'Update',
                click: editEvent
            },
            {
                text: 'Delete',
                click: deleteEvent
            }
        ],
        // disabledDays: d,
        selectRange: function(e) {
            var year = e.startDate.getFullYear();

            if(year >= currentYear){
                setEvent({ startDate: e.startDate, endDate: e.endDate });
            }
        },
        mouseOnDay: function(e) {
            if(e.events.length > 0) {
                var content = '';
                
                for(var i in e.events) {
                    var medical_board_category = e.events[i].mb_category;

                    @foreach ($medical_board_category1 as $value)
                    if(medical_board_category == '1'){
                        var mb_color = 'blue';
                        if(medical_board_category == '{{$value->refcode}}'){
                            var mb_category1 = '{{$value->descen}}';
                        }
                        // alert(mb_category1);
                        // var mb_category1 = 'JD';
                    }else if(medical_board_category == '2'){
                        var mb_color = 'green';
                        if(medical_board_category == '{{$value->refcode}}'){
                            var mb_category1 = '{{$value->descen}}';
                        }
                        // var mb_category1 = 'JDK';
                    }else if(medical_board_category == '3'){
                        var mb_color = 'yellow';
                        if(medical_board_category == '{{$value->refcode}}'){
                            var mb_category1 = '{{$value->descen}}';
                        }
                        // var mb_category1 = 'JDR';
                    }else if(medical_board_category == '4'){
                        var mb_color = 'purple';
                        if(medical_board_category == '{{$value->refcode}}'){
                            var mb_category1 = '{{$value->descen}}';
                        }
                        // var mb_category1 = 'JDRK';
                    }
                    @endforeach

                    // if(medical_board_category == '1'){
                    //     var mb_color = 'blue';
                    //     var mb_category = 'JD';
                    // }else if(medical_board_category == '2'){
                    //     var mb_color = 'green';
                    //     var mb_category = 'JDK';
                    // }else if(medical_board_category == '3'){
                    //     var mb_color = 'yellow';
                    //     var mb_category = 'JDR';
                    // }else if(medical_board_category == '4'){
                    //     var mb_color = 'purple';
                    //     var mb_category = 'JDRK';
                    // }

                    var session1 = e.events[i].session;

                    @foreach ($session as $s)
                        if(session1 == '1'){
                            if(session1 == '{{$s->refcode}}'){
                                var session = '{{$s->descen}}';
                            }
                        }else if(session1 == '2'){
                            if(session1 == '{{$s->refcode}}'){
                                var session = '{{$s->descen}}';
                            }
                        }
                    @endforeach

                    var doc_speciality1 = e.events[i].doc_speciality;

                    @foreach ($discipline as $value)
                        if(doc_speciality1 == '{{$value->refcode}}'){
                            var d = '{{$value->descen}}';
                            // alert(d);
                        }
                    @endforeach

                    content += '<div class="event-tooltip-content">'
                                    + '<div class="event-venue" style="color:' + mb_color + ';">Medical Category: <b>' + mb_category1 +'</b></div>'
                                    + '<div class="event-medical_board_category">Venue: ' + e.events[i].venue + '</div>'
                                    + '<div class="event-benefit_type">Session: ' + session + '</div>'
                                    + '<div class="event-benefit_type">Speciality: ' + d + '</div>'
                                + '</div><hr>';
                }
            
                $(e.element).popover({ 
                    trigger: 'manual',
                    container: 'body',
                    html:true,
                    content: content
                });
                
                $(e.element).popover('show');
            }
        },
        mouseOutDay: function(e) {
            if(e.events.length > 0) {
                $(e.element).popover('hide');
            }
        },
        dayContextMenu: function(e) {

            // for(var i in e.events) {
            // if(e.events[i].name == 'JD'){
            var contextMenu = document.querySelector('.calendar-context-menu');

            // contextMenu.css('left', elt.offset().left + 25 + 'px');
            // console.log("Right click on day: " + e.date + " (" + name + " events)"); 
            var eventQuota = document.createElement('div');
            eventQuota.classList.add('item');
            var eventQuotaContent = document.createElement('div');
            eventQuotaContent.classList.add('content');
            eventQuotaContent.textContent = "Quota";
            eventQuota.appendChild(eventQuotaContent);
            eventQuota.addEventListener('click', function () {
                // alert('YYYYYY');
                for(var i in e.events) {
                    quota(e.events[i]);
                }

              });

            contextMenu.appendChild(eventQuota);
            // }}
            
            
            $(e.element).popover('hide');
        },
        // disabledWeekDays: [0, 6],
        // yearChanged: function(e) {
        //     e.preventRendering = true;
        //     e.enableContextMenu = false;
        //     $(e.target).append('<div style="text-align:center"><img src="{{asset('PERKESO_UI/assets/images/loading1.svg')}}" /></div>');
        //     $.ajax({
        //         url: '/takwim/annualAgendaCalendar/' + hospital_id,
        //         dataType: "json",
        //         success: function(response) {
        //             // alert('Year');
        //             var data = [];
        //             for (var i = 0; i < response.length; i++) {
        //                 var date = response[i].startDate;
        //                 var year = date.substring(0, 4);
        //                 var month1 = date.substring(4, 5);
        //                 if(month1 == 0){
        //                     var month = date.substring(5, 6) - 1;
        //                 }else{
        //                     var month = date.substring(4, 6) - 1;
        //                 }
        //                 var day1 = date.substring(6, 7);
        //                 if(day1 == 0){
        //                     var day = date.substring(7, 8);
        //                 }else{
        //                     var day = date.substring(6, 8);
        //                 }
        //                 var medical_board_category = response[i].name;

        //                 if(medical_board_category == '1'){
        //                     var mb_color = 'blue';
        //                     var mb_category1 = 'JD';
        //                 }else if(medical_board_category == '2'){
        //                     var mb_color = 'green';
        //                     var mb_category1 = 'JDK';
        //                 }else if(medical_board_category == '3'){
        //                     var mb_color = 'yellow';
        //                     var mb_category1 = 'JDR';
        //                 }else if(medical_board_category == '4'){
        //                     var mb_color = 'purple';
        //                     var mb_category1 = 'JDRK';
        //                 }

        //                 data.push({
        //                     id: response[i].id,
        //                     name: mb_category1,
        //                     mb_category: response[i].name,
        //                     venue: response[i].location,
        //                     startDate: new Date(year, month, day),
        //                     endDate: new Date(year, month, day),
        //                     quota: response[i].quota,
        //                     session: response[i].session,
        //                     remarks: response[i].remarks,
        //                     doc_speciality: response[i].doc_speciality,
        //                     year: response[i].year,
        //                     color: mb_color
        //                 });
        //             }
        //             calendar.setDataSource(data);
        //         }
        //     });
        // },
    });
    ds();
    
    $('#save-event').click(function() {

        // $('#takwim_venue').prop('required', true);

        var event = {
            venue: $('#event-modal input[name="takwim_venue"]').val(),
            session: $('#event-modal select[name="takwim_session"]').val(),
            mb_category: $('#event-modal select[name="takwim_medical_board_category"]').val(),
            doc_speciality: $('#event-modal select[name="takwim_discipline"]').val(),
            quota: $('#event-modal input[name="takwim_quota"]').val(),
            hospital_id: $('#takwim_hospital').val(),
            startDate: $('#event-modal input[name="takwim-start-date"]').datepicker('getDate'),
            endDate: $('#event-modal input[name="takwim-end-date"]').datepicker('getDate'),
        }

        // $('#event-modal input[name="takwim_venue"]').prop('required', true);
        // $('#event-modal select[name="takwim_session"]').prop('required', true);
        // $('#event-modal select[name="takwim_medical_board_category"]').prop('required', true);
        // $('#event-modal select[name="takwim_discipline"]').prop('required', true);
        // $('#event-modal input[name="takwim_quota"]').prop('required', true);

        // alert(event.startDate);
        // alert(event.endDate);

        if(event.venue != '' && event.session != '' && event.mb_category != '' && event.doc_speciality != '' && event.hospital_id != '' && event.startDate != '' && event.endDate != '')
        {
            saveEvent();
        }
    });

    $('#update-event').click(function() {
        var event = {
            id: $('#update-modal input[name="takwim-index"]').val(),
            venue: $('#update-modal input[name="takwim_venue"]').val(),
            session: $('#update-modal select[name="takwim_session"]').val(),
            mb_category: $('#update-modal select[name="takwim_medical_board_category"]').val(),
            doc_speciality: $('#update-modal select[name="takwim_discipline"]').val(),
            remarks: $('#update-modal textarea[name="takwim_remarks"]').val(),
            startDate: $('#update-modal input[name="takwim-start-date"]').datepicker('getDate'),
            endDate: $('#update-modal input[name="takwim-end-date"]').datepicker('getDate'),
        }

        // alert(event.startDate);
        // alert(event.endDate);
        // alert(event.doc_speciality);

        if(event.id != '' && event.venue != '' && event.session != '' && event.mb_category != '' && event.doc_speciality != '' && event.startDate != '' && event.endDate != '')
        {
            saveEvent();
        }
    });

    $('#duplicate-event').click(function() {

        var event = {
            venue: $('#update-modal input[name="takwim_venue"]').val(),
            session: $('#update-modal select[name="takwim_session"]').val(),
            mb_category: $('#update-modal select[name="takwim_medical_board_category"]').val(),
            doc_speciality: $('#update-modal select[name="takwim_discipline"]').val(),
            remarks: $('#update-modal textarea[name="takwim_remarks"]').val(),
            hospital_id: $('#takwim_hospital').val(),
            statecode: $('#takwim_statecode').val(),
            // startDate: $('#update-modal input[name="takwim-start-date"]').datepicker('getDate'),
            // endDate: $('#update-modal input[name="takwim-end-date"]').datepicker('getDate'),
        }

        duplicateEvent(event);
    });

    $('#duplicate2-event').click(function() {
        
        var event = {
            venue: $('#duplicate-modal input[name="takwim_venue"]').val(),
            session: $('#duplicate-modal select[name="takwim_session"]').val(),
            mb_category: $('#duplicate-modal select[name="takwim_medical_board_category"]').val(),
            doc_speciality: $('#duplicate-modal select[name="takwim_discipline"]').val(),
            hospital_id: $('#duplicate-modal input[name="takwim_hospital"]').val(),
            statecode: $('#duplicate-modal input[name="takwim_statecode"]').val(),
            startDate: $('#duplicate-modal input[name="takwim-start-date"]').val(),
            endDate: $('#duplicate-modal input[name="takwim-end-date"]').val(),
        }

        // alert(event.venue);
        // alert(event.startDate);
        // alert(event.endDate);

        if(event.venue != '' && event.session != '' && event.mb_category != '' && event.doc_speciality != '' && event.startDate != '' && event.endDate != '')
        {
            saveDuplicateEvent();
        }

    });

    $('#quota-event').click(function() {
   
        saveQuota();

    });

    $('#delete1-event').click(function() {
        
        var result = confirm("Are you sure you want to delete this record?");
        if (result) {
            deletedEvent();
        }

    });

});

}

</script>

