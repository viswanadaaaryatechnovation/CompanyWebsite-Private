<?php

class AaryaTechController extends BaseController {
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 public function show($page = 'home',$id=0)
    {
		if($page == 'home'){
			$data['screens'] = Screens::all();
			$data['posts'] = Posts::orderBy('id', 'desc')->take(3)->get();
			$data['resources'] = Resources::orderBy('id', 'desc')->take(3)->get();
		}
		if($page == 'blog' || $page == 'blog-inner')
		$data['posts'] = Posts::orderBy('id', 'desc')->paginate(PAGINATION_LIMIT);
		
		if($page == 'resources' || $page == 'resources-inner')
		$data['resources'] = Resources::orderBy('id', 'desc')->paginate(PAGINATION_LIMIT);
		if($id != 0){
			$data['id'] = $id;
			if($page == 'blog-inner')
				$data['post'] = Posts::where('id', '=',$id)->get(array('title','description','created_at','image'))->toArray();
			if($page == 'resources-inner')
				$data['resource'] = Resources::where('id', '=',$id)->get(array('title','description','created_at','video_url'))->toArray();
		}
		
		$data['active'] = $page;
		$data['meta'] = MetaFields::join('pages', 'pages.id', '=', 'metafields.page_id')->where('pages.name','=',$page)->get(array('metafields.name', 'metafields.content'))->toArray();
		$data['menu'] = Pages::where('menu_id', '=', '1')->get();
		$data['fmenu'] = $this->footerMenu();
		$data['i'] = 0;
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
		$i=0;
		foreach($fmenus as $fmenu){
			
			switch($fmenu['menu_id']){
				case 1:
					$menu['main_menu'][$i]['name'] = $fmenu['name'];
					$menu['main_menu'][$i]['url_name'] = $fmenu['url_name'];
					break;
				case 2 :
					$menu['getKnowUs'][$i]['name'] = 	$fmenu['name'];	
					$menu['getKnowUs'][$i]['url_name'] = $fmenu['url_name'];
					break;
				case 3:	
					$menu['companies'][$i]['name'] = $fmenu['name'];
					$menu['companies'][$i]['url_name'] = $fmenu['url_name'];
					break;
				case 4:
					$menu['helpUs'][$i]['name'] = $fmenu['name'];
					$menu['helpUs'][$i]['url_name'] = $fmenu['url_name'];
					break;
				case 5: 
					$menu['inverstor'][$i]['name'] = $fmenu['name'];
					$menu['inverstor'][$i]['url_name'] = $fmenu['url_name'];
					break;	
			}
			$i++;
		}
		/*echo '<pre>';
		print_r($menu);exit;*/
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
		//print_r($input);exit;
		$input['ip_address'] = Request::getClientIp();
		//print_r($input);exit;
        	$validation = Validator::make($input, ContactUs::$rules);
        	if ($validation->passes())
        	{
				$data = array('name'=>$input['name'],'email'=>$input['email'], 'txt'=>$input['message']);
Mail::send('emails.contact', array('content'=>'your contact details are sent to Aarya technovation'), function($msg) {
   $msg->from('contact@aaryatechnovation.com', 'Aarya Technovation');
   $msg->to(Input::get('email'), Input::get('name'))->subject('Aarya Technovation Contact');
});
Mail::send('emails.contactadmin', $data, function($msg) {
   $msg->from(Input::get('email'), Input::get('name'));
   $msg->to('contact@aaryatechnovation.com', 'Aarya Technovation')->subject('Aarya Technovation Contact');
});
            	ContactUs::create($input);
            	return Redirect::to('contact')->with('message','Thank You');
        	}

        	return Redirect::to('contact')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
	}
	public function subsribe()
	{
		$input = Input::all();
		$input['ip_address'] = Request::getClientIp();
		$validation = Validator::make($input, Subscribers::$rules);
		if ($validation->passes())
		{
	//Input::merge(array('name'=>'visu')); 

Mail::send('emails.subscribe', array('content'=>'Thank you for subscribing to our newsletter service.'), function($msg) {
   $msg->from('online@aaryatechnovation.com', 'Aarya Technovation');
   $msg->to(Input::get('email'), Input::get('email'))->subject('Aarya Technovation Subscription');
});


Mail::send('emails.subscribe', array('content'=>'Subscribe email:'.Input::get('email')), function($msg) {
   $msg->to('online@aaryatechnovation.com', 'Aarya Technovation');
   $msg->from(Input::get('email'), Input::get('email'));
   $msg->subject('Aarya Technovation Subscription');
});
			Subscribers::create($input);
			echo 'success';exit;
			//return Redirect::route('secureadmin.subscribers.index');
		}
			echo 'Fail';
	}
}
