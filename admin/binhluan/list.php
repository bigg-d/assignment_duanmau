<div class="row">
      <div class="row_header">
        <p>Danh Sách Bình Luận</p>
      </div>
      <div class="row">
        <div class="row_nb10 fomdsloai">
          <table>
            <tr>
              <th>ID</th>
              <th>Nội dung</th>
              <th>Tên người dùng</th>
              <th>Mã sản phẩm</th>
              <th>Ngày</th>
              
              <th>Chức năng</th>
            </tr>
            <?php
                foreach ($dsbl as $binhluan) {
                    extract($binhluan);
                    $suabl = "index.php?act=suabl&id=". $id ;
                    $xoabl = "index.php?act=xoabl&id=". $id ;
                    echo '
                            <tr>
                            <td>' .$id. '</td>
                            <td>' .$content.'</td>
                            <td>' .$user_name.'</td>
                            <td>' .$id_product.'</td>
                            <td>' .$time.'</td>
                            <td>
                                <a href= "'.$suabl.'"><input type="button" value="Sửa"></a> 
                                <a href="'.$xoabl.'"><input type="button" value="Xóa"></td></a>
                        </tr>';
                }
            ?>
            
          </table>
        </div>
        <div class="row_mb21">
          <input type="button" value="Chọn tất cả">
          <input type="button" value="Bỏ chọn tất cả">
          <input type="button" name="" id="" value="xóa các mục đã chọn">
          <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
      </div>
    </div>