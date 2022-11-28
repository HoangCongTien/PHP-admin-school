    </form>
    </div>
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
                        
                        <td>'.$idsinhvien.'</td>
                        <td>'.$name.'</td>
                        <td>'.$dress.'</td>    
                         <td>'.$age.'</td>                                                
                        <td>'.$tell.'</td>
                        <td>'.$img.'</td>
                         <td>'.$gioitinh.'</td>
                        
                        
                         </tr>
                    ';
                         }
                    ?> 

                </table>
            </div>
            <button><a href="index.php?act=listsv">Danh sách sinh viên</a></button>
        </div>
        