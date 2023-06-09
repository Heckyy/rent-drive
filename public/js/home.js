$(document).ready(function() {
    $.ajax({
        url:"http://localhost/rent/api/v1/car/cars",
        method:"GET",
        success:function (response){
            var bookSection = document.getElementById("carousel-item");
            var html="";
            var result = JSON.parse(response);
            $(result.datas).each(function(index, element) {
                html +='<div class="col-md-3">\n' +
                    '                                <div class="card">\n' +
                    '                                    <img src="'+element.image+'" class="card-img-top" alt="brio">\n' +
                    '                                    <div class="card-body">\n' +
                    '                                        <h5 class="card-title">'+element.carName+'</h5>\n' +
                    '                                        <p class="card-text">'+element.description+'</p>\n' +
                    '                                        <a href="#" class="btn btn-primary">Buy Now</a>\n' +
                    '                                    </div>\n' +
                    '                                </div>\n' +
                    '                            </div>';
            });
            bookSection.innerHTML = html;
        }
    });
    // Check Session User,If User Already Login->Hide SignIn And Login Button at header!
    // localStorage.removeItem("username");
    // alert(localStorage.getItem("username"));
    if (localStorage.getItem('username')){
            var btnSign = document.getElementById("btn-signIn");
            var btnLogin = document.getElementById("btn-login");
            var info = document.getElementById("user-info");
            var btnLogout = document.getElementById("btn-logout");
            btnLogout.classList.remove("d-none");
            info.classList.remove("d-none");
            btnSign.classList.add("d-none");
            btnLogin.classList.add("d-none");
    }

    var hello = document.getElementById("hello");
    hello.innerHTML = localStorage.getItem("username");

});

function btnLogout(){
    localStorage.removeItem("username");
    window.location.href = "home";
}
