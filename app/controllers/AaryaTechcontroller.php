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
		$this->data['menu'] = Pages::all();
		//print_r($this->data['meta']);exit;
		return View::make('index', $this->data);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 public function show($page = '')
    {
		
		$data['active'] = $page;
		$data['meta'] = Metafields::join('pages', 'pages.id', '=', 'metafields.page_id')->where('pages.name','=',$page)->get(array('metafields.name', 'metafields.content'))->toArray();
		$data['menu'] = Pages::where('menu_id', '=', '1')->get();
		$data['fmenu'] = $this->footerMenu();
		//print_r($this->data['meta']);exit;
		return View::make($page, $data);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function footerMenu(){
		$fmenus = Pages::all();
		foreach($fmenus as $fmenu){
			switch($fmenu['menu_id']){
				case 1:
					$menu['main_menu'][] = $fmenu['name'];
					break;
				case 2 :
					$menu['getKnowUs'][] = 	$fmenu['name'];	
					break;
				case 3:	
					$menu['companies'][] = $fmenu['name'];
					break;
				case 4:
					$menu['helpUs'][] = $fmenu['name'];
					break;
				case 5: 
					$menu['inverstor'][] = $fmenu['name'];
					break;	
			}
			
		}
		return $menu;
		
		
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
