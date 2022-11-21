<?php 
include "giaodien.php";
include "../model/pdo.php";
include "../model/sinhvien.php";
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        // sinh viên
        case 'addsv' :
            if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                $name = $_POST['name'];
                $dress = $_POST['dress'];
                $age = $_POST['age'];
                $tell = $_POST['tell'];
                
                $img=$_FILES['img']['name'];
                $target_dir = "../uploadimg/";
                $target_file = $target_dir.$img;
                if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
//                      echo "ảnh của bạn đã được thêm thành công ";
                }else{
//                      echo 'sorry, ảnh của bạn ko được uplead';
                }
                $gioitinh = $_POST['gioitinh'];
                insert_sv($name,$dress,$age,$tell,$img,$gioitinh);
                $thongbao = "thêm thành công";
            }
            
            include "sinh_vien/add.php";

            break;
            case 'updatesv':
                if(isset($_POST['capnhat']) && ($_POST['capnhat']!='') ){
                    $name = $_POST['name'];
                    $dress = $_POST['dress'];
                    $age = $_POST['age'];
                    $tell = $_POST['tell'];
                
                    $img=$_FILES['img']['name'];
                    $target_dir = "../uploadimg/";
                    $target_file = $target_dir.$img;
                        if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
//                      echo "ảnh của bạn đã được thêm thành công ";
                        }else{
//                      echo 'sorry, ảnh của bạn ko được uplead';
                        }
                    $gioitinh = $_POST['gioitinh'];
                   update_sanpham($ma_hh,$ten_hh,$don_gia,$hinh,$mota,$dacbiet,$ma_loai);
                    $thongbao = "thêm thành công";
                }
              $sanpham=loadall_sp();
               include "sanpham/list.php";
                break;
            case 'listsv' :
                $sinhvien = loadall_sv();
                include "sinh_vien/list.php";
            case 'suasv':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $suasv = loadone_sv($_GET['id']);
                
                    include "sinh_vien/update.php";
                }
                
            break;
         case 'xoasv':
            if(isset($_GET['id']) && ($_GET['id']>0)) {
                delete_sv($_GET['id']);
            }
            $sinhvien=loadall_sv();
            include "sinh_vien/list.php";
            break;
            // giáo viên
            case 'addgv' :
                if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                    $name = $_POST['name'];
                    $adess = $_POST['dress'];
                    $age = $_POST['age'];
                    $tell = $_POST['tell'];
                    
                    $img=$_FILES['img']['name'];
                    $gmail = $_POST['gmail'];
                    $target_dir = "../uploadimg/";
                    $target_file = $target_dir.$img;
                    if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
    //                      echo "ảnh của bạn đã được thêm thành công ";
                    }else{
    //                      echo 'sorry, ảnh của bạn ko được uplead';
                    }
                    $gioitinh = $_POST['gioitinh'];
                    insert_gv($name,$adress,$age,$gmail,$tell,$img,$gioitinh);
                    $thongbao = "thêm thành công";
                }
                
                include "giao_vien/add.php";
                
                break;
            case  "dangnhap" :
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
                include "dangnhap.html";
                break;
            break;
                case 'listgv' :
                    $giaovien = loadall_gv();
                    include "giao_vien/list.php";
         default:
         include "giaodien.php";
         break;
    }

  }
  else{
      include "giaodien.php";
  }

//   include "footer.php";

?>
