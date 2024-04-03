<div class="col-lg-12"><div class="panel panel-default col-lg-6"><div class="panel-heading">
                        Thông Tin Đăng Ký
                        </div>
                        <div class="panel-body"><div class="col-lg-12">
                                    <form role="form" >
                                        <input type="hidden" name="passport[id]" value="<?php echo $passport[DB_COL_PASSPORT_ID] ?>">
                                        <div class="form-group">
                                            <label>Họ Tên</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_NAME] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Địa Chỉ Thường Trú</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_ADDRESS] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Giới Tính</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_SEX] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Số CMND</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_IDENTITY_NUMBER] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Số Điện Thoại</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_PHONE_NUMBER] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_EMAIL] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Kết Quả Xác Thực:</label>
                                            <input value="<?php 
                                                  if($passport[COLUMN_FLAG_XT] == 1) {
                                                    echo 'Trùng với DB';
                                                  } else if($passport[COLUMN_FLAG_XT] == 2) {
                                                    echo 'Không trùng với DB';
                                                  }else if($passport[COLUMN_FLAG_XT] == 0) {
                                                    echo 'Chưa Xác Thực';
                                                  } else {
                                                    echo $passport[COLUMN_FLAG_XT];
                                                  } ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Người Xác Thực</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_XT_USER] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày Xác Thực</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_XT_TIME] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Kết Quả Xét Duyệt:</label>
                                            <input value="<?php 
                                                  if($passport[COLUMN_FLAG_XD] == 1) {
                                                    echo 'Đã được duyệt';
                                                  } else if($passport[COLUMN_FLAG_XD] == 2) {
                                                    echo 'Không được duyệt';
                                                  }else if($passport[COLUMN_FLAG_XD] == 0) {
                                                    echo 'Chưa duyệt';
                                                  } else {
                                                    echo $passport[COLUMN_FLAG_XD];
                                                  } ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Người Duyệt</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_XD_USER] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày Xét Duyệt</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_XD_TIME] ?>" class="form-control" readonly>
                                        </div>
										
                                       <div class="form-group">
                                            <label>Kết Quả Lưu Trữ:</label>
                                            <input value="<?php 
                                                  if($passport[COLUMN_FLAG_LT] == 1) {
                                                    echo 'Đã Lưu';
                                                  }else if($passport[COLUMN_FLAG_LT] == 0) {
                                                    echo 'Chưa Lưu';
                                                  } else {
                                                    echo $passport[COLUMN_FLAG_LT];
                                                  } ?>  " class="form-control" readonly>
                                              </div>
                                        <div class="form-group">
                                            <label>Người Lưu Trữ</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_LT_USER] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày Lưu Trữ</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_LT_TIME] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Ghi Chú</label>
                                            <textarea name="ghichu" rows="4" cols="50" class="form-control"><?php echo $passport[DB_COL_PASSPORT_NOTE] ?></textarea>
                                        </div>
                                        <button type="button" class="btn btn-success"><a href="/quanlyhochieu/passport">Quay Lại</a></button>
                                    </form>
                                </div></div></div>
                            </div>