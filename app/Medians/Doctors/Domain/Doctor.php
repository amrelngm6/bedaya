<?php

namespace Medians\Doctors\Domain;

use Shared\dbaser\CustomController;


class Doctor extends CustomController
{

	/*
	/ @var String
	*/
	protected $table = 'doctors';

	public $fillable = [
		'title', 
		'speciality', 
		'picture', 
		'prefix', 
		'status', 
		'inserted_by'
	];


	public $appends = ['photo', 'field'];


	public function getFieldAttribute() 
	{
		return !empty($this->custom_fields) ? array_column($this->custom_fields->toArray(), 'value', 'code') : [];
	}

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
		return $this->hasOne(Category::class, 'id', 'speciality');
	}

	public function custom_fields()
	{
		return $this->morphMany(CustomFields::class, 'item')->with('field');
	}



}
