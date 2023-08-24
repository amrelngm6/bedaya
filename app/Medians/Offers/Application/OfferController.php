<?php

namespace Medians\Offers\Application;
use Shared\dbaser\CustomController;

use Medians\Offers\Infrastructure\OfferRepository;

class OfferController extends CustomController 
{

	/**
	* @var Object
	*/
	protected $repo;

	

	function __construct()
	{

		$this->app = new \config\APP;

		$this->repo = new OfferRepository();
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
			
		    render('offers', [
		        'load_vue' => true,
		        'title' => __('Offers'),
		        'columns' => $this->columns(),
		        'items' => $this->repo->get(),
		    ]);
		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	}




	public function store() 
	{

		$params = $this->app->request()->get('params');

        try {	

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
	public function list($pageinfo)
	{

		try {
			echo 'here';
			$items = $this->repo->get();
			$this->repo->getModel()->addView();

			echo render('views/front/offers.html.twig', [
		        'items' => $items,
				'all_stories' => $this->storyRepo->get(),
		        'pageinfo' => $pageinfo,
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 

	/**
	 * Front page 
	 * @var Int
	 */
	public function page($id=null)
	{

		try {
			$item = $this->repo->find($id);
			$item->addView();

			echo render('views/front/offer.html.twig', [
		        'item' => $item,
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 

}
