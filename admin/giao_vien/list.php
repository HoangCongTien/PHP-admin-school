<div class="row">
            <div class="rowformtile">
                <h1>Danh sách giáo viên</h1>
            </div>
            <div class="rowtable">
                <table border="1px">
                    <tr>
                        
                        <th>STT</th>
                        <th>tên giáo viên </th>
                        <th>Địa chỉ </th>
                        <th>Tuổi </th>
                        <th>Email </th>
                        <th>Liên hệ </th>
                        <th>Ảnh </th>
                        <th>Giới tính</th>
                        <th></th>

                    </tr>
                    <?php
                         foreach ($giaovien as $value ){
                             extract($value);
                             $suagv="index.php?act=suagv&id=".$idgiaovien;
                             $xoagv="index.php?act=xoagv&id=".$idgiaovien;
                             $avatar = "../uploadimg/".$img;
                             if(is_file($img)){
                                 $img = "<img src='".$avatar."' height='80'>";
                             }else{
                                 $img = "no photo";
                             }
                             echo ' 
                         <tr>
                        
                        <td>'.$idgiaovien.'</td>
                        <td>'.$name.'</td>
                        <td>'.$adess.'</td>    
                         <td>'.$age.'</td> 
                         <td>'.$gmail.'</td>                                                                                               
                        <td>'.$tell.'</td>
                        <td>'.$img.'</td>
                         <td>'.$gioitinh.'</td>
                        
                        <td><a href="'.$suagv.'"><input type="button" name="" id="" value="sửa"></a> <a href="'.$xoagv.'"><input type="button" name="" id="" value="xóa"></a></td>
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
        