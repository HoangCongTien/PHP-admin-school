<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../form.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="rowformtile" style="background-color: blue; 
padding-left:40px;
color:white;
font-size:40px;
boder-radius:5px;
border-radius: 5px;
">
    <h1>Thêm mới giáo viên</h1>
</div>
<div class="rowformcontenr">
    <form action="index.php?act=addgv" method="post" enctype="multipart/form-data" >
        
        <div class="rowinput">
            Tên giáo viên <br>
            <input type="text" name="name" id="">
        </div>
        <div class="rowinput">
            Địa chỉ <br>
            <input type="text" name="dress" id="">
        </div>
        <div class="rowinput">
            Email <br>
            <input type="text" name="gmail" id="">
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
        <div class="rowinput">
            Mã lóp phụ trách <br>
           <input type="hidden" name="idlophoc" id="">
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

</body>
</html>