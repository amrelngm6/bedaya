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
		foreach ($this->get(100) as $key => $value) 
		{
			// (new \Medians\Media\Infrastructure\MediaRepository)->resize($value->picture, 72, 80);
		}
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


	public function search($request, $limit = 20)
	{
		$title = $request->get('search');
		$arr =  json_decode(json_encode(['id'=>0, 'content'=>['title'=>$title]]));

		return $this->similar( $arr, $limit);
	}

	public function random($limit = 100)
	{
		return Doctor::with('content','user')->where('status', 'on')->limit($limit)->inRandomOrder()->get();
	}

	public function similar($item, $limit = 3)
	{
		
		$title = $item->content->title ? str_replace(' ', '%', $item->content->title) : '';
		$return = Doctor::whereHas('content', function($q) use ($title){
			$q->where('title', 'LIKE', '%'.$title.'%')->orWhere('content', 'LIKE', '%'.$title.'%');
		})
		->where('id', '!=', $item->id)
		->with('content','user')->limit($limit)->orderBy('updated_at', 'DESC')->get();


		return count($return->toArray()) ? $return : $this->random($limit);

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
