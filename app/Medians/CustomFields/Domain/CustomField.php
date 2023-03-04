<?php

namespace Medians\CustomFields\Domain;

use Shared\dbaser\CustomController;

class CustomField extends CustomController
{

	protected $table = 'custom_fields';

	public $timestamps = false;

}
