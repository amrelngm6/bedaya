<?php

namespace Medians\Specializations\Infrastructure;

use Medians\Specializations\Domain\Specialization;
use Medians\Blog\Infrastructure\BlogRepository;
use Medians\Content\Domain\Content;


class SpecializationRepository 
{

	protected $app ;

	function __construct()
	{
		$this->app = new \config\APP;
	}


	public static function getModel()
	{
		return new Specialization();
	}


	public function find($id)
	{
		return Specialization::with('content')->find($id);
	}
 
	public function get($limit = 100)
	{
		return Specialization::with('content','user','parent', 'content as summary')
		->withCount('childs')
		->limit($limit)
		->orderBy('summary.title', 'DESC')
		->get();
	}

	public function filterSearchTitle($title)
	{
		$title = str_replace([ 'أ','', 'ا',"ى","ة",'ه'], ' ', $title);
		return str_replace(' ', '%', trim($title));
	}
	public function search($request, $limit = 20)
	{	
		$title = $request->get('search') ? $this->filterSearchTitle($request->get('search')) : '';
		$return = Specialization::whereHas('content', function($q) use ($title){
			$q->where('title', 'LIKE', '%'.$title.'%');
		})
		->where('status', '!=', '0')
		->with('content','user')->limit($limit)->orderBy('updated_at', 'DESC')
		->get();

		return $return;
	}


	public function similar($item, $limit = 3)
	{
		if (empty($item->content->title))
			return null;
		
		$title = str_replace(' ', '%', $item->content->title);
		return Specialization::whereHas('content', function($q) use ($title){
			$q->where('title', 'LIKE', '%'.$title.'%')->orWhere('content', 'LIKE', '%'.$title.'%');
		})
		->where('id', '!=', $item->id)
		->with('content','user')->limit($limit)->orderBy('updated_at', 'DESC')->get();
	}

	public function get_root($limit = 100)
	{
		$lang = __('lang');
		return Specialization::where('parent_id', '0')
		->with(['childs'=>function($q)  use ($lang) {
			$q->with(['content'=>function($q) use ($lang)
			{
				$q->where('lang', $lang);
			}]);
		}])
		->with('content','user')
		->where('id','!=','1')
		->limit($limit)->orderBy('updated_at', 'DESC')->get();
	}





	/**
	* Save item to database
	*/
	public function store($data) 
	{

		$Model = new Specialization();
		
		foreach ($data as $key => $value) 
		{
			if (in_array($key, $this->getModel()->getFields()))
			{
				$dataArray[$key] = $value;
			}
		}		

		// Return the FBUserInfo object with the new data
    	$Object = Specialization::create($dataArray);
    	$Object->update($dataArray);

    	$this->storeContent($data['content'], $data['id']);

    	return $Object;
    }
    	
    /**
     * Update Lead
     */
    public function update($data)
    {

		$Object = Specialization::find($data['id']);
		
		// Return the FBUserInfo object with the new data
    	$Object->update( (array) $data);

    	// Store languages content
    	!empty($data['content']) ? $this->storeContent($data['content'], $data['id']) : '';

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
			
			return Specialization::find($id)->delete();

		} catch (\Exception $e) {

			throw new \Exception("Error Processing Request " . $e->getMessage(), 1);
			
		}
	}





	/**
	* Save related items to database
	*/
	public function storeContent($data, $id) 
	{
		Content::where('item_type', Specialization::class)->where('item_id', $id)->delete();
		if ($data)
		{
			foreach ($data as $key => $value)
			{
				$fields = $value;
				$fields['item_type'] = Specialization::class;	
				$fields['item_id'] = $id;	
				$fields['lang'] = $key;	
				$fields['prefix'] = isset($value['prefix']) ? $value['prefix'] : Content::generatePrefix($value['title']);	
				$fields['created_by'] = $this->app->auth()->id;

				$Model = Content::create($fields);
				$Model->update($fields);
			}
	
			return $Model;		
		}
	}


	
	/**
	 * Filter short codes for Hooks
	 */
	public function filterShortCode ($item)
	{
		$blogRepo = new BlogRepository;
		return $blogRepo->filterShortCode($item);
	}
	
 

 
}
