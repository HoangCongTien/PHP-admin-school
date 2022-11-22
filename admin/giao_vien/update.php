<?php
   if(is_array($suagv)){
       extract($suagv);
   }
$avatar = "../uploadimg/".$img;
if(is_file($avatar )){
    $img = "<img src ='".$avatar."' height='80'>";
}else{
    $img = "no photo";
}
?>

<div class="row">
    <div class="rowformtile">
        <h1>Cập nhật giáo viên </h1>
    </div>
    <div class="rowformcontenr">
        <form action="index.php?act=updategv" method="post" enctype="multipart/form-data" >
        <div class="rowinput">
            
            <input type="hidden" name="id" id="" value="<?php echo $idgiaovien ?>">
        </div>
        <div class="rowinput">
            Tên giáo viên <br>
            <input type="text" name="name" id="" value="<?php echo $name ?>">
        </div>
        <div class="rowinput">
            Địa chỉ <br>
            <input type="text" name="adress" id="" value="<?php echo $adess ?>" >
        </div>
        <div class="rowinput">
            Email <br>
            <input type="text" name="gmail" id="" value="<?php echo $gmail ?>">
        </div>
        <div class="rowinput">
            Ngày sinh <br>
            <input type="text" name="age" id="" value="<?php echo $age ?>">
        </div>
        <div class="rowinput">
            Liên hệ <br>
           <input type="text" name="tell" id="" value="<?php echo $tell ?>">
        </div>
        <div class="rowinput">
            Ảnh <br>
            <div>
           <?php echo $img ?>
            </div>
            <input type="file" name="img" id="">
        </div>
        <div class="rowinput">
            Giới tính <br>
           <input type="text" name="gioitinh" id="" value="<?php echo $gioitinh ?>">
        </div>

        <div class="rowsubmit">
            <input type="submit" name="themmoi" id="" value="thêm mới">
            <input type="reset" name="" id="" value="nhập lại">
            <a href="index.php?act=listgv"><input type="button" name="" id="" value="danh sách"></a>
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