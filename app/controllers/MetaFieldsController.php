<?php

class MetaFieldsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Session::has('user_id')){
			$metafields = MetaFields::join('pages', 'pages.id', '=', 'metafields.page_id')->paginate(4, array('pages.name as pname', 'metafields.id', 'metafields.name', 'metafields.content'));
			//print_r($metafields);exit;
        	return View::make('secureadmin.metafields.index', array('metafields'=>$metafields));
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
		$pages = Pages::get(array('id', 'name'))->toArray();
		$pageslist[''] = 'Select Page';
		foreach($pages as $page){
			$pageslist[$page['id']] = $page['name'];
		}
		return View::make('secureadmin.metafields.create',array('pages'=>$pageslist));
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
        	$validation = Validator::make($input, MetaFields::$rules);
        	if ($validation->passes())
        	{
            	MetaFields::create($input);
            	return Redirect::route('secureadmin.metafields.index');
        	}

        	return Redirect::route('secureadmin.metafields.create')
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
			$pageslist = Pages::get(array('id', 'name'))->toArray();
			$pages[''] = 'Select Page';
			foreach($pageslist as $page){
				$pages[$page['id']] = $page['name'];
			}
			$meta = MetaFields::find($id);
        	if (is_null($meta))
        	{
            	return Redirect::route('secureadmin.metafields.index');
        	}
        	return View::make('secureadmin.metafields.edit', compact('meta','pages'));
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
        $validation = Validator::make($input, MetaFields::$rules);
        if ($validation->passes())
        {
            $user = MetaFields::find($id);
            $user->update($input);
            return Redirect::route('secureadmin.metafields.index');
        }
return Redirect::route('secureadmin.metafields.edit', $id)
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
			MetaFields::find($id)->delete();
        	return Redirect::route('secureadmin.metafields.index');
		
	}


}
