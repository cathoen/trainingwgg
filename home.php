<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        body {
            height: 100vh;
            background-image: url("../../../wallpaper.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-700px);
            }

            to {
                transform: translateX(0);
            }
        }

        .slideInLeft {
            animation: slideInLeft 1.5s ease-in;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="<?=site_url('home')?>" style="margin-right: 15px;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="margin-right: 15px;">Tambah Barang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="margin-right: 15px;">Terima Peminjaman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="margin-right: 15px;">Inventory</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="margin-right: 15px;">History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=site_url('tambah')?>">Tambah Admin</a>
                            </li>


                        </ul>
                        <ul style="margin-right: 90px;" class="navbar-nav ms-auto mb-2 mb-lg-0">


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Profile
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?=site_url('login')?>">Logout</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row">
            <div class="col-8 col-lg-6">
                <h2 class="slideInLeft"
                    style="margin-top: 2.5%; margin-left: 2.5%; color: aliceblue; font-size: 50px;">
                    Welcome back, Catherine!</h2>
            </div>
        </div>
    </div>

</body>

</html>