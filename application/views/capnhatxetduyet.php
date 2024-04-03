<div class="col-lg-12"><div class="panel panel-default col-lg-6"><div class="panel-heading">
                        Thông Tin Đăng Ký
                        </div>
                        <div class="panel-body"><div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('passport/updatexd');?>" method="POST">
                                        <input type="hidden" name="passport[id]" value="<?php echo $passport[DB_COL_PASSPORT_ID] ?>">
                                        <div class="form-group">
                                            <label>Họ Tên</label>
                                            <input value="<?php echo $passport[DB_COL_PASSPORT_NAME] ?>" name="" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Địa Chỉ Thường Trú</label>
                                            <input name="" value="<?php echo $passport[DB_COL_PASSPORT_ADDRESS] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Giới Tính</label>
                                            <input name="" value="<?php echo $passport[DB_COL_PASSPORT_SEX] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Số CMND</label>
                                            <input name="" value="<?php echo $passport[DB_COL_PASSPORT_IDENTITY_NUMBER] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Số Điện Thoại</label>
                                            <input name="" value="<?php echo $passport[DB_COL_PASSPORT_PHONE_NUMBER] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="" value="<?php echo $passport[DB_COL_PASSPORT_EMAIL] ?>" class="form-control" readonly>
                                        </div>
                                        <div>
                                            <label>Kết quả xác thực:</label>
                                            <label><?php 
                                                  if($passport[COLUMN_FLAG_XT] == 1) {
                                                    echo 'Trùng với DB';
                                                  } else if($passport[COLUMN_FLAG_XT] == 2) {
                                                    echo 'Không trùng với DB';
                                                  } else {
                                                    echo $passport[COLUMN_FLAG_XT];
                                                  } ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Ghi Chú</label>
                                            <textarea name="ghichu" rows="4" cols="50" class="form-control"><?php echo $passport[DB_COL_PASSPORT_NOTE] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                 <label>
                                                    <input type="radio" name="passport[xd_flag]" id="optionsRadios1" value="1" >Đồng ý duyệt.
                                                </label>
                                            </div>
                                            <div>
                                                 <label>
                                                    <input type="radio" name="passport[xd_flag]" id="optionsRadios1" value="2" checked>Không đồng ý duyệt.
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Lưu</button>
                                        <button type="button" class="btn btn-success"><a href="/quanlyhochieu/passport">Quay Lại</a></button>
                                    </form>
                                </div></div></div>
                            </div>