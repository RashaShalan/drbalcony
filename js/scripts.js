function register() {
    /*  var fname = $('#firstName').val();
     var lname = $('#lastName').val();
     var email = $('#email').val();
     var pass = $('#password'), val(); */
    var formdata = $('#registerForm').serialize();
    console.log(formdata);
    $.ajax({
        type: "POST",
        url: 'library.php?module=Register&submodule=index',
        data: formdata,
        dataType: "json",

        success: function (response) {
            //if request if made successfully then the response represent the data
            console.log(response['status'])
            if (response.status == true)
                $("#mainDiv").empty().append("<h1>" + response.msg + "<h1>");
            else
                $('#errorLog').append(response.msg)
        }
    });


}

function Calcprice() {
    var quantity = $('#quantity').val();
    var price = $('#price').val();
    if (quantity != '' && price != '') {
        var totalPrice = parseFloat(quantity) * parseFloat(price);
        $('#total_price').val(totalPrice);
    }
}

function saveOrder() {
    if ($('#user_id').val() == '') {
        $('#errorLog').append("You have to select customer")
    } else {
        var formdata = $('#orderForm').serialize();
        console.log(formdata);
        $.ajax({
            type: "POST",
            url: 'library.php?module=Orders&submodule=save',
            data: formdata,
            dataType: "json",

            success: function (response) {
                //if request if made successfully then the response represent the data
                console.log(response['status'])
                if (response.status == true) {
                    $("#orderForm")[0].reset();
                    $('#sucessLog').append("your order has been succefully saved");
                }
                else
                    $('#errorLog').append(response.msg)
            }
        });
    }


}