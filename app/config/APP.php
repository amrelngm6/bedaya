<?php

namespace config;

use Twig\Environment;
use \NoahBuscher\Macaw\Macaw;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Medians\Settings\Infrastructure\SettingsRepository;



class APP 
{

	public $default_lang = 'arabic';

	public $lang_code = 'en';
	// public $auth;

	public $branch;

	public $CONF;

	public $currentPage;

	public $Settings;



	function __construct()
	{

		$this->setLang();
		$this->currentPage = $this->request()->getPathInfo();

		$this->CONF = (new \config\Configuration())->getCONFArray();

		$this->branch =  (object) array('id'=>1);

	}

	public function setLang()
	{
		if (isset($_SERVER['HTTP_REFERER']))
		{
			$arr = explode('/', $_SERVER['HTTP_REFERER']);

			if (in_array(end($arr), ['arabic', 'english']))
			{
				$_SESSION['site_lang'] = end($arr);
				$_SESSION['lang'] = end($arr);
			}
		}
		
		$_SESSION['lang'] = isset($_SESSION['site_lang']) ? $_SESSION['site_lang'] : $this->lang_code;

	}

	public function specializations()
	{
		return  (new \Medians\Specializations\Infrastructure\SpecializationRepository())->get_root();
	}

	public function Settings()
	{
		return  (new \Medians\Settings\Application\SettingsController())->getAll();
	}

	public function setting($code)
	{
		return (new SettingsRepository)->getByCode($code);
	}

	public function auth()
	{
		return (new \Medians\Auth\Application\AuthService( new \Medians\Users\Infrastructure\UserRepository($this), $this ))->checkSession();
	}

	public static function request()
	{
		return Request::createFromGlobals();
	}


	public static function redirect($url)
	{
		return new RedirectResponse($url);
	}

	public function  run()
	{
		Macaw::dispatch();

		return true;

	}


	/**
	 * Template for Twig render 
	 */
	public function template()
	{
		$twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader('./app'), 
		    [
		        //'cache' => '/app/cache',
		        'debug' => true,
		    ]
		);

		$twig->addFilter(new \Twig\TwigFilter('html_entity_decode', 'html_entity_decode'));

		return $twig;
	}

	/**
	 * Template for Twig render 
	 */
	public function renderTemplate($code, $data=null)
	{
		$twig = $this->template()->createTemplate($code);

		return $twig;
	}

	
	/**
	* Return 
	* List of side menu
	*/
	public function menu()
	{
		$data = array(
			array('title'=>__('Dashboard'), 'icon'=>'fa-dashboard', 'link'=>'dashboard'),
			
	        // array('title'=>__('Users'),  'icon'=>'fa-users', 'link'=>'', 'sub'=>
	        //     [
	        //         array('title'=>__('Users'),  'icon'=>'fa-dashboard', 'link'=>'users'),
	        //         // array('title'=>__('add_User'),  'icon'=>'fa-dashboard', 'link'=>'users/create'),
	        //     ]
	        // ),


	        array('title'=>__('Blog'),  'icon'=>'fa-newspaper', 'link'=>'', 'sub'=>
	            [
	                array('title'=>__('Blog'),  'icon'=>'', 'link'=>'admin/blog', 'component'=> 'blog'),
	                array('title'=>__('categories'),  'icon'=>'', 'link'=>'admin/categories', 'component'=> 'categories'),
	            ]
	        ),

	        array('title'=>__('Bookings'),  'icon'=>'fa-calendar', 'link'=>'blog', 'sub'=>
	            [
	                array('title'=>__('Bookings'),  'icon'=>'', 'link'=>'admin/bookings', 'component'=> 'bookings'),
	                array('title'=>__('Offers'),  'icon'=>'', 'link'=>'admin/offers_bookings', 'component'=> 'bookings'),
	                array('title'=>__('Online Consultation'),  'icon'=>'', 'link'=>'admin/consultation_bookings', 'component'=> 'bookings'),
	                array('title'=>__('Contact messages'),  'icon'=>'', 'link'=>'admin/contact_bookings', 'component'=> 'bookings'),
	            ]
	        ),


				array('title'=> __('Specializations'),  'icon'=>'fa-puzzle-piece', 'link'=>'admin/specialization', 'component'=>'specialization'),
			array('title'=> __('DOCTORS'),  'icon'=>'fa-hospital', 'link'=>'admin/doctors', 'component'=>'doctors'),
			array('title'=> __('online_consultation'),  'icon'=>'fa-hand-holding-medical', 'link'=>'admin/online_consultation', 'component'=>'online_consultation'),
			array('title'=> __('Offers'),  'icon'=>'fa-gift', 'link'=>'admin/offers', 'component'=>'offers'),
			array('title'=> __('success stories'),  'icon'=>'fa-video', 'link'=>'admin/success_stories', 'component'=>'success_stories'),
			array('title'=> __('story dates'),  'icon'=>'fa-calendar-days', 'link'=>'admin/story_date', 'component'=>'story_date'),
			array('title'=> __('pages'),  'icon'=>'fa-file', 'link'=>'admin/pages', 'component'=>'pages'),
            array('title'=>__('Users'),  'icon'=>'fa-users', 'link'=>'admin/users', 'component'=>'users'),
			array('title'=> __('Settings'),  'icon'=>'fa-cogs', 'link'=>'settings'),
			array('title'=> __('Logout'),  'icon'=>'fa-sign-out', 'link'=>'logout'),
		);

		return $data;
	}

	
}