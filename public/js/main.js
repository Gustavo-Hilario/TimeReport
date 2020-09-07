// var URL      = document.URL,
// PATHNAME = document.location.pathname;

// console.log(URL);
// console.log(PATHNAME);

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
    });   
});
