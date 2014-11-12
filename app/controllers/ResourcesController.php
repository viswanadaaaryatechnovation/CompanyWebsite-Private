<?php

class ResourcesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Session::has('user_id')){
			$resources = Resources::paginate(PAGINATION_LIMIT);
         	return View::make('secureadmin.resources.index', array('resources'=>$resources));
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
		return View::make('secureadmin.resources.create');
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
		$validation = Validator::make($input, Resources::$rules);
		if ($validation->passes())
		{
			Resources::create($input);
			return Redirect::route('secureadmin.resources.index');
		}

		return Redirect::route('secureadmin.resources.create')
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
		$resource = Resources::find($id);
		if (is_null($resource))
		{
			return Redirect::route('secureadmin.resources.index');
		}
		return View::make('secureadmin.resources.edit', compact('resource'));
    
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
        $validation = Validator::make($input, Resources::$rules);
        if ($validation->passes())
        {
            $resource = Resources::find($id);
            $resource->update($input);
            return Redirect::route('secureadmin.resources.index');
        }
		return Redirect::route('secureadmin.resources.edit', $id)
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
		Resources::find($id)->delete();
       	return Redirect::route('secureadmin.resources.index');
	}


}
