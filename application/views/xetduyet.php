<table class="table" width="100%">
    <tr>
        <th>
            Họ Tên
        </th>
        <th>
            Địa Chỉ Thường Trú
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
			Kết quả xác thực
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
					  echo '<td>'.$item[DB_COL_PASSPORT_ADDRESS];
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
					  	echo 'Trùng với DB';
					  } else if($item[COLUMN_FLAG_XT] == 2) {
					  	echo 'Không trùng với DB';
					  } else {
					  	echo $item[COLUMN_FLAG_XT];
					  }
					  echo '</td>';
					  echo '<td><a href="'.base_url('/passport/updatexd?id='.$item[DB_COL_PASSPORT_ID]).'">Xét Duyệt</a>';
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