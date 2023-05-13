<?php

namespace Medians\Offers\Domain;

use Shared\dbaser\CustomController;
use \Medians\Doctors\Domain\Doctor;


class Offer extends CustomController
{

	/*
	/ @var String
	*/
	protected $table = 'offers';

    protected $fillable = [
        'title',
        'price',
        'speciality_id',
        'status',
        'created_by',
    ];


	public function getFields()
	{
		return $this->fillable;
	}

    public function speciality()
    {
        return $this->belongsTo(Doctor::class);
    }


}
