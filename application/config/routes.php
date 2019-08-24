<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['login']='AuthController/login';
$route['logout']='AuthController/logout';


$route['dashboard']='DashboardController/index';

$route['skck']='SkckController/index';
$route['skck/buat']='SkckController/buat';
$route['skck/lihat/(:any)']='SkckController/lihat/$1';
$route['skck/hapus/(:any)']='SkckController/hapus/$1';
$route['skck/edit/(:any)']='SkckController/edit/$1';
$route['skck/update/(:any)']='SkckController/update/$1';
$route['skck/disposisi/(:any)']='SkckController/disposisi/$1';
$route['skck/tampil_disposisi']='SkckController/tampil_disposisi';
$route['skck/tolak_skck']='SkckController/tolak_skck';
$route['skck/simpan_skck/(:any)']='SkckController/simpan_skck/$1';
$route['skck/setuju/(:any)']='SkckController/setujui_skck/$1';

$route['ktps']='KtpsController/index';
$route['ktps/buat']='KtpsController/buat';
$route['ktps/lihat/(:any)']='KtpsController/lihat/$1';
$route['ktps/hapus/(:any)']='KtpsController/hapus/$1';
$route['ktps/edit/(:any)']='KtpsController/edit/$1';
$route['ktps/update/(:any)']='KtpsController/update/$1';
$route['ktps/disposisi/(:any)']='KtpsController/disposisi/$1';
$route['ktps/tampil_disposisi']='KtpsController/tampil_disposisi';
$route['ktps/tolak_ktps']='KtpsController/tolak_ktps';
$route['ktps/simpan_ktps/(:any)']='KtpsController/simpan_ktps/$1';
$route['ktps/setuju/(:any)']='KtpsController/setujui_ktps/$1';

$route['ppak']='PpakController/index';
$route['ppak/buat']='PpakController/buat';
$route['ppak/lihat/(:any)']='PpakController/lihat/$1';
$route['ppak/hapus/(:any)']='PpakController/hapus/$1';
$route['ppak/edit/(:any)']='PpakController/edit/$1';
$route['ppak/update/(:any)']='PpakController/update/$1';
$route['ppak/disposisi/(:any)']='PpakController/disposisi/$1';
$route['ppak/setuju/(:any)']='PpakController/setujui_ppak/$1';
$route['ppak/tampil_disposisi']='PpakController/tampil_disposisi';
$route['ppak/tolak_ppak']='PpakController/tolak_ppak';
$route['ppak/simpan_ppak/(:any)']='PpakController/simpan_ppak/$1';
$route['ppak/setuju/(:any)']='PpakController/setujui_ppak/$1';

$route['skb']='SkbController/index';
$route['skb/buat']='SkbController/buat';
$route['skb/lihat/(:any)']='SkbController/lihat/$1';
$route['skb/hapus/(:any)']='SkbController/hapus/$1';
$route['skb/edit/(:any)']='SkbController/edit/$1';
$route['skb/update/(:any)']='SkbController/update/$1';
$route['skb/disposisi/(:any)']='SkbController/disposisi/$1';
$route['skb/tampil_disposisi']='SkbController/tampil_disposisi';
$route['skb/tolak_skb']='SkbController/tolak_skb';
$route['skb/simpan_skb/(:any)']='SkbController/simpan_skb/$1';
$route['skb/setuju/(:any)']='SkbController/setujui_skb/$1';

$route['skh']='SkhController/index';
$route['skh/buat']='SkhController/buat';
$route['skh/lihat/(:any)']='SkhController/lihat/$1';
$route['skh/hapus/(:any)']='SkhController/hapus/$1';
$route['skh/edit/(:any)']='SkhController/edit/$1';
$route['skh/update/(:any)']='SkhController/update/$1';
$route['skh/disposisi/(:any)']='SkhController/disposisi/$1';
$route['skh/tampil_disposisi']='SkhController/tampil_disposisi';
$route['skh/tolak_skh']='SkhController/tolak_skh';
$route['skh/simpan_skh/(:any)']='SkhController/simpan_skh/$1';
$route['skh/setuju/(:any)']='SkhController/setujui_skh/$1';

