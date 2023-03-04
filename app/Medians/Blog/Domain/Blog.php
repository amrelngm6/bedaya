<?php

namespace Medians\Blog\Domain;

use Shared\dbaser\CustomController;


class Blog extends CustomController
{

	/*
	/ @var String
	*/
	protected $table = 'blog';

	public $fillable = [
		'name', 
		'category_id', 
		'picture', 
		'insertedby', 
		'prefix', 
		'status', 
		'author_name', 
		'author_picture',
		'inserted_by'
	];


	public $appends = ['photo'];


	public function getPhotoAttribute() : ?String
	{
		return $this->photo();
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



}
