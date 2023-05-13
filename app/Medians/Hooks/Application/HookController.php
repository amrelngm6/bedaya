<?php

namespace Medians\Hooks\Application;



class HookController
{

	/**
	* @var Object
	*/
	protected $repo;

	

	function __construct()
	{

		$this->app = new \config\APP;

	}



}