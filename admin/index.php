<?php 
include "giaodien.php";
include "../model/pdo.php";
include "../model/sinhvien.php";
include "../model/giaovien.php";
include "../model/lophoc.php";
session_start();
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
                    $idsinhvien = $_POST['id'];
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
                    update_sv($idsinhvien,$name,$dress,$age,$tell,$img,$gioitinh);
                    $thongbao = "thêm thành công";
                }
              $sinhvien=loadall_sv();
               include "sinh_vien/list.php";
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
          case 'search_sv' :
              if(isset($_POST['search']) && ($_POST['search']) ){
                $searchsv = $_POST['search_sv'];
                $search = sv_search($searchsv);
              }
              
              include "sinh_vien/list_searchsv.php";
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
                    $idlophoc = $_POST['idlophoc'];
                    insert_gv($name,$adess,$age,$gmail,$tell,$img,$gioitinh,$idlophoc);
                    $thongbao = "thêm thành công";
                }
                
                include "giao_vien/add.php";
                
                break;
                case 'suagv':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        $suagv = loadone_gv($_GET['id']);
                    
                        include "giao_vien/update.php";
                    }
                    
                break;
                case 'updategv':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat']!='') ){
                        $idgiaovien = $_POST['id'];
                        $name = $_POST['name'];
                        $adress = $_POST['adress'];
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
                        update_gv($idgiaovien,$name,$adess,$age,$gmail,$tell,$img,$gioitinh);
                        $thongbao = "thêm thành công";
                    }
                  $giaovien=loadall_gv();
                   include "giao_vien/list.php";
                    break;
                    case 'listgv' :
                        $giaovien = loadall_gv();
                        include "giao_vien/list.php";
                        break;
                    case 'search_gv' :
                          if(isset($_POST['search']) && ($_POST['search']) ){
                            $searchgv = $_POST['search_gv'];
                            $search = gv_search($searchgv);
                          }
                          
                          include "giao_vien/list_search.php";
                          break;
                    case 'xoagv':
                        if(isset($_GET['id']) && ($_GET['id']>0)) {
                            delete_gv($_GET['id']);
                        }
                        $giaovien=loadall_gv();
                            include "giao_vien/list.php";
                            break;
                //lop hoc
                case 'addlh' :
                    if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                        $tenlophoc = $_POST['tenlophoc'];
                        insert_lh($tenlophoc);
                        $thongbao = "thêm thành công";
                    }
                    
                    include "lop_hoc/add.php";
                    
                    break;
                // dang nhap
            
                case "thoat" :
                    //            echo session_destroy();
                                session_unset();
                                    header("location: ../index.php");
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
