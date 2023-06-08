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

});
