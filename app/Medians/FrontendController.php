<?php

namespace Medians;


class FrontendController
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
	 * 
	 */
	public function booking()
	{

		try {
			


			$response = array('success'=>1, 'result'=> __('BOOKING_THANKS'), 'title'=>__('Done')) ;

		} catch (Exception $e) {
			$response  = array('error'=>$e->getMessage()) ;
		}


		echo json_encode($response);
	} 

}
