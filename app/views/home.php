<?php
$date = new DateTime();
$this_date = $date->format("Y-m-d");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section hero p-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="hero-title text-light">DRIVE IN STYLE WITH OUR PREMIUM <br>CAR RENTAL SERVICES.</p>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->


    <!-- Search Section -->
    <section class="search-section">
        <div class="container">
            <div class="row bg-light box">
                <div class="col">
                    <div class="row p-3 d-flex justify-content-center">
                        <div class="col-lg-3">
                            <span class="text-search ms-1 mb-2">Car</span>
                            <select class="form-select mt-2" aria-label="Default select example">
                                <option value="sedan">Inova</option>
                                <option value="suv">Br-v</option>
                                <option value="mpv">Ertiga</option>
                                <option value="mpv">Jazz</option>
                                <option value="mpv">Brio</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <span class="text-search ms-1 mb-2">Merk</span>
                            <select class="form-select mt-2" aria-label="Default select example">
                                <option value="honda">Honda</option>
                                <option value="toyota">Toyota</option>
                                <option value="suzuki">Suzuki</option>
                                <option value="wuling">Wuling</option>
                                <option value="daihatsu">Daihatsu</option>

                            </select>
                        </div>
                        <div class="col-lg-3">
                            <span class="text-search ms-1 mb-2">Start Date</span>
                            <input type="date" name="" id="" class="form-control mt-2" value="<?= $this_date; ?>">
                        </div>
                        <div class="col-lg-3">
                            <span class="text-search ms-1 mb-2">End Date</span>
                            <input type="date" name="" id="" class="form-control mt-2" value="<?= $this_date; ?>">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary w-10"><i class="fa-solid me-2 fa-magnifying-glass" style="color: #f6f7f9;"></i>Search Car</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Of Search Section -->


    <!-- Book section -->
    <section class="book-section">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-12">
                    <p class="title-book">Book Your Premuim Car <img src="public/images/stars.png" width="32" class="img-fluid" alt=""></p>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="book-section">
                    <div class="carousel-item active">
                        <div class="row"  id="carousel-item">

                            <!-- Add more product cards here -->
                        </div>
                    </div>

                    <!-- Add more carousel items here -->
                </div>
                <button class="carousel-control-prev" type="button" style="background-color: #0c6efd; width: 15px;" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" style="background-color: #0c6efd; width: 15px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- End Of Book section -->

<!--My Reservation Section-->
    <section class="reservation mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="title-book">My Reservation <img src="public/images/reserve.png" alt="" width="32"></p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col text-center">No</th>
                            <th scope="col text-center">Id Transaction</th>
                            <th scope="col text-center">Car</th>
                            <th scope="col text-center">Merk</th>
                            <th scope="col text-center">Number Registration</th>
                            <th scope="col text-center">Price Date</th>
                            <th scope="col text-center">Start Date</th>
                            <th scope="col text-center">End Date</th>
                            <th scope="col text-center">Total Bill</th>
                            <th scope="col text-center">Status</th>
                            <th scope="col text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody id="data-transaction">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container mb-5">
                <div class="row  justify-content-end">
                    <div class="col-lg-1">
                        <button class="btn btn-primary button-primary "onclick="bookProcess()">Book</button>
                    </div>
                    <div class="col-lg-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal" data-bs-whatever="@mdo">Add Payment</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Payment <img src="public/images/money.png" width="24" class="img-fluid" alt=""> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">ID Transaction:</label>
                            <select name="" id="id-transaction" class="form-control form-control-lg" onchange="changeBill()">
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Total Bill:</label>
                            <input type="text" value="" id="total-bill" class="form-control form-control-lg" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Payment Method:</label>
                            <select name="" id="payment-method" class="form-control form-control-lg" onchange="methodPayment()">
                            <option value="null">Select</option>
                            <option value="transfer-bank">Transfer Bank</option>
                            <option value="cash">Cash</option>
                            </select>
                        </div>
                        <div class="mb-3 d-none" id="info-bank">
                            <label for="recipient-name" class="col-form-label">Info Bank:</label>
                            <input type="text" value="BCA : 1230494959 (RENTDRIVE)"  class="form-control form-control-lg" disabled>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="payment()">Pay Now!</button>
                </div>
            </div>
        </div>
    </div>
<!--End My Reservation Section-->

<!--Script-->
<script src="public/js/home.js"></script>
</body>

</html>