<?php

namespace config;

use Twig\Environment;
use \NoahBuscher\Macaw\Macaw;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Medians\Settings\Infrastructure\SettingsRepository;

use \Medians\Auth\Application\AuthService;


class APP 
{

	public $default_lang = 'arabic';

	public $lang_code = 'ar';

	public $lang;

	public $auth;

	public $branch;

	public $CONF;

	public $currentPage;

	public $Settings;

	public $capsule;

	public $isMobileDevice;



	function __construct()
	{

		$this->setLang(); // Set the active language 

		$this->currentPage = $this->request()->getPathInfo(); // Filter the request URI to get the current page

		$this->CONF = (new \config\Configuration())->getCONFArray();  // Load configuration as Array

		$this->capsule = (new \config\Configuration())->checkDB(); // Check database connection

		$this->auth(); // Check active secttion

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
		$this->lang = $_SESSION['lang']; // Check active language

	}


	/**
	 * Load all setting for a branch 
	 * return as Array
	 */ 
	public function specializations()
	{
		return  (new \Medians\Specializations\Infrastructure\SpecializationRepository())->get_root();
	}
	/**
	 * Load all setting for a branch 
	 * return as Array
	 */ 
	public function Settings()
	{
		return  (new \Medians\Settings\Application\SettingsController())->getAll();
	}

	/**
	 * Load Sysetem Settings
	 */ 
	public function SystemSetting()
	{
		return  (new \Medians\Settings\Application\SystemSettingsController())->getAll();
	}


	/**
	 * Get setting value by code 
	 * return value
	 */ 
	public function setting($code)
	{
		return (new SettingsRepository)->getByCode($code);
	}

	public function auth()
	{
		$check = !empty($this->auth) ? $this->auth : (new AuthService())->checkSession();
		$this->branch = !empty($this->branch) ? $this->branch : (isset($check->branch) ? $check->branch : $this->checkAPISession()->branch);
		return $check ? $check : $this->checkAPISession();
	}

	/**
	 * Check if the request is through mobile
	 */
	public function checkAPISession()
	{
		if (!empty($this->request()->headers->get('token')))
		{
			$check = (new AuthService())->checkAPISession($this->request()->headers->get('token'));
			return $check;
		}
		return (object) ['branch'=>null];
	}  

	public function setBranch($branch)
	{
		$this->branch = $branch; 
	}

	public function active_branch()
	{
		$this->auth();

		return $this->branch;
	}

	public static function request()
	{
		return Request::createFromGlobals();
	}


	public static function redirect($url)
	{
		echo "<img width='100%' src='/src/assets/img/redirect.gif' /><style>*{margin:0;color:#fff; overflow:hidden}</style>";
		echo new RedirectResponse($url);
		exit();
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
	public function renderTemplate($code)
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
			array('title'=> __('Technologies'),  'icon'=>'fa-gift', 'link'=>'admin/technologies', 'component'=>'technologies'),
			array('title'=> __('story dates'),  'icon'=>'fa-calendar-days', 'link'=>'admin/story_date', 'component'=>'story_date'),
			array('title'=> __('pages'),  'icon'=>'fa-file', 'link'=>'admin/pages', 'component'=>'pages'),
            array('title'=>__('Users'),  'icon'=>'fa-users', 'link'=>'admin/users', 'component'=>'users'),
			array('title'=> __('Settings'),  'icon'=>'fa-cogs', 'link'=>'settings'),
			array('title'=> __('Logout'),  'icon'=>'fa-sign-out', 'link'=>'logout'),
		);

		return $data;
	}

	
}