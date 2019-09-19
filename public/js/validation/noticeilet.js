$(document).ready(function () {
    
    $("#add_emp_info").click(function () {    
        
  testing=document.getElementById('tr_add_emp_info').outerHTML;

  $('#table_add_emp_info > tbody:last-child').append(testing);


     
  
   });
});
