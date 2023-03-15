<?php

namespace Medians\Doctors\Infrastructure;

use Medians\Doctors\Domain\Doctor;
use Medians\Doctors\Domain\Category;
use Medians\Doctors\Domain\Content;


class DoctorRepository 
{


	function __construct()
	{
		$this->app = new \config\APP;
	}


	public static function getModel()
	{
		return new Doctor();
	}


	public function find($id)
	{
		return Doctor::with('content','custom_fields')->find($id);
	}

	public function get($limit = 100)
	{

		return Doctor::with('content','user')->limit($limit)->orderBy('id', 'ASC')->get();

	}





	/**
	* Save item to database
	*/
	public function store($data) 
	{

		$Model = new Doctor();
		
		foreach ($data as $key => $value) 
		{
			if (in_array($key, $this->getModel()->getFields()))
			{
				$dataArray[$key] = $value;
			}
		}		

		// Return the FBUserInfo object with the new data
    	$Object = Doctor::create($dataArray);
    	$Object->update($dataArray);

    	return $Object;
    }
    	
    /**
     * Update Lead
     */
    public function update($data)
    {

		$Object = Doctor::find($data['id']);
		
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
			
			return Doctor::find($id)->delete();

		} catch (\Exception $e) {

			throw new \Exception("Error Processing Request " . $e->getMessage(), 1);
			
		}
	}





	/**
	* Save related items to database
	*/
	public function storeContent($data, $id) 
	{
		Content::where('item_type', Doctor::class)->where('model_id', $id)->delete();
		if ($data)
		{
			foreach ($data as $key => $value)
			{
				$fields = $value;
				$fields['item_type'] = Doctor::class;	
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
