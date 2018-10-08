<?php
/**
 * Define your URI routes here.
 *
 * $route[Request Method][Uri] = array( Controller class, action method, other options, etc. )
 *
 * RESTful api support, *=any request method, GET PUT POST DELETE
 * POST 	Create
 * GET      Read
 * PUT      Update, Create
 * DELETE 	Delete
 *
 * Use lowercase for Request Method
 *
 * If you have your controller file name different from its class name, eg. home.php HomeController
 * $route['*']['/'] = array('home', 'index', 'className'=>'HomeController');
 * 
 * If you need to reverse generate URL based on route ID with DooUrlBuilder in template view, please defined the id along with the routes
 * $route['*']['/'] = array('HomeController', 'index', 'id'=>'home');
 *
 * If you need dynamic routes on root domain, such as http://facebook.com/username
 * Use the key 'root':  $route['*']['root']['/:username'] = array('UserController', 'showProfile');
 *
 * If you need to catch unlimited parameters at the end of the url, eg. http://localhost/paramA/paramB/param1/param2/param.../.../..
 * Use the key 'catchall': $route['*']['catchall']['/:first'] = array('TestController', 'showAllParams');
 * 
 * If you have placed your controllers in a sub folder, eg. /protected/admin/EditStuffController.php
 * $route['*']['/'] = array('admin/EditStuffController', 'action');
 * 
 * If you want a module to be publicly accessed (without using Doo::app()->getModule() ) , use [module name] ,   eg. /protected/module/forum/PostController.php
 * $route['*']['/'] = array('[forum]PostController', 'action');
 * 
 * If you create subfolders in a module,  eg. /protected/module/forum/post/ListController.php, the module here is forum, subfolder is post
 * $route['*']['/'] = array('[forum]post/PostController', 'action');
 *
 * Aliasing give you an option to access the action method/controller through a different URL. This is useful when you need a different url than the controller class name.
 * For instance, you have a ClientController::new() . By default, you can access via http://localhost/client/new
 * 
 * $route['autoroute_alias']['/customer'] = 'ClientController';
 * $route['autoroute_alias']['/company/client'] = 'ClientController';
 * 
 * With the definition above, it allows user to access the same controller::method with the following URLs:
 * http://localhost/company/client/new
 *
 * To define alias for a Controller inside a module, you may use an array:
 * $route['autoroute_alias']['/customer'] = array('controller'=>'ClientController', 'module'=>'example');
 * $route['autoroute_alias']['/company/client'] = array('controller'=>'ClientController', 'module'=>'example');
 *
 * Auto routes can be accessed via URL pattern: http://domain.com/controller/method
 * If you have a camel case method listAllUser(), it can be accessed via http://domain.com/controller/listAllUser or http://domain.com/controller/list-all-user
 * In any case you want to control auto route to be accessed ONLY via dashed URL (list-all-user)
 *
 * $route['autoroute_force_dash'] = true;	//setting this to false or not defining it will keep auto routes accessible with the 2 URLs.
 *
 */
 
//$route['*']['/'] = array('MainController', 'index');
$route['*']['/'] = array('AppsController', 'show_apps');
$route['*']['/error'] = array('ErrorController', 'index');


//---------- Delete if not needed ------------
$admin = array('admin'=>'1234');

//view the logs and profiles XML, filename = db.profile, log, trace.log, profile
$route['*']['/debug/:filename'] = array('MainController', 'debug', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');

//show all urls in app
$route['*']['/allurl'] = array('MainController', 'allurl', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');

//generate routes file. This replace the current routes.conf.php. Use with the sitemap tool.
$route['post']['/gen_sitemap'] = array('MainController', 'gen_sitemap', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');

//generate routes & controllers. Use with the sitemap tool.
$route['post']['/gen_sitemap_controller'] = array('MainController', 'gen_sitemap_controller', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');

//generate Controllers automatically
//$route['*']['/gen_site'] = array('MainController', 'gen_site', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');
$route['*']['/gen_site'] = array('MainController', 'gen_site');


//generate Models automatically
//$route['*']['/gen_model'] = array('MainController', 'gen_model', 'authName'=>'DooPHP Admin', 'auth'=>$admin, 'authFail'=>'Unauthorized!');
$route['*']['/gen_model'] = array('MainController', 'gen_model');

$route['*']['/info'] = array('AstController', 'info');

$route['*']['/cdr'] = array('CdrController', 'view_cdr');
$route['*']['/cdr/view/:uid/:seq'] = array('CdrController', 'view_cdr_item');

$route['*']['/pjsip/transport/add'] = array('PjSIPController', 'new_transport');
$route['*']['/pjsip/transport/show'] = array('PjSIPController', 'show_transport');

$route['*']['/endpoints/show'] = array('EndpointsController', 'show_endpoints');
$route['*']['/endpoint/view/:tech/:resource'] = array('EndpointsController', 'view_endpoint');

$route['*']['/channels'] = array('ChannelsController', 'show_channels');
$route['*']['/channels/view/:cid'] = array('ChannelsController', 'view_channel');

$route['*']['/bridges'] = array('BridgesController', 'show_bridges');
$route['*']['/bridges/view/:bid'] = array('BridgesController', 'view_bridge');

$route['*']['/dialplan'] = array('DialplanController', 'show_dialplan');
$route['*']['/dialplan/view/:context'] = array('DialplanController', 'show_context');

$route['*']['/apps'] = array('AppsController', 'show_apps');
$route['*']['/apps/view/:appid'] = array('AppsController', 'show_app');
$route['get']['/apps/add'] = array('AppsController', 'add_app_get');
$route['post']['/apps/add'] = array('AppsController', 'add_app_post');

$route['*']['/apps/start/:appid'] = array('AppsController', 'start_app');
$route['*']['/apps/stop/:appid'] = array('AppsController', 'stop_app');
$route['*']['/apps/restart/:appid'] = array('AppsController', 'restart_app');
$route['*']['/apps/del/:appid'] = array('AppsController', 'delete_app');
$route['*']['/apps/edit/:appid'] = array('AppsController', 'edit_app');
$route['*']['/apps/tail/:appid'] = array('AppsController', 'tail_app');

$route['*']['/scripts'] = array('ScriptsController', 'show_scripts');
$route['*']['/scripts/view/:scriptid'] = array('ScriptsController', 'show_script');
$route['get']['/scripts/add'] = array('ScriptsController', 'add_script_get');
$route['post']['/scripts/add'] = array('ScriptsController', 'add_script_post');

$route['*']['/scripts/start/:scriptid'] = array('ScriptsController', 'start_script');
$route['*']['/scripts/stop/:scriptid'] = array('ScriptsController', 'stop_script');
$route['*']['/scripts/restart/:scriptid'] = array('ScriptsController', 'restart_script');
$route['*']['/scripts/del/:scriptid'] = array('ScriptsController', 'delete_script');
$route['*']['/scripts/edit/:scriptid'] = array('ScriptsController', 'edit_script');

$route['*']['/tail'] = array('MainController', 'tail');



$route['*']['/example'] = array('ExampleController', 'example');




?>
