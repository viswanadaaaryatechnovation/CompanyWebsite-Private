<?php

class AaryaTechcontroller extends BaseController {
	public $data = array('index'=>'', 'aboutus'=>'', 'companies'=>'', 'invester'=>'', 'contact'=>'', );
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->data['index'] = 'active';
		$this->data['meta'] = Metafields::join('pages', 'pages.id', '=', 'metafields.page_id')->where('pages.name','=','Home')->get(array('metafields.name', 'metafields.content'))->toArray();
		//print_r($this->data['meta']);exit;
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
		$this->data['meta'] = Metafields::join('pages', 'pages.id', '=', 'metafields.page_id')->where('pages.name','LIKE','AARYA Technovation')->get(array('metafields.name', 'metafields.content'))->toArray();
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
		$this->data['meta'] = Metafields::join('pages', 'pages.id', '=', 'metafields.page_id')->where('pages.name','LIKE','Companies')->get(array('metafields.name', 'metafields.content'))->toArray();
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
		$this->data['meta'] = Metafields::join('pages', 'pages.id', '=', 'metafields.page_id')->where('pages.name','LIKE','Contact Us')->get(array('metafields.name', 'metafields.content'))->toArray();
		return View::make('contact', $this->data);
	}
	
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$input = Input::all();
		$input['ip_address'] = Request::getClientIp();
		//print_r($input);exit;
        	$validation = Validator::make($input, ContactUs::$rules);
        	if ($validation->passes())
        	{
            	ContactUs::create($input);
            	return Redirect::route('index');
        	}

        	return Redirect::to('contact')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
	}
}
