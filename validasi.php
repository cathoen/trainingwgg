<?php
function validasiLogin($username, $password) {
    $valid = [
        "uwu050505" => "Abcdefgh12345",
        "uwu050709" => "Qwertyuiop1050",
        "uwu070707" => "Asdfghjkl67890"
    ];

    foreach($valid as $x => $x_value) {
        if($username === $x) {
            if($password === $x_value) {
                return true;
                break;
            }
        }
    }
}

$hasilValidasi = validasiLogin($_POST['username'], $_POST['password']);

if($hasilValidasi == true) {
    header("Location: D:\xampp\htdocs\trainingIT.uwu\app\Views\kelas\home.php");
} else {
    header("Location: D:\xampp\htdocs\trainingIT.uwu\app\Views\kelas\login.php");
}

?>