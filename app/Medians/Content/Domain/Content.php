<?php

namespace Medians\Content\Domain;

use Shared\dbaser\CustomModel;

class Content extends CustomModel
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

	public $appends = ['html_content'];

	/**
	 * Has timestamp or not 
	 * (craated_at & updated_at)
	 */ 
	public $timestamps = null;


	public static function generatePrefix($text)
	{
		$text = str_replace(array(' ', '/', '\\', '"', "'", '&', '@', '#', '$', '(', ')', '=', '+'), '_', $text);
		$check = Content::where('prefix', $text)->first();

		return isset($check->id) ? $text.date('Ymd') . rand(9,99) : $text;

	}

	public function getHtmlContentAttribute()
	{
		// return $this->content;
	}

}