<?php

namespace Medians\Specializations\Domain;

use Shared\dbaser\CustomController;


class Specialization extends CustomController
{

	/*
	/ @var String
	*/
	protected $table = 'specialization';

	public $fillable = [
		'title', 
		'prefix', 
		'category_id', 
		'parent_id', 
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


	public function childs()
	{
		return $this->hasMany(Specialization::class, 'parent_id', 'id');
	}



}
