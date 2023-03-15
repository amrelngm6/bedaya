<?php

namespace Medians;

use Medians\Infrastructure as Repo;

class HomeController
{

	/**
	* @var Object
	*/
	protected $repo;



	function __construct()
	{
		$this->app = new \config\APP;
		$this->contentRepo = new \Medians\Content\Infrastructure\ContentRepository;
		$this->blogRepo = new \Medians\Blog\Infrastructure\BlogRepository;
		$this->doctorRepo = new \Medians\Doctors\Infrastructure\DoctorRepository;
		$this->specsRepo = new \Medians\Specializations\Infrastructure\SpecializationRepository;
		$this->storiesRepo = new \Medians\Stories\Infrastructure\StoryRepository;
		$this->storyDateRepo = new \Medians\StoryDates\Infrastructure\StoryDateRepository;
	}

	/**
	 * Model object 
	 */
	public function index()
	{
		try {

	        return  render('views/front/index.html.twig',[
	        	'blog'=> $this->blogRepo->get(3),
	        	'doctors'=> $this->doctorRepo->get(3),
	        	'specializations'=> $this->specsRepo->get_root(),
	        	'stories'=> $this->storiesRepo->get(3),
	        	'story_dates'=> $this->storyDateRepo->get(10)
	        ]);
	        
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	} 


	/**
	 * Model object 
	 */
	public function pages($prefix)
	{
		try {

			$item = $this->contentRepo->find(str_replace('/', '', $_SERVER['PATH_INFO']));
			
			if (isset($item->item_type))
			{
		        switch ($item->item_type) 
		        {
		        	case \Medians\Specializations\Domain\Specialization::class:
		        		return (new  \Medians\Specializations\Application\SpecializationController)->page($item->item_id);
		        		break;
		        	
		        	case \Medians\Doctors\Domain\Doctor::class:
		        		return (new  \Medians\Doctors\Application\DoctorController)->page($item->item_id);
		        		break;
		        	
		        	case \Medians\Blog\Domain\Blog::class:
		        		return (new  \Medians\Blog\Application\BlogController)->page($item->item_id);
		        		break;
		        	
		        	case \Medians\Stories\Domain\Story::class:
		        		echo 1;
		        		return (new  \Medians\Stories\Application\StoryController)->page($item->item_id);
		        		break;
		        	
		        	default:
		        		// code...
		        		break;
		        }
			}

		        

		} catch (\Exception $e) {
			throw new \Exception( $e->getMessage(), 1);
		}
	} 


}
