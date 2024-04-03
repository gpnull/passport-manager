<div class="col-lg-12"><div class="panel panel-default col-lg-6"><div class="panel-heading">
                        Thông Tin Đăng Ký
                        </div>
                        <div class="panel-body"><div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('passport/updatelt');?>" method="POST">
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
                                            <label>Ghi Chú</label>
                                            <textarea name="ghichu" rows="4" cols="50" class="form-control"><?php echo $passport[DB_COL_PASSPORT_NOTE] ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success">Lưu Trữ</button>
                                        <button type="button" class="btn btn-success"><a href="/quanlyhochieu/passport">Quay Lại</a></button>
                                    </form>
                                </div></div></div>
                            </div>