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
    getTransaction();
});
function btnLogout(){
    localStorage.removeItem("username");
    window.location.href = "home";
}
function bookProcess(){
 if(localStorage.getItem("username")){
        window.location.href="book";
 }else{
     window.location.href="login";
 }
}

function getTransaction(){
    var dataTransaction = document.getElementById("data-transaction");
    var data = {
        username:localStorage.getItem("username")
    }
    $.ajax({
        url:"http://localhost/rent/api/v1/transaction/transaction",
        method: "POST",
        data : data,
        success:function (response){
            var html = "";
            var result = JSON.parse(response);
            var no = 1;
            if(result.data != "null"){

            $(result).each(function(index, element){
                var id = element.idTransaction
                 html += '<tr >\n' +
                     '                            <td scope="row" class="text-center">'+no+'</td>\n' +
                     '                            <td class="text-center">'+element.idTransaction+'</td>\n' +
                     '                            <td class="text-center">'+element.carName+'</td>\n' +
                     '                            <td class="text-center">'+element.carMerk+'</td>\n' +
                     '                            <td class="text-center">'+element.numberRegistration+'</td>\n' +
                     '                            <td class="text-center">Rp.'+element.priceDate+'</td>\n' +
                     '                            <td class="text-center">'+element.startDate+'</td>\n' +
                     '                            <td class="text-center">'+element.endDate+'</td>\n' +
                     '                            <td class="text-center">Rp. '+element.totalBill+'</td>\n' +
                     '                            <td class="text-primary text-center">Booked</td>\n' +
                     '                            <td>\n' +
                     '                                <button value="'+id+'" onclick="editBook(this)" class="btn btn-primary bg-transparent text-center"><img src="public/images/edit.png" alt="" width="20" id="editBook"  ></button>\n' +
                     '                                <button id="deleteBook" value="'+id+'" onclick="deleteBook({value})" class="btn btn-primary bg-transparent text-center"><img src="public/images/trash.png" alt="" width="20"></button>\n' +
                     '                            </td>\n' +
                     '                        </tr>'

                 no++;
            });
            }else{
                html += "<tr>Tidak Ada Data!</tr>"
            }
            dataTransaction.innerHTML = html;
        }
    })
}

function deleteBook(id){
    var idTransaction =id.value;
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:"http://localhost/rent/api/v1/transaction/delete/"+idTransaction,
                method : "GET",
                success:function (response) {
                    var  result = JSON.parse(response)
                     alert(result.message)
                    window.location.href = "home";
                }
            });

        }
    })

}
function editBook(id){
    var idTransaction =id.value;
    window.location.href="edit/index/"+idTransaction;
}
