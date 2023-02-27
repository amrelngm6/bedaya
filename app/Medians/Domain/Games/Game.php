<?php

namespace Medians\Domain\Games;

use Shared\dbaser\CustomController;
use Medians\Domain\Categories\Category;
use Medians\Domain\Devices\Device;


class Game extends CustomController
{

	/*
	/ @var String
	*/
	protected $table = 'games';

	public $fillable = [
		'name',
		'picture',
		'branch_id',
		'category',
		'description',
		'created_by',
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

	public function cat()
	{
		return $this->hasOne(Category::class, 'id', 'category');
	}

	public function devices()
	{
		return $this->hasMany(Device::class, 'type', 'category');
	}


}
