<?php

namespace Medians\Bookings\Domain;

use Shared\dbaser\CustomController;


class Booking extends CustomController
{

	/*
	/ @var String
	*/
	protected $table = 'booking';

	public $fillable = [
		'class', 
		'itemid', 
		'branch_id', 
		'status	', 
	];


	public $appends = ['photo'];


	public function getFields()
	{
		return $this->fillable;
	}


}
