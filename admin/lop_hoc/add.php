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
    <h1>Thêm mới lớp học</h1>
</div>
<div class="rowformcontenr">
    <form action="index.php?act=addlh" method="post"  >
        
        <div class="rowinput">
            Tên lớp học <br>
            <input type="text" name="tenlophoc" id="">
        </div>
        
        <div class="rowsubmit">
            <input type="submit" name="themmoi" id="" value="thêm mới">
            <input type="reset" name="" id="" value="nhập lại">
            <a href="index.php?act=listlh"><input type="button" name="" id="" value="danh sách"></a>
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