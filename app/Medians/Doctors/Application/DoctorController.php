<?php

namespace Medians\Doctors\Application;

use Medians\Doctors\Infrastructure\DoctorRepository;
use Medians\Specializations\Infrastructure\SpecializationRepository;


class DoctorController
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
	}



	/**
	 * Front page 
	 * @var Int
	 */
	public function page($id)
	{

		try {
			
			$item = $this->repo->find($id);
			$specs = $this->specsRepo->similar($item, 2);

			return render('views/front/doctor.html.twig', [
		        'item' => $item,
		        'specializations' => count($specs) ? $specs : $this->specsRepo->get(2),
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
			
			return render('views/front/doctors.html.twig', [
		        'items' => $this->repo->get(9),
		        'specializations' => $this->specsRepo->get(2),
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 

}
