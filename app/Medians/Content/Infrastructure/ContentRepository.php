<?php

namespace Medians\Content\Infrastructure;

use Medians\Content\Domain\Content;


class ContentRepository 
{


	function __construct()
	{
		$this->app = new \config\APP;
	}


	public static function getModel()
	{
		return new Content();
	}

	public function find($prefix)
	{
		return Content::where('prefix', $prefix)->first();
	}

	public function get($model, $limit = 100)
	{
		switch ($model) 
		{
				
			default:
				return Content::where('model', $model)->limit($limit)->get();
				break;
		}
	}

	public function categories($model)
	{
		return Category::where('branch_id', $this->app->branch->id)->where('model', $model)->get();
	}





}