<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Session::has('user_id')){
			$pages = Pages::paginate(4);
			$pages = Pages::join('menus', 'menus.id', '=', 'pages.menu_id')->paginate(4, array('pages.name', 'menus.name as menu_name', 'pages.id', 'pages.url_name'));
        	return View::make('secureadmin.pages.index', array('pages'=>$pages));
		}else{
			return View::make('secureadmin.login');
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$menus = Menus::get(array('id', 'name'))->toArray();
		$menulist[''] = 'Select Page';
		foreach($menus as $menu){
			$menulist[$menu['id']] = $menu['name'];
		}
		return View::make('secureadmin.pages.create',compact('menulist'));
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
        	$validation = Validator::make($input, Pages::$rules);
        	if ($validation->passes())
        	{
            	Pages::create($input);
            	return Redirect::route('secureadmin.pages.index');
        	}

        	return Redirect::route('secureadmin.pages.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
			$page = Pages::find($id);
        	if (is_null($page))
        	{
            	return Redirect::route('secureadmin.pages.index');
        	}
					$menus = Menus::get(array('id', 'name'))->toArray();
					$menulist[''] = 'Select Page';
					foreach($menus as $menu){
						$menulist[$menu['id']] = $menu['name'];
					}
        	return View::make('secureadmin.pages.edit', compact('page','menulist'));
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $input = Input::all();
		$input['ip_address'] = Request::getClientIp();
        $validation = Validator::make($input, Pages::$rules);
        if ($validation->passes())
        {
            $user = Pages::find($id);
            $user->update($input);
            return Redirect::route('secureadmin.pages.index');
        }
return Redirect::route('secureadmin.pages.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
		
	}



	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Metafields::where('page_id','=',$id)->delete();
		Pages::find($id)->delete();
        return Redirect::route('secureadmin.pages.index');
		
	}
	

}
