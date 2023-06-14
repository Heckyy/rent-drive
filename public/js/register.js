$(document).ready(function () {

});




function submitRegister(){
    var idCard = document.getElementById("id-card").value;
    var firstName = document.getElementById("first-name").value;
    var lastName = document.getElementById("last-name").value;
    var birthDate = document.getElementById("birth-date").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("username").value;
    var data = {
        idCard:idCard,
        firstName:firstName,
        lastName:lastName,
        birthDate:birthDate,
        address:address,
        city:city,
        username:username,
        password:password,
    }

    $.ajax({
        url:"http://localhost/rent/api/v1/user/register",
        method : "POST",
        data :data,
        success : function (response){
            var result = JSON.parse(response);
            if(result.status == "success"){
                alert(result.message);
                window.location.href = "home";
            }else{
                alert(result.message);
                window.location.href = "register";
            }
        }
    })

}

