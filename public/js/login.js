function submitLogin() {
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    username = username.value;
    password=password.value;
    var datas = {
        "username":username,
        "password":password
    };

    $.ajax({
        url:"http://localhost/rent/api/v1/user/login",
        method:"POST",
        data:datas,
        success:function (response){
            console.log(response);
            var result = JSON.parse(response);
            if(result.status == "success"){
                localStorage.setItem("username",username);
                window.location.href = "home";
            }else{
                alert(result.message);
                window.location.href = "login";
            }
        }

    });
}



