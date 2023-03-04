<?php

namespace Medians\Blog\Application;

use Medians\Blog\Infrastructure\BlogRepository;
use Medians\Infrastructure\Categories\CategoryRepository;


class BlogController
{

	/**
	* @var Object
	*/
	protected $repo;

	

	function __construct()
	{

		$this->app = new \config\APP;

		$this->repo = new BlogRepository();
		$this->categoryRepo = new CategoryRepository();
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
			
		    return render('views/admin/blog/list.html.twig', [
		        'title' => __('blog'),
		        'blog' => $this->repo->get(),
		    ]);
		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	}




	/**
	 * Create new item
	 * 
	 */ 
	public function create() 
	{

		return render('views/admin/blog/create.html.twig', [
	        'title' => __('add_new'),
	        'langs_list' => ['ar','en'],
	        'categories' => $this->categoryRepo->get('Medians\Blog\Domain\Blog'),
	    ]);

	}



	public function edit($id ) 
	{
		try {
				
				// print_r($this->repo->find($id));
			return render('views/admin/blog/blog.html.twig', [
		        'title' => __('edit_blog'),
		        'langs_list' => ['ar','en'],
		        'item' => $this->repo->find($id),
		        'categories' => $this->categoryRepo->get('Medians\Blog\Domain\Blog'),
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
	public function page($id)
	{

		try {
				
			return render('views/front/article.html.twig', [
		        'item' => $this->repo->find($id),
		        'similar_items' => $this->repo->similar($id),
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

		try {
				
			return render('views/front/blog.html.twig', [
		        'first_item' => $this->repo->get(1),
		        'items' => $this->repo->get(4),
		        'cat_her' => $this->repo->get(),
		        'cat_him' => $this->repo->get(),
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 

}
