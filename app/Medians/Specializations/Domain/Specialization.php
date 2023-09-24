<?php

namespace Medians\Specializations\Domain;

use Shared\dbaser\CustomModel;


class Specialization extends CustomModel
{

	/*
	/ @var String
	*/
	protected $table = 'specialization';

	public $fillable = [
		'title', 
		'prefix', 
		'picture', 
		'category_id', 
		'parent_id', 
		'sorting', 
		'sorting_ar', 
		'status', 
		'inserted_by'
	];


	public $appends = ['photo', 'parent_name'];


	public function getParentNameAttribute() : ?String
	{
		return isset($this->parent->title) ? $this->parent->title : '';
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


	public function childs()
	{
		return $this->hasMany(Specialization::class, 'parent_id', 'id')->orderBy('sorting','ASC');
	}


	public function parent()
	{
		return $this->hasOne(Specialization::class, 'id', 'parent_id');
	}



}
