<?php 

use \NoahBuscher\Macaw\Macaw;


$app = new \config\APP;

/**
* Return Dashboard 
*/

Macaw::get('/', \Medians\HomeController::class.'@index'); 
Macaw::get('/stories', \Medians\Stories\Application\StoryController::class.'@index'); 
Macaw::get('/doctors', \Medians\Doctors\Application\DoctorController::class.'@list'); 


if(empty($app->auth()->id))
{
    

/**
 * @return  Login page in case if not authorized 
*/

Macaw::get('/login', \Medians\Auth\Application\AuthService::class.'@loginPage');
Macaw::post('/login', \Medians\Auth\Application\AuthService::class.'@userLogin');
Macaw::get('/blog', \Medians\Blog\Application\BlogController::class.'@list'); 
Macaw::get('/(:all)', \Medians\HomeController::class.'@pages'); 

} else {


Macaw::get('/dashboard', \Medians\DashboardController::class.'@index'); 
Macaw::get('/blog', \Medians\Blog\Application\BlogController::class.'@list'); 
Macaw::get('/(:all)', \Medians\HomeController::class.'@pages'); 

Macaw::post('/api/create', \Medians\APIController::class.'@create');
Macaw::post('/api/update', \Medians\APIController::class.'@update');
Macaw::post('/api/delete', \Medians\APIController::class.'@delete');
Macaw::post('/api/updateStatus', \Medians\APIController::class.'@updateStatus');
Macaw::post('/api/(:all)', \Medians\APIController::class.'@handle');
Macaw::post('/api', \Medians\APIController::class.'@handle');

Macaw::get('/logout', function () 
{
    (new \Medians\Auth\Application\AuthService)->unsetSession();
    echo (new \config\APP)->redirect('./');
});




Macaw::post('/media-library-api/delete', apps\Media\MediaController::class.'@delete');
Macaw::post('/media-library-api/(:all)', apps\Media\MediaController::class.'@upload');
Macaw::get('/media-library-api/media', apps\Media\MediaController::class.'@media');



/**
* @return devices
*/
Macaw::get('/devices/create', apps\Devices\DeviceController::class.'@create');
Macaw::get('/devices/edit/(:num)', apps\Devices\DeviceController::class.'@edit');
Macaw::get('/devices/device/(:num)', apps\Devices\DeviceController::class.'@edit');
Macaw::get('/devices/manage', apps\Devices\DeviceController::class.'@manage');
Macaw::get('/devices/orders', apps\Devices\DeviceController::class.'@orders');
Macaw::get('/devices/calendar', apps\Devices\DeviceController::class.'@index');
Macaw::get('/devices/calendar2', apps\Devices\DeviceController::class.'@index2');
Macaw::get('/devices/index', apps\Devices\DeviceController::class.'@index');

Macaw::get('/devices/categories', function ()  {
    try 
    {
        return (new apps\Categories\CategoryController)->index('Medians\Domain\Devices\Device');

    } catch (Exception $e) {
        return $e->getMessage();
    }
});
Macaw::get('/categories/edit/(:num)', apps\Categories\CategoryController::class.'@edit');



Macaw::get('/games/edit/(:num)', apps\Games\GameController::class.'@edit');
Macaw::get('/games/index', apps\Games\GameController::class.'@index');
Macaw::get('/games', apps\Games\GameController::class.'@index');


/**
* @return Blog
*/
Macaw::get('/admin/blog/create', Medians\Blog\Application\BlogController::class.'@create');
Macaw::get('/admin/blog/edit/(:all)', Medians\Blog\Application\BlogController::class.'@edit');
Macaw::get('/admin/blog/index', Medians\Blog\Application\BlogController::class.'@index');
Macaw::get('/admin/blog', Medians\Blog\Application\BlogController::class.'@index');
Macaw::get('/admin/blog/categories', function ()  {
    return (new apps\Categories\CategoryController())->index('Medians\Blog\Domain\Blog');
});


/**
* @return Products
*/
Macaw::get('/products/create', apps\Products\ProductController::class.'@create');
Macaw::get('/products/edit/(:all)', apps\Products\ProductController::class.'@edit');
Macaw::get('/products/stock_alert', apps\Products\ProductController::class.'@stock_alert');
Macaw::get('/products/stock_out', apps\Products\ProductController::class.'@stock_out');
Macaw::get('/products/orders', apps\Products\ProductController::class.'@orders');
Macaw::get('/products/index', apps\Products\ProductController::class.'@index');
Macaw::get('/products/categories', function ()  {
    return (new apps\Categories\CategoryController())->index('Medians\Domain\Products\Product');
});


/**
* @return Stock
*/
Macaw::get('/stock/create', apps\Products\StockController::class.'@create');
Macaw::get('/stock/edit/(:num)', apps\Products\StockController::class.'@edit');
Macaw::get('/stock/index', apps\Products\StockController::class.'@index');

/**
* @return Payments
*/
Macaw::get('/payments/create', apps\Payments\PaymentController::class.'@create');
Macaw::get('/payments/edit/(:num)', apps\Payments\PaymentController::class.'@edit');
Macaw::get('/payments/index', apps\Payments\PaymentController::class.'@index');
Macaw::get('/payments', apps\Payments\PaymentController::class.'@index');

/**
* @return Orders
*/
Macaw::get('/orders/create', apps\Orders\OrderController::class.'@create');
Macaw::get('/orders/edit/(:all)', apps\Orders\OrderController::class.'@edit');
Macaw::get('/orders/show/(:all)', apps\Orders\OrderController::class.'@show');
Macaw::get('/orders/index', apps\Orders\OrderController::class.'@index');


/**
* @return Branches
*/
Macaw::get('/branches/create', apps\Branches\BranchController::class.'@create');
Macaw::get('/branches/edit/(:num)', apps\Branches\BranchController::class.'@edit');
Macaw::get('/branches/show/(:num)', apps\Branches\BranchController::class.'@show');
Macaw::get('/branches/index', apps\Branches\BranchController::class.'@index');

Macaw::get('/settings', apps\Settings\SettingsController::class.'@index');



/**
* @return Branches
*/
Macaw::get('/users/create', apps\Users\UserController::class.'@create');
Macaw::get('/users/edit/(:num)', apps\Users\UserController::class.'@edit');
Macaw::get('/users/show/(:num)', apps\Users\UserController::class.'@show');
Macaw::get('/users/index', apps\Users\UserController::class.'@index');
Macaw::get('/users/', apps\Users\UserController::class.'@index');
Macaw::get('/users', apps\Users\UserController::class.'@index');


return $app->run();
}


/*
// Return list of device 
*/

return $app->run();


    