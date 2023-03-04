<?php

namespace Medians\StoryDates\Infrastructure;

use Medians\StoryDates\Domain\StoryDate;
use Medians\Domain\Content\Content;


class StoryDateRepository 
{


	function __construct()
	{
		$this->app = new \config\APP;
	}


	public static function getModel()
	{
		return new StoryDate();
	}


	public function find($id)
	{
		return StoryDate::with('ar','en')->find($id);
	}

	public function get($limit = 100)
	{
		return StoryDate::with(['content'=>function($q) 
		{
			$q->where('lang', __('lang'));
		}])
		->with('user')->limit($limit)->orderBy('id', 'ASC')->get();
	}





	/**
	* Save item to database
	*/
	public function store($data) 
	{

		$Model = new StoryDate();
		
		foreach ($data as $key => $value) 
		{
			if (in_array($key, $this->getModel()->getFields()))
			{
				$dataArray[$key] = $value;
			}
		}		

		// Return the FBUserInfo object with the new data
    	$Object = StoryDate::create($dataArray);
    	$Object->update($dataArray);

    	return $Object;
    }
    	
    /**
     * Update Lead
     */
    public function update($data)
    {

		$Object = StoryDate::find($data['id']);
		
		// Return the FBUserInfo object with the new data
    	$Object->update( (array) $data);

    	return $Object;

    }


	/**
	* Delete item to database
	*
	* @Returns Boolen
	*/
	public function delete($id) 
	{
		try {
			
			return StoryDate::find($id)->delete();

		} catch (\Exception $e) {

			throw new \Exception("Error Processing Request " . $e->getMessage(), 1);
			
		}
	}





	/**
	* Save related items to database
	*/
	public function storeContent($data, $id) 
	{
		Content::where('item_type', StoryDate::class)->where('model_id', $id)->delete();
		if ($data)
		{
			foreach ($data as $key => $value)
			{
				$fields = $value;
				$fields['item_type'] = StoryDate::class;	
				$fields['item_id'] = $id;	
				$fields['lang'] = $key;	
				$fields['created_by'] = $this->app->auth()->id;

				$Model = Content::create($fields);
				$Model->update($fields);
			}
	
			return $Model;		
		}
	}



 
}
