<?php

namespace Medians\Content\Domain;

use Shared\dbaser\CustomController;

class Content extends CustomController
{

	/**
	* Table name
	* @var String
	*/
	protected $table = 'cms_content';


	/**
	* Table fillable fields
	* @var Array
	*/
	public $fillable = [
		'item_id', 
		'item_type', 
		'prefix', 
		'lang', 
		'title', 
		'content', 
		'short', 
		'seo_title', 
		'seo_desc', 
		'seo_keywords', 
		'inserted_by'
	];


	/**
	 * Has timestamp or not 
	 * (craated_at & updated_at)
	 */ 
	public $timestamps = null;

}