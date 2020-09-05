$( document ).ready(function() {
    // $('body').css('background-color', 'red');
    $('#newCustomerButton').click(function(){
        $('#addNewCustomerDiv').toggleClass("d-none");
    });
    $('#addWorkButton').click(function(){
        $('#addWorkDiv').toggleClass("d-none");
    });
    $('#addWorklistFormActiveStatus').click(function(){
        var currentInputValue = $(this).parent().siblings('input').attr('value');
        
        if(currentInputValue == 1) {
            $(this).parent().siblings('input').attr('value', '0')
        } else {
            $(this).parent().siblings('input').attr('value', '1')
        } 
        /* // alert($(this).prop( "checked"));
        var checkedValue = $(this).prop( "checked");
        if(checkedValue == true) {
            $(this).prepend("<input type='hidden' value='TRUE' name='worklist_active'>");
        } else {
            $(this).prepend("<input type='hidden' value='FALSE' name='worklist_active'>");
        }  */
    });   
});
