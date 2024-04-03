<div class="col-lg-12"><div class="panel panel-default col-lg-6"><div class="panel-heading">
                        Thông Tin Đăng Ký
                        </div>
                        <div class="panel-body"><div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('passport/updatext');?>" method="POST">
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
                                        <div class="form-group">
                                            <div>
                                                 <label>
                                                    <input type="radio" name="passport[xt_flag]" id="optionsRadios1" value="1" >Thông Tin Đúng Với Dữ Liệu Lưu Trữ
                                                </label>
                                            </div>
                                            <div>
                                                 <label>
                                                    <input type="radio" name="passport[xt_flag]" id="optionsRadios1" value="2" checked>Thông Tin Không Đúng Với Dữ Liệu Lưu Trữ
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ghi Chú</label>
                                            <textarea name="ghichu" rows="4" cols="50" class="form-control"><?php echo $passport[DB_COL_PASSPORT_NOTE] ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success">Lưu</button>
                                        <button type="button" class="btn btn-success"><a href="/quanlyhochieu/passport">Quay Lại</a></button>
                                    </form>
                                </div></div></div>
<div class="panel panel-default col-lg-6"><div class="panel-heading">
                            Thông Tin Đối Chiếu
                        </div>
                        <div class="panel-body"><div class="col-lg-12">
                            <?php 
                                if($resident) {
?>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Số CMND</label>
                                            <input value="<?php echo $resident[DB_COL_RESIDENT_ID] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Họ Tên</label>
                                            <input value="<?php echo $resident[DB_COL_RESIDENT_NAME] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Địa Chỉ Thường Trú</label>
                                            <input value="<?php echo $resident[DB_COL_RESIDENT_ADDRESS] ?>" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Giới Tính</label>
                                            <input value="<?php echo $resident[DB_COL_RESIDENT_SEX] ?>" class="form-control" readonly>
                                        </div>
                                    </form>
<?php
                                }else echo 'Không tìm thấy thông tin liên quan.';
                            ?>
                                </div></div></div>
                            </div>