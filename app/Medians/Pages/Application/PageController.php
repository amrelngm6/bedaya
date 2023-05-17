<?php

namespace Medians\Pages\Application;

use Medians\Specializations\Infrastructure\SpecializationRepository;
use Medians\Pages\Infrastructure\PageRepository;
use Medians\Categories\Infrastructure\CategoryRepository;
use Medians\Blog\Infrastructure\BlogRepository;
use Medians\Doctors\Infrastructure\DoctorRepository;
use Medians\StoryDates\Infrastructure\StoryDateRepository;
use Medians\Stories\Infrastructure\StoryRepository;


class PageController
{

	/**
	* @var Object
	*/
	protected $repo;

	

	function __construct()
	{

		$this->app = new \config\APP;

		$this->repo = new PageRepository();
		$this->specsRepo = new SpecializationRepository();
		$this->categoryRepo = new CategoryRepository();
		$this->blogRepo = new BlogRepository();
		$this->doctorRepo = new DoctorRepository();
		$this->storyDateRepo = new StoryDateRepository();
		$this->storyRepo = new StoryRepository();
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
			
		    return render('views/admin/page/list.html.twig', [
		        'title' => __('page'),
		        'page' => $this->repo->get(),
		    ]);
		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	}





	public function store() 
	{

		$params = $this->app->request()->get('params');

        try {	

        	$params['created_by'] = $this->app->auth()->id;
        	$params['branch_id'] = $this->app->branch->id;
        	
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
		$params = $this->app->request()->get('params');

        try {

        	$params['status'] = !empty($params['status']) ? $params['status'] : 0;

            if ($this->repo->update($params))
            {
                return array('success'=>1, 'result'=>__('Updated'), 'reload'=>1);
            }
        

        } catch (\Exception $e) {
        	throw new \Exception("Error Processing Request", 1);
        	
        }

	}


	public function delete() 
	{

		$params = $this->app->request()->get('params');

        try {

        	$check = $this->repo->find($params['id']);
            if ($check->devices)


            if ($this->repo->delete($params['id']))
            {
                return json_encode(array('success'=>1, 'result'=>__('Deleted'), 'reload'=>1));
            }
            

        } catch (Exception $e) {
        	throw new \Exception("Error Processing Request", 1);
        	
        }

	}

	public function validate($params) 
	{

		if (empty($params['name']))
		{
        	throw new \Exception(json_encode(array('result'=>__('NAME_EMPTY'), 'error'=>1)), 1);
		}

	}


	/**
	 * Front page 
	 * @var Int
	 */
	public function page($contentObject)
	{

		try {
			
			$item = $this->repo->find($contentObject->item_id, $contentObject->prefix);
			
			return render('views/front/page.html.twig', [
				'specializations' => $this->specsRepo->get_root(),
				'story_dates' => $this->storyDateRepo->get(),
				'stories' => $this->storyRepo->get(3),
				'doctors' => $this->doctorRepo->get(3),
				'blog' => $this->blogRepo->get(3),
		        'item' => $item,
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
		}
	} 


	/**
	 * Front Search page 
	 * @var Int
	 */
	public function search()
	{
		try {
			$request = $this->app->request();

			return render('views/front/search_results.html.twig', [
		        'search_articles' => (!$request->get('for') || $request->get('for') == 'blog') ? $this->blogRepo->search($request, 10) : [],
		        'search_doctors' => (!$request->get('for') || $request->get('for') == 'doctor') ? $this->doctorRepo->search($request, 10) : [],
		        'search_specs' => (!$request->get('for') || $request->get('for') == 'specialization') ? $this->specsRepo->search($request, 10) : [],
		        'search_text' => $request->get('search'),
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
		}
	} 

	/**
	 * Front page 
	 * @var Int
	 */
	public function list()
	{
		$request =  $this->app->request();

		try {
				
			return render('views/front/page.html.twig', [
		        'first_item' => $this->repo->getFeatured(1),
		        'search_items' => $request->get('search') ?  $this->repo->search($request, 10) : [],
		        'search_text' => $request->get('search'),
		        'items' => $this->repo->get(4),
		        'cat_her' => $this->repo->getByCategory(6, 4),
		        'cat_him' => $this->repo->getByCategory(7, 4),
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 

}