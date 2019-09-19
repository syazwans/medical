$(document).ready(function () {
//     var no =7;
//     $('#yourtableid tr:last')
    var get_pdfno= $('#table_upload_doc tr:last td:last').find("input").val();
     var no= get_pdfno.substring(4,5);
      
     
    $("#add_doc").click(function () {    
        
         testing=document.getElementById('select_database').innerHTML;
         $("#idtype").prev('li').prop('id', 'idtype');
      //   var pdf="pdf["+no+"]";
   $('#table_upload_doc > tbody:last-child').append('<tr><td id="data_select">'+testing+'</td><td><input type="file" name="pdf_selection"></td></tr>');

//    $('#data_select').html(testing);
      no++
    });
});