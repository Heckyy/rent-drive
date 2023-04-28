<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
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
            <div class="row bg-light">
                <div class="col">
                    <div class="row p-3 d-flex justify-content-center">
                        <div class="col-lg-3">
                            <span class="text-search ms-1 mb-2">Category</span>
                            <select class="form-select mt-2" aria-label="Default select example">
                                <option value="sedan">Sedan</option>
                                <option value="suv">SUV</option>
                                <option value="mpv">MPV</option>
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
                            <input type="date" name="" id="" class="form-control mt-2" value="2023-04-28">
                        </div>
                        <div class="col-lg-3">
                            <span class="text-search ms-1 mb-2">End Date</span>
                            <input type="date" name="" id="" class="form-control mt-2" value="2023-04-28">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Search Section -->
</body>

</html>