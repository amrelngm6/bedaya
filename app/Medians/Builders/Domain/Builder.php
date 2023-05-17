<?php

namespace Medians\Builders\Domain;

use Shared\dbaser\CustomController;


class Builder extends CustomController
{

	/*
	/ @var String
	*/
	protected $table = 'builder_blocks';

	public $fillable = [
		'content', 
		'category', 
		'created_by'
	];

	public $appends = ['html'];


	public function getHtmlAttribute()
	{
		return $this->content;
	}

	public function childs()
	{
		return $this->hasMany(Builder::class, 'category', 'category');
	}

}
