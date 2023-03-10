<?php

namespace Medians\Application\Users;

use Medians\Infrastructure\Users\UserRepository;


class UserController
{


	/*
	/ @var new CustomerRepository
	*/
	private $repo;

	public $app;

	function __construct()
	{
		$this->app = new \config\APP;
		$this->repo = new UserRepository();
	}




	/**
	 * Index page
	 * 
	 */
	public function index()
	{
		return render('views/admin/users/list.html.twig', [
			'items' =>   $this->repo->get(),
	        'title' => __('Users'),
	    ]);
	} 


	/** 
	 * Query users
	 */
	public function queryByRole($role_id)
	{
		return	$this->repo->getModel()->with('Role')->where('role_id', $role_id)->get();

	} 



	/**
	 * Create page
	 * 
	 */
	public function create()
	{
		return render('views/admin/users/create.html.twig', [
	        'title' => __('Users'),
	        'Model' => $this->repo->getModel(),
	    ]);
	} 

	/**
	 * Create page
	 * 
	 */
	public function edit($id)
	{

		return render('views/admin/users/create.html.twig', [
	        'title' => __('Users'),
	        'Model' => $this->repo->find($id),
	    ]);
	} 




	/**
	*  Store item
	*/
	public function store() 
	{

		$params = (array)  $this->app->request()->get('params')['user'];

		try {

			if ($this->validate($params)) 
				return $this->validate($params);

			if (isset($params['id'])) 
				return __('ERR');

			$params['role_id'] = !empty($params['role_id']) ? $params['role_id'] : 3;
			$params['active_branch'] = isset($this->app->branch->id) ? $this->app->branch->id : 0;

			$save = $this->repo->store($params);

        	return array('status'=>1, 'result'=>__('Created'), 'reload'=>1);

        } catch (Exception $e) {
            return  $e->getMessage();
        }
	}



	/**
	*  Store item
	*/
	public function validate($params) 
	{
		$check = $this->repo->checkDuplicate($params);

		if (empty($params['first_name']))
			return ['result'=> __('Name required')];

		if (empty($params['email']))
			return ['result'=> __('Email required')];

		if (empty($params['password']))
			return ['result'=> __('Password required')];

		if ($check)
			return ['result'=>$check];

	}



	/**
	*  Store item
	*/
	public function update() 
	{

		$params = (array)  $this->app->request()->get('params')['user'];

		try {

			$params['branch_id'] = isset($this->app->branch->id) ? $this->app->branch->id : 0;
			$save = $this->repo->update($params);

        	return array('status'=>true, 'result'=>__('Updated'));

        } catch (Exception $e) {
            return  $e->getMessage();
        }
	}




}
