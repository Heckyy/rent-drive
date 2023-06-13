$(document).ready(function (){
    var userValue = document.getElementById("firstname");
$.ajax({
    url:"http://localhost/rent/api/v1/car/cars",
    method:"GET",
    success:function (response){
        var result= JSON.stringify(response);
        var username = localStorage.getItem("username");
        var data = {
            "username":username
        }
        $.ajax({
            url: "http://localhost/rent/api/v1/user/user",
            method: "POST",
            data:data,
            success:function (response){
                var result = JSON.parse(response);
                    userValue.value =result.first_name + " " + result.last_name ;
            }

        })




    }
})
});

function saveBook(){
    var name = document.getElementById("firstname").value;
    var carId = document.getElementById("car").value;
    var startDate  = document.getElementById("startDate").value;
    var endDate  = document.getElementById("endDate").value;
    var data = {
        "name":name,
        "carId":carId,
        "startDate":startDate,
        "endDate":endDate,
    }

    $.ajax({
        url:"http://localhost/rent/api/v1/transaction/store",
        method:"post",
        data : data,
        success:function (response){
            var result = JSON.parse(response);
            // console.log(result.status);
            if(result.status =="success"){
                alert(result.message);
                window.location.href = "home";
            }else{
                alert(result.message);
                window.location.href = "book";
            }
        }

    })


}