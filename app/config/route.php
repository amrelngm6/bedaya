<?php 

use \NoahBuscher\Macaw\Macaw;

use Medians\APIController;
use Medians\DashboardController;
$app = new \config\APP;


/**
* Return Dashboard 
*/

Macaw::get('/', \Medians\HomeController::class.'@index'); 
Macaw::get('/stories', \Medians\Stories\Application\StoryController::class.'@index'); 
Macaw::get('/doctors', \Medians\Doctors\Application\DoctorController::class.'@list'); 
Macaw::get('/booking', \Medians\Pages\Application\PageController::class.'@booking'); 
Macaw::post('/submit/(:all)', \Medians\FrontendController::class.'@form_submit'); 
Macaw::get('/blog', \Medians\Blog\Application\BlogController::class.'@list'); 
Macaw::get('/offers/(:all)', \Medians\Offers\Application\OfferController::class.'@page'); 
Macaw::get('/search', \Medians\Pages\Application\PageController::class.'@search'); 


Macaw::get('/invoices/print/(:all)', \Medians\Orders\Application\OrderController::class.'@print');
Macaw::get('/invoices/qr_code/(:all)', \Medians\Orders\Application\OrderController::class.'@qr_code');
Macaw::get('/switch-lang/(:all)', function ()  {
    $_SESSION['site_lang'] = in_array($all, ['arabic', 'english']) ? $all : 'english';
    echo (new \config\APP)->redirect('/');
    return true;
});

/**
* Return Dashboard 
*/
if(empty($app->auth()->id))
{
    

/**
 * @return  Login page in case if not authorized 
*/

Macaw::get('/login', \Medians\Auth\Application\AuthService::class.'@loginPage');
Macaw::post('/login', \Medians\Auth\Application\AuthService::class.'@userLogin');
Macaw::post('/', \Medians\Auth\Application\AuthService::class.'@userLogin');

} else {


Macaw::get('/json/dashboard', \Medians\DashboardController::class.'@json'); 
Macaw::get('/dashboard', \Medians\DashboardController::class.'@index'); 


Macaw::post('/api/create', \Medians\APIController::class.'@create');
Macaw::post('/api/update', \Medians\APIController::class.'@update');
Macaw::post('/api/delete', \Medians\APIController::class.'@delete');
Macaw::post('/api/updateStatus', \Medians\APIController::class.'@updateStatus');
Macaw::post('/api/checkout', \Medians\Orders\Application\OrderController::class.'@checkout');
Macaw::post('/api/bug_report', \Medians\APIController::class.'@bug_report');
Macaw::post('/api/search', \Medians\APIController::class.'@search');
Macaw::post('/api/(:all)', \Medians\APIController::class.'@handle');
Macaw::post('/api', \Medians\APIController::class.'@handle');

Macaw::get('/api/calendar', \Medians\Devices\Application\DeviceController::class.'@calendar');
Macaw::get('/api/calendar_events', \Medians\Devices\Application\DeviceController::class.'@events');
Macaw::get('/api/(:all)', \Medians\APIController::class.'@handle');

Macaw::get('/logout', function () 
{
    (new \Medians\Auth\Application\AuthService)->unsetSession();
    echo (new \config\APP)->redirect('./');
});




Macaw::post('/media-library-api/delete', \Medians\Media\Application\MediaController::class.'@delete');
Macaw::post('/media-library-api/(:all)', \Medians\Media\Application\MediaController::class.'@upload');
Macaw::get('/media-library-api/media', \Medians\Media\Application\MediaController::class.'@media');



/**
* @return Blog
*/
Macaw::get('/admin/blog/create', Medians\Blog\Application\BlogController::class.'@create');
Macaw::get('/admin/blog/edit/(:all)', Medians\Blog\Application\BlogController::class.'@edit');
Macaw::get('/admin/blog/index', Medians\Blog\Application\BlogController::class.'@index');
Macaw::get('/admin/blog', Medians\Blog\Application\BlogController::class.'@index');
Macaw::get('/admin/blog/', Medians\Blog\Application\BlogController::class.'@index');
Macaw::get('/admin/blog/categories', function ()  {
    return (new apps\Categories\CategoryController())->index('Medians\Blog\Domain\Blog');
});



/**
* @return Branches
*/
Macaw::get('/branches/create', \Medians\Branches\Application\BranchController::class.'@create');
Macaw::get('/branches/edit/(:num)', \Medians\Branches\Application\BranchController::class.'@edit');
Macaw::get('/branches/show/(:num)', \Medians\Branches\Application\BranchController::class.'@show');
Macaw::get('/branches/index', \Medians\Branches\Application\BranchController::class.'@index');

Macaw::get('/settings', \Medians\Settings\Application\SettingsController::class.'@index');



/**
* @return Users
*/
Macaw::get('/users/create', \Medians\Users\Application\UserController::class.'@create');
Macaw::get('/users/edit/(:num)', \Medians\Users\Application\UserController::class.'@edit');
Macaw::get('/users/show/(:num)', \Medians\Users\Application\UserController::class.'@show');
Macaw::get('/users/index', \Medians\Users\Application\UserController::class.'@index');
Macaw::get('/users/', \Medians\Users\Application\UserController::class.'@index');
Macaw::get('/users', \Medians\Users\Application\UserController::class.'@index');

/**
* @return customers
*/
Macaw::get('/customers/create', \Medians\Customers\Application\CustomerController::class.'@create');
Macaw::get('/customers/edit/(:num)', \Medians\Customers\Application\CustomerController::class.'@edit');
Macaw::get('/customers/show/(:num)', \Medians\Customers\Application\CustomerController::class.'@show');
Macaw::get('/customers/index', \Medians\Customers\Application\CustomerController::class.'@index');
Macaw::get('/customers/', \Medians\Customers\Application\CustomerController::class.'@index');
Macaw::get('/customers', \Medians\Customers\Application\CustomerController::class.'@index');

/**
* @return customers
*/
Macaw::get('/reports/(:all)', \Medians\Reports\Application\ReportController::class.'@index');



}

Macaw::get('/(:all)', \Medians\HomeController::class.'@pages');
Macaw::get('/(:all)/(:all)', \Medians\HomeController::class.'@page');


/*
// Return list of device 
*/

return $app->run();


    