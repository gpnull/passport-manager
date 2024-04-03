<table class="table" width="100%">
    <tr>
        <th>
            Họ Tên
        </th>
        <th>
			Giới Tính
		</th>
        <th>
			Số CMND
		</th>
        <th>
			Số Điện Thoại
		</th>
        <th>
			Email
		</th>
        <th>
			Tình trạng xác thực
		</th>
        <th>
			Tình trạng xét duyệt
		</th>
        <th>
			Tình trạng lưu trữ
		</th>
        <th>
		</th>
    </tr>
			<?php 
						
                  if($items) foreach ($items as $item)
                  {
					  echo '<tr>';
					  echo '<td>'.$item[DB_COL_PASSPORT_NAME];
					  echo '</td>';
					  echo '<td>'.$item[DB_COL_PASSPORT_SEX];
					  echo '</td>';
					  echo '<td>'.$item[DB_COL_PASSPORT_IDENTITY_NUMBER];
					  echo '</td>';
					  echo '<td>'.$item[DB_COL_PASSPORT_PHONE_NUMBER];
					  echo '</td>';
					  echo '<td>'.$item[DB_COL_PASSPORT_EMAIL];
					  echo '</td>';
					  echo '<td>';
					  if($item[COLUMN_FLAG_XT] == 1) {
					  	echo 'Giống với DB';
					  } else if($item[COLUMN_FLAG_XT] == 2) {
					  	echo 'Không giống với DB';
					  } else if($item[COLUMN_FLAG_XT] == 0) {
					  	echo 'Chưa xác thực';
					  } else {
					  	echo $item[COLUMN_FLAG_XT];
					  }
					  echo '</td>';
					  echo '<td>';
					  if($item[COLUMN_FLAG_XD] == 1) {
					  	echo 'Đã Được duyệt';
					  } else if($item[COLUMN_FLAG_XD] == 2) {
					  	echo 'Không được duyệt';
					  }else if($item[COLUMN_FLAG_XD] == 0) {
					  	echo 'Chưa duyệt';
					  }  else {
					  	echo $item[COLUMN_FLAG_XD];
					  }
					  echo '</td>';
					  echo '<td>';
					  if($item[COLUMN_FLAG_LT] == 1) {
					  	echo 'Đã Lưu';
					  } else if($item[COLUMN_FLAG_LT] == 0) {
					  	echo 'Chưa Lưu';
					  }else {
					  	echo $item[COLUMN_FLAG_LT];
					  }
					  echo '</td>';
					  echo '<td><a href="'.base_url('/passport/thongtings?id='.$item[DB_COL_PASSPORT_ID]).'">Xem Chi Tiết</a>';
					echo '</td>';
				      echo '</tr>';
                  }
			?>

</table>
            <div class="shop-pag">
               <div class="right-pag">
                  <?php 
                     echo $links;?>
                  <div class="clear"></div>
               </div>
               <div class="clear"></div>
            </div>