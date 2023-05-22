<?php

namespace Medians\Bookings\Domain;

use Shared\dbaser\CustomController;

use Medians\CustomFields\Domain\CustomField;


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



	public $appends = ['field', 'title'];


	public function getFieldAttribute() 
	{
		return !empty($this->custom_fields) ? array_column($this->custom_fields->toArray(), 'value', 'code') : [];
	}

	public function getTitleAttribute() 
	{
		return  isset($this->consultation->doctor_name) 
		? $this->consultation->doctor_name 
		: (isset($this->offer->title) ? $this->offer->title : '');
		  
	}

	public function getFields()
	{
		return $this->fillable;
	}

	public function custom_fields()
	{
		return $this->morphMany(CustomField::class, 'item');
	}

	public function consultation()
	{
		return $this->hasOne(\Medians\OnlineConsultations\Domain\OnlineConsultation::class, 'id', 'itemid');
	}

	public function offer()
	{
		return $this->hasOne(\Medians\Offers\Domain\Offer::class, 'id', 'itemid');
	}


}
