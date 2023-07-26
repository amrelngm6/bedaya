<?php

namespace Medians\Doctors\Application;
use Shared\dbaser\CustomController;

use Medians\Doctors\Infrastructure\DoctorRepository;
use Medians\Specializations\Infrastructure\SpecializationRepository;
use Medians\Offers\Infrastructure\OfferRepository;


class DoctorController extends CustomController 
{

	/**
	* @var Object
	*/
	protected $repo;

	

	function __construct()
	{

		$this->app = new \config\APP;

		$this->repo = new DoctorRepository();
		$this->specsRepo = new SpecializationRepository();
		$this->offersRepo = new OfferRepository();
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
	                'type'=> "number",
                ],
                [
                    'key'=> "title",
                    'title'=> __('title'),
                    'sortable'=> false,
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
			
		    return render('doctors', [
		        'load_vue' => true,
		        'columns' => $this->columns(),
		        'title' => __('doctors'),
		        'items' => $this->repo->getAll(),
		    ]);
		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	}




	/**
	 * Store item to database
	 */ 
	public function store() 
	{

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



	/**
	 * Update item at database
	 */ 
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


	/**
	 * Remove item from database
	 */ 
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

	/**
	 * Validate store
	 */ 
	public function validate($params) 
	{

		if (empty($params['content']['ar']['title']))
		{
        	throw new \Exception(json_encode(array('result'=>__('NAME_required'), 'error'=>1)), 1);
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
			$specs = $this->specsRepo->similar($item, 2);

			$item->addView();

			return render('views/front/doctor.html.twig', [
		        'item' => $item,
		        'offers' => $this->offersRepo->random(1),
		        'specializations' => count($specs) ? $specs : $this->specsRepo->get(2),
		        'similar' => $this->repo->similar($item, 1),
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 

	/**
	 * Front page for items list
	 * @var Int
	 */
	public function list()
	{

		try {
			$this->repo->getModel()->addView();
			
			return render('views/front/doctors.html.twig', [
		        'items' => $this->repo->get(9),
		        'specializations' => $this->specsRepo->get(),
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 

}
