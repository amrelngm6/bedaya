<?php

namespace Medians\Domain\Categories;

use Shared\dbaser\CustomController;


class Category extends CustomController
{

	/**
	* @var String
	*/
	protected $table = 'categories';

	/**
	* @var Array
	*/
	public $fillable = [
		'name', 
		'notes', 
		'parent_id', 
		'model', 
		'status', 
		'picture', 
		'inserted_by'
	];



	/**
	 * Disable create & update times fields
	 */ 
	public $timestamps = true;


	public function getFields()
	{
		return $this->fillable;
	}

	public static function byModel($Model)
	{
		return Category::where('model', $Model)->where('status', 'on')->get();
	}



}
