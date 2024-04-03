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
					  echo '<td><a href="'.base_url('/passport/updatext?id='.$item[DB_COL_PASSPORT_ID]).'">Xác Thực</a>';
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