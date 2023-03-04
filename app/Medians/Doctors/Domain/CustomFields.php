<?php

namespace Medians\Doctors\Domain;

use Medians\CustomFields\Domain\CustomFieldSelected as Model;
use Medians\CustomFields\Domain\CustomField;

class CustomFields extends Model
{
	
	public $appends = ['code'];


	public function getCodeAttribute() 
	{
		return isset($this->field->code) ? $this->field->code : '';
	}

	public function field()
	{
		return $this->hasOne(CustomField::class, 'id', 'field_id');
	}
}
