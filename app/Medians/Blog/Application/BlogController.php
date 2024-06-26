<?php

namespace Medians\Blog\Application;
use Shared\dbaser\CustomController;

use Medians\Specializations\Infrastructure\SpecializationRepository;
use Medians\Blog\Infrastructure\BlogRepository;
use Medians\Categories\Infrastructure\CategoryRepository;
use Medians\Offers\Infrastructure\OfferRepository;
use Medians\Stories\Infrastructure\StoryRepository;


class BlogController extends CustomController 
{

	/**
	* @var Object
	*/
	protected $repo;

	

	function __construct()
	{

		$this->app = new \config\APP;

		$this->repo = new BlogRepository();
		$this->specsRepo = new SpecializationRepository();
		$this->categoryRepo = new CategoryRepository();
		$this->offersRepo = new OfferRepository();
		$this->storiesRepo = new StoryRepository();


	}




	/**
	 * Columns list to view at DataTable 
	 *  
	 */ 
	public function columns( ) 
	{

		return [
            [
                'key'=> "id",
                'title'=> "#",
            ],
            [
                'key'=> "title",
                'title'=> __('title'),
                'sortable'=> true,
            ],
            [
                'key'=> "category_name",
                'title'=> __('category'),
                'sortable'=> false,
            ],
            [
                'key'=> "date",
                'title'=> __('Date'),
                'sortable'=> true,
            ]
        ];
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
			
		    return render('blog', [
		        'load_vue' => true,
		        'title' => __('blog'),
		        'columns' => $this->columns(),
		        'items' => $this->repo->get(),
		        'categories' => $this->categoryRepo->get('Medians\Blog\Domain\Blog'),
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
        	
			$params['status'] = !empty($params['status']) ? 'on' : 0;
        	
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

        	$params['status'] = !empty($params['status']) ? 'on' : 0;

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

		if (empty($params['content']['ar']['title']))
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
			
			$item = $this->repo->find($contentObject->item_id);
			$item->addView();

			return render('views/front/article.html.twig', [
		        'item' => $this->repo->filterShortCode($item),
		        'similar_items' => $this->specsRepo->similar($item, 3),
		        'similar_articles' => $this->repo->similar($item, 3),
		        'offers' => $this->offersRepo->random(1),
		        'stories' => $this->storiesRepo->random(1),
				'noindex' => (count(array_filter(explode('/', $_SERVER['REQUEST_URI']))) > 1) ? true : false
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

		$cather = $this->categoryRepo->find(6);
		$her = $this->repo->getByCategory($cather->id, 4);
		$cathim = $this->categoryRepo->find(7);
		$him = $this->repo->getByCategory($cathim->id, 4);

		try {

			return render('views/front/blog.html.twig', [
		        'first_item' => $this->repo->getFeatured(1),
		        'search_items' => $request->get('search') ?  $this->repo->search($request, 10) : [],
		        'search_text' => $request->get('search'),
		        'items' => $this->repo->getFront(4),
		        'cat_her' => $her,
		        'cather' => $cather,
		        'cat_him' => $him,
		        'cathim' => $cathim,
		        'offers' => $this->offersRepo->random(1),
		        'specializations' => $this->specsRepo->get(10),

		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 


	/**
	 * Category items-list page 
	 * @var Int
	 */
	public function category($category)
	{
		$request =  $this->app->request();
		$currentPage = $request->get('page') ? $request->get('page') : 1;
		$offset = $currentPage > 1 ? $currentPage * 10 : 0;
		$category_items = $this->repo->paginateByCategory($category->item_id, 10, $offset);
		$pages = (Int) ($this->repo->countByCategory($category->item_id) / 10);
		try {
				
			return render('views/front/category.html.twig', [
		        'first_item' => $this->repo->getFeatured(1),
		        'search_items' => $request->get('search') ?  $this->repo->search($request, 10) : [],
		        'search_text' => $request->get('search'),
		        'item' => $category,
		        'items' => $category_items,
		        'offers' => $this->offersRepo->random(1),
		        'specializations' => $this->specsRepo->get(10),
		        'stories' => $this->storiesRepo->random(1),
				'offset' => $offset,
				'pages' => array_fill(0,$pages,[]),
				'current_page' => $currentPage,

		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 

}