<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Display/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'Display/login';
$route['home'] = 'Display/home';
$route['output'] = 'Display/output';
$route['finished'] = 'Display/finished';
$route['add-user'] = 'Display/form_user';
$route['save-user'] = 'Works/insert_user';
$route['import_data'] = 'Display/import_data';
$route['upload_mrp'] = 'Works/reading_csv';
$route['verify'] 	 = 'Works/verify';
$route['logout'] 	 = 'Works/logout';
$route['packing-detail'] 	 = 'Works/request_packing_detail';
$route['delivery-all'] 	 = 'Works/request_delivery_all';
$route['check-no-lot']   = 'Works/check_duplicate_no_lot';
$route['print-label'] 	 = 'Display/print_label';
$route['test'] 	 = 'Works/test';
$route['form-input'] = 'Display/form_input';
$route['form-input-get'] = 'Display/form_input_get';
$route['form_input'] = 'Display/form_input';
$route['import_image'] = 'Display/import_image';
$route['upload_image'] = 'Upload/upload_image';
$route['get_sisa_pack'] = 'KpmController/get_sisa_pack';
$route['check-no-lot-packing'] = 'Works/check_no_lot_packing';
$route['packing'] = 'PackingController/index';

