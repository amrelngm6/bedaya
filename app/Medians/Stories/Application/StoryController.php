<?php

namespace Medians\Stories\Application;

use Medians\Stories\Infrastructure\StoryRepository;
use Medians\Specializations\Infrastructure\SpecializationRepository;


class StoryController
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
	 * Front page for items list
	 * @var Int
	 */
	public function index()
	{

		try {
				
			return render('views/front/stories.html.twig', [
		        'items' => $this->repo->get(20),
		        'specializations' => $this->specsRepo->get(2),
		    ]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
			
		}
	} 

}
