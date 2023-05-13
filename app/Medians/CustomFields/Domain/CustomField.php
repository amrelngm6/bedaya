<?php

namespace Medians\CustomFields\Domain;

use Shared\dbaser\CustomController;

class CustomField extends CustomController
{

	protected $table = 'custom_fields';

	public $fillable = ['title', 'code','item_type', 'item_id', 'value', 'field_id'];

	public $timestamps = false;

}
