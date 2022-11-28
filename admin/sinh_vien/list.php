<div class="search">
    <form action="index.php?act=search_sv" method="post">
                <input type="text" name="search_sv" id="">
                <input type="submit" name="search" id="" value="Tìm Kiếm">
            
<div class="row">
            <div class="rowformtile">
                <h1>Danh sách sinh viên</h1>
            </div>
            <div class="rowtable">
                <table border="1px">
                    <tr>
                        
                        <th>STT</th>
                        <th>tên sinh viên </th>
                        <th>Địa chỉ </th>
                        <th>Tuổi </th>
                        <th>Liên hệ </th>
                        <th>Ảnh </th>
                        <th>Giới tính</th>
                        <th></th>

                    </tr>
                    <?php
                         foreach ($sinhvien as $value ){
                            
                             extract($value);
                             $suasv="index.php?act=suasv&id=".$idsinhvien;
                             $xoasv="index.php?act=xoasv&id=".$idsinhvien;
                             $avatar = "../uploadimg/".$img;
                             
                             if(is_file($avatar)){
                                 $img = "<img src='".$avatar."' height='80'>";
                             }else{
                                 $img = "no photo";
                             }
                             echo ' 
                         <tr>
                        
                        <td>'.$idsinhvien.'</td>
                        <td>'.$name.'</td>
                        <td>'.$dress.'</td>    
                         <td>'.$age.'</td>                                                
                        <td>'.$tell.'</td>
                        <td>'.$img.'</td>
                         <td>'.$gioitinh.'</td>
                        
                        <td><a href="'.$suasv.'"><input type="button" name="" id="" value="sửa"></a> <a href="'.$xoasv.'"><input type="button" name="" id="" value="xóa"></a></td>
                         </tr>
                    ';
                         }
                    ?> 

                </table>
            </div>
            <div class="rowbuttom">
                
                <a href="index.php?act=addsv"><input type="button" name="" id="" value="nhập thêm"></a>
            </div>
        </div>
        