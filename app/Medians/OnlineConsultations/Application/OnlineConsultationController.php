<?php

namespace Medians\OnlineConsultations\Application;

use Medians\OnlineConsultations\Infrastructure\OnlineConsultationRepository;
use Medians\Doctors\Infrastructure\DoctorRepository;

class OnlineConsultationController
{

	/**
	* @var Object
	*/
	protected $repo;

	

	function __construct()
	{

		$this->app = new \config\APP;

		$this->repo = new OnlineConsultationRepository();

		$this->doctorRepo = new DoctorRepository();
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
			
		    return render('online_consultation', [
		        'load_vue' => true,
		        'title' => __('online_consultation'),
		        'columns' => $this->columns(),
		        'items' => $this->repo->get(),
		        'doctors' => $this->doctorRepo->get(),
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

		if (empty($params['doctor_id']))
		{
        	throw new \Exception(json_encode(array('result'=>__('Doctor_required'), 'error'=>1)), 1);
		}

	}


	/**
	 * Front page 
	 * @var Int
	 */
	public function list($pageinfo)
	{

		try {

			$explode = explode('/',  !empty($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : $_SERVER['REDIRECT_URL']);

			if (!empty($explode[2]))
				return $this->page($explode[2]);

			$items = $this->repo->get();

			echo render('views/front/online_consultations.html.twig', [
		        'items' => $items,
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

			echo render('views/front/online_consultation.html.twig', [
		        'item' => $this->repo->find($id),
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 

}
