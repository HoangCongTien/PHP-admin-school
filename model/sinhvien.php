<?php
function insert_sv($name,$dress,$age,$tell,$img,$gioitinh){
    $spl = "insert into sinhvien values (null,'$name','$dress','$age','$tell','$img','$gioitinh')";
    pdo_execute($spl);
}
function loadall_sv(){
    $result = "select * from sinhvien order by idsinhvien ";
    $sinhvien=pdo_query($result);
 return $sinhvien;
}
function loadone_sv($idsinhvien){
    $sql = "select * from sinhvien where idsinhvien = ".$idsinhvien;
    $suasv = pdo_query_one($sql);
    return $suasv;
}
function delete_sv($idsinhvien){
    $sql = "delete from sinhvien where idsinhvien =".$idsinhvien;
    pdo_execute($sql);
}
function insert_gv($name,$adess,$age,$gmail,$tell,$img,$gioitinh){
    $spl = "insert into giaovien values (null,'$name','$adess','$age','$gmail','$tell','$img','$gioitinh')";
    pdo_execute($spl);
}
function loadall_gv(){
    $result = "select * from giaovien order by idgiaovien ";
    $giaovien=pdo_query($result);
 return $giaovien;
}
function update_sv($name,$dress,$age,$tell,$img,$gioitinh){
    if($img !=" "){
        $sql ='update sinhvien set name = "'.$name.'",dress = "'.$dress.'",age = "'.$age.'",tell = "'.$tell.'",img = "'.$img.'",gioitinh = "'.$gioitinh.'";
    }else{
        $sql ='update sinhvien set name = "'.$name.'",dress = "'.$dress.'",age = "'.$age.'",tell = "'.$tell.'",img = "'.$img.'",gioitinh = "'.$gioitinh.'";
    }
    pdo_execute($sql);
}
?>   