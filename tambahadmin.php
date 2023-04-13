<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>

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

        .ini-tulisan {
            text-align: left;
            font-size: small;
            font-family: sans-serif;
            margin-bottom: 10px;
            color: aliceblue;
        }

        .ini-input {
            width: calc(100% - 50px);
            padding: 8px;
            margin-bottom: 2px;
            border-radius: 5px;
        }

        .ini-button-tambah {
            margin-left: 25px;
            margin-top: 20px;
            width: calc(100% - 50px);
            height: 40px;
            border-radius: 5px;
            background: rgb(21, 60, 200);
            color: white;
            margin-bottom: 20px;
            border: none;
        }
        table th {
            text-align: center;
        }
        .form-control::placeholder {
            color: grey;
        }
        .ini-tabel {
            background: white;
            text-align: center;
        }
        .tabelpe {
            color: aliceblue;
            margin: 20px;
            text-align: center;
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
                                    <li><a class="dropdown-item" href=<?=site_url('login')?>>Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12"
                style="background-color: rgb(146, 141, 141); height: 560px; width: 800px; margin-top: 90px; background-color: rgba(0,0,0,.7); box-shadow: 0 0 10px rgba(255,255,255,.3);">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <h3 style="text-align: center; margin-top: 40px; margin-bottom: 15px; color: aliceblue;">Tambah
                            Admin</h3>
                    </div>

                    <?php 
                        $error = session()->has('error_val');
                        $error_val = session()->getFlashdata('error_val');

                        if (session()->has('msg_success'))
                            echo '<div class="alert alert-success">'.session()->getFlashdata('msg_success').'</div>';

                    ?>


                    <div class="col-12 col-lg-12" style="margin-left: 50px;">
                    <form method="post">
                        <p class="ini-tulisan">Username</p>
                        <input type="text" value="<?=old('username')?>" name="username" id="username" placeholder="Enter a username"
                            class="ini-input form-control<?=$error && !empty($error_val['username']) ?' is-invalid' : ''?>">
                        
                            <?php if ($error && isset($error_val['username'])): ?>

                            <div class="invalid-feedback">
                                <?=$error_val['username']?>
                            </div>

                            <?php endif ?>
                            <br/>

                        <p class="ini-tulisan">Password</p>
                        <input type="password" value="<?=old('password')?>" name="password" id="password" placeholder="Create a password"
                            class="ini-input form-control<?=$error && !empty($error_val['password']) ?' is-invalid' : ''?>">

                            <?php if ($error && isset($error_val['password'])): ?>

                            <div class="invalid-feedback">
                                <?=$error_val['password']?>
                            </div>

                            <?php endif ?>
                            <br/>

                        <p class="ini-tulisan">Retype Password</p>
                        <input type="password" value="<?=old('retype')?>" name="retype" id="retype" placeholder="Retype your password"
                            class="ini-input form-control<?=$error && !empty($error_val['retype']) ?' is-invalid' : ''?>">

                            <?php if ($error && isset($error_val['retype'])): ?>

                            <div class="invalid-feedback">
                                <?=$error_val['retype']?>
                            </div>

                            <?php endif ?>
                            <br/>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <button type="submit" class="ini-button-tambah" name='submit_tambah' value='ya'>TAMBAH</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <h3 style="text-align: center; margin-top: 120px; margin-bottom: 20px; color: aliceblue;">List Admin
                </h3>
            </div>
        </div>
        <div class="row" style="margin-top: 40px; margin-bottom: 20px;">
            <div class="col-4">

            </div>
            <div class="col-4"></div>
            <div class="col-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border: 2px solid; border-color: aliceblue; background-color: transparent;">
                    <button class="btn btn-outline-success" type="submit" style="width: 90px; border-color: rgb(21, 60, 200); color: rgb(21, 60, 200);">Search</button>
                  </form>
            </div>
        </div>
        <div class="row" style="margin-bottom: 500px;">
            <table class="table" id="tabel-data">
                <thead class="table-dark">
                    <tr>
                        <th class="col 3" data-sort="no">No</th>
                        <th class="col 3" data-sort="username">Username</th>
                        <th class="col 3" data-sort="status">Status</th>
                        <th class="col 3" data-sort="aksi">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data_admin as $admin): ?>
                        <tr class="tabelpe">
                            <td>-</td>
                            <td><?=htmlspecialchars($admin->Username)?></td>
                            <td>Aktif</td>
                            <td>
                                <a href="" class="btn btn-danger btn-sm">Ubah</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <br />
    
</body>

</html>