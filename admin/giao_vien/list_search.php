
<div class="row">
            <div class="rowformtile">
                <h1>Danh sách tìm kiếm</h1>
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
                         foreach ($search as $value ){
                             extract($value);
                             
                             $avatar = "../uploadimg/".$img;
                             
                             if(is_file($avatar)){
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
                         </tr>
                    ';
                         }
                    ?> 

                </table>
    
        
        
        <button><a href="index.php?act=listgv">Danh sách giáo viên</a></button>