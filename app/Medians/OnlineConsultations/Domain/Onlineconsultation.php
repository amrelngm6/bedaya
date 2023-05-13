<?php

namespace Medians\OnlineConsultations\Domain;

use Shared\dbaser\CustomController;
use \Medians\Doctors\Domain\Doctor;


class OnlineConsultation extends CustomController
{

	/*
	/ @var String
	*/
	protected $table = 'online_consultation';

    protected $fillable = [
        'price',
        'doctor_id',
        'status',
        'created_by',
    ];


	public function getFields()
	{
		return $this->fillable;
	}

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }


}
