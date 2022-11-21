<?php
include "model/user.php";
include "model/pdo.php";
include "model/sinhvien.php";
if(isset($_GET['act'])) {
    $act = $_GET['act'];
    switch($act){
        case 'dangnhap' :
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap']) ) {
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
//                   $thongbao = "đã nhập thành công";
                    header('Location: index.php');
                } else {
                    $thongbao = "tài khoản không tồn tại vui lòng kiểm tra hoặc đăng kí";
                }
            }
}
}
else {
    include "view/login.php";
}
