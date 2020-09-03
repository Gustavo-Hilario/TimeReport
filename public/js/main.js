/* $( document ).ready(function() {
    $('#newCustomerButton').click(function(){
        $('#addNewCustomerDiv').toggleClass("d-none");
    });

    // Add Customer Form AJAX
    $('#addNewCustomerForm').submit(function(e){
        e.preventDefault();
        var customer_name = $('#addNewCustomerForm #name').val();
        $.ajax({
            url: 'newCustomer.php',
            method: 'POST',
            data: {customerName: customer_name},
            dataType: 'json'
        }).done(function(result){
            $('#addNewCustomerForm #name').val('');
            console.log(result);
        });
    });

    // GET CUSTOMER_ID FROM TABLE BUTTONS
    $('.tableButtonsForm').submit(function(e){
        e.preventDefault();
        var customer_id = $(this).attr('customer_id');
        console.log($(this).attr('customer_id'));
        $.ajax({
            url: 'customerID.php',
            method: 'GET',
            data: {customerID: customer_id},
            dataType: 'json'
        }).done(function(result){
            console.log(result);
        });
    });
});

function getCustomers(){
    $.ajax({
        url: 'getCustomers.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(result){
    });
}

getCustomers(); */