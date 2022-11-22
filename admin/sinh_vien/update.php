<?php
   if(is_array($suasv)){
       extract($suasv);
   }
$avatar = "../uploadimg/".$img;
if(is_file($avatar)){
    $img = "<img src ='".$avatar."' height='80'>";
}else{
    $img = "no photo";
}
?>

<div class="row">
    <div class="rowformtile">
        <h1>Cập nhật sinh viên </h1>
    </div>
    <div class="rowformcontenr">
        <form action="index.php?act=updatesv" method="post" enctype="multipart/form-data" >
        <div class="rowinput">
            <input type="hidden" name="id" id="" value="<?php echo "$idsinhvien" ?>">
        </div>
        <div class="rowinput">
            Tên sinh viên <br>
            <input type="text" name="name" id="" value="<?php echo "$name" ?>">
        </div>
        <div class="rowinput">
            Địa chỉ <br>
            <input type="text" name="dress" id=""value="<?php echo "$dress" ?>">
        </div>
        <div class="rowinput">
            Tuổi <br>
            <input type="text" name="age" id="" value="<?php echo "$age" ?>">
        </div>
        <div class="rowinput">
            Liên hệ <br>
           <input type="text" name="tell" id="" value="<?php echo "$tell" ?>">
        </div>
        <div class="rowinput">
            Ảnh <br>
            <div>
            <?php echo "$img" ?>
            </div>
            <input type="file" name="img" id="" value="">
        </div>
        <div class="rowinput">
            Giới tính <br>
           <input type="text" name="gioitinh" id="" value="<?php echo "$gioitinh" ?>">
        </div>

        <div class="rowsubmit">
            <input type="submit" name="capnhat" id="" value="cập nhật">
            <input type="reset" name="" id="" value="nhập lại">
            <a href="index.php?act=listsv"><input type="button" name="" id="" value="danh sách"></a>
        </div>
            <?php
            if(isset($thongbao)&& $thongbao!= ""){
                echo $thongbao;
            }
            ?>
        </form>
    </div>

</div>

</div>