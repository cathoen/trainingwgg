<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background: rgb(203, 249, 222);
            background: linear-gradient(90deg, rgba(203, 249, 222, 1) 0%, rgba(184, 231, 213, 1) 10%, rgba(154, 190, 216, 1) 58%, rgba(165, 194, 223, 1) 72%);
        }

        .ini-tulisan {
            text-align: left;
            font-size: small;
            font-family: sans-serif;
            margin-bottom: 4px;
        }

        .ini-input {
            width: calc(100% - 25px);
            background-color: transparent;
            border: none;
            border-bottom: 2px solid;
            padding: 8px;
            margin-bottom: 20px;

        }

        .ini-input::placeholder {
            font-size: 14px;
        }


        .ini-tulisan-kecil {
            float: right;
            font-size: 12px;
            color: rgb(83, 116, 193);
            font-family: sans-serif;
            margin-right: 30px;
        }


        .ini-button-login {
            margin-top: 25px;
            margin-left: 20px;
            width: calc(100% - 40px);
            height: 40px;
            border-radius: 20px;
            background: rgb(203, 249, 222);
            background: linear-gradient(90deg, rgba(203, 249, 222, 1) 0%, rgba(184, 231, 213, 1) 10%, rgba(154, 190, 216, 1) 58%, rgba(165, 194, 223, 1) 72%);
            ;
            color: white;
            margin-bottom: 20px;
            border: none;
        }
    </style>
    
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12"
                style="background-color: white; border-radius: 10px; height: 470px; width: 350px; margin-top: 135px;">
                <div class="row justify-content-center">
                    <div class="col-8 col-lg-6">
                        <h2 style="text-align: center; margin-top: 40px; margin-bottom: 40px;">Login</h2>
                    </div>
                </div>
                <form action="D:\xampp\htdocs\trainingIT.uwu\app\Views\kelas\validasi.php" method="post">
                <div class="row" style="margin-left: 2%;">
                    <div class="col-12 col-lg-12">
                        <p class="ini-tulisan">Username</p>
                        <input type="text" name="username" id="username" placeholder="Type your username"
                            class="ini-input" required>
                        <p class="ini-tulisan">Password</p>
                        <input type="password" name="password" id="password" placeholder="Type your password"
                            class="ini-input" style="margin-bottom: 2.5px;" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="" class="ini-tulisan-kecil">Forgot password?</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <a href=""><button id="login" onclick="Swal('Login berhasil','Anda berhasil login!','success')" class="ini-button-login">LOGIN</button></a>
                    </div>
                </div>
                </form>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <p class="" style="text-align: center; font-size: smaller;">You don't have an account? <a href=""
                                style="color: rgb(83, 116, 193);"><u>SIGN
                                    UP</u></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    




    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    
    <script>
        let input = document.querySelector('#username')
        let button = document.querySelector('#login')
        button.disabled = true
        input.addEventListener('change', stateHandle)
    
        function stateHandle() {
          if (document.querySelector('#username').value === '') {
            button.disabled = true
          } else {
            button.disabled = false
          }
        }
      </script>
      
</body>

</html>