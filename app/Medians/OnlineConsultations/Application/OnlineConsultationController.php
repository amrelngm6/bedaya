<?php

namespace Medians\OnlineConsultations\Application;

use Medians\OnlineConsultations\Infrastructure\OnlineConsultationRepository;

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
	public function list($pageinfo)
	{

		try {

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
