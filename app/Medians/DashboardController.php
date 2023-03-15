<?php

namespace Medians;

use Medians\Infrastructure as Repo;

class DashboardController
{

	/**
	* @var Object
	*/
	protected $repo;



	function __construct()
	{
		$this->app = new \config\APP;
	}

	/**
	 * Model object 
	 */
	public function index()
	{

		try {
			
	        return  render('views/admin/dashboard/index.html.twig', [
	            'title' => 'Dashboard',
	            // 'active_order_devices_count' => $active_order_devices_count,
	            // 'today_order_devices_count' => $today_order_devices_count,
	            // 'today_orders_count' => $today_orders_count,
	            // 'latest_paid_order_devices' => $latest_paid_order_devices,
	            // 'latest_unpaid_order_devices' => $latest_unpaid_order_devices,
	            // 'latest_order_products' => $latest_order_products,
	            // 'today_order_products_count' => $today_order_products_count,
	            // 'today_revenue' => round($today_revenue, 2),
		        'formAction' => '/login',
	            // 'formAction' => $this->app->CONF['url'],
	        ]);
	        
		} catch (Exception $e) {
			return $e->getMessage();
		}
	} 


}