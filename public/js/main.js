$( document ).ready(function() {
    $('#newCustomerButton').click(function(){
        $('#addNewCustomerDiv').toggleClass("d-none");
    });
    $('#addWorkButton').click(function(){
        $('#addWorkDiv').toggleClass("d-none");
    });
});
