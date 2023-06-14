<?php
$url = explode("/",$_GET['url']);
$idTransaction =$url['2'];
$url = 'http://localhost/rent/api/v1/transaction/select/'.$idTransaction;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$results = json_decode($response,JSON_PRETTY_PRINT);

//Get data cars!
$url1 = 'http://localhost/rent/api/v1/car/cars';
$ch1 = curl_init($url1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$response_cars = curl_exec($ch1);
curl_close($ch1);
$resultCars = json_decode($response_cars,JSON_PRETTY_PRINT);
$resultCars = $resultCars['datas'];


?>
<body>
<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem;">
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><b>Book Your Favorite Car!<img src="public/images/stars.png" width="32" class="img-fluid" alt=""></b></h3>
                        <div class="form-outline mb-4 d-block">
                            <label class="form-label" for="form2Example18">ID Transaction</label>
                            <input type="text" id="id-transaction" value="<?=$idTransaction;?>" disabled="disabled" class="form-control form-control-lg" />
                        </div><div class="form-outline mb-4 d-block">
                            <label class="form-label" for="form2Example18">Your Name</label>
                            <input type="text" id="customer-name" value="<?=$results['id_customer'];?>" disabled="disabled" class="form-control form-control-lg" />
                        </div>
                        <div class="form-outline mb-4 d-block" id="cars">
                            <label class="form-label" for="form2Example18">Car</label>
                            <select name="" id="car" class="form-control form-control-lg">
                                <option value="null">Select</option>
                                <?php foreach ($resultCars as $result):?>
                                    <option value="<?=$result['carId']?>"><?=$result['carName'] . " "."( {$result['numberRegistation'] })" . " "."({$result['carMerk']})";?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-outline mb-4 d-block">
                            <label class="form-label" for="form2Example18">Start Date</label>
                            <input type="date" id="startDate" class="form-control form-control-lg" value="<?=$results['start_date'];?>" />
                        </div>
                        <div class="form-outline mb-4 d-block">
                            <label class="form-label" for="form2Example18">End Date</label>
                            <input type="date" id="endDate" class="form-control form-control-lg" value="<?=$results['end_date'];?>" />
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-primary btn-lg btn-block w-100" type="button" id="btn-edit" onclick="editTransaction()">Edit Now</button>
                        </div>
                    </form>

                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="http://localhost/rent-drive/public/images/login-wallpaper.jpg"
                     alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>


<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->


<script src="http://localhost/rent-drive/public/js/edit.js"></script>
<script src="http://localhost/rent-drive/public/js/home.js"></script>
<script src="http://localhost/rent-drive/public/js/login.js"></script>
</body>