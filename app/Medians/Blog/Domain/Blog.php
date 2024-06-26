<?php

namespace Medians\Blog\Domain;

use Shared\dbaser\CustomModel;
use Medians\Views\Domain\View;


class Blog extends CustomModel
{

	/*
	/ @var String
	*/
	protected $table = 'blog';

	public $fillable = [
		'category_id', 
		'picture', 
		'status', 
		'created_by'
	];


	public $appends = ['title','photo','field','category_name','date', 'update_date'];



	public function getTitleAttribute() 
	{
		return !empty($this->content->title) ? $this->content->title : '';
	}

	public function getCategoryNameAttribute() 
	{
		return !empty($this->category->name) ? $this->category->name : '';
	}

	public function getFieldAttribute() 
	{
		return !empty($this->custom_fields) ? array_column($this->custom_fields->toArray(), 'value', 'code') : [];
	}

	public function getPhotoAttribute() : ?String
	{
		return $this->thumbnail();
	}

	public function getDateAttribute() : ?String
	{
		return date('Y-m-d', strtotime($this->created_at));
	}
	
	public function getUpdateDateAttribute() 
	{
		return isset($this->content->updated_at) ? date('M, d Y', strtotime($this->content->updated_at)) : '';
	}


	public function photo() : String
	{
		return !empty($this->picture) ? $this->picture : '/uploads/images/default_profile.jpg';
	}

	public function getFields()
	{
		return $this->fillable;
	}

	public function category()
	{
		return $this->hasOne(Category::getClass(), 'id', 'category_id')->with('content');
	}

	public function custom_fields()
	{
		return $this->morphMany(CustomFields::class, 'item');
	}

	public function content()
	{
		return $this->morphOne(Content::class, 'item')->where('lang', __('lang'));
	}

	public function views()
	{
		return $this->morphMany(View::class, 'item');
	}


	public function thumbnail() 
	{
		
    	$return = str_replace('/images/', '/thumbnails/', str_replace(['.png','.jpg','.jpeg'],'.webp', $this->picture));
    	return is_file($return) ? $return : $this->picture;
	}



}
