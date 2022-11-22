<div class="row">
<div class="rowformtile">
    <h1>Thêm mới sinh viên  </h1>
</div>
<div class="rowformcontenr">
    <form action="index.php?act=addsv" method="post" enctype="multipart/form-data" >
        
        <div class="rowinput">
            Tên sinh viên <br>
            <input type="text" name="name" id="">
        </div>
        <div class="rowinput">
            Địa chỉ <br>
            <input type="text" name="dress" id="">
        </div>
        <div class="rowinput">
            Tuổi <br>
            <input type="text" name="age" id="">
        </div>
        <div class="rowinput">
            Liên hệ <br>
           <input type="text" name="tell" id="">
        </div>
        <div class="rowinput">
            Ảnh <br>
            <input type="file" name="img" id="">
        </div>
        <div class="rowinput">
            Giới tính <br>
           <input type="text" name="gioitinh" id="">
        </div>

        <div class="rowsubmit">
            <input type="submit" name="themmoi" id="" value="thêm mới">
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