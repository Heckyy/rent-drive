<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <!--    Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Font AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--  SwalFire  -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <a class="navbar-brand logo-brand" href="#">RenT-Drive</a>
                <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link me-2 text-dark" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2 text-dark" href="#">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Reservation</a>
                    </li>
                </ul>


                <div class="navbar-nav ">
                    <a href="register"> <button class="btn btn-primary me-lg-3 button-secondary bg-transparent text-primary" id="btn-signIn">Sign In</button></a>
                    <a href="http://localhost/rent-drive/login"> <button class="btn btn-primary button-primary " id="btn-login">login</button> </a>
                </div>
                <h6 class="me-2 text-center d-none" id="user-info"> <b> Welcome! <span id=hello></span></b></h6>
                    <button class="btn d-none btn-primary button-primary" id="btn-logout" onclick="btnLogout()">Logout</button>

            </div>
        </div>
    </nav>
    <!--End OF  Navbar -->
    <section class="search-product">

    </section>
    <!-- Search Cars Section -->

    <!--End Of Search Cars Section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>