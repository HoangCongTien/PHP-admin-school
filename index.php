<?php
include "model/user.php";
include "model/pdo.php";
include "model/sinhvien.php";
session_start();
include "view/home.php";
if(isset($_GET["act"])) {


$check = $_GET["act"];
switch ($check) {
    case "giaovien":
            if(isset($_SESSION["user"])) {
            $act = $_GET['act'];
            switch ($act) {

            }
        }
        else {
            include "view/login.php";
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap']) ) {
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
//                   $thongbao = "đã nhập thành công";
                    header('location : index.php');
                } else {
                    $thongbao = "tài khoản không tồn tại vui lòng kiểm tra hoặc đăng kí";
                }
            }
        }
        break;
} }
