$(document).ready(function() {
});

function editTransaction() {
    var idTransaction = document.getElementById("id-transaction").value;
    var name = document.getElementById("customer-name").value;
    var carId= document.getElementById("car").value;
    var startDate  = document.getElementById("startDate").value;
    var endDate  = document.getElementById("endDate").value;
    var data = {
        idTransaction : idTransaction,
        name : name,
        carId: carId,
        startDate : startDate,
        endDate : endDate,
    }

    $.ajax({
        url:"http://localhost/rent/api/v1/transaction/edit",
        method:"POST",
        data:data,
        success : function (response){
            var result = JSON.parse(response);
            alert(result.message);
            window.location.href="../../home";
        }
    });
}