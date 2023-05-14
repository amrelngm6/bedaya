<?php

namespace Medians\Doctors\Application;

use Medians\Doctors\Infrastructure\DoctorRepository;
use Medians\Specializations\Infrastructure\SpecializationRepository;
use Medians\Offers\Infrastructure\OfferRepository;


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
		$this->offersRepo = new OfferRepository();
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
			
			return render('views/front/doctors.html.twig', [
		        'items' => $this->repo->get(9),
		        'specializations' => $this->specsRepo->get(2),
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 

}
