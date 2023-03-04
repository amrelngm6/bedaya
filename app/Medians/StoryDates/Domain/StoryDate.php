<?php

namespace Medians\StoryDates\Domain;

use Shared\dbaser\CustomController;

class StoryDate extends CustomController
{

	/*
	/ @var String
	*/
	protected $table = 'story_dates';

	public $fillable = [
		'title', 
		'inserted_by'
	];


	public function getFields()
	{
		return $this->fillable;
	}



}
