<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['DUMMY'] = 'dummy'; 

/**
*
*
*	KEY WORK
*
*
**/

//common constant
define('VALUE_LEVEL_XT','xt');
define('VALUE_LEVEL_XD','xd');
define('VALUE_LEVEL_LT','lt');
define('VALUE_LEVEL_GS','gs');

define('COLUMN_FLAG_XT','xt_flag');
define('COLUMN_FLAG_XD','xd_flag');
define('COLUMN_FLAG_LT','lt_flag');
define('COLUMN_OPERATOR_GT',' >');

define('FLAG_VALUE_NONE',0);
define('FLAG_VALUE_ACCEPT',1);
define('FLAG_VALUE_REJECT',2);
//sharing column

define('FILE_UPLOAD_PATH','./files/');
define('URL_HOME_PAGE','trangchu');
define('URL_QUAN_TRI','dangnhap');


//DB flag
define('FLAG_EXISTED', '2');
define('FLAG_SUCCESSFUL', '1');
define('FLAG_FAIL', '0');
define('ORDER_NAME_ASC', 'asc');
define('ORDER_NAME_DESC', 'desc');
define('ORDER_PRICE_ASC', 'price-asc');
define('ORDER_PRICE_DESC', 'price-desc');
define('ORDER_DATE_ASC', 'created-asc');
define('ORDER_DATE_DESC', 'created-desc');
//logged user data
define('LOGGED_USER', 'LOGGED_USER');
//table user
define('DB_TAB_USER', 'admin');
define('DB_COL_USER_ID', 'taikhoan');
define('DB_COL_USER_PASS', 'password');
define('DB_COL_USER_ROLE', 'bophan');

//table passport
define('DB_TAB_PASSPORT', 'passport');
define('DB_COL_PASSPORT_ID', 'id');
define('DB_COL_PASSPORT_NAME', 'hoten');
define('DB_COL_PASSPORT_ADDRESS', 'diachithuongtru');
define('DB_COL_PASSPORT_SEX', 'gioitinh');
define('DB_COL_PASSPORT_IDENTITY_NUMBER', 'cmnd');
define('DB_COL_PASSPORT_PHONE_NUMBER', 'sodienthoai');
define('DB_COL_PASSPORT_EMAIL', 'email');
define('DB_COL_PASSPORT_XT_FLAG', 'xt_flag');
define('DB_COL_PASSPORT_XT_USER', 'xt_user');
define('DB_COL_PASSPORT_XT_TIME', 'xt_time');
define('DB_COL_PASSPORT_XD_FLAG', 'xd_flag');
define('DB_COL_PASSPORT_XD_USER', 'xd_user');
define('DB_COL_PASSPORT_XD_TIME', 'xd_time');
define('DB_COL_PASSPORT_LT_FLAG', 'lt_flag');
define('DB_COL_PASSPORT_LT_USER', 'lt_user');
define('DB_COL_PASSPORT_LT_TIME', 'lt_time');
define('DB_COL_PASSPORT_NOTE', 'ghichu');

//table passport
define('DB_TAB_RESIDENT', 'resident');
define('DB_COL_RESIDENT_ID', 'cmnd');
define('DB_COL_RESIDENT_NAME', 'hoten');
define('DB_COL_RESIDENT_ADDRESS', 'diachithuongtru');
define('DB_COL_RESIDENT_SEX', 'gioitinh');
define('DB_COL_RESIDENT_IDENTITY_NUMBER', 'cmnd');
define('DB_COL_RESIDENT_PHONE_NUMBER', 'sodienthoai');
define('DB_COL_RESIDENT_EMAIL', 'email');
define('DB_COL_RESIDENT_XT_FLAG', 'xt_flag');
define('DB_COL_RESIDENT_XT_USER', 'xt_user');
define('DB_COL_RESIDENT_XT_TIME', 'xt_time');
define('DB_COL_RESIDENT_XD_FLAG', 'xd_flag');
define('DB_COL_RESIDENT_XD_USER', 'xd_user');
define('DB_COL_RESIDENT_XD_TIME', 'xd_time');
define('DB_COL_RESIDENT_LT_FLAG', 'lt_flag');
define('DB_COL_RESIDENT_LT_USER', 'lt_user');
define('DB_COL_RESIDENT_LT_TIME', 'lt_time');
