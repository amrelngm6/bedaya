<?php

namespace Medians\Technologies\Domain;

use Shared\dbaser\CustomModel;
use \Medians\Specializations\Domain\Specialization;
use \Medians\CustomFields\Domain\CustomField;


class Technology extends CustomModel
{

	/*
	/ @var String
	*/
	protected $table = 'technologies';

    protected $fillable = [
        'title',
        'status',
        'sort',
        'created_by',
    ];



    public $appends = ['field'];


    public function getFieldAttribute() 
    {
        return !empty($this->custom_fields) ? array_column($this->custom_fields->toArray(), 'value', 'code') : [];
    }

    public function custom_fields()
    {
        return $this->morphMany(CustomField::class, 'item');
    }



    public function getFields()
    {
        return $this->fillable;
    }


}
