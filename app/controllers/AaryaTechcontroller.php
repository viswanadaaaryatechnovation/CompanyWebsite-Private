<?php

class AaryaTechcontroller extends BaseController {
	public $data = array('index'=>'', 'aboutus'=>'', 'companies'=>'', 'invester'=>'', 'contact'=>'');
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->data['index'] = 'active';
		return View::make('index', $this->data);

	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function aboutus()
	{
		$this->data['aboutus'] = 'active';
		return View::make('aboutus', $this->data);

	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function companies()
	{
		$this->data['companies'] = 'active';
		return View::make('companies', $this->data);
	}


/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function contact()
	{
		$this->data['contact'] = 'active';
		return View::make('contact', $this->data);
	}
}
