<?php

namespace Medians\Application\Settings;

use Medians\Infrastructure\Settings as Repo;


class SettingsController
{

	/**
	* @var Object
	*/
	protected $repo;

	public $app;



	function __construct()
	{
		$this->app = new \config\APP;

		$this->repo = new Repo\SettingsRepository();

	}

	/**
	 * Index settings page
	 * 
	 */
	public function index()
	{

		return render('views/admin/forms/settings_form.html.twig', [
	        'title' => __('Settings'),
	    ]);
	} 



	public function getItem($code = null) 
	{	
		return $this->repo->getByCode($code);
	}


	public function getAll() 
	{	
		$data = $this->repo->getAll();

		return $data ? array_column(json_decode($data), 'value', 'code') :  [];
	}



	/*
	// Return the Settings
	*/
	public function update() 
	{

		$params = $this->app->request()->get('params')['settings'];

		try {

            if (isset($this->updateSettings($params)->updated)) 
            	return array('success'=>1, 'result'=>__('Updated'));

        } catch (Exception $e) {
            return  array('error'=>$e->getMessage());
        }
	}



	/*
	// Return the Settings
	*/
	public function updateSettings($params) 
	{

		$this->repo->clear();
		
		foreach ($params as $code => $value)
		{

			$this->updated = isset($this->app->Settings[$code]) ? $this->deleteItem($code) : true;

			if (isset($this->updated))
			{
				$this->saveItem($code, $value);
			}
		}

		return $this;
	}




	public function saveItem($code, $value) 
	{

		$data = [
			'created_by' => $this->app->auth()->id,
			'branch_id' => $this->app->branch->id,
			'model' => '',
			'code' => $code,
			'value' => $value
		];

		return $this->repo->store($data);

	}


	public function deleteItem($code) 
	{

		return $this->repo->delete($code);
	}


}