$route['skkn']='SkknController/index';
$route['skkn/buat']='SkknController/buat';
$route['skkn/lihat/(:any)']='SkknController/lihat/$1';
$route['skkn/hapus/(:any)']='SkknController/hapus/$1';
$route['skkn/edit/(:any)']='SkknController/edit/$1';
$route['skkn/update/(:any)']='SkknController/update/$1';
$route['skkn/disposisi/(:any)']='SkknController/disposisi/$1';
$route['skkn/tampil_disposisi']='SkknController/tampil_disposisi';
$route['skkn/tolak_skkn']='SkknController/tolak_skkn';
$route['skkn/simpan_skkn/(:any)']='SkknController/simpan_skkn/$1';
$route['skkn/setuju/(:any)']='SkknController/setujui_skkn/$1';

$route['skpn']='SkpnController/index';
$route['skpn/buat']='SkpnController/buat';
$route['skpn/lihat/(:any)']='SkpnController/lihat/$1';
$route['skpn/hapus/(:any)']='SkpnController/hapus/$1';
$route['skpn/edit/(:any)']='SkpnController/edit/$1';
$route['skpn/update/(:any)']='SkpnController/update/$1';
$route['skpn/disposisi/(:any)']='SkpnController/disposisi/$1';
$route['skpn/tampil_disposisi']='SkpnController/tampil_disposisi';
$route['skpn/tolak_skpn']='SkpnController/tolak_skpn';
$route['skpn/simpan_skpn/(:any)']='SkpnController/simpan_skpn/$1';
$route['skpn/setuju/(:any)']='SkpnController/setujui_skpn/$1';

$route['sktk']='SktkController/index';
$route['sktk/buat']='SktkController/buat';
$route['sktk/lihat/(:any)']='SktkController/lihat/$1';
$route['sktk/hapus/(:any)']='SktkController/hapus/$1';
$route['sktk/edit/(:any)']='SktkController/edit/$1';
$route['sktk/update/(:any)']='SktkController/update/$1';
$route['sktk/disposisi/(:any)']='SktkController/disposisi/$1';
$route['sktk/tampil_disposisi']='SktkController/tampil_disposisi';
$route['sktk/tolak_sktk']='SktkController/tolak_sktk';
$route['sktk/simpan_sktk/(:any)']='SktkController/simpan_sktk/$1';
$route['sktk/setuju/(:any)']='SktkController/setujui_sktk/$1';

$route['sku']='SkuController/index';
$route['sku/buat']='SkuController/buat';
$route['sku/lihat/(:any)']='SkuController/lihat/$1';
$route['sku/hapus/(:any)']='SkuController/hapus/$1';
$route['sku/edit/(:any)']='SkuController/edit/$1';
$route['sku/update/(:any)']='SkuController/update/$1';
$route['sku/disposisi/(:any)']='SkuController/disposisi/$1';
$route['sku/tampil_disposisi']='SkuController/tampil_disposisi';
$route['sku/tolak_sku']='SkuController/tolak_sku';
$route['sku/simpan_sku/(:any)']='SkuController/simpan_sku/$1';
$route['sku/setuju/(:any)']='SkuController/setujui_sku/$1';

$route['spbpn']='SpbpnController/index';
$route['spbpn/buat']='SpbpnController/buat';
$route['spbpn/lihat/(:any)']='SpbpnController/lihat/$1';
$route['spbpn/hapus/(:any)']='SpbpnController/hapus/$1';
$route['spbpn/edit/(:any)']='SpbpnController/edit/$1';
$route['spbpn/update/(:any)']='SpbpnController/update/$1';
$route['spbpn/disposisi/(:any)']='SpbpnController/disposisi/$1';
$route['spbpn/tampil_disposisi']='SpbpnController/tampil_disposisi';
$route['spbpn/tolak_spbpn']='SpbpnController/tolak_spbpn';
$route['spbpn/simpan_spbpn/(:any)']='SpbpnController/simpan_spbpn/$1';
$route['spbpn/setuju/(:any)']='spbpnController/setujui_spbpn/$1';

$route['akun']='AkunController/index';
$route['akun/hapus/(:any)']='AkunController/hapus/$1';
$route['akun/edit/(:any)']='AkunController/edit/$1';
$route['akun/update/(:any)']='AkunController/update/$1';


$route['default_controller'] = 'DashboardController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
