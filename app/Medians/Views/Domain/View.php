<?php

namespace Medians\Views\Domain;


use Shared\dbaser\CustomController;

class View extends CustomController
{


	/*
	/ @var String
	*/
	protected $table = 'views';


	protected $fillable = [
    	'item_type',
    	'item_id',
    	'session',
    	'times',
	];

}
