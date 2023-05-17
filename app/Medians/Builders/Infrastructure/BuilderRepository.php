<?php

namespace Medians\Builders\Infrastructure;

use Medians\Builders\Domain\Builder;

class BuilderRepository 
{
	

	public function find($id)
	{
		return Builder::find($id); 
	}	

	public function get()
	{
		$save = [];

		foreach (Builder::groupBy('category')->with(['childs'=>function($e){
			// $e->whereIn('category', ['content', 'columns'])->whereIn('id', [92])->select('id', 'content', 'category');
		}])->get() as $key => $value) 
		{
			if (count($value->childs))
			{
				$save[$value->category] = $value->childs;
			}
		}
		return  $save ? $save : 0;
	}	

	public function store($object)
	{
		$save = Builder::firstOrCreate((array) $object);
		return  $save ? $save : 0;
	}	
}
