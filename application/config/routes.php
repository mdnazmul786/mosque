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
$route['about-us'] = 'Pages/fabout_us';
$route['projects-list'] = 'Pages/fprojects';

//admin-panel routing
$route['admin-panel'] = 'Pages/admin_panel';
$route['admin/prayer-setting'] = 'Pages/prayers_setting';
$route['admin/imams-profile'] = 'Pages/imams_profile';
$route['admin/headers'] = 'Pages/headers';
$route['admin/sliders'] = 'Pages/sliders';
$route['admin/footers'] = 'Pages/footers';
$route['admin/welcome-messages'] = 'Pages/welcome_messages';
$route['admin/testimonials'] = 'Pages/testimonial';
$route['admin/address'] = 'Pages/address';
$route['admin/about-us'] = 'Pages/about_us';
$route['admin/contact-us'] = 'Pages/contact_us';
$route['admin/comity'] = 'Pages/comity';
$route['admin/teams'] = 'Pages/team';
$route['admin/image-gallery'] = 'Pages/images_gallery';
$route['admin/audio-gallery'] = 'Pages/audios_gallery';
$route['admin/video-gallery'] = 'Pages/videos_gallery';
$route['admin/pdf-gallery'] = 'Pages/pdf_gallery';
$route['admin/events'] = 'Pages/events';
$route['admin/news'] = 'Pages/news';
$route['admin/blogs'] = 'Pages/blogs';
$route['admin/projects'] = 'Pages/projects';
$route['admin/shops'] = 'Pages/shops';
$route['admin/activities'] = 'Pages/activities';
$route['admin/service-lists'] = 'Pages/service_list';
$route['admin/donations'] = 'Pages/donations';
$route['admin/jobs'] = 'Pages/jobs';
$route['admin/users'] = 'Pages/users';
$route['admin/admins'] = 'Pages/admins';


$route['Prayers/insert-prayer'] = 'Prayers/insert_prayer';
$route['Prayers/delete-prayer-time'] = 'Prayers/delete_prayertime';
$route['Admin/admin-register'] = 'Admin/admin_register';
$route['Admin/admin-login'] = 'Admin/admin_login';
$route['Admin/admin-logout'] = 'Admin/admin_logout';
$route['Admin/current-admin'] = 'Admin/admin_approve';


$route['Community/create-aboutus'] = 'Community/create_about';

$route['Programs/create-events'] = 'Programs/create_events';

$route['Imams/create-imam'] = 'Imams/create_imam';



$route['default_controller'] = 'Pages';
$route['404_override'] = 'Errors';
$route['translate_uri_dashes'] = FALSE;
