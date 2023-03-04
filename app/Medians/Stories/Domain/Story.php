<?php

namespace Medians\Stories\Domain;

use Shared\dbaser\CustomController;


class Story extends CustomController
{

	/*
	/ @var String
	*/
	protected $table = 'stories';

	public $fillable = [
		'title', 
		'category_id', 
		'picture', 
		'status', 
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
		return $this->hasOne(Category::class, 'id', 'category_id');
	}



}
