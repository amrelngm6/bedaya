<?php

namespace Medians\Builders\Application;

use Medians\Builders\Infrastructure\BuilderRepository;
use Medians\Content\Infrastructure\ContentRepository;


class BuilderController
{

	function __construct()
	{
		$this->repo = new BuilderRepository;
		$this->contentRepo = new ContentRepository;
		$this->app = new \Config\APP;

	}

	/**
	 * Index builder 
	 */ 
	public function index()
	{

		try {

			$request = $this->app->request();
			$check = $this->contentRepo->find($request->get('prefix'));

			return render('views/admin/builder/index.html.twig', [
				'page' => $check, 
				'precode' => (substr(trim($check->content), 0, 8) == '<section') ? '' : '<section id="newKeditItem" class="kedit">', 
				'postcode' => (substr(trim($check->content), 0, 8) == '<section') ? '' : '</section>', 
			]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
		}
	}



	/**
	 * Load builder assets
	 */ 
	public function load()
	{

		try {
			
			$request = $this->app->request();
			$page = $request->get('page');
			switch ($page) {
				case 'blocks':
					echo json_encode($this->repo->get());
					$blocks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/dist/builder/assets/blocks.json');
					foreach (json_decode($blocks) as $k => $row) 
					{
						foreach ($row as $value) 
						{
							// $k != 'columns' ? '' : $this->repo->store(['category'=>$k, 'content'=>$value->html]);
						}
					}
					// echo $blocks;
					break;
			}

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
		}
	}


	/**
	 * Load builder meta
	 */ 
	public function meta()
	{

		try {
			
			$request = $this->app->request();
			$check = $this->contentRepo->find($request->get('prefix'));

			render('views/admin/builder/templates/meta.html.twig',['page'=>$check]);

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
		}
	}




	/**
	 * Submit builder requests
	 */ 
	public function submit()
	{


		try {
			
			$request = $this->app->request();
			$supermode = $request->get('supermode');
			if ($supermode == 'configUpdate' && $request->get('contentJSON') && $request->get('prefix'))
			{
				$contentJSON = json_decode($request->get('contentJSON'));
				$check = $this->contentRepo->find($request->get('prefix'));
				$check->content = str_replace('data-src', 'src', $contentJSON->contentArea);
				$check->update(['content' => $check->content]);
				// file_put_contents($_SERVER['DOCUMENT_ROOT'].'/app/views/admin/builder/templates/home.html.twig', $contentJSON->contentArea);
				echo $check->content;
			}

			if ($request->get('id') && $supermode == 'insertContent')
			{
				$check = $this->repo->find($request->get('id'));
				echo $check->content;
			}

			if ($request->get('prefix') && $supermode == 'updateMeta')
			{

				$check = $this->contentRepo->find($request->get('prefix'));
				$check->title = $request->get('title');
				$check->seo_title = $request->get('seo_title');
				$check->seo_keywords = $request->get('seo_keywords');
				$check->seo_desc = $request->get('seo_desc');
				$save = $check->save();
				if ($save)
				{
					echo __('ALL_Done');
				}
			}

		} catch (\Exception $e) {
			throw new \Exception($e->getMessage(), 1);
		}
	}
}
