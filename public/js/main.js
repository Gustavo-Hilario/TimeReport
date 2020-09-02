$( document ).ready(function() {
    $('#newCustomerButton').click(function(){
        $('#addNewCustomerForm').toggleClass("d-none");
    });

    $('.addWorkButton').click(function(){
        console.log($(this).attr('customer_id'));
        $('#addWorkForm select').css("background-color", "yellow");
        $('#addWorkForm select').attr('customer_id', $(this).attr('customer_id'));
        $('#addWorkForm').toggleClass("d-none");
    });

});