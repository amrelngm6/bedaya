<?php

namespace Medians\Stories\Application;
use Shared\dbaser\CustomController;

use Medians\Stories\Infrastructure\StoryRepository;
use Medians\Specializations\Infrastructure\SpecializationRepository;


class StoryController extends CustomController 
{

	/**
	* @var Object
	*/
	protected $repo;

	

	function __construct()
	{

		$this->app = new \config\APP;

		$this->repo = new StoryRepository();
		$this->specsRepo = new SpecializationRepository();
	}



	/**
	 * Admin index items
	 * 
	 * @param Silex\Application $app
	 * @param \Twig\Environment $twig
	 * 
	 */ 
	public function index( ) 
	{
		
		try {
			
		    return render('success_stories', [
		    	'load_vue' => true,
		        'title' => __('success_stories'),
		        'items' => $this->repo->get(),
		    ]);
		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	}





	public function store() 
	{

		$this->app = new \config\APP;

		$params = $this->app->request()->get('params');

        try {	

        	$this->validate($params);

            $returnData = (!empty($this->repo->store($params))) 
            ? array('success'=>1, 'result'=>__('Added'), 'reload'=>1)
            : array('success'=>0, 'result'=>'Error', 'error'=>1);

        } catch (Exception $e) {
        	throw new Exception(json_encode(array('result'=>$e->getMessage(), 'error'=>1)), 1);
        }

		return $returnData;
	}



	public function update()
	{

		$this->app = new \config\APP;

		$params = $this->app->request()->get('params');

        try {

        	$params['status'] = !empty($params['status']) ? $params['status'] : 0;
            if ($this->repo->update($params))
            {
                return array('success'=>1, 'result'=>__('Updated'), 'reload'=>1);
            }
        

        } catch (\Exception $e) {
        	throw new \Exception("Error Processing Request". $e->getMessage(), 1);
        	
        }

	}


	public function delete() 
	{


		$this->app = new \config\APP;

		$params = $this->app->request()->get('params');
		
        try {

            if ($this->repo->delete($params['id']))
            {
                return array('success'=>1, 'result'=>__('Deleted'), 'reload'=>1);
            }
            

        } catch (Exception $e) {
        	throw new \Exception("Error Processing Request", 1);
        	
        }

	}


	public function validate($params) 
	{

		if (empty($params['field']['video_link']))
		{
        	throw new \Exception(json_encode(array('result'=>__('Video is required'), 'error'=>1)), 1);
		}

		if (empty($params['field']['short_name_ar']))
		{
        	throw new \Exception(json_encode(array('result'=>__('Arabic title is required'), 'error'=>1)), 1);
		}

	}


}
